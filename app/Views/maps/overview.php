<!-- page content -->
<script>
    function gotoMaps() {
        location.href = './' + document.getElementById("map_page_select").value;
    }
</script>
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3> Maps     
                    <select type="number" style="font-size:medium" id="map_page_select" onChange="javascript:gotoMaps();">
                    <?php for ($i=0; $i < 59; $i++) { if($page == $i*25+11) { ?>
                        
                        <option value="<?php echo $i*25+11; ?>" selected><?php echo $i*25+11; ?> ~ <?php echo $i*25+36; ?></option>
                    <?php }else{ ?>
                        <option value="<?php echo $i*25+11; ?>"><?php echo $i*25+11; ?> ~ <?php echo $i*25+36; ?></option>
                    <?php }} ?>
                    </select>
                </h3>
            </div>
        </div>
        
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_content">
                        <div class="row">
                            <?php for ($i=$page; $i < $page+25; $i++) { ?>
                            <div class="col-md-55">
                                <div class="thumbnail">
                                <div class="image view view-first">
                                    <img style="width: 100%; height: 100%; display: block;" src="<?php echo base_url('Maps/MAP').$i.'.png' ?>" alt="MAP <?php echo $i; ?>">
                                    <div class="mask no-caption">
                                    <div class="tools tools-bottom">
                                        <a href="#"><i class="fa fa-search"></i></a>
                                    </div>
                                    </div>
                                </div>
                                <div class="caption">
                                    <p><strong>MAP <?php echo $i; ?></strong>
                                    </p>
                                </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <!-- <div class="row">
                        <div class="col-sm-5">
                            <div class="dataTables_info" id="datatable-responsive_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="dataTables_paginate paging_simple_numbers" id="datatable-responsive_paginate">
                                <ul class="pagination">
                                        <?php for ($i=0; $i < 60; $i++) { ?>
                                    <li class="paginate_button active">
                                            <a href="/<?php echo $i*25+11 ?>" aria-controls="datatable-responsive" data-dt-idx="1" tabindex="0"><?php echo $i+1 ?></a>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->