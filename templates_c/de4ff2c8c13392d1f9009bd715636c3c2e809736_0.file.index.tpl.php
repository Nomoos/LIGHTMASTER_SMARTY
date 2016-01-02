<?php
/* Smarty version 3.1.28, created on 2015-12-20 12:08:54
  from "/var/www/wordpress/lamps.lightmaster.cz/www3/templates/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_56768c46b93f98_16106354',
  'file_dependency' => 
  array (
    'de4ff2c8c13392d1f9009bd715636c3c2e809736' => 
    array (
      0 => '/var/www/wordpress/lamps.lightmaster.cz/www3/templates/index.tpl',
      1 => 1450609691,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./includes/ace-navbar.tpl' => 1,
    'file:./includes/ace-sidebar.tpl' => 1,
    'file:./includes/del_js.tpl' => 1,
  ),
),false)) {
function content_56768c46b93f98_16106354 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="cs">
    <head>
        <meta charset="utf-8" />
        <title>Lamps administrace</title>
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['setup']->value['adm']['www'];?>
favicon.jpg" />
        <!-- basic styles -->
        <link href="<?php echo $_smarty_tpl->tpl_vars['setup']->value['adm']['www'];?>
assets/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['setup']->value['adm']['www'];?>
assets/css/font-awesome-new.min.css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['setup']->value['adm']['www'];?>
assets/css/font-awesome.min.css" />
        <!--[if IE 7]>
          <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['setup']->value['adm']['www'];?>
assets/css/font-awesome-ie7.min.css" />
        <![endif]-->
        <!-- page specific plugin styles -->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['setup']->value['adm']['www'];?>
assets/css/jquery-ui-1.10.3.full.min.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['setup']->value['adm']['www'];?>
assets/css/dropzone.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['setup']->value['adm']['www'];?>
assets/css/fullcalendar.css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['setup']->value['adm']['www'];?>
assets/css/chosen.css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['setup']->value['adm']['www'];?>
assets/css/select2.css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['setup']->value['adm']['www'];?>
assets/css/jquery.gritter.css" />
        <!-- fonts -->
        <link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,300,400,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        
        <!-- ace styles -->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['setup']->value['adm']['www'];?>
assets/css/ace.min.css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['setup']->value['adm']['www'];?>
assets/css/ace-rtl.min.css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['setup']->value['adm']['www'];?>
assets/css/ace-skins.min.css" />
        <!--[if lte IE 8]>
          <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['setup']->value['adm']['www'];?>
assets/css/ace-ie.min.css" />
        <![endif]-->
        <!-- inline styles related to this page -->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['setup']->value['adm']['www'];?>
assets/css/datepicker.css" />
        <!-- ace settings handler -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['setup']->value['adm']['www'];?>
assets/js/ace-extra.min.js"><?php echo '</script'; ?>
>
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['setup']->value['adm']['www'];?>
assets/js/html5shiv.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['setup']->value['adm']['www'];?>
assets/js/respond.min.js"><?php echo '</script'; ?>
>
        <![endif]-->
    </head>
    <body>
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:./includes/ace-navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <div class="main-container" id="main-container">
            <?php echo '<script'; ?>
 type="text/javascript">
                try {
                    ace.settings.check('main-container', 'fixed')
                } catch (e) {
                }
            <?php echo '</script'; ?>
>
            <div class="main-container-inner">
                <a class="menu-toggler" id="menu-toggler" href="#">
                    <span class="menu-text"></span>
                </a>
                <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:./includes/ace-sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <div class="main-content">
                    <div class="breadcrumbs" id="breadcrumbs">
                        <?php echo '<script'; ?>
 type="text/javascript">
                            try {
                                ace.settings.check('breadcrumbs', 'fixed')
                            } catch (e) {
                            }
                        <?php echo '</script'; ?>
>
                        <ul class="breadcrumb">
                            <li>
                                <i class="icon-home home-icon"></i>
                                <a href="#">Domů</a>
                            </li>
                            <?php if ($_GET['page']) {?>
                                <li><a href="#"><?php echo $_smarty_tpl->tpl_vars['modul']->value[$_GET['page']]['nazev'];?>
</a></li>
                                <?php }?>
                                <?php if ($_GET['subpage']) {?>
                                <li class="active"><?php echo $_smarty_tpl->tpl_vars['modul']->value[$_GET['page']]['sub'][$_GET['subpage']]['nazev'];?>
</li>
                                <?php }?>
                        </ul><!-- .breadcrumb -->

                        <?php if ($_smarty_tpl->tpl_vars['navSearch']->value['show']) {?>
                        <div class="nav-search" id="nav-search">
                            <form action="<?php echo $_smarty_tpl->tpl_vars['setup']->value['request_url'];?>
" class="form-search" method="get">
                                <span class="input-icon">
                                    <input type="text" name="search" placeholder="Hledat ..." class="nav-search-input width-100" id="search" autocomplete="off" />
                                    <i class="icon-search nav-search-icon"></i>
                                </span>
                            </form>
                        </div><!-- #nav-search -->
                        <?php }?>

                    </div>
                    <div class="page-content">
                        <div class="page-header">
                            <h1><?php echo $_smarty_tpl->tpl_vars['modul']->value[$_GET['page']]['nazev'];
if ($_smarty_tpl->tpl_vars['modul']->value[$_GET['page']]['sub'][$_GET['subpage']]['nadpis']) {?><small><i class="fa fa-angle-double-right"></i> <?php echo $_smarty_tpl->tpl_vars['modul']->value[$_GET['page']]['sub'][$_GET['subpage']]['nadpis'];?>
</small><?php }?></h1>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->
                                <?php if ($_smarty_tpl->tpl_vars['page']->value['main']['tpl']) {?>
                                    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, $_smarty_tpl->tpl_vars['page']->value['main']['tpl'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

                                <?php }?>
                                <!-- PAGE CONTENT ENDS -->
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.page-content -->
                </div><!-- /.main-content -->
                
            </div><!-- /.main-container-inner -->
            <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                <i class="fa fa-angle-double-up icon-only bigger-110"></i>
            </a>
        </div><!-- /.main-container -->
        <!-- basic scripts -->
        <!--[if !IE]> -->
        <?php echo '<script'; ?>
 type="text/javascript">
            window.jQuery || document.write("<?php echo '<script'; ?>
 src='<?php echo $_smarty_tpl->tpl_vars['setup']->value['adm']['www'];?>
assets/js/jquery-2.0.3.min.js'>" + "<" + "/script>");
        <?php echo '</script'; ?>
>
        <!-- <![endif]-->
        <!--[if IE]>
<?php echo '<script'; ?>
 type="text/javascript">
window.jQuery || document.write("<?php echo '<script'; ?>
 src='<?php echo $_smarty_tpl->tpl_vars['setup']->value['adm']['www'];?>
assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
<?php echo '</script'; ?>
>
<![endif]-->
        <?php echo '<script'; ?>
 type="text/javascript">
            if ("ontouchend" in document)
                document.write("<?php echo '<script'; ?>
 src='<?php echo $_smarty_tpl->tpl_vars['setup']->value['adm']['www'];?>
assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
        <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['setup']->value['adm']['www'];?>
assets/js/bootstrap.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['setup']->value['adm']['www'];?>
assets/js/typeahead-bs2.min.js"><?php echo '</script'; ?>
>
        <!-- page specific plugin scripts -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['setup']->value['adm']['www'];?>
assets/js/jquery-ui-1.10.3.full.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['setup']->value['adm']['www'];?>
assets/js/jquery.ui.touch-punch.min.js"><?php echo '</script'; ?>
>

        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['setup']->value['adm']['www'];?>
assets/js/jquery.autosize.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['setup']->value['adm']['www'];?>
assets/js/jquery.colorbox-min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['setup']->value['adm']['www'];?>
assets/js/date-time/bootstrap-datepicker.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['setup']->value['adm']['www'];?>
assets/js/date-time/locales/bootstrap-datepicker.cs.js"><?php echo '</script'; ?>
>
        <!-- ace scripts -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['setup']->value['adm']['www'];?>
assets/js/ace-elements.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['setup']->value['adm']['www'];?>
assets/js/ace.min.js"><?php echo '</script'; ?>
>

        <!-- inline scripts related to this page -->

        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:./includes/del_js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php echo '<script'; ?>
 type="text/javascript">
            $(function() {
                <?php if ($_smarty_tpl->tpl_vars['navSearch']->value['show']) {?>
                    //custom autocomplete (category selection)
                    $.widget("custom.catcomplete", $.ui.autocomplete, {
                        _renderMenu: function(ul, items) {
                            var that = this,
                                    currentCategory = "";
                            $.each(items, function(index, item) {
                                if (item.category != currentCategory) {
                                    ul.append("<li class='ui-autocomplete-category'>" + item.category + "</li>");
                                    currentCategory = item.category;
                                }
                                that._renderItemData(ul, item);
                            });
                        }
                    });
                    $("#search").catcomplete({
                        delay: 0,
                        minLength: 3,
                        source: "<?php echo $_smarty_tpl->tpl_vars['setup']->value['adm']['request_url'];?>
",
                        select: function( event, ui ) {
                            window.location.href = ui.item.redirectUrl+ui.item.id;
                        }
                    });
                    $("#search").focus(function(){
                        $(".searchHighlight").prepend('<i class="icon-search blue" style="position:absolute; top:3px; right:3px;">');
                        $(".searchHighlight .icon-search").effect("pulsate", 1500);
                    });
                    $("#search").focusout(function(){
                        $(".searchHighlight .icon-search").remove();
                    });
                <?php }?>

                $('.print').click(function() {
                    window.print();
                });

                $('textarea[class*=autosize]').autosize({
                    append: "\n"
                });

                $('.form-horizontal input[type=file]').ace_file_input({
                    no_file: 'Není soubor ...',
                    btn_choose: 'Vybrat',
                    btn_change: 'Změnit',
                    droppable: false,
                    onchange: null,
                    thumbnail: false,
                    whitelist: 'xml'
                })


                $("[data-submitform]").click(function() {
                    var form = $(this).data("submitform");
                    $("#submitValue" + form).val($(this).data("submitvalue"));
                    $("#form-" + form).submit();
                });
                $(".date-picker").datepicker({
                    autoclose: true,
                    showOtherMonths: true,
                    selectOtherMonths: false,
                    altField: "#actualDate",
                    language: "cs",
                    format: 'dd.mm.yyyy',
                    weekStart: 1
                });
                var myDate = new Date();
                var year = myDate.getFullYear();
                var month = myDate.getMonth() + 1;
                var date = myDate.getDate();
                var prettyDate = date + '.' + month + '.' + year;
                $(".date-picker-default").val(prettyDate);
            });
        <?php echo '</script'; ?>
>

        <?php
$_from = $_smarty_tpl->tpl_vars['include']->value['js'];
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
            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, $_smarty_tpl->tpl_vars['it']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

        <?php
$_smarty_tpl->tpl_vars['it'] = $__foreach_it_0_saved_local_item;
}
}
if ($__foreach_it_0_saved_item) {
$_smarty_tpl->tpl_vars['it'] = $__foreach_it_0_saved_item;
}
?>
    </body>
</html><?php }
}
