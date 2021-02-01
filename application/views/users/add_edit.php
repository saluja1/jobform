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
                <input type="hidden" id="update_id" value="<?php echo @$user->id ?>">
                <input type="hidden" id="tbl" value="users">
                <div class="control-group">
                    <label class="control-label required" for="first_name">First Name </label>
                    <div class="controls">
                        <input type="text" class="span6" value="<?php echo @$user->first_name ?>"
                               name="first_name" id="first_name" required="" />
                    </div>
                </div>    
                <div class="control-group">
                    <label class="control-label required" for="last_name">Last Name </label>
                    <div class="controls">
                        <input type="text" class="span6" required="" value="<?php echo @$user->last_name ?>" name="last_name" id="last_name"  />
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label required" for="user_id">User ID </label>
                    <div class="controls">
                        <input type="text" class="span6 someClass validate[<?php if(@$id!=true||strlen($user->user_id)<1) echo 'ajax[ajaxUserID]'; ?>]" <?php if(@$id==true && strlen( trim($user->user_id))>0) echo 'readonly'; ?>
                               value="<?php echo @$user->user_id ?>" name="user_id" id="user_id" required=""/>
                    </div>
                </div>


                <div class="control-group">
                    <label class="control-label required" for="email">E-Mail </label>
                    <div class="controls">
                        <input type="text" class="span6 validate[custom[email]<?php if(@$id!=true) echo ',ajax[ajaxUserCallPhp]'; ?>]" <?php if(@$id==true) echo 'readonly'; ?>
                               value="<?php echo @$user->email ?>" name="email" id="email" required=""/>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label required" for="user_type"> User Type</label>
                    <div class="controls">
                        <select class="span6" name="user_type" id="user_type">
                            <option <?php if (@$user->user_type == 1) { ?> selected="" <?php } ?> value="1">Admin</option>
                            <option <?php if (@$user->user_type == 0) { ?> selected="" <?php } ?> value="0">Standard</option>
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label required" for="status">Status</label>
                    <div class="controls">
                        <select class="span6" name="status" id="status">
                            <option <?php if (@$user->status == 1) { ?> selected="" <?php } ?> value="1">Active</option>
                            <option <?php if (@$user->status == 0) { ?> selected="" <?php } ?> value="0">De-Active</option>
                        </select>
                    </div>
                </div>
                <?php if (!$id) { ?>
                <div class="control-group">
                    <label class="control-label required" for="password"> Password</label>
                    <div class="controls">
                        <input type="password" required="" maxlength="8" class="span6 validate[minSize[4],maxSize[8]]" id="password" name="password"/>
                    </div>
                </div>

                    <div class="control-group">
                        <label class="control-label" for="con_password"> Confirm Password</label>
                        <div class="controls">
                            <input type="password" required="" class="span6 someClass validate[equals[password]]" id="con_password" name="con_password" />
                        </div>
                    </div>    
                <?php } ?>
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary" name="<?php echo $button ?>"><?php echo $button ?></button>
                    <button type="button" onclick="window.location.href='<?php echo base_url('jobs/users') ?>'" class="btn btn-primary" name="Cancel">Cancel</button>
                </div>
            </fieldset>
        </form>   

    </div>
</div>

    <script>
        $(document).ready(function(){


            $("#form1").validationEngine(

                {'custom_error_messages' : {
                    '.someClass': {
                        'equals':{
                            'message': "Password and Confirm Password needs to be same"
                        }
                    }
                }}

            );
        });
    </script>



<?php $this->load->view('include/footer'); ?>