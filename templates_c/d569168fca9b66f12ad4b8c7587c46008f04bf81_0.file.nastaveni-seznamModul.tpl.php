<?php
/* Smarty version 3.1.28, created on 2015-12-20 12:28:19
  from "/var/www/wordpress/lamps.lightmaster.cz/www3/templates/nastaveni/nastaveni-seznamModul.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_567690d3174d26_52006534',
  'file_dependency' => 
  array (
    'd569168fca9b66f12ad4b8c7587c46008f04bf81' => 
    array (
      0 => '/var/www/wordpress/lamps.lightmaster.cz/www3/templates/nastaveni/nastaveni-seznamModul.tpl',
      1 => 1450609712,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_567690d3174d26_52006534 ($_smarty_tpl) {
?>
<div class="dd dd-draghandle" id="nestable">
    <ol class="dd-list">
        <?php
$_from = $_smarty_tpl->tpl_vars['list']->value;
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
            <li class="dd-item dd2-item" data-id="<?php echo $_smarty_tpl->tpl_vars['it']->value['id'];?>
">
                <div class="dd-handle dd2-handle" title="Přesunout">
                    <i class="normal-icon <?php echo (($tmp = @$_smarty_tpl->tpl_vars['it']->value['icon'])===null||$tmp==='' ? 'icon-circle' : $tmp);?>
 bigger-130"></i>

                    <i class="drag-icon icon-move bigger-125"></i>
                </div>
                <div class="dd2-content <?php if ($_smarty_tpl->tpl_vars['it']->value['zobraz'] == '0') {?>red<?php }?>">
                    <?php echo $_smarty_tpl->tpl_vars['it']->value['nazev'];?>
 <span class="lighter grey">&nbsp;<?php echo $_smarty_tpl->tpl_vars['it']->value['page'];?>
</span>
                    <div class="pull-right action-buttons">
                        <a class="" href="<?php echo $_smarty_tpl->tpl_vars['setup']->value['adm']['www'];?>
nastaveni/editModul.html?id=<?php echo $_smarty_tpl->tpl_vars['it']->value['id'];?>
" title="Editovat">
                            <i class="icon-pencil bigger-130"></i>
                        </a>
                    </div>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['it']->value['submodul']) {?>
                    <ol class="dd-list">
                        <?php
$_from = $_smarty_tpl->tpl_vars['it']->value['submodul'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_it2_1_saved_item = isset($_smarty_tpl->tpl_vars['it2']) ? $_smarty_tpl->tpl_vars['it2'] : false;
$_smarty_tpl->tpl_vars['it2'] = new Smarty_Variable();
$__foreach_it2_1_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_it2_1_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['it2']->value) {
$__foreach_it2_1_saved_local_item = $_smarty_tpl->tpl_vars['it2'];
?>
                            <li class="dd-item dd2-item" data-id="<?php echo $_smarty_tpl->tpl_vars['it2']->value['id'];?>
">
                                <div class="dd-handle dd2-handle" title="Přesunout">
                                    <i class="normal-icon <?php echo (($tmp = @$_smarty_tpl->tpl_vars['it2']->value['icon'])===null||$tmp==='' ? 'icon-circle' : $tmp);?>
 bigger-130"></i>

                                    <i class="drag-icon icon-move bigger-125"></i>
                                </div>
                                <div class="dd2-content <?php if ($_smarty_tpl->tpl_vars['it2']->value['zobraz'] == '0') {?>red<?php }?>">
                                    <?php echo $_smarty_tpl->tpl_vars['it2']->value['nazev'];?>
 <span class="lighter grey">&nbsp;<?php echo $_smarty_tpl->tpl_vars['it2']->value['page'];?>
</span>
                                    <div class="pull-right action-buttons">
                                        <a class="blue" href="<?php echo $_smarty_tpl->tpl_vars['setup']->value['adm']['www'];?>
nastaveni/editModul.html?id=<?php echo $_smarty_tpl->tpl_vars['it2']->value['id'];?>
" title="Editovat">
                                            <i class="icon-pencil bigger-130"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        <?php
$_smarty_tpl->tpl_vars['it2'] = $__foreach_it2_1_saved_local_item;
}
}
if ($__foreach_it2_1_saved_item) {
$_smarty_tpl->tpl_vars['it2'] = $__foreach_it2_1_saved_item;
}
?>
                    </ol>
                <?php }?>
            </li>
        <?php
$_smarty_tpl->tpl_vars['it'] = $__foreach_it_0_saved_local_item;
}
}
if ($__foreach_it_0_saved_item) {
$_smarty_tpl->tpl_vars['it'] = $__foreach_it_0_saved_item;
}
?>
    </ol>
</div><?php }
}
