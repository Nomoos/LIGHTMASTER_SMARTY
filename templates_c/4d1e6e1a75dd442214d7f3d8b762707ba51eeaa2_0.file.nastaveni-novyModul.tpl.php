<?php
/* Smarty version 3.1.28, created on 2015-12-20 09:35:52
  from "/var/www/wordpress/lamps.lightmaster.cz/www3/templates/nastaveni/nastaveni-novyModul.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_56766868e32667_36483552',
  'file_dependency' => 
  array (
    '4d1e6e1a75dd442214d7f3d8b762707ba51eeaa2' => 
    array (
      0 => '/var/www/wordpress/lamps.lightmaster.cz/www3/templates/nastaveni/nastaveni-novyModul.tpl',
      1 => 1450569352,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56766868e32667_36483552 ($_smarty_tpl) {
if (!is_callable('smarty_function_message')) require_once '/var/www/wordpress/lamps.lightmaster.cz/www3/smarty/plugins/function.message.php';
echo smarty_function_message(array('msg'=>$_smarty_tpl->tpl_vars['msg']->value,'type'=>"info"),$_smarty_tpl);?>

<?php echo smarty_function_message(array('msg'=>$_smarty_tpl->tpl_vars['err']->value,'type'=>"error"),$_smarty_tpl);?>

<form class="form-horizontal" id="form-1" role="form" method="post">
    <div class="form-group col-sm-12">
        <label class="col-sm-4 control-label no-padding-right red" for="form-field-1"> Název:</label>
        <div class="col-sm-8">
            <input type="text" id="form-field-1" placeholder="Název modulu" name="def[nazev]" value="<?php echo $_POST['def']['nazev'];?>
" />
        </div>
    </div>
    <div class="space-4"></div>
    <div class="form-group col-sm-12">
        <label class="col-sm-4 control-label no-padding-right red" for="form-field-2"> Odkazovaná stránka: </label>
        <div class="col-sm-8">
            <input type="text" id="form-field-2" placeholder="Stránka" name="def[page]" value="<?php echo $_POST['def']['page'];?>
" />
        </div>
    </div>
    <div class="space-4"></div>
    <div class="form-group col-sm-12">
        <label class="col-sm-4 control-label no-padding-right" for="form-field-3"> Ikona: </label>
        <div class="col-sm-8">
            <input type="text" id="form-field-3" placeholder="Název ikony" name="def[icon]" value="<?php echo $_POST['def']['icon'];?>
" />
        </div>
    </div>
    <div class="space-4"></div>
    <div class="form-group col-sm-12">
        <label class="col-sm-4 control-label no-padding-right" for="form-field-4"> Nadpis: </label>
        <div class="col-sm-8">
            <input type="text" id="form-field-4" placeholder="Nadpis" name="def[nadpis]" value="<?php echo $_POST['def']['nadpis'];?>
" />
        </div>
    </div>
    <div class="space-4"></div>
    <div class="form-group col-sm-12">
        <label class="col-sm-4 control-label no-padding-right" for="form-field-select-1"> Nadřazený modul: </label>
        <div class="col-sm-8">
            <select id="form-field-select-1" name="modul_id">
                <option value="">Bez nadřazeného modulu</option>
                <optgroup label="Hlavní moduly">
                    <?php
$_from = $_smarty_tpl->tpl_vars['option']->value['modul'];
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
"<?php if ($_POST['modul_id'] == $_smarty_tpl->tpl_vars['it']->value['id']) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['it']->value['nazev'];?>
</option>
                    <?php
$_smarty_tpl->tpl_vars['it'] = $__foreach_it_0_saved_local_item;
}
}
if ($__foreach_it_0_saved_item) {
$_smarty_tpl->tpl_vars['it'] = $__foreach_it_0_saved_item;
}
?>
                </optgroup>
            </select>
        </div>
    </div>
    <div class="space-4"></div>
    <div class="form-group col-sm-12">
        <label class="col-sm-4 control-label no-padding-right" for="form-field-5"> Zobrazovat </label>
        <div class="col-sm-8">
            <input class="ace ace-switch ace-switch-6" type="checkbox" id="form-field-5" name="def[zobraz]" value="2" <?php if ($_POST['def']['zobraz'] == '2') {?>checked="checked"<?php }?> />
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
            &nbsp; &nbsp; &nbsp;
            <button class="btn" type="reset">
                <i class="icon-undo bigger-110"></i>
                Smazat
            </button>
        </div>
    </div>
    <input id="submitValue1" type="hidden" name="submitValue" value="" />
</form><?php }
}
