<?php $this->load->view('include/header'); ?>
<div class="box span12">
    <div class="box-header" data-original-title>
        <h2><i class="halflings-icon user"></i><span class="break"></span>All Technicians</h2>
        <a href="<?php echo base_url('jobs/add_tech'); ?>" class="btn btn-primary" style="float: right; margin: -10px;">Add New Technicians</a>
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
                        <th>Technician Name</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody>
                    <?php foreach ($record as $row) { ?>
                        <tr>
                            <td><?php echo $row->first_name . ' ' . $row->last_name ?></td>
                            <td class="center"><?php echo $row->email ?></td>

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
                                <a class="btn btn-info" title="Edit" href="<?php echo base_url('jobs/edit_tech/' . $row->id); ?>">
                                    <i class="halflings-icon white edit"></i>                                            
                                </a>
                                <a class="btn btn-danger" title="Delete" onclick="return confirm('Are you sure you want to delete?')" href="<?php echo base_url('jobs/delete_tech/' . $row->id); ?>">
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