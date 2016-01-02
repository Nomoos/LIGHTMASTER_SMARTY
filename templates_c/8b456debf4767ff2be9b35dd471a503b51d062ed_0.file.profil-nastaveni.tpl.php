<?php
/* Smarty version 3.1.28, created on 2015-12-19 11:23:46
  from "/var/www/wordpress/lamps.lightmaster.cz/www3/templates/profil/profil-nastaveni.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5675303226af21_29177235',
  'file_dependency' => 
  array (
    '8b456debf4767ff2be9b35dd471a503b51d062ed' => 
    array (
      0 => '/var/www/wordpress/lamps.lightmaster.cz/www3/templates/profil/profil-nastaveni.tpl',
      1 => 1450518930,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5675303226af21_29177235 ($_smarty_tpl) {
if (!is_callable('smarty_function_message')) require_once '/var/www/wordpress/lamps.lightmaster.cz/www3/smarty/plugins/function.message.php';
?>
<div class="row">
    <div class="col-sm-6">
        <div class="widget-box">
            <div class="widget-header">
                <h4>Základní informace</h4>
            </div>
            <div class="widget-body">
                <div class="widget-main no-padding">
                    <form action="<?php echo $_smarty_tpl->tpl_vars['setup']->value['adm']['www'];?>
profil/nastaveni.html" method="post" class="form-horizontal">
                        <fieldset>
                            <?php echo smarty_function_message(array('msg'=>$_smarty_tpl->tpl_vars['err']->value['info'],'type'=>"error"),$_smarty_tpl);?>

                            <?php if ($_GET['msgOk'] == 'info') {?>
                                <?php echo smarty_function_message(array('msg'=>"Údaje byly uloženy.",'type'=>"success"),$_smarty_tpl);?>

                            <?php }?>
                            <div class="form-group">
                                <label class="col-sm-4 control-label no-padding-right">Přihlašovací jméno:</label>
                                <div class="col-sm-8">
                                    <p class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['user']->value['login'];?>
</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label no-padding-right">Uživatel:</label>
                                <div class="col-sm-8">
                                    <p class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['user']->value['nick'];?>
</p>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-sm-4 control-label no-padding-right" for="form-field-1">Email uživatele:</label>
                                <div class="col-sm-8">
                                    <input id="form-field-1" type="text" name="email" value="<?php echo (($tmp = @$_POST['email'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['user']->value['email'] : $tmp);?>
" />
                                </div>
                            </div>
                        </fieldset>
                        <div class="form-actions center">
                            <button type="submit" class="btn btn-sm btn-success" name="edit" value="Uložit">
                                Uložit
                                <i class="icon-arrow-right icon-on-right bigger-110"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</div><?php }
}
