<?php
/* Smarty version 3.1.28, created on 2015-12-20 12:28:56
  from "/var/www/wordpress/lamps.lightmaster.cz/www3/templates/lamps/lamps-list.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_567690f88d6f43_17768414',
  'file_dependency' => 
  array (
    'ede474e473ee7b2c9a05a85e91fcc0d26a014487' => 
    array (
      0 => '/var/www/wordpress/lamps.lightmaster.cz/www3/templates/lamps/lamps-list.tpl',
      1 => 1450609706,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_567690f88d6f43_17768414 ($_smarty_tpl) {
if (!is_callable('smarty_function_locale')) require_once '/var/www/wordpress/lamps.lightmaster.cz/www3/smarty/plugins/function.locale.php';
if (!is_callable('smarty_block_t')) require_once '/var/www/wordpress/lamps.lightmaster.cz/www3/smarty/plugins/block.t.php';
?>
<div class="row">
    <div class="col-sm-12">
        <div class="widget-box">
            <div class="widget-header">
                <?php echo smarty_function_locale(array('path'=>"./locale",'domain'=>"lightmaster_en_US"),$_smarty_tpl);?>

                <h4><?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
LAMPSTITLE<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>
</h4>
            </div>
<?php echo '<script'; ?>
>
    var lamps = <?php echo json_encode($_smarty_tpl->tpl_vars['lampList']->value);?>
;
<?php echo '</script'; ?>
>
            <div class="widget-body">
                <div class="widget-main no-padding">
                    <table class="table table-hover table-bordered table-striped table-condensed">
                        <thead>
                        <tr>
                            <th>Id lampy</th>
                            <th>Value 1</th>
                            <th>Value 2</th>
                            <th>Value 3</th>
                            <th>Value 4</th>
                            <th>Value 5</th>
                            <th>Value 6</th>
                        </tr>
                        </thead>
                        <?php
$_from = $_smarty_tpl->tpl_vars['lampList']->value;
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
                            <tr id="item<?php echo $_smarty_tpl->tpl_vars['it']->value['id'];?>
">

                                <td><?php echo $_smarty_tpl->tpl_vars['it']->value['id'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['it']->value['lat'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['it']->value['long'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['it']->value['isenabled'];?>
 <?php if ($_smarty_tpl->tpl_vars['it']->value['dealer_company']) {?>( <?php echo $_smarty_tpl->tpl_vars['it']->value['dealer_company'];?>
 )<?php }?></td>
                                <td><?php echo $_smarty_tpl->tpl_vars['variable']->value['booleanBadgeInverse'][$_smarty_tpl->tpl_vars['it']->value['blokace']];
if ($_smarty_tpl->tpl_vars['it']->value['duvodBlokace']) {?> - <?php echo $_smarty_tpl->tpl_vars['it']->value['duvodBlokace'];
}?></td>
                                <td>
                                    <div class="action-buttons">
                                        <a class="blue" href="<?php echo $_smarty_tpl->tpl_vars['setup']->value['adm']['www'];?>
uzivatele/edit.html?id=<?php echo $_smarty_tpl->tpl_vars['it']->value['id'];?>
" title="Editovat">
                                            <i class="icon-edit bigger-130"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <?php
$_smarty_tpl->tpl_vars['it'] = $__foreach_it_0_saved_local_item;
}
} else {
?>
                            <tr>
                                <td class="center" colspan="5">Není žádný záznam</td>
                            </tr>
                        <?php
}
if ($__foreach_it_0_saved_item) {
$_smarty_tpl->tpl_vars['it'] = $__foreach_it_0_saved_item;
}
?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
