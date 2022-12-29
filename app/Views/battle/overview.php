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
<!-- /page content -->