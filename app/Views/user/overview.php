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