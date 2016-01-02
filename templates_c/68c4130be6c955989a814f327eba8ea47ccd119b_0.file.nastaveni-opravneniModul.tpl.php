<?php
/* Smarty version 3.1.28, created on 2015-12-20 01:15:52
  from "/var/www/wordpress/lamps.lightmaster.cz/www3/templates/nastaveni/nastaveni-opravneniModul.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5675f338dbf2a9_93504035',
  'file_dependency' => 
  array (
    '68c4130be6c955989a814f327eba8ea47ccd119b' => 
    array (
      0 => '/var/www/wordpress/lamps.lightmaster.cz/www3/templates/nastaveni/nastaveni-opravneniModul.tpl',
      1 => 1450569353,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5675f338dbf2a9_93504035 ($_smarty_tpl) {
?>
<p>Vyberte oprávnění pro, které budete povolovat moduly, které bude moci využívat.</p>
<ul class="nav nav-pills">
    <?php
$_from = $_smarty_tpl->tpl_vars['opravneni']->value;
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
        <li<?php if ($_GET['perm'] == $_smarty_tpl->tpl_vars['it']->value['id']) {?> class="active"<?php }?>>
            <a href="<?php echo $_smarty_tpl->tpl_vars['setup']->value['adm']['www'];?>
nastaveni/opravneniModul.html?perm=<?php echo $_smarty_tpl->tpl_vars['it']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['it']->value['nazev'];?>
</a>
        </li>
    <?php
$_smarty_tpl->tpl_vars['it'] = $__foreach_it_0_saved_local_item;
}
}
if ($__foreach_it_0_saved_item) {
$_smarty_tpl->tpl_vars['it'] = $__foreach_it_0_saved_item;
}
?>
</ul>

<?php if ($_GET['perm']) {?>
    <div class="row">
        <div class="col-sm-6">
            <div class="dd dd-draghandle" id="nestable">
                <ol class="dd-list">
                    <?php
$_from = $_smarty_tpl->tpl_vars['list']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_it_1_saved_item = isset($_smarty_tpl->tpl_vars['it']) ? $_smarty_tpl->tpl_vars['it'] : false;
$_smarty_tpl->tpl_vars['it'] = new Smarty_Variable();
$__foreach_it_1_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_it_1_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['it']->value) {
$__foreach_it_1_saved_local_item = $_smarty_tpl->tpl_vars['it'];
?>
                        <li class="dd-item dd2-item" data-id="<?php echo $_smarty_tpl->tpl_vars['it']->value['id'];?>
">
                            <div class="dd-handle dd2-handle">
                                <i class="normal-icon <?php echo (($tmp = @$_smarty_tpl->tpl_vars['it']->value['icon'])===null||$tmp==='' ? 'icon-circle' : $tmp);?>
 bigger-130"></i>

                                <i class="drag-icon icon-move bigger-125"></i>
                            </div>
                            <div class="dd2-content">
                                <?php echo $_smarty_tpl->tpl_vars['it']->value['nazev'];?>

                                <div class="pull-right">
                                    <input class="ace ace-switch ace-switch-6" type="checkbox" name="modul[<?php echo $_smarty_tpl->tpl_vars['it']->value['id'];?>
]" data-id="<?php echo $_smarty_tpl->tpl_vars['it']->value['id'];?>
" data-typ="modul" value="2"<?php if ($_POST) {
if ($_POST['def']['zobraz'] == '2') {?> checked="checked"<?php }
} elseif (in_array($_smarty_tpl->tpl_vars['it']->value['id'],$_smarty_tpl->tpl_vars['checked']->value)) {?> checked="checked"<?php }?> title="Přiřadit" />
                                    <span class="lbl"></span>
                                </div>
                            </div>
                            <?php if ($_smarty_tpl->tpl_vars['it']->value['submodul']) {?>
                                <ol class="dd-list">
                                    <?php
$_from = $_smarty_tpl->tpl_vars['it']->value['submodul'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_it2_2_saved_item = isset($_smarty_tpl->tpl_vars['it2']) ? $_smarty_tpl->tpl_vars['it2'] : false;
$_smarty_tpl->tpl_vars['it2'] = new Smarty_Variable();
$__foreach_it2_2_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_it2_2_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['it2']->value) {
$__foreach_it2_2_saved_local_item = $_smarty_tpl->tpl_vars['it2'];
?>
                                        <li class="dd-item dd2-item" data-id="<?php echo $_smarty_tpl->tpl_vars['it2']->value['id'];?>
" title="Vybrat jako výchozí modul">
                                            <div class="dd-handle dd2-handle">
                                                <i class="normal-icon <?php echo (($tmp = @$_smarty_tpl->tpl_vars['it2']->value['icon'])===null||$tmp==='' ? 'icon-circle' : $tmp);
if ($_smarty_tpl->tpl_vars['opravneni']->value[$_GET['perm']]['vychoziModul'] == $_smarty_tpl->tpl_vars['it2']->value['id']) {?> orange<?php }?> bigger-130"></i>

                                                <i class="drag-icon icon-move bigger-125"></i>
                                            </div>
                                            <div class="dd2-content <?php if ($_smarty_tpl->tpl_vars['it2']->value['zobraz'] == '0') {?>red<?php }?>">
                                                <?php echo $_smarty_tpl->tpl_vars['it2']->value['nazev'];?>
 <span class="lighter grey"><?php echo $_smarty_tpl->tpl_vars['it2']->value['url'];?>
</span>

                                                <div class="pull-right">
                                                    <input class="ace ace-switch ace-switch-6" type="checkbox" name="modul[<?php echo $_smarty_tpl->tpl_vars['it2']->value['id'];?>
]" data-id="<?php echo $_smarty_tpl->tpl_vars['it2']->value['id'];?>
" data-typ="modul" value="2"<?php if ($_POST) {
if ($_POST['def']['zobraz'] == '2') {?> checked="checked"<?php }
} elseif (in_array($_smarty_tpl->tpl_vars['it2']->value['id'],$_smarty_tpl->tpl_vars['checked']->value)) {?> checked="checked"<?php }?> title="Přiřadit" />
                                                    <span class="lbl"></span>
                                                </div>
                                            </div>
                                        </li>
                                    <?php
$_smarty_tpl->tpl_vars['it2'] = $__foreach_it2_2_saved_local_item;
}
}
if ($__foreach_it2_2_saved_item) {
$_smarty_tpl->tpl_vars['it2'] = $__foreach_it2_2_saved_item;
}
?>
                                </ol>
                            <?php }?>
                        </li>
                    <?php
$_smarty_tpl->tpl_vars['it'] = $__foreach_it_1_saved_local_item;
}
}
if ($__foreach_it_1_saved_item) {
$_smarty_tpl->tpl_vars['it'] = $__foreach_it_1_saved_item;
}
?>
                </ol>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="widget-box">
                <div class="widget-header">
                    <h4>Nastavení pro vybrané oprávnění</h4>
                </div>
                <div class="widget-body">
                    <div class="widget-main form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right">SuperAdmin:</label>
                            <div class="col-sm-9">
                                <label>
                                    <input name="switch-field-1" data-id="admin" data-typ="opravneni" class="ace ace-switch ace-switch-6" type="checkbox"<?php if ($_smarty_tpl->tpl_vars['perm']->value['admin'] == 2) {?> checked="checked"<?php }?> />
                                    <span class="lbl"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }
}
}
