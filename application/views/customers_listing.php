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
        <h2><i class="halflings-icon user"></i><span class="break"></span>Customers  Listing</h2>
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
             
        </div>
        <table id="jobs" class="table table-striped table-bordered bootstrap-datatable datatable">
            <?php
            if (@$record) {
                ?>
                <thead>
                    <tr>
                        <th>Sr</th>
                        <th>Customer Name</th>
                        <th>Telephone</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $c=1; foreach ($record as $row) { ?>
                        <tr>
<td><?php echo $c++; ?></td>
                            
                            <td class="center" style="max-width: 5%"><?php echo $row->cus_first_name.' '.$row->cus_last_name ?></td>
                            <td class="center"><?php echo $row->cus_number ?></td>                             
                            <td class="center">
                                <a title="View Jobs" class="btn btn-info" href="<?php echo base_url('?mobile=' . $row->cus_number); ?>">
                                    <i class="halflings-icon white edit"></i>                                            
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