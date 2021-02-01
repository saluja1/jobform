<?php $this->load->view('include/header'); ?>

    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span> <?php echo @$title ?></h2>
            <div class="box-icon">
                <a href="<?php echo base_url()?>"  class="btn btn-primary" style="margin: -11px 10px 0px;">Back</a>
            </div>
        </div>
        <div class="box-content">
            <form class="form-horizontal" id="form1" action="<?php echo base_url('jobs/email')?>" method="post">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label required" for="email">To </label>
                        <div class="controls">
                            <input type="text" class="span6 validate[custom[email]]" required=""
                                   value="<?php echo @$ref->cus_email ?>" name="email" id="email"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label required" for="subject">Subject</label>
                        <div class="controls">
                            <input type="text" class="span6"
                                   required="" value="" name="subject" id="subject" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="msg">Message</label>
                        <div class="controls">
                            <textarea class="span6" rows="8" name="msg" id="msg">Reference: <?php echo @$ref->job_slug ?></textarea>
                        </div>
                    </div>

                </fieldset>

                <fieldset>


                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary" name="Submit">Submit</button>
                        <button type="button" onclick="window.location.href='<?php echo base_url()?>'" class="btn btn-primary" name="Cancel">Cancel</button>
                    </div>
                    </fieldset>

            </form>

        </div>
    </div>

    <script>
        $(document).ready(function(){
            $("#form1").validationEngine();
        });
    </script>

<?php $this->load->view('include/footer'); ?>