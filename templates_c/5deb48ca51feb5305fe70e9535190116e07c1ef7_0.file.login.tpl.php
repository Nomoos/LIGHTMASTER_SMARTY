<?php
/* Smarty version 3.1.28, created on 2015-12-20 12:22:19
  from "/var/www/wordpress/lamps.lightmaster.cz/www3/templates/login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_56768f6b509db8_83441523',
  'file_dependency' => 
  array (
    '5deb48ca51feb5305fe70e9535190116e07c1ef7' => 
    array (
      0 => '/var/www/wordpress/lamps.lightmaster.cz/www3/templates/login.tpl',
      1 => 1450609692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56768f6b509db8_83441523 ($_smarty_tpl) {
if (!is_callable('smarty_function_message')) require_once '/var/www/wordpress/lamps.lightmaster.cz/www3/smarty/plugins/function.message.php';
?>
<!DOCTYPE html>
<html lang="cs">
    <head>
        <meta charset="utf-8" />
        <title>Přihlašovací stránka - Lamps administrace</title>

        <meta name="description" content="Uživatelská přihlašovací stránka" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['setup']->value['adm']['www'];?>
favicon.jpg" />
        <!-- basic styles -->

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="assets/css/font-awesome.min.css" />

        <!--[if IE 7]>
          <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
        <![endif]-->

        <!-- page specific plugin styles -->

        <!-- fonts -->
        <link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,300,400,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>

        <!-- ace styles -->

        <link rel="stylesheet" href="assets/css/ace.min.css" />
        <link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

        <!--[if lte IE 8]>
          <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
        <![endif]-->

        <!-- inline styles related to this page -->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

        <!--[if lt IE 9]>
        <?php echo '<script'; ?>
 src="assets/js/html5shiv.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="assets/js/respond.min.js"><?php echo '</script'; ?>
>
        <![endif]-->
    </head>

    <body class="login-layout">
        <div class="main-container">
            <div class="main-content">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="login-container">
                            <div class="center">
                                <h1>
                                    <i class="icon-leaf green"></i>
                                    <span class="red">Lamps</span>
                                    <span class="white">Administrace</span>
                                </h1>
                                <h4 class="blue">&copy; Company</h4>
                            </div>

                            <div class="space-6"></div>

                            <div class="position-relative">
                                <div id="login-box" class="login-box visible widget-box no-border">
                                    <div class="widget-body">
                                        <div class="widget-main">
                                            <h4 class="header blue lighter bigger">
                                                <i class="icon-coffee green"></i>
                                                Prosím zadejte své údaje
                                            </h4>

                                            <div class="space-6"></div>

                                            <form method="post">
                                                <fieldset>
                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input name="login" type="text" class="form-control" placeholder="Přihlašovací jméno" />
                                                            <i class="icon-user"></i>
                                                        </span>
                                                    </label>

                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input name="password" type="password" class="form-control" placeholder="Heslo" />
                                                            <i class="icon-lock"></i>
                                                        </span>
                                                    </label>

                                                    <div class="space"></div>

                                                    <div class="clearfix">

                                                        <button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
                                                            Přihlásit
                                                        </button>
                                                    </div>

                                                    <div class="space-4"></div>
                                                    <?php echo smarty_function_message(array('msg'=>$_smarty_tpl->tpl_vars['err']->value,'type'=>"error"),$_smarty_tpl);?>

                                                </fieldset>
                                            </form>

                                        </div><!-- /widget-main -->

                                        <div class="toolbar clearfix">
                                        </div>
                                    </div><!-- /widget-body -->
                                </div><!-- /login-box -->

                            </div><!-- /position-relative -->
                        </div>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div>
        </div><!-- /.main-container -->

        <!-- basic scripts -->

        <!--[if !IE]> -->

        <?php echo '<script'; ?>
 type="text/javascript">
            window.jQuery || document.write("<?php echo '<script'; ?>
 src='assets/js/jquery-2.0.3.min.js'>" + "<" + "/script>");
        <?php echo '</script'; ?>
>

        <!-- <![endif]-->

        <!--[if IE]>
<?php echo '<script'; ?>
 type="text/javascript">
window.jQuery || document.write("<?php echo '<script'; ?>
 src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
<?php echo '</script'; ?>
>
<![endif]-->

        <?php echo '<script'; ?>
 type="text/javascript">
            if ("ontouchend" in document)
                document.write("<?php echo '<script'; ?>
 src='assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
        <?php echo '</script'; ?>
>

        <!-- inline scripts related to this page -->
    </body>
</html><?php }
}
