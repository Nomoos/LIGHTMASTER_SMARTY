<?php
/* Smarty version 3.1.28, created on 2015-12-20 01:15:52
  from "/var/www/wordpress/lamps.lightmaster.cz/www3/templates/nastaveni/js-opravneni.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5675f338e118f6_70694233',
  'file_dependency' => 
  array (
    '58f3c43eb3a8d874f3b3167acaa27a2b5efe2ae4' => 
    array (
      0 => '/var/www/wordpress/lamps.lightmaster.cz/www3/templates/nastaveni/js-opravneni.tpl',
      1 => 1450569351,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5675f338e118f6_70694233 ($_smarty_tpl) {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['setup']->value['adm']['www'];?>
assets/js/jquery.gritter.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
    $(function(){
        $(".ace-switch").change(function(){
            var id = $(this).attr('data-id');
            var typ = $(this).attr('data-typ');
            var checked = $(this).prop('checked');
            
            $.post("<?php echo $_smarty_tpl->tpl_vars['setup']->value['request_url'];?>
", { 'function': 'check', 'perm': '<?php echo $_GET['perm'];?>
', 'id': id, 'typ': typ, 'checked': checked },
            function(ret) {
                if(ret == 'chyba'){
                    $.gritter.add({
                            title: 'Výsledek operace na pozadí',
                            text: 'Vyskytla se chyba zkuste to opakovat později',
                            class_name: 'gritter-error',
                            time: 1500
                    });
                }else{
                    $.gritter.add({
                            title: 'Výsledek operace na pozadí',
                            text: 'Vše proběhlo v pořádku',
                            class_name: 'gritter-success',
                            time: 1500
                    });
                }
            }
            );
        });
        
        $(".dd-list .dd-list li .dd-handle").click(function(){
            var element = $(this);    
            var id = element.parent().attr('data-id');
            
            $.post("<?php echo $_smarty_tpl->tpl_vars['setup']->value['request_url'];?>
", { 'function': 'default', 'perm': '<?php echo $_GET['perm'];?>
', 'id': id },
            function(ret) {
                if (ret == 'chyba') {
                    $.gritter.add({
                            title: 'Výsledek operace na pozadí',
                            text: 'Vyskytla se chyba zkuste to opakovat později',
                            class_name: 'gritter-error',
                            time: 1500
                    });
                }else{
                    $('.dd-list .dd-list li .dd-handle i').removeClass('orange');
                    element.children('i:first').addClass('orange');
                    $.gritter.add({
                            title: 'Výsledek operace na pozadí',
                            text: 'Vše proběhlo v pořádku',
                            class_name: 'gritter-success',
                            time: 1500
                    });
                }
            }
            );
            
        });
    });
<?php echo '</script'; ?>
><?php }
}
