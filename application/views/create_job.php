<?php $this->load->view('include/header'); ?>

    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span> <?php echo @$title ?></h2>
            <div class="box-icon">
                <a href="<?php echo base_url()?>"  class="btn btn-primary" style="margin: -11px 10px 0px;">Back</a>
            </div>
        </div>
        <div class="box-content">
            <form class="form-horizontal" id="form1" action="<?php echo base_url('jobs/create')?>" method="post">
                <input type="hidden" id="update_id" name="update_id" value="<?php echo @$job->id ?>">
                <input type="hidden" name="job_type" value="<?php echo @$job_type ?>">

                <legend>Customer Details</legend>
                <fieldset>
                <div class="control-group">
                        <label class="control-label required" for="cus_number">Contact Number</label>
                        <div class="controls">
                            <input type="text" required="" class="span6 someClass validate[custom[phone]]" autocomplete="off" value="<?php echo @$job->cus_number ?>" name="cus_number" id="cus_number" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label required" for="cus_first_name">Full Name </label>
                        <div class="controls">
                            <input type="text" class="span6" required=""
                                   value="<?php echo @$job->cus_first_name ?>" name="cus_first_name" id="cus_first_name"/>
                        </div>
                    </div>
<!--                     <div class="control-group">
                        <label class="control-label required" for="cus_last_name">Last Name </label>
                        <div class="controls">
                            <input type="text" class="span6"
                                   required="" value="<?php echo @$job->cus_last_name ?>" name="cus_last_name" id="cus_last_name" />
                        </div>
                    </div> -->
                    <div class="control-group">
                        <label class="control-label" for="cus_business_name">Company Name </label>
                        <div class="controls">
                            <input type="text" class="span6" value="<?php echo @$job->cus_business_name ?>" name="cus_business_name" id="cus_business_name" />
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="cus_email">Email </label>
                        <div class="controls">
                            <input type="text" class="span6 validate[custom[email]]" value="<?php echo @$job->cus_email ?>"
                                    name="cus_email" id="cus_email" />
                        </div>
                    </div>

                    
                    <div class="control-group">
                        <label class="control-label" for="cus_number">Alternative Number</label>
                        <div class="controls">
                            <input type="text" class="span6 someClass" value="<?php echo @$job->alternative_number?>" name="alternative_number" id="alternative_number" />
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="cus_address">Address</label>
                        <div class="controls">
                            <textarea class="span6" rows="8" name="cus_address" id="cus_address"><?php echo @$job->cus_address ?></textarea>
                        </div>
                    </div>

                </fieldset>
                <legend></legend>
                <fieldset>
                    <legend>Asset Details</legend>

<!--                     <div class="control-group">
                        <label class="control-label" for="accessories">Accessories</label>
                        <div class="controls">
                            <textarea class="span6" rows="8" name="accessories" id="accessories"><?php echo @$job->accessories ?></textarea>
                        </div>
                    </div> -->
                    <div class="control-group">
                        <label class="control-label required" for="make">Make & Model</label>
                        <div class="controls">
                            <input type="text" class="span6" required="" value="<?php echo @$job->make ?>" name="make" id="make" />
                        </div>
                    </div>

<!--                     <div class="control-group required">
                        <label class="control-label required" for="model">Make & Model</label>
                        <div class="controls">
                            <input type="text" class="span6" required="" value="<?php echo @$job->model ?>" name="model" id="model"/>
                        </div>
                    </div>
 -->
                    <div class="control-group">
                        <label class="control-label" for="imei">Serial No/Imei</label>
                        <div class="controls">
                            <input type="text" class="span6" value="<?php echo @$job->imei ?>" name="imei" id="imei" />
                        </div>
                    </div>
                    <legend></legend>
                </fieldset>
                <fieldset>
                    <legend>Complaint Details</legend>
                    <div class="control-group">
                        <label class="control-label required" for="cus_comments">Customer Comments</label>
                        <div class="controls">
                            <textarea class="span6" required="" rows="8" name="cus_comments" id="cus_comments"><?php echo @$job->cus_comments ?></textarea>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label required" for="diagnostics">Diagnostics</label>
                        <div class="controls">
                            <textarea class="span6" required="" rows="8" name="diagnostics" id="diagnostics"><?php echo @$job->diagnostics ?></textarea>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="quotation">Quotation</label>
                        <div class="controls">
                            <input type="text" class="span6 validate[custom[number]]" placeholder="$0.00" value="<?php echo @$job->quotation ?>" name="quotation" id="quotation" />
                        </div>
                    </div>

<!--                     <div class="control-group">
                        <label class="control-label required" for="paid">Paid</label>
                        <div class="controls">
                            <select class="span6" name="paid" id="paid">
                                <option <?php if (@$job->paid == 'Yes') { ?> selected="" <?php } ?> value="Yes">Yes</option>
                                <option <?php if (@$job->paid == 'No') { ?> selected="" <?php } ?> value="No">No</option>
                            </select>
                        </div>
                    </div> -->


                    <div class="control-group">
                        <label class="control-label" for="fee">Service Fees (Non-Refundable)</label>
                        <div class="controls">
                            <input type="text" class="span6 validate[custom[number]]" placeholder="$0.00" value="<?php echo @$job->fee ?>" name="fee" id="fee" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="technician">Technician</label>
                        <div class="controls">
                            <select class="span6" name="technician" id="technician" >
                                <option value="" id="0">Select Technician </option>
                                <?php if(is_object($tech)||is_array($tech))
                                foreach($tech as $t)
                                {
                                    $select='';
                                    if ($t->id > 0) {
                                        if (@$job->technician == $t->id)
                                            $select='selected';
                                            echo '<option value="'.$t->id.'" '.$select.' >'.$t->first_name.' '.$t->last_name.'</option>';
                                            
                                    }
                                }
                                ?>
                            </select>

                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="status">Status</label>
                        <div class="controls">
                            <select class="span6" name="status" id="status">
                                <option <?php if (@$job->status == 'Not Done') { ?> selected="" <?php } ?> value="Not Done">Not Done</option>
                                <option <?php if (@$job->status == 'Checked') { ?> selected="" <?php } ?> value="Checked">Checked</option>
                                <option <?php if (@$job->status == 'Done') { ?> selected="" <?php } ?> value="Done">Done</option>
                                <option <?php if (@$job->status == 'Delivered') { ?> selected="" <?php } ?> value="Delivered">Delivered</option>
                                <option <?php if (@$job->status == 'Disposed') { ?> selected="" <?php } ?> value="Disposed">Disposed</option>
                            </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="office_notes">Office Notes</label>
                        <div class="controls">
                            <textarea class="span6" rows="8" name="office_notes" id="office_notes"><?php echo @$job->office_notes ?></textarea>
                        </div>
                    </div>

                </fieldset>
                <fieldset>


                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary" name="Submit">Submit</button>
                        <button type="button" onclick="window.location.href='<?php echo base_url()?>'" class="btn btn-primary" name="Cancel">Cancel</button>
                        <button type="reset" class="btn btn-primary" name="Submit">Reset</button>
                    </div>
                    </fieldset>
            </form>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $("#form1").validationEngine(
                {'custom_error_messages' : {
                        '.someClass':{
                            'integer':{
                                'message': "Invalid Phone"
                            }
                        }
                }}
            );
        });
        
        $('#cus_number').keyup(function(){
            if($.trim($(this).val().length) >= 6)
            {
                var cus_number = $(this).val().trim();
                $.ajax({
                url : '<?php echo base_url().'Jobs/get_customer_info'?>', 
                dataType: "JSON",    
                type: 'POST',
                data: {'cus_number':cus_number},
                
                success: function(json){
                        
                        if(json.status == 1){
                            $('#cus_first_name').val(json.user_info.cus_first_name);
                            $('#cus_last_name').val(json.user_info.cus_last_name);
                            $('#cus_email').val(json.user_info.cus_email);
                            $('#cus_business_name').val(json.user_info.cus_business_name);
                            $('#alternative_number').val(json.user_info.alternative_number);
                            $('#cus_address').val(json.user_info.cus_address);
                            //$('#accessories').val(json.user_info.accessories);
                            
                            //$('#office_notes').val(json.user_info.office_notes);
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        
                      if (jqXHR.status == 500) {
                          alert('Internal error: ' + jqXHR.responseText);
                      } else {
                          //alert('Unexpected error.');
                      }
                  }
                })   
            }
        })
    </script>
<?php $this->load->view('include/footer'); ?>