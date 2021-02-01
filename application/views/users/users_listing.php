<?php $this->load->view('include/header'); ?>
<div class="box span12">
    <div class="box-header" data-original-title>
        <h2><i class="halflings-icon user"></i><span class="break"></span>All Members</h2>
        <a href="<?php echo base_url('jobs/adduser'); ?>" class="btn btn-primary" style="float: right; margin: -10px;">Add New Member</a>
    </div>
    <?php if ($this->session->flashdata('message')) { ?>
        <div class="alert alert-success" style="text-align: center;">
            <button data-dismiss="alert" class="close" type="button">×</button>
            <?php echo $this->session->flashdata('message'); ?>
        </div>
    <?php } ?>
    <div class="box-content">
        <table class="table table-striped table-bordered bootstrap-datatable datatable">
            <?php
            if (@$record) {
                ?>
                <thead>
                    <tr>
                        <th>User Name</th>
                        <th>User ID</th>
                        <th>Email</th>
                        <th>A/C Type</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody>
                    <?php foreach ($record as $row) { ?>
                        <tr>
                            <td><?php echo $row->first_name . ' ' . $row->last_name ?></td>
                            <td ><?php echo $row->user_id ?></td>
                            <td class="center"><?php echo $row->email ?></td>

                            <td class="center">
                                <?php
                                if ($row->user_type == 1) {
                                    echo '<span class="label label-success">Admin</span>';
                                } else {
                                    echo '<span class="label label-danger">User</span>';
                                }
                                ?>
                            </td>
                            <td class="center">
                                <?php
                                if ($row->status == 1) {
                                    echo '<span class="label label-success">Active</span>';
                                } else {
                                    echo '<span class="label label-danger">Block</span>';
                                }
                                ?>
                            </td>
                            <td class="center"> 
                                <a class="btn btn-info" title="Edit" href="<?php echo base_url('jobs/edituser/' . $row->id); ?>">
                                    <i class="halflings-icon white edit"></i>                                            
                                </a>
                                <a class="btn btn-danger" title="Delete" onclick="return confirm('Note: All jobs posted by this user will delete also.Are you sure you still want to delete?')" href="<?php echo base_url('jobs/delete_user/' . $row->id); ?>">
                                    <i class="halflings-icon white trash"></i> 

                                </a>
                            </td>
                        </tr>
                    <?php } ?> 
                </tbody>
                <?php
            } else {
                echo 'No Record Found';
            }
            ?>
        </table>            
    </div>
</div><!--/span-->
<?php $this->load->view('include/footer'); ?>