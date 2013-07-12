<?php /* Smarty version Smarty-3.1.13, created on 2013-07-03 13:12:09
         compiled from "C:\xampp\htdocs\Panty\system\smarty\templates\admin\dashboard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:855751cf709b108e86-51032233%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c07a077e893ec191b950e51571fbecf01ec3d649' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Panty\\system\\smarty\\templates\\admin\\dashboard.tpl',
      1 => 1372849925,
      2 => 'file',
    ),
    '9bb92040444a1ba55e2c224f1a50c8497eb7c50f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Panty\\system\\smarty\\templates\\admin\\layout.tpl',
      1 => 1372549465,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '855751cf709b108e86-51032233',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51cf709b3613d7_41652871',
  'variables' => 
  array (
    'URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51cf709b3613d7_41652871')) {function content_51cf709b3613d7_41652871($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Esplendido! - Premium Admin Panel</title>
        
        <!-- CSS -->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/css/reset.css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/css/grid-fluid.css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/css/websymbols.css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/css/formalize.css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/css/esplendido.css" />
        <!--<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/css/light.css" />-->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/plugins/chosen/chosen.css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/plugins/ui/ui-custom.css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/plugins/tipsy/tipsy.css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/plugins/validationEngine/validationEngine.jquery.css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/plugins/elrte/css/elrte.min.css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/plugins/miniColors/jquery.miniColors.css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/plugins/fullCalendar/fullcalendar.css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/plugins/elfinder/css/elfinder.css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/plugins/shadowbox/shadowbox.css" />

        <!-- JAVASCRIPTs -->
        <!--[if lt IE 9]>
            <script language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/plugins/jqPlot/excanvas.min.js"></script>
            <script language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/js/html5shiv.js"></script>
        <![endif]-->
        <script src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/js/jquery.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/js/esplendido.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/js/browserDetect.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/js/jquery.formalize.min.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/js/demo.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/plugins/prefixfree.min.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/plugins/jquery.uniform.min.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/plugins/chosen/chosen.jquery.min.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/plugins/ui/ui-custom.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/plugins/ui/multiselect/js/ui.multiselect.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/plugins/ui/ui.spinner.min.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/plugins/datables/jquery.dataTables.min.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/plugins/jquery.metadata.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/plugins/sparkline.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/plugins/progressbar.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/plugins/feedback.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/plugins/tipsy/jquery.tipsy.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/plugins/jquery.maskedinput-1.3.min.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/plugins/jquery.validate.min.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/plugins/validationEngine/languages/jquery.validationEngine-en.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/plugins/validationEngine/jquery.validationEngine.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/plugins/jquery.elastic.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/plugins/elrte/elrte.min.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/plugins/miniColors/jquery.miniColors.min.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/plugins/fullCalendar/fullcalendar.min.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/plugins/elfinder/elfinder.min.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/plugins/jquery.modal.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/plugins/shadowbox/shadowbox.js"></script>
        <!-- chart -->
        <script src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/plugins/jqPlot/jquery.jqplot.min.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/plugins/jqPlot/plugins/jqplot.cursor.min.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/plugins/jqPlot/plugins/jqplot.highlighter.min.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/plugins/jqPlot/plugins/jqplot.barRenderer.min.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/plugins/jqPlot/plugins/jqplot.pointLabels.min.js"></script>
        <!-- /chart -->
				
		<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/images/favicon.png">
    </head>
    <body>
        <div id="wrapper" class="container_12">

            <!-- # Sidebar -->
            <aside id="sidebar">
                <!-- Logo -->
                <div id="logo">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/images/logo-small.png" alt="Esplendido - Logo" />
                </div>
                <!-- /Logo -->

                <!-- Me bar -->
                <div id="me" class="secondary-widget">
                    <figure>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/images/me.png" alt="Sterling - Avatar" />
                    </figure>
                    <div>
                        <h1>Sterling</h1>
                        <span>Administrator</span>
                        <ul>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/#" title="Edit profile">edit profile</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/login.html" title="Logout">logout</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /Me bar -->

                <!-- Menu -->
                <div class="menu primary-widget">
                    <nav>
                        <ul>
                            <li class="active">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/dashboard.html" title="Dashboard" data-icon="cloud">
                                    Dashboard
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/form.html" title="Form" data-icon="archive">
                                    Forms
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/detailed-list.html" title="Detailed List" data-icon="list-with-icons">
                                    Detailed list
                                </a>
                            </li>
                            <li class="with-submenu">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/#" title="UI Elements" data-icon="folder">
                                    UI Elements
                                </a>
                                <nav>
                                    <ul>
                                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/widgets.html" title="Widgets">Widgets</a></li>
                                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/icons.html" title="Icons">Icons</a></li>
                                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/notifications.html" title="Notifications">Notifications</a></li>
                                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/buttons.html" title="Buttons">Buttons</a></li>
                                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/tables.html" title="Tables">Tables</a></li>
                                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/miscellaneous.html" title="Miscellaneous">Miscellaneous</a></li>
                                    </ul>
                                </nav>
                            </li>
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/calendar.html" title="Calendar" data-icon="clock">
                                    Calendar
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/file-manager.html" title="File Manager" data-icon="terminal">
                                    File Manager
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/gallery.html" title="Gallery" data-icon="image">
                                    Gallery
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/typography.html" title="Typography" data-icon="text">
                                    Typography
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/error-page.html" title="Error page" data-icon="close-2">
                                    Error page
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/grid-system.html" title="Grid System" data-icon="html-code">
                                    Grid System
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- /Menu -->

                <!-- Widget 1 -->
                <div class="primary-widget">
                    <p>Something here, if you like.</p>
                </div>
                <!-- /Widget 1 -->
            </aside>
            <!-- /Sidebar -->
            
            <!-- # Main section -->
            <section id="main">
				
                <!-- Content section -->
				<section id="content">
                
                    <header class="pagetitle grid_12">
                        <h1>Dashboard</h1>
                        <nav class="breadcrumbs">
                            <ul>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/#">Administration</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/#">Dashboard</a></li>
                            </ul>
                        </nav>
                    </header>
					
                    <!-- Statistics -->
                    <div class="statistics primary-widget grid_12">
                        <ul>
                            <li class="positive active">
                                <h2>Comptes</h2>
                                <div>$ 17,654.50 <span>(+50%)</span></div>
                            </li>
                            <li class="negative">
                                <h2>Personnages</h2>
                                <div>15,985.01 <span>(-6.5%)</span></div>
                            </li>
                            <li class="positive">
                                <h2>Guildes</h2>
                                <div>208,215.10 <span>(+5%)</span></div>
                            </li>
                            <li class="positive">
                                <h2>Connectés</h2>
                                <div>104,255.10 <span>(+2.6%)</span></div>
                            </li>
                        </ul>
						<div class="clear"></div>	
                    </div>

                    <!-- /Statistics -->
                    <!-- Widget -->
                    <div class="grid_5">
						
                        <div class="widget minimizable">
                            <header>
                                <div class="icon">
                                    <span class="icon" data-icon="users"></span>
                                </div>
                                <div class="title">
                                    <h2>Dernier comptes</h2>
                                </div>
								<div class="actions">
									<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/#">view all &raquo;</a>
								</div>
                            </header>
                            <div class="content">
                                <ul class="collapsable list">
																	<li>
										<article>
											<header>
												<figure>
													<img src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/images/demo/user0.jpg" width="40" height="40" alt="thumb" />
												</figure>
												
												<div class="info">
													<h3><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/#">Olivia Palito</a></h3>
													<span>contact@oliviapalito.com</span>
												</div>
											</header>
											
											<section>
												<ul class="stats">
													<li>
														<span class="field">28</span>
														<span class="label">Purchases</span>
													</li>
													<li>
														<span class="field">$ 1.854,00</span>
														<span class="label">Spent</span>
													</li>
												</ul>

											</section>
										</article>
									</li>
									
									<li>
										<article>
											<header>
												<figure>
													<img src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/images/demo/user1.jpg" width="40" height="40" alt="thumb" />
												</figure>
												
												<div class="info">
													<h3><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/#">Hank Duchovny</a></h3>
													<span>hank@notmoody.com</span>
												</div>
											</header>
											
											<section>
												<ul class="stats">
													<li>
														<span class="field">24</span>
														<span class="label">Purchases</span>
													</li>
													<li>
														<span class="field">$ 1.120,35</span>
														<span class="label">Spent</span>
													</li>
												</ul>

											</section>
										</article>
									</li>
									
									<li>
										<article>
											<header>
												<figure>
													<img src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/images/demo/user2.jpg" width="40" height="40" alt="thumb" />
												</figure>
												
												<div class="info">
													<h3><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/#">Someguy</a></h3>
													<span>contact@someguy.com</span>
												</div>
											</header>
											
											<section>
												<ul class="stats">
													<li>
														<span class="field">21</span>
														<span class="label">Purchases</span>
													</li>
													<li>
														<span class="field">$ 1.220,35</span>
														<span class="label">Spent</span>
													</li>
												</ul>

											</section>
										</article>
									</li>
																	<li>
										<article>
											<header>
												<figure>
													<img src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/images/demo/user3.jpg" width="40" height="40" alt="thumb" />
												</figure>
												
												<div class="info">
													<h3><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/#">Felipe Dum</a></h3>
													<span>felipedum@gmail.com</span>
												</div>
											</header>
											
											<section>
												<ul class="stats">
													<li>
														<span class="field">16</span>
														<span class="label">Purchases</span>
													</li>
													<li>
														<span class="field">$ 1.008,35</span>
														<span class="label">Spent</span>
													</li>
												</ul>

											</section>
										</article>
									</li>
																	<li>
										<article>
											<header>
												<figure>
													<img src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/images/demo/user4.jpg" width="40" height="40" alt="thumb" />
												</figure>
												
												<div class="info">
													<h3><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/#">Krieger</a></h3>
													<span>krieger@gmail.com</span>
												</div>
											</header>
											
											<section>
												<ul class="stats">
													<li>
														<span class="field">16</span>
														<span class="label">Purchases</span>
													</li>
													<li>
														<span class="field">$ 1.004,00</span>
														<span class="label">Spent</span>
													</li>
												</ul>

											</section>
										</article>
									</li>
																</ul>
                            </div>
                        </div>
						
                        
						<div class="widget minimizable">
                            <header>
                                <div class="icon">
                                    <span class="icon" data-icon="users"></span>
                                </div>
                                <div class="title">
                                    <h2>Historique des achats</h2>
                                </div>
								<div class="actions">
									<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/#">view all &raquo;</a>
								</div>
                            </header>
                            <div class="content">
                                <ul class="collapsable list">
																	<li>
										<article>
											<header>
												<figure>
													<img src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/images/demo/user0.jpg" width="40" height="40" alt="thumb" />
												</figure>
												
												<div class="info">
													<h3><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/#">Olivia Palito</a></h3>
													<span>contact@oliviapalito.com</span>
												</div>
											</header>
											
											<section>
												<ul class="stats">
													<li>
														<span class="field">28</span>
														<span class="label">Purchases</span>
													</li>
													<li>
														<span class="field">$ 1.854,00</span>
														<span class="label">Spent</span>
													</li>
												</ul>

											</section>
										</article>
									</li>
									
									<li>
										<article>
											<header>
												<figure>
													<img src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/images/demo/user1.jpg" width="40" height="40" alt="thumb" />
												</figure>
												
												<div class="info">
													<h3><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/#">Hank Duchovny</a></h3>
													<span>hank@notmoody.com</span>
												</div>
											</header>
											
											<section>
												<ul class="stats">
													<li>
														<span class="field">24</span>
														<span class="label">Purchases</span>
													</li>
													<li>
														<span class="field">$ 1.120,35</span>
														<span class="label">Spent</span>
													</li>
												</ul>

											</section>
										</article>
									</li>
									
									<li>
										<article>
											<header>
												<figure>
													<img src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/images/demo/user2.jpg" width="40" height="40" alt="thumb" />
												</figure>
												
												<div class="info">
													<h3><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/#">Someguy</a></h3>
													<span>contact@someguy.com</span>
												</div>
											</header>
											
											<section>
												<ul class="stats">
													<li>
														<span class="field">21</span>
														<span class="label">Purchases</span>
													</li>
													<li>
														<span class="field">$ 1.220,35</span>
														<span class="label">Spent</span>
													</li>
												</ul>

											</section>
										</article>
									</li>
																	<li>
										<article>
											<header>
												<figure>
													<img src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/images/demo/user3.jpg" width="40" height="40" alt="thumb" />
												</figure>
												
												<div class="info">
													<h3><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/#">Felipe Dum</a></h3>
													<span>felipedum@gmail.com</span>
												</div>
											</header>
											
											<section>
												<ul class="stats">
													<li>
														<span class="field">16</span>
														<span class="label">Purchases</span>
													</li>
													<li>
														<span class="field">$ 1.008,35</span>
														<span class="label">Spent</span>
													</li>
												</ul>

											</section>
										</article>
									</li>
																	<li>
										<article>
											<header>
												<figure>
													<img src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/images/demo/user4.jpg" width="40" height="40" alt="thumb" />
												</figure>
												
												<div class="info">
													<h3><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/#">Krieger</a></h3>
													<span>krieger@gmail.com</span>
												</div>
											</header>
											
											<section>
												<ul class="stats">
													<li>
														<span class="field">16</span>
														<span class="label">Purchases</span>
													</li>
													<li>
														<span class="field">$ 1.004,00</span>
														<span class="label">Spent</span>
													</li>
												</ul>

											</section>
										</article>
									</li>
																</ul>
                            </div>
                        </div>
                    </div>
                    <!-- /Widget -->
					
                    <!-- Widget -->
                    <div class="grid_7">
                        <div class="widget minimizable">
                            <header>
                                <div class="icon">
                                    <span class="icon" data-icon="clipboard-task"></span>
                                </div>
                                <div class="title">
                                    <h2>Task List</h2>
                                </div>
                            </header>
                            <div class="content">
                                <ul class="tasks list">
																	<li>
										<article>
											<div class="actions">
												<input type="checkbox" />
												<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/#" class="delete" title="Delete"><span class="glyph close"></span></a>
											</div>
											<div class="todo">
												Redesign logo <span>(assigned to admin)</span>
											</div>
											<time datetime="2012-06-03">06/03/12</time>
										</article>
									</li>
																	<li>
										<article>
											<div class="actions">
												<input type="checkbox" checked />
												<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/#" class="delete" title="Delete"><span class="glyph close"></span></a>
											</div>
											<div class="todo">
												Implement new features <span>(assigned to iggypress)</span>
											</div>
											<time datetime="2012-06-08">06/08/12</time>
										</article>
									</li>
																	<li>
										<article>
											<div class="actions">
												<input type="checkbox" checked />
												<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/#" class="delete" title="Delete"><span class="glyph close"></span></a>
											</div>
											<div class="todo">
												Change background color <span>(assigned to iggypress)</span>
											</div>
											<time datetime="2012-06-15">06/15/12</time>
										</article>
									</li>
																	<li>
										<article>
											<div class="actions">
												<input type="checkbox" />
												<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/#" class="delete" title="Delete"><span class="glyph close"></span></a>
											</div>
											<div class="todo">
												Benchmark tests <span>(assigned to programmer)</span>
											</div>
											<time datetime="2012-06-28">06/28/12</time>
										</article>
									</li>
																	<li>
										<article>
											<div class="actions">
												<input type="checkbox" />
												<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/#" class="delete" title="Delete"><span class="glyph close"></span></a>
											</div>
											<div class="todo">
												Upload to new server <span>(assigned to serverguy)</span>
											</div>
											<time datetime="2012-07-01">07/01/12</time>
										</article>
									</li>
																	<li>
										<article>
											<div class="actions">
												<input type="checkbox" />
												<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/#" class="delete" title="Delete"><span class="glyph close"></span></a>
											</div>
											<div class="todo">
												Deploy project <span>(assigned to admin)</span>
											</div>
											<time datetime="2012-07-05">07/05/12</time>
										</article>
									</li>
																	<li>
										<article>
											<div class="actions">
												<input type="checkbox" />
												<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/#" class="delete" title="Delete"><span class="glyph close"></span></a>
											</div>
											<div class="todo">
												Buy host <span>(assigned to admin)</span>
											</div>
											<time datetime="2012-07-05">07/05/12</time>
										</article>
									</li>
																</ul>
                            </div>
                        </div>
						
						
                        <div class="widget minimizable">
                            <header>
                                <div class="icon">
                                    <span class="icon" data-icon="ticket"></span>
                                </div>
                                <div class="title">
                                    <h2>Ticket List</h2>
                                </div>
								<div class="actions">
									<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/#">view all &raquo;</a>
								</div>
                            </header>
                            <div class="content">
                                <ul class="tickets list">
									<li>
										<article>
											<figure>
												<img src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/images/demo/user0.jpg" width="40" height="40" alt="thumb" />
											</figure>
											
											<div class="info">
												<h3><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/#">How do I do that?</a></h3>
												<span class="high">(Priority: <strong>High</strong>)</span>
												<time datetime="2010-04-04">2 hours ago</time>
												<p>Lorem ipsum mollis sit tempus feugiat tortor etiam viverra sit, vitae luctus potenti mi vehicula adipiscing curabitur lectus. </p>
											</div>
											
											<div class="reply">
												<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/#" title="Reply" class="tooltip">
													<span class="glyph opened-chat"></span>
												</a>
											</div>
										</article>
									</li>
									
									<li>
										<article>
											<figure>
												<img src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/images/demo/user1.jpg" width="40" height="40" alt="thumb" />
											</figure>
											
											<div class="info">
												<h3><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/#">Account issues</a></h3>
												<span class="normal">(Priority: <strong>Normal</strong>)</span>
												<time datetime="2010-04-04">3 hours ago</time>
												<p>Lorem ipsum pulvinar dictum elementum pretium turpis vitae quis mi, imperdiet orci elementum risus aliquam in velit eleifend. </p>
											</div>
											
											<div class="reply">
												<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/#" title="Reply" class="tooltip">
													<span class="glyph opened-chat"></span>
												</a>
											</div>
										</article>
									</li>
									
									<li>
										<article>
											<figure>
												<img src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/images/demo/user2.jpg" width="40" height="40" alt="thumb" />
											</figure>
											
											<div class="info">
												<h3><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/#">Sales</a></h3>
												<span class="high">(Priority: <strong>High</strong>)</span>
												<time datetime="2010-04-04">6 hours ago</time>
												<p>Lorem ipsum aenean euismod ad nam tempor, ornare sollicitudin magna malesuada per et, orci vel tellus sem sapien. </p>
											</div>
											
											<div class="reply">
												<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/#" title="Reply" class="tooltip">
													<span class="glyph opened-chat"></span>
												</a>
											</div>
										</article>
									</li>
									
									<li>
										<article>
											<figure>
												<img src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/images/demo/user3.jpg" width="40" height="40" alt="thumb" />
											</figure>
											
											<div class="info">
												<h3><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/#">Problems with account</a></h3>
												<span class="low">(Priority: <strong>Low</strong>)</span>
												<time datetime="2010-04-04">8 hours ago</time>
												<p>Lorem ipsum consectetur dictum purus conubia class, himenaeos faucibus accumsan ipsum class ligula, taciti at neque dapibus non. </p>
											</div>
											
											<div class="reply">
												<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/#" title="Reply" class="tooltip">
													<span class="glyph opened-chat"></span>
												</a>
											</div>
										</article>
									</li>
									
									<li>
										<article>
											<figure>
												<img src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/images/demo/user4.jpg" width="40" height="40" alt="thumb" />
											</figure>
											
											<div class="info">
												<h3><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/#">Something is wrong</a></h3>
												<span class="low">(Priority: <strong>Low</strong>)</span>
												<time datetime="2010-04-04">9 hours ago</time>
												<p>Lorem ipsum himenaeos dui venenatis tortor nostra, arcu himenaeos nec laoreet curabitur at, ac nec vehicula libero eget. </p>
											</div>
											
											<div class="reply">
												<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/#" title="Reply" class="tooltip">
													<span class="glyph opened-chat"></span>
												</a>
											</div>
										</article>
									</li>
									
									<li>
										<article>
											<figure>
												<img src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/images/demo/user5.jpg" width="40" height="40" alt="thumb" />
											</figure>
											
											<div class="info">
												<h3><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/#">What to do?</a></h3>
												<span class="normal">(Priority: <strong>Normal</strong>)</span>
												<time datetime="2010-04-04">9 hours ago</time>
												<p>Lorem ipsum posuere congue faucibus blandit donec, eros vitae dui id dui tortor, aenean nam id vehicula venenatis. </p>
											</div>
											
											<div class="reply">
												<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
assets/admin/#" title="Reply" class="tooltip">
													<span class="glyph opened-chat"></span>
												</a>
											</div>
										</article>
									</li>
								</ul>
                            </div>
                        </div>
                    </div>
                    <!-- /Widget -->

				</section>
                <!-- /Content section -->

            </section>
            <!-- /Main section -->
        </div>
		</body>
</html><?php }} ?>