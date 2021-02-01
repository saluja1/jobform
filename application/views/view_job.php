<?php $this->load->view('include/header'); ?>

    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span> <?php echo @$title ?></h2>
            <div class="box-icon">
                <a href="<?php echo base_url()?>"  class="btn btn-primary" style="margin: -11px 10px 0px;">Back</a>
            </div>
        </div>
        <div class="box-content">
            <form class="form-horizontal" id="form1" action="" method="post">
                <input type="hidden" id="update_id" name="update_id" value="<?php echo @$job->id ?>">
                <input type="hidden" name="job_type" value="<?php echo @$job_type ?>">

                <legend>Customer Details</legend>
                <fieldset>
                    <div class="control-group">
                        <label class="control-label required" for="cus_first_name">First Name </label>
                        <div class="controls">

                            <input type="text" readonly="" class="span6 validate[required]" value="<?php echo @$job->cus_first_name ?>" name="cus_first_name" id="cus_first_name"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label required" for="cus_last_name">Last Name </label>
                        <div class="controls">
                            <input type="text" readonly="" class="span6 validate[required]" value="<?php echo @$job->cus_last_name ?>" name="cus_last_name" id="cus_last_name" />
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label required" for="cus_email">Email </label>
                        <div class="controls">
                            <input type="email" readonly="" class="span6 validate[required,custom[email]]" value="<?php echo @$job->cus_email ?>"
                                   name="cus_email" id="cus_email" />
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label required" for="cus_number">Contact Number</label>
                        <div class="controls">
                            <input type="text" readonly="" class="span6 validate[required],custom[phone]]" value="<?php echo @$job->cus_number ?>" name="cus_number" id="cus_number" />
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label required" for="cus_address">Address</label>
                        <div class="controls">
                            <textarea class="span6 validate[required]" readonly="" rows="8" name="cus_address" id="cus_address"><?php echo @$job->cus_address ?></textarea>
                        </div>
                    </div>

                </fieldset>
                <legend></legend>
                <fieldset>
                    <legend>Asset Details</legend>

                    <div class="control-group">
                        <label class="control-label required" for="accessories">Accessories</label>
                        <div class="controls">
                            <textarea class="span6 validate[required]" readonly="" rows="8" name="accessories" id="accessories"><?php echo @$job->accessories ?></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label required" for="make">Make</label>
                        <div class="controls">
                            <input type="text" class="span6 validate[required]" readonly="" value="<?php echo @$job->make ?>" name="make" id="make" />
                        </div>
                    </div>

                    <div class="control-group required">
                        <label class="control-label required" for="model">Model</label>
                        <div class="controls">
                            <input type="text" class="span6 validate[required]" readonly="" value="<?php echo @$job->model ?>" name="model" id="model"/>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label required" for="imei">Serial No/Imei</label>
                        <div class="controls">
                            <input type="text" class="span6 validate[required]" readonly="" value="<?php echo @$job->imei ?>" name="imei" id="imei" />
                        </div>
                    </div>
                    <legend></legend>
                </fieldset>
                <fieldset>
                    <legend>Complaint Details</legend>
                    <div class="control-group">
                        <label class="control-label required" for="cus_comments">Customer Comments</label>
                        <div class="controls">
                            <textarea class="span6 validate[required]" rows="8" readonly="" name="cus_comments" id="cus_comments"><?php echo @$job->cus_comments ?></textarea>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label required" for="diagnostics">Diagnostics</label>
                        <div class="controls">
                            <textarea class="span6 validate[required]" rows="8" readonly="" name="diagnostics" id="diagnostics"><?php echo @$job->diagnostics ?></textarea>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label required" for="quotation">Quotation</label>
                        <div class="controls">
                            <input type="text" class="span6 validate[required,custom[number]]" readonly="" value="<?php echo @$job->quotation ?>" name="quotation" id="quotation" />
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label required" for="paid">Paid</label>
                        <div class="controls">
                            <select class="span6" name="paid" id="paid" >
                                <option  value=""><?php  echo @$job->paid ?></option>

                            </select>
                        </div>
                    </div>


                    <div class="control-group">
                        <label class="control-label required" for="fee">Services Fee</label>
                        <div class="controls">
                            <input type="text" readonly="" class="span6 validate[required,custom[number]]" value="<?php echo @$job->fee ?>" name="fee" id="fee" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label required" for="technician">Technician</label>
                        <div class="controls">
                            <select class="span6" name="technician" disabled id="technician" required="">
                                <option value="">Select Technician </option>
                                <?php if(is_object($tech)||is_array($tech))
                                    foreach($tech as $t)
                                    {
                                        $select='';
                                        if (@$job->technician == $t->id)
                                            $select='selected';
                                        echo '<option value="'.$t->id.'" '.$select.' >'.$t->first_name.' '.$t->last_name.'</option>';
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label required" for="status">Status</label>
                        <div class="controls">
                            <select class="span6" name="status" id="status">
                                <option value=""> <?php echo @$job->status; ?></option>
                            </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label required" for="office_notes">Office Notes</label>
                        <div class="controls">
                            <textarea readonly="" class="span6 validate[required]" rows="8" name="office_notes" id="office_notes"><?php echo @$job->office_notes ?></textarea>
                        </div>
                    </div>

                    <strong>Created Date : </strong><?php echo $job->created_date ?><br>
                    <strong>Created By : </strong><?php echo $job->first_name.' '.$job->last_name ?>

                </fieldset>
            </form>

        </div>
    </div>

<?php $this->load->view('include/footer'); ?>