<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BaseAttackForce</title>

        <!-- Bootstrap -->
        <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
        <link href="<?php echo base_url()?>/assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="<?php echo base_url()?>/assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="<?php echo base_url()?>/assets/vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- iCheck -->
        <link href="<?php echo base_url()?>/assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
        <!-- Datatables -->
        
        <link href="<?php echo base_url()?>/assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url()?>/assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url()?>/assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url()?>/assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url()?>/assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="<?php echo base_url()?>/assets/build/css/custom.min.css" rel="stylesheet">
    </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col menu_fixed">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                            <a href="#" class="site_title"><i class="fa fa-fighter-jet"></i> <span>BaseAttackForce</span></a>
                        </div>

                        <div class="clearfix"></div>

                        <!-- menu profile quick info -->
                        <div class="profile clearfix">
                            <div class="profile_pic">
                                <a href="<?php echo base_url('/profile')?>">
                                    <img src="<?=base_url(session('avatar'))?>" alt="..." class="img-circle profile_img">
                                </a>
                            </div>
                            <div class="profile_info">
                                <span>Welcome</span>
                                <h2><?=$_SESSION['username']?></h2>
                            </div>
                        </div>
                        <!-- /menu profile quick info -->

                        <br />

                        <!-- sidebar menu -->
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                            <div class="menu_section">
                                <ul class="nav side-menu">
                                    <li><a href="<?php echo base_url('/alliance')?>"><i class="fa fa-sitemap"></i> Alliances </a></li>
                                    <li><a href="<?php echo base_url('/user')?>"><i class="fa fa-users"></i> Members </a></li>
                                    <li><a href="<?php echo base_url('/battlemaps/11')?>"><i class="fa fa-flag-checkered"></i> Maps </a></li>
                                    <!-- <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page Coming Soon</span></a></li> -->
                                </ul>
                            </div>
                        </div>
                        <!-- /sidebar menu -->

                        <!-- /menu footer buttons -->
                        <div class="sidebar-footer hidden-small">
                            <a data-toggle="tooltip" data-placement="top" title="Settings" href="#">
                                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="FullScreen" href="#">
                                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="Lock" href="#">
                                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?php echo base_url('signout')?>">
                                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                            </a>
                        </div>
                        <!-- /menu footer buttons -->
                    </div>
                </div>

                <!-- top navigation -->
                <div class="top_nav">
                    <div class="nav_menu">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>
                        <nav class="nav navbar-nav">
                            <ul class=" navbar-right">
                                <li class="nav-item dropdown open" style="padding-left: 15px;">
                                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                        <img src="<?=base_url(session('avatar'))?>" alt=""><?=$_SESSION['username']?>
                                    </a>
                                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" data-toggle="modal" data-target=".bs-example-modal-lg"> Edit Profile</a>
                                        
                                        <!-- <a class="dropdown-item"  href="javascript:;">
                                            <span class="badge bg-red pull-right">50%</span>
                                            <span>Settings</span>
                                        </a>
                                        <a class="dropdown-item"  href="javascript:;">Help</a> -->
                                        <a class="dropdown-item"  href="<?php echo base_url('signout')?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <h4 class="modal-title" id="myModalLabel">Edit Profile</h4>
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                        </div>
									<form class="form-label-left input_mask" method="post" enctype="multipart/form-data" action="profile/edit">
                        <div class="modal-body">
                        <div class="x_content" style="display: block;">
                                        <div class="col-md-4 col-sm-4  form-group has-feedback">
                                            <img class="img-responsive avatar-view" style="width: 100%;" src="<?=base_url(session('avatar'))?>" id="image" alt="Avatar" title="Change the avatar" onClick="">
                                            <input type="file" name="fileToUpload" id="fileToUpload" onChange="javascrip:selectImage();">
                                            <script>
                                                function selectImage()
                                                {
                                                    document.getElementById("image").src = document.getElementById("fileToUpload").value;
                                                }
                                            </script>
											<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
										</div>
										<div class="col-md-4 col-sm-4  form-group has-feedback">
											<input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="First Name">
											<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
										</div>

										<div class="col-md-4 col-sm-4  form-group has-feedback">
											<input type="text" class="form-control" id="inputSuccess3" placeholder="Last Name">
											<span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
										</div>

										<div class="col-md-4 col-sm-4  form-group has-feedback">
											<input type="email" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Email">
											<span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
										</div>

										<div class="col-md-4 col-sm-4  form-group has-feedback">
											<input type="tel" class="form-control" id="inputSuccess5" placeholder="Phone">
											<span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
										</div>
										<div class="form-group row">
											<label class="col-form-label col-md-3 col-sm-3 ">Date Of Birth <span class="required">*</span>
											</label>
											<div class="col-md-9 col-sm-9 ">
												<input class="date-picker form-control" placeholder="dd-mm-yyyy" type="date" required="required" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
												<script>
													function timeFunctionLong(input) {
														setTimeout(function() {
															input.type = 'text';
														}, 60000);
													}
												</script>
											</div>
										</div>
								</div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>

									</form>
                      </div>
                    </div>
                  </div>
                <!-- /top navigation -->