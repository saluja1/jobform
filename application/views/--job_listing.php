<?php $this->load->view('include/header'); ?>
<style>
    tfoot input {
        width: 100%;
        padding: 3px;
        box-sizing: border-box;
    }
</style>
<div class="box span12">

    <div class="box-header" data-original-title>
        <h2><i class="halflings-icon user"></i><span class="break"></span>Jobs</h2>
    </div>
    <div id="msg"></div>
    <?php if ($this->session->flashdata('message')) { ?>
        <div class="alert alert-success" style="text-align: center;">
            <button data-dismiss="alert" class="close" type="button">×</button>
            <?php echo $this->session->flashdata('message'); ?>
        </div>
    <?php } ?>
    <div class="box-content">
        <div class="box-content">
            <form class="form-horizontal spain12" method="post" style="margin-left: -10px;">
                <table >
                    <tr>
                        <td>
                        <label for="filter">Job Types</label>
                    <select id="filter" name="filter2">
                        <option value="">All Jobs</option>
                        <option <?php if(@$filter2=='mob') { ?> selected="" <?php } ?> value="mob">Mobile Entries</option>
                        <option <?php if(@$filter2=='lap') { ?> selected="" <?php } ?> value="lap">Laptop Entries</option>
                    </select>
                        </td><td>
                <label for="filter">Search in</label>
                <select id="filter" name="filter">
                    <option value="">All Jobs</option>
                    <option <?php if(@$filter1=='cus_first_name') { ?> selected="" <?php } ?> value="cus_first_name">Name</option>
                    <option <?php if(@$filter1=='job_slug') { ?> selected="" <?php } ?> value="job_slug">Job Id</option>
                    <option <?php if(@$filter1=='cus_number') { ?> selected="" <?php } ?> value="cus_number">Customer No</option>
                </select>
                        </td><td style="vertical-align: bottom;">
                <input type="text" name="value" value="<?php echo @$value1; ?>">
                            </td><td style="vertical-align: bottom;">
                <button type="submit" class="btn btn-info">Search</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <table id="jobs" class="table table-striped table-bordered bootstrap-datatable datatable">
            <?php
            if (@$record) {
                ?>
                <thead>
                    <tr>
                        <th>Sr</th>
                        <th>ID</th>
                        <th>Date</th>
                        <th>Customer Name</th>
                        <th>Telephone</th>
                        <th>Brand</th>
                        <th>Model</th>
                        <th>Customer Comments</th>
                        <th>Diagnostics</th>
                        <th>Created By</th>
                        <th>Status</th>
                        <th style="width: 100px">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $c=1; foreach ($record as $row) { ?>
                        <tr>
<td><?php echo $c++; ?></td>
                            <td><a title="View Repair Complain" href="<?php echo base_url('jobs/view_job/'.$row->job_slug) ?>"><?php echo mb_strtoupper($row->job_slug) ?></a> </td>
                            <td class="center" ><?php echo $row->created_date ?></td>
                            <td class="center" style="max-width: 5%"><?php echo $row->cus_first_name.' '.$row->cus_last_name ?></td>
                            <td class="center"><?php echo $row->cus_number ?></td>
                            <td class="center"><?php echo $row->make ?></td>
                            <td class="center"><?php echo $row->model ?></td>
                            <td class="center" style="max-width: 120px;word-wrap: break-word;"><?php echo $row->cus_comments ?></td>
                            <td class="center" style="max-width: 120px;word-wrap: break-word;"><?php echo $row->diagnostics ?></td>
                            <td class="center"><?php echo $row->first_name.' '.$row->last_name ?></td>
                            <td class="center"><?php echo $row->status ?></td>
                            <td class="center">
                                <a title="Edit" class="btn btn-info" href="<?php echo base_url('jobs/edit/' . $row->job_slug); ?>">
                                    <i class="halflings-icon white edit"></i>                                            
                                </a>
                                <a title="Delete" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete')" href="<?php echo base_url('jobs/delete_job/' . $row->id); ?>">
                                    <i class="halflings-icon white trash"></i> 

                                </a>

                                <a title="Print" class="btn btn-info" target="_blank" href="<?php echo base_url('jobs/print_job/' . $row->job_slug); ?>">
                                    <i class="halflings-icon white print"></i>
                                </a>
                                <a title="Email" id="<?php echo $row->job_slug ?>" onclick="sendmail(this,event)" class="btn btn-info" href="">
                                    <i class="icon-envelope"></i>
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
<script>
    function sendmail(input,e)
    {

        $.post("<?php echo base_url('jobs/sendmail') ?>",{job_id:input.id},function(data)
        {
            if(data=="3")
            alert("Please Provide Email Address");
            else
            if(data=="2")
                alert("Email sending failed");
            else if(data==1)
            {
                alert("Email sent");
            }
        });
        e.preventDefault();
    }


</script>