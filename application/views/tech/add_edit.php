<?php $this->load->view('include/header'); ?>

<div class="box span12">
    <div class="box-header" data-original-title>
        <h2><i class="halflings-icon edit"></i><span class="break"></span> <?php echo $title ?></h2>
        <div class="box-icon">
            <a href="#" onclick="history.back();"  class="btn btn-primary" style="margin: -11px 10px 0px;">Back</a>
        </div>
    </div>
    <div class="box-content">
        <form class="form-horizontal" id="form1" action="" method="post">
            <fieldset>
                <input type="hidden" id="update_id" value="<?php echo @$tech->id ?>">
                <input type="hidden" id="tbl" value="users">
                <div class="control-group">
                    <label class="control-label required" for="first_name">First Name </label>
                    <div class="controls">
                        <input type="text" class="span6" value="<?php echo @$tech->first_name ?>"
                               name="first_name" id="first_name" required="" />
                    </div>
                </div>    
                <div class="control-group">
                    <label class="control-label required" for="last_name">Last Name </label>
                    <div class="controls">
                        <input type="text" class="span6" required="" value="<?php echo @$tech->last_name ?>" name="last_name" id="last_name"  />
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="email">E-Mail </label>
                    <div class="controls">
                        <input type="text" class="span6 validate[custom[email]"
                               value="<?php echo @$tech->email ?>" name="email" id="email"/>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label required" for="status">Status</label>
                    <div class="controls">
                        <select class="span6" name="status" id="status">
                            <option <?php if (@$tech->status == 1) { ?> selected="" <?php } ?> value="1">Active</option>
                            <option <?php if (@$tech->status == 0) { ?> selected="" <?php } ?> value="0">De-Active</option>
                        </select>
                    </div>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary" name="<?php echo $button ?>"><?php echo $button ?></button>
                    <button type="button" onclick="window.location.href='<?php echo base_url('jobs/technicians') ?>'" class="btn btn-primary" name="Cancel">Cancel</button>
                </div>
            </fieldset>
        </form>   

    </div>
</div>

    <script>
        $(document).ready(function(){


            $("#form1").validationEngine(
        });
    </script>



<?php $this->load->view('include/footer'); ?>