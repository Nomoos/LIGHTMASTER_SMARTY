<?php
/* Smarty version 3.1.28, created on 2015-12-20 12:28:19
  from "/var/www/wordpress/lamps.lightmaster.cz/www3/templates/nastaveni/js-seznam.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_567690d31d4e40_20572281',
  'file_dependency' => 
  array (
    'c7293b5b9871f15ee209499c9948a73d522e62c6' => 
    array (
      0 => '/var/www/wordpress/lamps.lightmaster.cz/www3/templates/nastaveni/js-seznam.tpl',
      1 => 1450609707,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_567690d31d4e40_20572281 ($_smarty_tpl) {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['setup']->value['adm']['www'];?>
assets/js/jquery.nestable.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['setup']->value['adm']['www'];?>
assets/js/jquery.gritter.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
    function saveUpdate() {
        var data = JSON.stringify( $('#nestable').nestable('serialize') );
        $.post("<?php echo $_smarty_tpl->tpl_vars['setup']->value['request_url'];?>
", { 'function': 'sort', 'data': data },
        function(ret) {
            if(ret == 'ok'){
                $.gritter.add({
                        title: 'Výsledek operace na pozadí',
                        text: 'Vše proběhlo v pořádku',
                        class_name: 'gritter-success',
                        time: 1500
                });
            }else{
                $.gritter.add({
                        title: 'Výsledek operace na pozadí',
                        text: 'Vyskytla se chyba zkuste to opakovat později',
                        class_name: 'gritter-error',
                        time: 1500
                });
            }
        }
        );
    };
    
    jQuery(function($) {
        $('#nestable').nestable({
            maxDepth: 2
        }).on('change', saveUpdate);

        $('#nestable').nestable('collapseAll');

        $('.dd-handle a').on('mousedown', function(e) {
            e.stopPropagation();
        });

    });
<?php echo '</script'; ?>
><?php }
}
