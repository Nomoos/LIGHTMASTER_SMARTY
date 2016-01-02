<?php
/* Smarty version 3.1.28, created on 2015-12-20 11:35:08
  from "/var/www/wordpress/lamps.lightmaster.cz/www3/templates/companies/companies-edit.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5676845cd529f5_81771022',
  'file_dependency' => 
  array (
    '9c9bafe2b45851e908ceead727c9c367b598de4e' => 
    array (
      0 => '/var/www/wordpress/lamps.lightmaster.cz/www3/templates/companies/companies-edit.tpl',
      1 => 1450607705,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5676845cd529f5_81771022 ($_smarty_tpl) {
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
                    <form action="" method="post" class="form-horizontal">
                        <fieldset>
                            <?php echo smarty_function_message(array('msg'=>$_smarty_tpl->tpl_vars['err']->value['info'],'type'=>"error"),$_smarty_tpl);?>

                            <div class="form-group">
                                <label class="col-sm-4 control-label no-padding-right" for="form-field-1">Jméno společnosti:</label>
                                <div class="col-sm-8">
                                    <input id="form-field-1" type="text" name="login" value="<?php echo (($tmp = @$_POST['login'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['company']->value['company_name'] : $tmp);?>
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
    <div class="col-sm-6">
        <div class="widget-box">
            <div class="widget-header">
                <h4>Heslo</h4>
            </div>
            <div class="widget-body">
                <div class="widget-main no-padding">
                    <form action="" method="post" class="form-horizontal">
                        <fieldset>
                            <?php echo smarty_function_message(array('msg'=>$_smarty_tpl->tpl_vars['err']->value['pass'],'type'=>"error"),$_smarty_tpl);?>

                            <div class="form-group">
                                <label class="col-sm-4 control-label no-padding-right" for="form-field-6"> Heslo </label>
                                <div class="col-sm-8">
                                    <input type="password" id="form-field-6" placeholder="Heslo" name="password" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label no-padding-right" for="form-field-7"> Zopakovat heslo </label>
                                <div class="col-sm-8">
                                    <input type="password" id="form-field-7" placeholder="Zopakovat heslo" name="password_again" />
                                </div>
                            </div>
                        </fieldset>
                        <div class="form-actions center">
                            <button type="submit" class="btn btn-sm btn-success" name="change_pass" value="Uložit">
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
