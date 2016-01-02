<?php
/* Smarty version 3.1.28, created on 2015-12-20 01:15:41
  from "/var/www/wordpress/lamps.lightmaster.cz/www3/templates/nastaveni/nastaveni-editModul.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5675f32db670b7_39904771',
  'file_dependency' => 
  array (
    '63f27ee26c0b70fb9b0754e7fc2659a87b5ff340' => 
    array (
      0 => '/var/www/wordpress/lamps.lightmaster.cz/www3/templates/nastaveni/nastaveni-editModul.tpl',
      1 => 1450569352,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5675f32db670b7_39904771 ($_smarty_tpl) {
if (!is_callable('smarty_function_message')) require_once '/var/www/wordpress/lamps.lightmaster.cz/www3/smarty/plugins/function.message.php';
echo smarty_function_message(array('msg'=>$_smarty_tpl->tpl_vars['msg']->value,'type'=>"info"),$_smarty_tpl);?>

<?php echo smarty_function_message(array('msg'=>$_smarty_tpl->tpl_vars['err']->value,'type'=>"error"),$_smarty_tpl);?>

<form class="form-horizontal" id="form-1" role="form" method="post">
    <div class="form-group col-sm-12">
        <label class="col-sm-4 control-label no-padding-right red" for="form-field-1"> Název: </label>
        <div class="col-sm-8">
            <input type="text" id="form-field-1" placeholder="Název" name="def[nazev]" value="<?php if ($_POST) {
echo $_POST['def']['nazev'];
} else {
echo $_smarty_tpl->tpl_vars['edit']->value['nazev'];
}?>" />
        </div>
    </div>
    <div class="space-4"></div>
    <div class="form-group col-sm-12">
        <label class="col-sm-4 control-label no-padding-right red" for="form-field-2"> Odkazovaná stránka: </label>
        <div class="col-sm-8">
            <input type="text" id="form-field-2" placeholder="Stránka" name="def[page]" value="<?php if ($_POST) {
echo $_POST['def']['page'];
} else {
echo $_smarty_tpl->tpl_vars['edit']->value['page'];
}?>" />
        </div>
    </div>
    <div class="space-4"></div>
    <div class="form-group col-sm-12">
        <label class="col-sm-4 control-label no-padding-right" for="form-field-3"> Ikona: </label>
        <div class="col-sm-8">
            <input type="text" id="form-field-3" placeholder="Název ikony" name="def[icon]" value="<?php if ($_POST) {
echo $_POST['def']['icon'];
} else {
echo $_smarty_tpl->tpl_vars['edit']->value['icon'];
}?>" />
        </div>
    </div>
    <div class="space-4"></div>
    <div class="form-group col-sm-12">
        <label class="col-sm-4 control-label no-padding-right" for="form-field-4"> Nadpis: </label>
        <div class="col-sm-8">
            <input type="text" id="form-field-4" placeholder="Nadpis" name="def[nadpis]" value="<?php if ($_POST) {
echo $_POST['def']['nadpis'];
} else {
echo $_smarty_tpl->tpl_vars['edit']->value['nadpis'];
}?>" />
        </div>
    </div>
    <div class="space-4"></div>
    <div class="form-group col-sm-12">
        <label class="col-sm-4 control-label no-padding-right" for="form-field-5"> Zobrazovat </label>
        <div class="col-sm-8">
            <input class="ace ace-switch ace-switch-6" type="checkbox" id="form-field-5" name="zobraz" value="2"<?php if ($_POST) {
if ($_POST['zobraz'] == '2') {?> checked="checked"<?php }
} elseif ($_smarty_tpl->tpl_vars['edit']->value['zobraz'] == 2) {?> checked="checked"<?php }?> />
            <span class="lbl"></span>
        </div>
    </div>
    <div class="space-4"></div>
    <div class="clearfix form-actions col-sm-12">
        <div class="col-sm-offset-3 col-sm-9">
            <button class="btn btn-info" data-submitform="1" data-submitvalue="new" type="button">
                <i class="icon-ok bigger-110"></i>
                Uložit
            </button>
        </div>
    </div>
    <input id="submitValue1" type="hidden" name="submitValue" value="" />
</form><?php }
}
