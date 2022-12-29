<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3> <?= esc($title)?></h3>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row x_panel">
        <div class="col-md-12 col-sm-12 ">
            <h5 style="color:#171717">Basic Info</h5>
            <h6>
            <div class="row">
                <div class="col-md-3 col-sm-3">Name : <?=$alliance['Name']?></div>
                <div class="col-md-3 col-sm-3">Creation Date : <?=$alliance['Creation_Date']?></div>
                <div class="col-md-3 col-sm-3">Status : <?=$alliance['Status']?></div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-3">Total Points : <?=$alliance['Total_Points']?></div>
                <div class="col-md-3 col-sm-3">Total Bases : <?=$alliance['Total_Bases']?></div>
                <div class="col-md-3 col-sm-3">Total Members : <?=$alliance['Total_Members']?></div>
                <div class="col-md-3 col-sm-3">Requirements : <?=$alliance['Requirements']?></div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-3">Total Maps : <?=$alliance['Total_Maps']?></div>
                <div class="col-md-3 col-sm-3">Language : <?=$alliance['Language']?></div>
                <div class="col-md-3 col-sm-3">Democracy : <?=$alliance['Democracy']?></div>                
                <div class="col-md-3 col-sm-3">Newcomers : <?=$alliance['Newcomers']?></div>                
            </div>
            </h6>
            <div class="x_title clearfix"></div>
        </div>
        <div class="col-md-12 col-sm-12 ">
            <h5 style="color:#171717">Conqured Maps</h5>
            <h6>
            <?php for ($i=0; $i < $alliance['Total_Maps']; $i++) { ?>
                <a href="<?php echo base_url('Maps').'/MAP'.($i+11).'.png'?>" target="_blank" style="text-decoration:underline">MAP<?=$i+11?></a>&nbsp&nbsp&nbsp
            <?php } ?>
            <h6>
            <div class="x_title clearfix"></div>
        </div>
            <div class="col-md-12 col-sm-12 ">
        <h5 style="color:#171717">Members</h5>
                <div class="x_panel">
                    <div class="x_content">
            
                        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Rank</th>
                                    <th>Username</th>
                                    <th>Position</th>
                                    <th>Status</th>
                                    <th>Points</th>
                                    <th>Bases</th>
                                    <th>Current Ally</th>
                                    <th>Join date</th>
                                    <th>Last Update</th>
                                    <!-- <th>Actions</th> -->
                                </tr>
                            </thead>

                            <tbody>
                                <?php foreach ($members as $member): ?>
                                    <tr>
                                        <td> <?php echo $member['rank']; ?></td>
                                        <td> <a style="color:#0000FF" href="<?php echo base_url('profile')."/".$member['id'] ?>"><?php echo $member['username']; ?></a></td>
                                        <td> <?php echo $member['position']; ?></td>
                                        <td> <?php echo $member['is_online']; ?></td>
                                        <td> <?php echo $member['points']; ?></td>
                                        <td> <?php echo $member['bases']; ?></td>
                                        <td> <?php echo $member['alliance']; ?></td>
                                        <td> <?php echo $member['join_date']; ?></td>
                                        <td> <?php echo $member['last_updated']; ?></td>
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