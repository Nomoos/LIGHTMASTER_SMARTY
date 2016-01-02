<?php
/* Smarty version 3.1.28, created on 2015-12-20 12:28:59
  from "/var/www/wordpress/lamps.lightmaster.cz/www3/templates/uzivatele/uzivatele-edit.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_567690fbc44d58_12248402',
  'file_dependency' => 
  array (
    '8732fa5dac4c394ef0078f234af0128a9d804400' => 
    array (
      0 => '/var/www/wordpress/lamps.lightmaster.cz/www3/templates/uzivatele/uzivatele-edit.tpl',
      1 => 1450609714,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_567690fbc44d58_12248402 ($_smarty_tpl) {
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
                                <label class="col-sm-4 control-label no-padding-right" for="form-field-1">Přihlašovací jméno:</label>
                                <div class="col-sm-8">
                                    <input id="form-field-1" type="text" name="login" value="<?php echo (($tmp = @$_POST['login'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['user']->value['login'] : $tmp);?>
" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label no-padding-right" for="form-field-2">Jméno uživatele:</label>
                                <div class="col-sm-8">
                                    <input id="form-field-2" type="text" name="jmeno" value="<?php echo (($tmp = @$_POST['jmeno'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['user']->value['jmeno'] : $tmp);?>
" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label no-padding-right" for="form-field-3">Příjmení uživatele:</label>
                                <div class="col-sm-8">
                                    <input id="form-field-3" type="text" name="prijmeni" value="<?php echo (($tmp = @$_POST['prijmeni'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['user']->value['prijmeni'] : $tmp);?>
" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label no-padding-right" for="form-field-4">Email uživatele:</label>
                                <div class="col-sm-8">
                                    <input id="form-field-4" type="text" name="email" value="<?php echo (($tmp = @$_POST['email'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['user']->value['email'] : $tmp);?>
" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label no-padding-right" for="form-field-select-1">Oprávnění:</label>
                                <div class="col-sm-8">
                                    <select id="form-field-select-1" name="uzivatelOpravneni_id">
                                        <option value="">&nbsp;Vyber</option>
                                        <?php
$_from = $_smarty_tpl->tpl_vars['option']->value['opravneni'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_it_0_saved_item = isset($_smarty_tpl->tpl_vars['it']) ? $_smarty_tpl->tpl_vars['it'] : false;
$_smarty_tpl->tpl_vars['it'] = new Smarty_Variable();
$__foreach_it_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_it_0_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['it']->value) {
$__foreach_it_0_saved_local_item = $_smarty_tpl->tpl_vars['it'];
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['it']->value['id'];?>
"<?php if ((($tmp = @$_POST['uzivatelOpravneni_id'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['user']->value['uzivatelOpravneni_id'] : $tmp) == $_smarty_tpl->tpl_vars['it']->value['id']) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['it']->value['nazev'];?>
</option>
                                        <?php
$_smarty_tpl->tpl_vars['it'] = $__foreach_it_0_saved_local_item;
}
}
if ($__foreach_it_0_saved_item) {
$_smarty_tpl->tpl_vars['it'] = $__foreach_it_0_saved_item;
}
?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label no-padding-right" for="form-field-5"> Blokace </label>
                                <div class="col-sm-8">
                                    <input type="checkbox" id="form-field-5" name="blokace" value="2"<?php if ($_smarty_tpl->tpl_vars['user']->value['blokace'] == 2) {?> checked="checked"<?php }?> />
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
