<?php
/* Smarty version 3.1.28, created on 2015-12-20 12:08:55
  from "/var/www/wordpress/lamps.lightmaster.cz/www3/templates/includes/del_js.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_56768c47133f00_92715133',
  'file_dependency' => 
  array (
    'aae35bee2453187839baee4d8bfe01aaeb67a052' => 
    array (
      0 => '/var/www/wordpress/lamps.lightmaster.cz/www3/templates/includes/del_js.tpl',
      1 => 1450609705,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56768c47133f00_92715133 ($_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
    
    jQuery(function($) {
        //override dialog's title function to allow for HTML titles
        $.widget("ui.dialog", $.extend({}, $.ui.dialog.prototype, {
            _title: function(title) {
                var $title = this.options.title || '&nbsp;'
                if (("title_html" in this.options) && this.options.title_html == true)
                    title.html($title);
                else
                    title.text($title);
            }
        }));

        $(".del").on('click', function(e) {
            e.preventDefault();
            var id = $(this).data("id");
            var spec = $(this).data("spec");
            var deleteItem = "#item"+id;
            if (spec) {
                deleteItem = deleteItem+spec;
            }
            $(deleteItem).addClass('danger alert-danger');
            $("#dialog-confirm").removeClass('hide').dialog({
                resizable: false,
                modal: true,
                title: "<div class='widget-header'><h4 class='smaller'><i class='icon-warning-sign red'></i> Smazat záznam?</h4></div>",
                title_html: true,
                buttons: [
                    {
                        html: "<i class='icon-trash bigger-110'></i>&nbsp; Smazat záznam",
                        "class": "btn btn-danger btn-xs",
                        click: function() {
                            $.get("<?php echo $_SERVER['REDIRECT_URL'];?>
", { 'main_id': '<?php echo $_GET['id'];?>
', 'del': id, 'spec': spec },
                            function(data) {
                                if (data == 'ok') {
                                    $(deleteItem).remove();
                                }
                            }
                            );
                            $(this).dialog("close");
                        }
                    }
                    ,
                    {
                        html: "<i class='icon-remove bigger-110'></i>&nbsp; Zrušit",
                        "class": "btn btn-xs",
                        click: function() {
                            $(this).dialog("close");
                            $(deleteItem).removeClass('danger alert-danger');
                        }
                    }
                ]
            });
        });

    });
<?php echo '</script'; ?>
><?php }
}
