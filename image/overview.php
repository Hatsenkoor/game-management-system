<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3> <?= esc($title)?></h3>
            </div>
        </div>
        
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_content">
                        <div class="col-md-3 col-sm-3  profile_left">
                            <div class="profile_img">
                                <div id="crop-avatar">
                                    <!-- Current avatar -->
                                    <img class="img-responsive avatar-view" src="<?php echo base_url('assets/images/picture.jpg') ?>" alt="Avatar" title="Change the avatar">
                                    <div class="col-md-4 col-lg-8 col-sm-5">
                                        <h3> Basic Info </h3>
                                        <h4> User Nmae : MAJOR81 </h4>
                                        <h4> FullName : Simon </h4>
                                        <h4> Age : 31 </h4>
                                        <h4> Status : Active </h4>
                                        <h4> Country : Russia </h4>
                                        <h4> Language : English </h4>
                                        <h4> Position : Member </h4>
                                        <h4> Email : geeksimon0623@outlook.com </h4>
                                        <h4> Mobile : 1574969875 </h4>
                                        <h4> Join date : 2022-12-20 </h4>
                                        <h4> Previous Ally : I7 </h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-9 col-sm-9">
                            <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                    <!-- <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Basic</a></li> -->
                                    <li role="presentation" class=""><a href="#tab_content2" class="active" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="true" aria-selected="true">Home Base</a></li>
                                    <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Bases</a></li>
                                    <li role="presentation" class=""><a href="#tab_content4" role="tab" id="profile-tab3" data-toggle="tab" aria-expanded="false">Expansions</a></li>
                                    <li role="presentation" class=""><a href="#tab_content5" role="tab" id="profile-tab4" data-toggle="tab" aria-expanded="false">Flaks</a></li>
                                    <li role="presentation" class=""><a href="#tab_content6" role="tab" id="profile-tab5" data-toggle="tab" aria-expanded="false">Military Central</a></li>
                                    <li role="presentation" class=""><a href="#tab_content7" role="tab" id="profile-tab6" data-toggle="tab" aria-expanded="false">Power Plant</a></li>
                                    <li role="presentation" class=""><a href="#tab_content8" role="tab" id="profile-tab7" data-toggle="tab" aria-expanded="false">Battles</a></li>
                                </ul>
                                <div id="myTabContent" class="tab-content">
                                    <!-- <div role="tabpanel" class="tab-pane active " id="tab_content1" aria-labelledby="home-tab">
                                    <div class="x_panel">
                                        <div class="x_content">
                                            <span class="input-group-text" id="Username"> Username </span> <span class="form-control Box-Shadow" id="Username_Value"> MAJOR81 </span>
                                            <span class="input-group-text" id="Username"> FullName </span> <span class="form-control Box-Shadow" id="Username_Value"> MAJOR81 </span>
                                            <span class="input-group-text" id="Username"> Age </span> <span class="form-control Box-Shadow" id="Username_Value"> MAJOR81 </span>
                                            <span class="input-group-text" id="Username"> Status </span> <span class="form-control Box-Shadow" id="Username_Value"> MAJOR81 </span>
                                            <span class="input-group-text" id="Username"> Country </span> <span class="form-control Box-Shadow" id="Username_Value"> MAJOR81 </span>
                                            <span class="input-group-text" id="Username"> Language </span> <span class="form-control Box-Shadow" id="Username_Value"> MAJOR81 </span>
                                            <span class="input-group-text" id="Username"> Position </span> <span class="form-control Box-Shadow" id="Username_Value"> MAJOR81 </span>
                                            <span class="input-group-text" id="Username"> Email </span> <span class="form-control Box-Shadow" id="Username_Value"> MAJOR81 </span>
                                            <span class="input-group-text" id="Username"> Mobile </span> <span class="form-control Box-Shadow" id="Username_Value"> MAJOR81 </span>
                                            <span class="input-group-text" id="Username"> Message </span> <span class="form-control Box-Shadow" id="Username_Value"> MAJOR81 </span>
                                            <span class="input-group-text" id="Username"> Join date </span> <span class="form-control Box-Shadow" id="Username_Value"> MAJOR81 </span>
                                            <span class="input-group-text" id="Username"> Previous Ally </span> <span class="form-control Box-Shadow" id="Username_Value"> MAJOR81 </span>
                                            <span class="input-group-text" id="Username"> Last Update </span> <span class="form-control Box-Shadow" id="Username_Value"> MAJOR81 </span>
                                        </div>
                                    </div>
                                    </div> -->
                                    <div role="tabpanel" class="tab-pane fade active show" id="tab_content2" aria-labelledby="profile-tab">
                                        <img src="<?php echo base_url('image/home-base.jpg')?>" style="width: 100%;">
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab2">
                                    <div class="row">
                                      <div class="col-md-55">
                                        <div class="thumbnail">
                                          <div class="image view view-first">
                                            <img style="width: 100%; display: block;" src="image/air-base.jpg" alt="image">
                                            <div class="mask no-caption">
                                              <div class="tools tools-bottom">
                                                <a href="#"><i class="fa fa-link"></i></a>
                                                <a href="#"><i class="fa fa-pencil"></i></a>
                                                <a href="#"><i class="fa fa-times"></i></a>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="caption">
                                            <p><strong>Air Base</strong>
                                            </p>
                                            <p>Number : 3</p>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-md-55">
                                        <div class="thumbnail">
                                          <div class="image view view-first">
                                            <img style="width: 100%; display: block;" src="image/tank-base.jpg" alt="image">
                                            <div class="mask no-caption">
                                              <div class="tools tools-bottom">
                                                <a href="#"><i class="fa fa-link"></i></a>
                                                <a href="#"><i class="fa fa-pencil"></i></a>
                                                <a href="#"><i class="fa fa-times"></i></a>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="caption">
                                            <p><strong>Image Name</strong>
                                            </p>
                                            <p>Number : 3</p>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-md-55">
                                        <div class="thumbnail">
                                          <div class="image view view-first">
                                            <img style="width: 100%; display: block;" src="image/heli-base.jpg" alt="image">
                                            <div class="mask no-caption">
                                              <div class="tools tools-bottom">
                                                <a href="#"><i class="fa fa-link"></i></a>
                                                <a href="#"><i class="fa fa-pencil"></i></a>
                                                <a href="#"><i class="fa fa-times"></i></a>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="caption">
                                            <p><strong>Image Name</strong>
                                            </p>
                                            <p>Number : 3</p>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-md-55">
                                        <div class="thumbnail">
                                          <div class="image view view-first">
                                            <img style="width: 100%; display: block;" src="image/train-base.jpg" alt="image">
                                            <div class="mask no-caption">
                                              <div class="tools tools-bottom">
                                                <a href="#"><i class="fa fa-link"></i></a>
                                                <a href="#"><i class="fa fa-pencil"></i></a>
                                                <a href="#"><i class="fa fa-times"></i></a>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="caption">
                                            <p><strong>Image Name</strong>
                                            </p>
                                            <p>Number : 3</p>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-md-55">
                                        <div class="thumbnail">
                                          <div class="image view view-first">
                                            <img style="width: 100%; display: block;" src="image/train-heli-base.jpg" alt="image">
                                            <div class="mask no-caption">
                                              <div class="tools tools-bottom">
                                                <a href="#"><i class="fa fa-link"></i></a>
                                                <a href="#"><i class="fa fa-pencil"></i></a>
                                                <a href="#"><i class="fa fa-times"></i></a>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="caption">
                                            <p><strong>Image Name</strong>
                                            </p>
                                            <p>Number : 3</p>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-md-55">
                                        <div class="thumbnail">
                                          <div class="image view view-first">
                                            <img style="width: 100%; display: block;" src="image/harbor-base.jpg" alt="image">
                                            <div class="mask no-caption">
                                              <div class="tools tools-bottom">
                                                <a href="#"><i class="fa fa-link"></i></a>
                                                <a href="#"><i class="fa fa-pencil"></i></a>
                                                <a href="#"><i class="fa fa-times"></i></a>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="caption">
                                            <p><strong>Image Name</strong>
                                            </p>
                                            <p>Number : 3</p>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-md-55">
                                        <div class="thumbnail">
                                          <div class="image view view-first">
                                            <img style="width: 100%; display: block;" src="image/harbor-heli-base.jpg" alt="image">
                                            <div class="mask no-caption">
                                              <div class="tools tools-bottom">
                                                <a href="#"><i class="fa fa-link"></i></a>
                                                <a href="#"><i class="fa fa-pencil"></i></a>
                                                <a href="#"><i class="fa fa-times"></i></a>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="caption">
                                            <p><strong>Image Name</strong>
                                            </p>
                                            <p>Number : 3</p>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab3">
                                      <div class="x_content row">
                                        <div class="col-md-4">
                                          <div class="x_panel">
                                            <div class="LinkTarget text-primary x_title">
                                              <h2>
                                                <i class = "fa fa-info-crcle" aria-hidden="true"></i>Accelerator
                                              </h2>
                                              <ul class="nav navbar-right panel_toolbox" style="min-width: 0 !important;">
                                                <li><a class="collapse-link"><i class="fa fa-chevron-up" aria-hidden="true"></i> </a></li>
                                                <li><a class="close-link"><i class="fa fa-close align-self-center" aria-hidden="true"></i> </a></li>
                                              </ul>
                                              <div class="clearfix"></div>
                                            </div>
                                            <div class="x_content">
                                              <table class="" style="width:100%">
                                                <tbody>
                                                  <tr>
                                                    <td><img width="90" height="141" src="<?php echo base_url('image/expans/accelerator.png')?>" alt="Accelerator Optimizer"></td>
                                                    <td>
                                                      <table class="tile_info">
                                                        <tbody>
                                                          <tr>
                                                            <td><p><i class="fa fa-square red"></i>  Level =&gt; 1</p></td>
                                                            <td><p>0</p></td>
                                                          </tr>
                                                          <tr>
                                                            <td><p><i class="fa fa-square blue"></i>  Level =&gt; 2</p></td>
                                                            <td><p>0</p></td>
                                                          </tr>
                                                          <tr>
                                                            <td><p><i class="fa fa-square green"></i>  Level =&gt; 3</p></td>
                                                            <td><p>0</p></td>
                                                          </tr>
                                                        </tbody>
                                                      </table>
                                                    </td>
                                                  </tr>
                                                  <tr>
                                                    <td><p><span class="text-primary"><i class="fa fa-bar-chart" aria-hidden="true"></i>  Total</span></p></td>
                                                    <td class = "text-align:center"><span class="text-primary font-weight-bold text-center">0</span></td>
                                                  </tr>
                                                  <tr>
                                                    <td colspan="2" class="text-center">
                                                      <a class="blue" href="https://baf.nouahsark.com/buildings.php?Buildings=Built&amp;userid=971&amp;Current=Accelerator_Optimizer" title="Accelerator Optimizer Where it Built?">Where it Built?</a>
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </div>
                                          </div>                                          
                                        </div>
                                        <div class="col-md-4">
                                          <div class="x_panel">
                                            <div class="LinkTarget text-primary x_title">
                                              <h2>
                                                <i class = "fa fa-info-crcle" aria-hidden="true"></i>Group Limit
                                              </h2>
                                              <ul class="nav navbar-right panel_toolbox" style="min-width: 0 !important;">
                                                <li><a class="collapse-link"><i class="fa fa-chevron-up" aria-hidden="true"></i> </a></li>
                                                <li><a class="close-link"><i class="fa fa-close align-self-center" aria-hidden="true"></i> </a></li>
                                              </ul>
                                              <div class="clearfix"></div>
                                            </div>
                                            <div class="x_content">
                                              <table class="" style="width:100%">
                                                <tbody>
                                                  <tr>
                                                    <td><img width="90" height="141" src="<?php echo base_url('image/expans/group limit.png')?>" alt="Accelerator Optimizer"></td>
                                                    <td>
                                                      <table class="tile_info">
                                                        <tbody>
                                                          <tr>
                                                            <td><p><i class="fa fa-square red"></i>  Level =&gt; 1</p></td>
                                                            <td><p>0</p></td>
                                                          </tr>
                                                          <tr>
                                                            <td><p><i class="fa fa-square blue"></i>  Level =&gt; 2</p></td>
                                                            <td><p>0</p></td>
                                                          </tr>
                                                          <tr>
                                                            <td><p><i class="fa fa-square green"></i>  Level =&gt; 3</p></td>
                                                            <td><p>0</p></td>
                                                          </tr>
                                                        </tbody>
                                                      </table>
                                                    </td>
                                                  </tr>
                                                  <tr>
                                                    <td><p><span class="text-primary"><i class="fa fa-bar-chart" aria-hidden="true"></i>  Total</span></p></td>
                                                    <td class = "text-align:center"><span class="text-primary font-weight-bold text-center">0</span></td>
                                                  </tr>
                                                  <tr>
                                                    <td colspan="2" class="text-center">
                                                      <a class="blue" href="https://baf.nouahsark.com/buildings.php?Buildings=Built&amp;userid=971&amp;Current=Accelerator_Optimizer" title="Accelerator Optimizer Where it Built?">Where it Built?</a>
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </div>
                                          </div>                                          
                                        </div>
                                        <div class="col-md-4">
                                          <div class="x_panel">
                                            <div class="LinkTarget text-primary x_title">
                                              <h2>
                                                <i class = "fa fa-info-crcle" aria-hidden="true"></i>Military Office
                                              </h2>
                                              <ul class="nav navbar-right panel_toolbox" style="min-width: 0 !important;">
                                                <li><a class="collapse-link"><i class="fa fa-chevron-up" aria-hidden="true"></i> </a></li>
                                                <li><a class="close-link"><i class="fa fa-close align-self-center" aria-hidden="true"></i> </a></li>
                                              </ul>
                                              <div class="clearfix"></div>
                                            </div>
                                            <div class="x_content">
                                              <table class="" style="width:100%">
                                                <tbody>
                                                  <tr>
                                                    <td><img width="90" height="141" src="<?php echo base_url('image/expans/military office.png')?>" alt="Accelerator Optimizer"></td>
                                                    <td>
                                                      <table class="tile_info">
                                                        <tbody>
                                                          <tr>
                                                            <td><p><i class="fa fa-square red"></i>  Level =&gt; 1</p></td>
                                                            <td><p>0</p></td>
                                                          </tr>
                                                          <tr>
                                                            <td><p><i class="fa fa-square blue"></i>  Level =&gt; 2</p></td>
                                                            <td><p>0</p></td>
                                                          </tr>
                                                          <tr>
                                                            <td><p><i class="fa fa-square green"></i>  Level =&gt; 3</p></td>
                                                            <td><p>0</p></td>
                                                          </tr>
                                                        </tbody>
                                                      </table>
                                                    </td>
                                                  </tr>
                                                  <tr>
                                                    <td><p><span class="text-primary"><i class="fa fa-bar-chart" aria-hidden="true"></i>  Total</span></p></td>
                                                    <td class = "text-align:center"><span class="text-primary font-weight-bold text-center">0</span></td>
                                                  </tr>
                                                  <tr>
                                                    <td colspan="2" class="text-center">
                                                      <a class="blue" href="https://baf.nouahsark.com/buildings.php?Buildings=Built&amp;userid=971&amp;Current=Accelerator_Optimizer" title="Accelerator Optimizer Where it Built?">Where it Built?</a>
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </div>
                                          </div>                                          
                                        </div>
                                        <div class="col-md-4">
                                          <div class="x_panel">
                                            <div class="LinkTarget text-primary x_title">
                                              <h2>
                                                <i class = "fa fa-info-crcle" aria-hidden="true"></i>Resource War
                                              </h2>
                                              <ul class="nav navbar-right panel_toolbox" style="min-width: 0 !important;">
                                                <li><a class="collapse-link"><i class="fa fa-chevron-up" aria-hidden="true"></i> </a></li>
                                                <li><a class="close-link"><i class="fa fa-close align-self-center" aria-hidden="true"></i> </a></li>
                                              </ul>
                                              <div class="clearfix"></div>
                                            </div>
                                            <div class="x_content">
                                              <table class="" style="width:100%">
                                                <tbody>
                                                  <tr>
                                                    <td><img width="90" height="141" src="<?php echo base_url('image/expans/resource war.png')?>" alt="Accelerator Optimizer"></td>
                                                    <td>
                                                      <table class="tile_info">
                                                        <tbody>
                                                          <tr>
                                                            <td><p><i class="fa fa-square red"></i>  Level =&gt; 1</p></td>
                                                            <td><p>0</p></td>
                                                          </tr>
                                                          <tr>
                                                            <td><p><i class="fa fa-square blue"></i>  Level =&gt; 2</p></td>
                                                            <td><p>0</p></td>
                                                          </tr>
                                                          <tr>
                                                            <td><p><i class="fa fa-square green"></i>  Level =&gt; 3</p></td>
                                                            <td><p>0</p></td>
                                                          </tr>
                                                        </tbody>
                                                      </table>
                                                    </td>
                                                  </tr>
                                                  <tr>
                                                    <td><p><span class="text-primary"><i class="fa fa-bar-chart" aria-hidden="true"></i>  Total</span></p></td>
                                                    <td class = "text-align:center"><span class="text-primary font-weight-bold text-center">0</span></td>
                                                  </tr>
                                                  <tr>
                                                    <td colspan="2" class="text-center">
                                                      <a class="blue" href="https://baf.nouahsark.com/buildings.php?Buildings=Built&amp;userid=971&amp;Current=Accelerator_Optimizer" title="Accelerator Optimizer Where it Built?">Where it Built?</a>
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </div>
                                          </div>                                          
                                        </div>
                                        <div class="col-md-4">
                                          <div class="x_panel">
                                            <div class="LinkTarget text-primary x_title">
                                              <h2>
                                                <i class = "fa fa-info-crcle" aria-hidden="true"></i>Command Base
                                              </h2>
                                              <ul class="nav navbar-right panel_toolbox" style="min-width: 0 !important;">
                                                <li><a class="collapse-link"><i class="fa fa-chevron-up" aria-hidden="true"></i> </a></li>
                                                <li><a class="close-link"><i class="fa fa-close align-self-center" aria-hidden="true"></i> </a></li>
                                              </ul>
                                              <div class="clearfix"></div>
                                            </div>
                                            <div class="x_content">
                                              <table class="" style="width:100%">
                                                <tbody>
                                                  <tr>
                                                    <td><img width="90" height="141" src="<?php echo base_url('image/expans/command base.png')?>" alt="Accelerator Optimizer"></td>
                                                    <td>
                                                      <table class="tile_info">
                                                        <tbody>
                                                          <tr>
                                                            <td><p><i class="fa fa-square red"></i>  Level =&gt; 1</p></td>
                                                            <td><p>0</p></td>
                                                          </tr>
                                                          <tr>
                                                            <td><p><i class="fa fa-square blue"></i>  Level =&gt; 2</p></td>
                                                            <td><p>0</p></td>
                                                          </tr>
                                                          <tr>
                                                            <td><p><i class="fa fa-square green"></i>  Level =&gt; 3</p></td>
                                                            <td><p>0</p></td>
                                                          </tr>
                                                        </tbody>
                                                      </table>
                                                    </td>
                                                  </tr>
                                                  <tr>
                                                    <td><p><span class="text-primary"><i class="fa fa-bar-chart" aria-hidden="true"></i>  Total</span></p></td>
                                                    <td class = "text-align:center"><span class="text-primary font-weight-bold text-center">0</span></td>
                                                  </tr>
                                                  <tr>
                                                    <td colspan="2" class="text-center">
                                                      <a class="blue" href="https://baf.nouahsark.com/buildings.php?Buildings=Built&amp;userid=971&amp;Current=Accelerator_Optimizer" title="Accelerator Optimizer Where it Built?">Where it Built?</a>
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </div>
                                          </div>                                          
                                        </div>
                                        <div class="col-md-4">
                                          <div class="x_panel">
                                            <div class="LinkTarget text-primary x_title">
                                              <h2>
                                                <i class = "fa fa-info-crcle" aria-hidden="true"></i>Sight Tower
                                              </h2>
                                              <ul class="nav navbar-right panel_toolbox" style="min-width: 0 !important;">
                                                <li><a class="collapse-link"><i class="fa fa-chevron-up" aria-hidden="true"></i> </a></li>
                                                <li><a class="close-link"><i class="fa fa-close align-self-center" aria-hidden="true"></i> </a></li>
                                              </ul>
                                              <div class="clearfix"></div>
                                            </div>
                                            <div class="x_content">
                                              <table class="" style="width:100%">
                                                <tbody>
                                                  <tr>
                                                    <td><img width="90" height="141" src="<?php echo base_url('image/expans/sight tower.gif')?>" alt="Accelerator Optimizer"></td>
                                                    <td>
                                                      <table class="tile_info">
                                                        <tbody>
                                                          <tr>
                                                            <td><p><i class="fa fa-square red"></i>  Level =&gt; 1</p></td>
                                                            <td><p>0</p></td>
                                                          </tr>
                                                          <tr>
                                                            <td><p><i class="fa fa-square blue"></i>  Level =&gt; 2</p></td>
                                                            <td><p>0</p></td>
                                                          </tr>
                                                          <tr>
                                                            <td><p><i class="fa fa-square green"></i>  Level =&gt; 3</p></td>
                                                            <td><p>0</p></td>
                                                          </tr>
                                                        </tbody>
                                                      </table>
                                                    </td>
                                                  </tr>
                                                  <tr>
                                                    <td><p><span class="text-primary"><i class="fa fa-bar-chart" aria-hidden="true"></i>  Total</span></p></td>
                                                    <td class = "text-align:center"><span class="text-primary font-weight-bold text-center">0</span></td>
                                                  </tr>
                                                  <tr>
                                                    <td colspan="2" class="text-center">
                                                      <a class="blue" href="https://baf.nouahsark.com/buildings.php?Buildings=Built&amp;userid=971&amp;Current=Accelerator_Optimizer" title="Accelerator Optimizer Where it Built?">Where it Built?</a>
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </div>
                                          </div>                                          
                                        </div>
                                        <div class="col-md-4">
                                          <div class="x_panel">
                                            <div class="LinkTarget text-primary x_title">
                                              <h2>
                                                <i class = "fa fa-info-crcle" aria-hidden="true"></i>Jammer Tower
                                              </h2>
                                              <ul class="nav navbar-right panel_toolbox" style="min-width: 0 !important;">
                                                <li><a class="collapse-link"><i class="fa fa-chevron-up" aria-hidden="true"></i> </a></li>
                                                <li><a class="close-link"><i class="fa fa-close align-self-center" aria-hidden="true"></i> </a></li>
                                              </ul>
                                              <div class="clearfix"></div>
                                            </div>
                                            <div class="x_content">
                                              <table class="" style="width:100%">
                                                <tbody>
                                                  <tr>
                                                    <td><img width="90" height="141" src="<?php echo base_url('image/expans/jammer tower.gif')?>" alt="Accelerator Optimizer"></td>
                                                    <td>
                                                      <table class="tile_info">
                                                        <tbody>
                                                          <tr>
                                                            <td><p><i class="fa fa-square red"></i>  Level =&gt; 1</p></td>
                                                            <td><p>0</p></td>
                                                          </tr>
                                                          <tr>
                                                            <td><p><i class="fa fa-square blue"></i>  Level =&gt; 2</p></td>
                                                            <td><p>0</p></td>
                                                          </tr>
                                                          <tr>
                                                            <td><p><i class="fa fa-square green"></i>  Level =&gt; 3</p></td>
                                                            <td><p>0</p></td>
                                                          </tr>
                                                        </tbody>
                                                      </table>
                                                    </td>
                                                  </tr>
                                                  <tr>
                                                    <td><p><span class="text-primary"><i class="fa fa-bar-chart" aria-hidden="true"></i>  Total</span></p></td>
                                                    <td class = "text-align:center"><span class="text-primary font-weight-bold text-center">0</span></td>
                                                  </tr>
                                                  <tr>
                                                    <td colspan="2" class="text-center">
                                                      <a class="blue" href="https://baf.nouahsark.com/buildings.php?Buildings=Built&amp;userid=971&amp;Current=Accelerator_Optimizer" title="Accelerator Optimizer Where it Built?">Where it Built?</a>
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </div>
                                          </div>                                          
                                        </div>
                                        <div class="col-md-4">
                                          <div class="x_panel">
                                            <div class="LinkTarget text-primary x_title">
                                              <h2>
                                                <i class = "fa fa-info-crcle" aria-hidden="true"></i>Detector Tower
                                              </h2>
                                              <ul class="nav navbar-right panel_toolbox" style="min-width: 0 !important;">
                                                <li><a class="collapse-link"><i class="fa fa-chevron-up" aria-hidden="true"></i> </a></li>
                                                <li><a class="close-link"><i class="fa fa-close align-self-center" aria-hidden="true"></i> </a></li>
                                              </ul>
                                              <div class="clearfix"></div>
                                            </div>
                                            <div class="x_content">
                                              <table class="" style="width:100%">
                                                <tbody>
                                                  <tr>
                                                    <td><img width="90" height="141" src="<?php echo base_url('image/expans/detector tower.gif')?>" alt="Accelerator Optimizer"></td>
                                                    <td>
                                                      <table class="tile_info">
                                                        <tbody>
                                                          <tr>
                                                            <td><p><i class="fa fa-square red"></i>  Level =&gt; 1</p></td>
                                                            <td><p>0</p></td>
                                                          </tr>
                                                          <tr>
                                                            <td><p><i class="fa fa-square blue"></i>  Level =&gt; 2</p></td>
                                                            <td><p>0</p></td>
                                                          </tr>
                                                          <tr>
                                                            <td><p><i class="fa fa-square green"></i>  Level =&gt; 3</p></td>
                                                            <td><p>0</p></td>
                                                          </tr>
                                                        </tbody>
                                                      </table>
                                                    </td>
                                                  </tr>
                                                  <tr>
                                                    <td><p><span class="text-primary"><i class="fa fa-bar-chart" aria-hidden="true"></i>  Total</span></p></td>
                                                    <td class = "text-align:center"><span class="text-primary font-weight-bold text-center">0</span></td>
                                                  </tr>
                                                  <tr>
                                                    <td colspan="2" class="text-center">
                                                      <a class="blue" href="https://baf.nouahsark.com/buildings.php?Buildings=Built&amp;userid=971&amp;Current=Accelerator_Optimizer" title="Accelerator Optimizer Where it Built?">Where it Built?</a>
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </div>
                                          </div>                                          
                                        </div>
                                      </div>      
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab_content5" aria-labelledby="profile-tab4">
                                      <div class="x_content row">
                                        <div class="col-md-4">
                                          <div class="x_panel tile overflow_hidden">
                                            <div class="x_title">
                                              <h2 class="text-primary"><i class="fa fa-info-circle" aria-hidden="true"></i>  Level 1</h2>
                                              <ul class="nav navbar-right panel_toolbox">
                                                <li><a class="collapse-link"><i class="fa fa-chevron-up" aria-hidden="true"></i> </a></li>
                                                <li><a class="close-link"><i class="fa fa-close align-self-center" aria-hidden="true"></i> </a></li>
                                              </ul>
                                              <div class="clearfix"></div>
                                            </div><!-- /x_title -->
                                            <div class="x_content">
                                              <table class="" style="width:100%">
                                                <tbody>
                                                  <tr>
                                                    <td><img src="<?php echo base_url('image/flaks/level1.png')?>" alt="Flaks Level 1"></td>
                                                    <td>
                                                      <table class="tile_info">
                                                        <tbody>
                                                        <tr><td><h1 class="text-center text-danger" style="text-shadow: 1px 3px #ffffff;">0</h1></td></tr>
                                                        </tbody>
                                                      </table>
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                              <table class="" style="width:100%">
                                                <tbody><tr><td colspan="2" class="text-center">
                                                  <br>																	</td></tr>
                                              </tbody></table>
                                            </div><!-- /x_content -->
                                          </div><!-- /x_panel -->
                                        </div>
                                        <div class="col-md-4">
                                          <div class="x_panel tile overflow_hidden">
                                            <div class="x_title">
                                              <h2 class="text-primary"><i class="fa fa-info-circle" aria-hidden="true"></i>  Level 2</h2>
                                              <ul class="nav navbar-right panel_toolbox">
                                                <li><a class="collapse-link"><i class="fa fa-chevron-up" aria-hidden="true"></i> </a></li>
                                                <li><a class="close-link"><i class="fa fa-close align-self-center" aria-hidden="true"></i> </a></li>
                                              </ul>
                                              <div class="clearfix"></div>
                                            </div><!-- /x_title -->
                                            <div class="x_content">
                                              <table class="" style="width:100%">
                                                <tbody>
                                                  <tr>
                                                    <td><img src="<?php echo base_url('image/flaks/level2.png')?>" alt="Flaks Level 1"></td>
                                                    <td>
                                                      <table class="tile_info">
                                                        <tbody>
                                                        <tr><td><h1 class="text-center text-danger" style="text-shadow: 1px 3px #ffffff;">0</h1></td></tr>
                                                        </tbody>
                                                      </table>
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                              <table class="" style="width:100%">
                                                <tbody><tr><td colspan="2" class="text-center">
                                                  <br>																	</td></tr>
                                              </tbody></table>
                                            </div><!-- /x_content -->
                                          </div><!-- /x_panel -->
                                        </div>
                                        <div class="col-md-4">
                                          <div class="x_panel tile overflow_hidden">
                                            <div class="x_title">
                                              <h2 class="text-primary"><i class="fa fa-info-circle" aria-hidden="true"></i>  Level 3</h2>
                                              <ul class="nav navbar-right panel_toolbox">
                                                <li><a class="collapse-link"><i class="fa fa-chevron-up" aria-hidden="true"></i> </a></li>
                                                <li><a class="close-link"><i class="fa fa-close align-self-center" aria-hidden="true"></i> </a></li>
                                              </ul>
                                              <div class="clearfix"></div>
                                            </div><!-- /x_title -->
                                            <div class="x_content">
                                              <table class="" style="width:100%">
                                                <tbody>
                                                  <tr>
                                                    <td><img src="<?php echo base_url('image/flaks/level3.png')?>" alt="Flaks Level 1"></td>
                                                    <td>
                                                      <table class="tile_info">
                                                        <tbody>
                                                        <tr><td><h1 class="text-center text-danger" style="text-shadow: 1px 3px #ffffff;">0</h1></td></tr>
                                                        </tbody>
                                                      </table>
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                              <table class="" style="width:100%">
                                                <tbody><tr><td colspan="2" class="text-center">
                                                  <br>																	</td></tr>
                                              </tbody></table>
                                            </div><!-- /x_content -->
                                          </div><!-- /x_panel -->
                                        </div>
                                        <div class="col-md-4">
                                          <div class="x_panel tile overflow_hidden">
                                            <div class="x_title">
                                              <h2 class="text-primary"><i class="fa fa-info-circle" aria-hidden="true"></i>  Level 4</h2>
                                              <ul class="nav navbar-right panel_toolbox">
                                                <li><a class="collapse-link"><i class="fa fa-chevron-up" aria-hidden="true"></i> </a></li>
                                                <li><a class="close-link"><i class="fa fa-close align-self-center" aria-hidden="true"></i> </a></li>
                                              </ul>
                                              <div class="clearfix"></div>
                                            </div><!-- /x_title -->
                                            <div class="x_content">
                                              <table class="" style="width:100%">
                                                <tbody>
                                                  <tr>
                                                    <td><img src="<?php echo base_url('image/flaks/level4.png')?>" alt="Flaks Level 1"></td>
                                                    <td>
                                                      <table class="tile_info">
                                                        <tbody>
                                                        <tr><td><h1 class="text-center text-danger" style="text-shadow: 1px 3px #ffffff;">0</h1></td></tr>
                                                        </tbody>
                                                      </table>
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                              <table class="" style="width:100%">
                                                <tbody><tr><td colspan="2" class="text-center">
                                                  <br>																	</td></tr>
                                              </tbody></table>
                                            </div><!-- /x_content -->
                                          </div><!-- /x_panel -->
                                        </div>
                                        <div class="col-md-4">
                                          <div class="x_panel tile overflow_hidden">
                                            <div class="x_title">
                                              <h2 class="text-primary"><i class="fa fa-info-circle" aria-hidden="true"></i>  Level 5</h2>
                                              <ul class="nav navbar-right panel_toolbox">
                                                <li><a class="collapse-link"><i class="fa fa-chevron-up" aria-hidden="true"></i> </a></li>
                                                <li><a class="close-link"><i class="fa fa-close align-self-center" aria-hidden="true"></i> </a></li>
                                              </ul>
                                              <div class="clearfix"></div>
                                            </div><!-- /x_title -->
                                            <div class="x_content">
                                              <table class="" style="width:100%">
                                                <tbody>
                                                  <tr>
                                                    <td><img src="<?php echo base_url('image/flaks/level5.png')?>" alt="Flaks Level 1"></td>
                                                    <td>
                                                      <table class="tile_info">
                                                        <tbody>
                                                        <tr><td><h1 class="text-center text-danger" style="text-shadow: 1px 3px #ffffff;">0</h1></td></tr>
                                                        </tbody>
                                                      </table>
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                              <table class="" style="width:100%">
                                                <tbody><tr><td colspan="2" class="text-center">
                                                  <br>																	</td></tr>
                                              </tbody></table>
                                            </div><!-- /x_content -->
                                          </div><!-- /x_panel -->
                                        </div>
                                        <div class="col-md-4">
                                          <div class="x_panel tile overflow_hidden">
                                            <div class="x_title">
                                              <h2 class="text-primary"><i class="fa fa-info-circle" aria-hidden="true"></i>  Level 6</h2>
                                              <ul class="nav navbar-right panel_toolbox">
                                                <li><a class="collapse-link"><i class="fa fa-chevron-up" aria-hidden="true"></i> </a></li>
                                                <li><a class="close-link"><i class="fa fa-close align-self-center" aria-hidden="true"></i> </a></li>
                                              </ul>
                                              <div class="clearfix"></div>
                                            </div><!-- /x_title -->
                                            <div class="x_content">
                                              <table class="" style="width:100%">
                                                <tbody>
                                                  <tr>
                                                    <td><img src="<?php echo base_url('image/flaks/level6.png')?>" alt="Flaks Level 1"></td>
                                                    <td>
                                                      <table class="tile_info">
                                                        <tbody>
                                                        <tr><td><h1 class="text-center text-danger" style="text-shadow: 1px 3px #ffffff;">0</h1></td></tr>
                                                        </tbody>
                                                      </table>
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                              <table class="" style="width:100%">
                                                <tbody><tr><td colspan="2" class="text-center">
                                                  <br>																	</td></tr>
                                              </tbody></table>
                                            </div><!-- /x_content -->
                                          </div><!-- /x_panel -->
                                        </div>
                                        <div class="col-md-4">
                                          <div class="x_panel tile overflow_hidden">
                                            <div class="x_title">
                                              <h2 class="text-primary"><i class="fa fa-info-circle" aria-hidden="true"></i>  Level 7</h2>
                                              <ul class="nav navbar-right panel_toolbox">
                                                <li><a class="collapse-link"><i class="fa fa-chevron-up" aria-hidden="true"></i> </a></li>
                                                <li><a class="close-link"><i class="fa fa-close align-self-center" aria-hidden="true"></i> </a></li>
                                              </ul>
                                              <div class="clearfix"></div>
                                            </div><!-- /x_title -->
                                            <div class="x_content">
                                              <table class="" style="width:100%">
                                                <tbody>
                                                  <tr>
                                                    <td><img src="<?php echo base_url('image/flaks/level7.png')?>" alt="Flaks Level 1"></td>
                                                    <td>
                                                      <table class="tile_info">
                                                        <tbody>
                                                        <tr><td><h1 class="text-center text-danger" style="text-shadow: 1px 3px #ffffff;">0</h1></td></tr>
                                                        </tbody>
                                                      </table>
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                              <table class="" style="width:100%">
                                                <tbody><tr><td colspan="2" class="text-center">
                                                  <br>																	</td></tr>
                                              </tbody></table>
                                            </div><!-- /x_content -->
                                          </div><!-- /x_panel -->
                                        </div>
                                      </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab_content6" aria-labelledby="profile-tab5">
                                      <div class="x_content">
                                        <div class="col-md-12">
                                          <div class="x_panel tile overflow_hidden">
                                            <div id="Military_Central" class="LinkTarget text-primary x_title">
                                              <h2><i class="fa fa-info-circle" aria-hidden="true"></i>  Military Central</h2>
                                              <ul class="nav navbar-right panel_toolbox">
                                                <li><a class="collapse-link"><i class="fa fa-chevron-up" aria-hidden="true"></i> </a></li>
                                                <li><a class="close-link"><i class="fa fa-close align-self-center" aria-hidden="true"></i> </a></li>
                                              </ul>
                                              <div class="clearfix"></div>
                                            </div><!-- /x_panel -->
                                            <div class="x_content"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                              <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
                                              <canvas id="myChart" style="width: 412px; max-width: 600px; display: block; height: 205px;" width="370" height="184" class="chartjs-render-monitor"></canvas>
                                              
                                              <script>
                                              var xValues = ["Level 1", "Level 2", "Level 3", "Level 4", "Level 5", "Level 6", "Level 7", "Level 8", "Level 9", "Level 10", "Level 11", "Level 12", "Level 13", "Level 14", "Level 15"];
                                              var yValues = [0,0,0,0,0,0,0,0,0,0, 0,0,0,0,1,];
                                              var barColors = [
                                              "rgb(153, 51, 51)", "rgb(153, 77, 51)", "rgb(153, 102, 51)", "rgb(153, 128, 51)", "rgb(153, 153, 51)", "rgb(128, 153, 51)", "rgb(102, 153, 51)", "rgb(77, 153, 51)", 
                                              "rgb(51, 153, 51)", "rgb(51, 153, 77)", "rgb(51, 153, 102)", "rgb(51, 153, 128)", "rgb(51, 153, 153)", "rgb(51, 128, 153)", "rgb(51, 102, 153)", "rgb(51, 77, 153)", 
                                              "rgb(51, 51, 153)", "rgb(77, 51, 153)", "rgb(102, 51, 153)", "rgb(128, 51, 153)", "rgb(153, 51, 153)", "rgb(153, 51, 128)", "rgb(153, 51, 102)", "rgb(153, 51, 77)", 
                                              "rgb(153, 51, 51)"
                                              ];
                                              
                                              new Chart("myChart", {
                                                type: "bar",
                                                data: {
                                                labels: xValues,
                                                datasets: [{
                                                  backgroundColor: barColors,
                                                  data: yValues
                                                }]
                                                },
                                                options: {
                                                legend: {display: false},
                                                scales: {
                                                  yAxes: [{
                                                  ticks: {
                                                    beginAtZero: true
                                                  }
                                                  }],
                                                }
                                                }
                                              });
                                              </script>
                                              <table class="" style="width:100%">
                                                <tbody>
                                                  <tr>
                                                    <td colspan="2" class="text-center">
                                                      <a class="blue" href="https://baf.nouahsark.com/buildings.php?Buildings=Built&amp;userid=971&amp;Current=Military_Central" title="Military Central Where it Built?">Where it Built?</a>
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </div><!-- /x_content -->
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab_content7" aria-labelledby="profile-tab6">
                                      <div class="x_content">
                                        <div class="col-md-12">
                                            <div class="x_panel tile overflow_hidden">
                                                <div id="Power_Plant" class="LinkTarget text-primary x_title">
                                                    <h2><i class="fa fa-info-circle" aria-hidden="true"></i>  Power Plant</h2>
                                                    <ul class="nav navbar-right panel_toolbox">
                                                        <li><a class="collapse-link"><i class="fa fa-chevron-up" aria-hidden="true"></i> </a></li>
                                                        <li><a class="close-link"><i class="fa fa-close align-self-center" aria-hidden="true"></i> </a></li>
                                                    </ul>
                                                    <div class="clearfix"></div>
                                                </div><!-- /x_panel -->
                                                <div class="x_content"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                                    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
                                                    <canvas id="Power_Plant_Chart" style="width: 412px; max-width: 600px; display: block; height: 205px;" width="370" height="184" class="chartjs-render-monitor"></canvas>
                                                    <script>
                                                    var xValues = ["Level 1", "Level 2", "Level 3", "Level 4", "Level 5", "Level 6", "Level 7", "Level 8", "Level 9", "Level 10", "Level 11", "Level 12", "Level 13", "Level 14", "Level 15"];
                                                    var yValues = [0,0,0,0,0,0,0,0,0,0, 0,0,0,0,1,];
                                                    var barColors = [
                                                    "rgb(153, 51, 51)", "rgb(153, 77, 51)", "rgb(153, 102, 51)", "rgb(153, 128, 51)", "rgb(153, 153, 51)", "rgb(128, 153, 51)", "rgb(102, 153, 51)", "rgb(77, 153, 51)", 
                                                    "rgb(51, 153, 51)", "rgb(51, 153, 77)", "rgb(51, 153, 102)", "rgb(51, 153, 128)", "rgb(51, 153, 153)", "rgb(51, 128, 153)", "rgb(51, 102, 153)", "rgb(51, 77, 153)", 
                                                    "rgb(51, 51, 153)", "rgb(77, 51, 153)", "rgb(102, 51, 153)", "rgb(128, 51, 153)", "rgb(153, 51, 153)", "rgb(153, 51, 128)", "rgb(153, 51, 102)", "rgb(153, 51, 77)", 
                                                    "rgb(153, 51, 51)"
                                                    ];
                                                    
                                                    new Chart("Power_Plant_Chart", {
                                                      type: "bar",
                                                      data: {
                                                        labels: xValues,
                                                        datasets: [{
                                                          backgroundColor: barColors,
                                                          data: yValues
                                                        }]
                                                      },
                                                      options: {
                                                        legend: {display: false},
                                                        scales: {
                                                          yAxes: [{
                                                            ticks: {
                                                              beginAtZero: true
                                                            }
                                                          }],
                                                        }
                                                      }
                                                    });
                                                    </script>
                                                    <table class="" style="width:100%">
                                                        <tbody>
                                                        <tr>
                                                          <td colspan="2" class="text-center">
                                                            <a class="blue" href="https://baf.nouahsark.com/buildings.php?Buildings=Built&amp;userid=971&amp;Current=Power_Plant" title="Power Plant Where it Built?">Where it Built?</a>
                                                          </td>
                                                        </tr>
                                                      </tbody>
                                                    </table>
                                                </div><!-- /x_content -->
                                            </div><!-- /x_panel -->
                                        </div>
                                      </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab_content8" aria-labelledby="profile-tab7">
                                      <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Victim</th>
                                                <th>Victim Ally</th>
                                                <th>Map</th>
                                                <th>DateTime</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php foreach ($battles as $battle): ?>
                                                <tr>
                                                    <td> <?php echo $battle['Victim']; ?></td>
                                                    <td> <?php echo $battle['Victim_Ally']; ?></td>
                                                    <td> <?php echo $battle['Map']; ?></td>
                                                    <td> <?php echo $battle['Datetime']; ?></td>
                                                </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                      </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->