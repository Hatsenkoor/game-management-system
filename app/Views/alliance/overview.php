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
                                    <th>Rank</th>
                                    <th>Name</th>
                                    <th>Creation Date</th>
                                    <th>Status</th>
                                    <th>Maps</th>
                                    <th>Bases</th>
                                    <th>Points</th>
                                    <th>Members</th>
                                    <th>Requirements</th>
                                    <th>Democracy</th>
                                    <th>Language</th>
                                    <th>Newcomers</th>
                                    <!-- <th>Update</th> -->
                                    <!-- <th>Actions</th> -->
                                </tr>
                            </thead>

                            <tbody>
                                <?php foreach ($alliances as $alliance): ?>
                                    <tr>
                                        <td> <?php echo $alliance['Rank']; ?></td>
                                        <td><a style="color:#0000FF" href="<?php echo base_url('alliance')."/".$alliance['Game_ID'] ?>"> <?php echo $alliance['Name']; ?></a></td>
                                        <td> <?php echo $alliance['Creation_Date']; ?></td>
                                        <td> <?php echo $alliance['Status']; ?></td>
                                        <td> <?php echo $alliance['Total_Maps']; ?></td>
                                        <td> <?php echo $alliance['Total_Bases']; ?></td>
                                        <td> <?php echo $alliance['Total_Points']; ?></td>
                                        <td> <?php echo $alliance['Total_Members']; ?></td>
                                        <td> <?php echo $alliance['Requirements']; ?></td>
                                        <td> <?php echo $alliance['Democracy']; ?></td>
                                        <td> <?php echo $alliance['Language']; ?></td>
                                        <td> <?php echo $alliance['Newcomers']; ?></td>
                                        <!-- <td> <?php echo $alliance['Updated']; ?></td> -->
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