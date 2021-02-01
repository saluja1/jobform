<?php $this->load->view('include/header'); ?>

<div class="box span12">
    <div class="box-header" data-original-title>
        <h2><i class="halflings-icon edit"></i><span class="break"></span> <?php echo $title ?></h2>
        <div class="box-icon">
            <a href="<?php echo base_url(); ?>"  class="btn btn-primary" style="margin: -11px 10px 0px;">Back</a>
        </div>
    </div>
    <?php if ($this->session->flashdata('message')) { ?>
        <div class="alert alert-error" style="text-align: center;">
            <button data-dismiss="alert" class="close" type="button">×</button>
            <?php echo $this->session->flashdata('message'); ?>
        </div>
    <?php } ?>
    <div class="box-content">
        <form class="form-horizontal" id="form1" action="" method="post">
            <div id="error">
            </div>
            <fieldset>

                <div class="control-group">
                    <label class="control-label" for="typeahead">Old Password</label>
                    <div class="controls">
                        <input type="password" class="span6" id="old_password" name="old_password" required=""/>
                    </div>
                </div>

                    <div class="control-group">
                    <label class="control-label" for="typeahead">New Password</label>
                    <div class="controls">
                        <input type="password" class="span6 validate[required,minSize[4],maxSize[8]]" id="new_password" name="new_password" required=""/>
                    </div>
                </div>

                    <div class="control-group">
                        <label class="control-label" for="typeahead"> Confirm Password</label>
                        <div class="controls">
                            <input type="password" class="span6 someClass validate[required,equals[new_password]]" id="con_password" name="con_password" required="" />
                        </div>
                    </div>    

                <div class="form-actions">
                    <button type="submit" class="btn btn-primary" name="<?php echo $button ?>"><?php echo $button ?></button>
                    <button type="button" onclick="window.location.href='<?php echo base_url(); ?>'" class="btn btn-primary">Cancel</button>
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