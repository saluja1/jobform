<?php $this->load->view('include/header_print'); ?>
<style>
    td a {
        text-decoration: underline;
        color: blue;
    }
    .table {
    margin-bottom: 0;
}
.table th, .table td {
    font-size: 9pt;
    line-height: 9pt;
    padding: 3pt 8pt;
}
#terms p {
    font-size: 6pt;
}

</style>
    <div class="box">
        <div id="printableArea">


            <table style="border: none;font-size: 9pt;width: 100%">
                <tr style="border-bottom: 2px solid #ff0000 ">
                    <td colspan="2" >
                        <img style="width: 12%;padding: 20px 0px 0px;" src="<?php echo base_url('adminfiles/img/icon.png') ?>">
                    </td>
                </tr>
                <tr>

                    <td style="width: 50%;padding: 0 60px 0 10px;">
                        <strong>Budget Mobiles & Computers LTD</strong><br>
                        89 Grey street, Tauranga 3110, New Zealand<br>
                        Phone <a>07-5712599</a>, Mobile <a>021-2051442</a><br>
                        Email: <a>info@budgetmobiles.co.nz</a><br>
                        Website: <a>www.budgetmobiles.co.nz</a>
                    </td>
                    <td style="width: 50%;float: right;padding: 10px 0">
                        <div>
                            <strong>Job ID : </strong><?php echo mb_strtoupper($job->job_slug) ?><br>
                            <strong>Created Date : </strong><?php echo $job->created_date ?><br>
                            <strong>Created By : </strong><?php echo $job->first_name?>
                        </div>
                    </td>
                </tr>
            </table>

            <table class="table table-striped  bootstrap-datatable"><thead>
                <tr>
                    <th colspan="2">
                        Customer Detail
                    </th>
                </tr>
                </thead>
                <tr>
                    <td width="50%">
                        First Name: <?php echo @$job->cus_first_name ?>
                    </td>
                    <td>
                         Last Name: <?php echo @$job->cus_last_name ?>
                    </td>
                </tr>
                <tr>
                    <td width="50%">
                        Email: <?php echo @$job->cus_email ?>
                    </td>
                    <td>
                        Contact: <?php echo $job->cus_number ?>
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        Address: <?php echo @$job->cus_address ?>
                    </td>
                </tr>

            </table>

            <table class="table table-striped  bootstrap-datatable"><thead>
                <tr>
                    <th colspan="2">
                        <?php echo $title; ?>
                    </th>
                </tr>
                </thead>
                <tr>
                    <td width="50%">
                        Brand: <?php echo $job->make ?>
                    </td>
                    <td>
                        Model: <?php echo $job->model ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Serial No/Imei : <?php echo $job->imei ?>
                    </td>
                    <?php $font=''; if(strlen($job->accessories)>1000) 
                    {
                    $font='style="font-size: 5pt"';
                    }
                    else if(strlen($job->accessories)>700) 
                    {
                    $font='style="font-size: 6pt"';
                    }else if(strlen($job->accessories)>300) 
                    {
                    $font='style="font-size: 7pt"';
                    }
                    ?> 
                    <td <?php echo @$font; ?>>
                        Accessories : <?php echo $job->accessories ?>
                    </td>
                </tr>

            </table>

            <table class="table table-striped  bootstrap-datatable"><thead>
                <tr>
                    <th colspan="2">
                        Complaint Details
                    </th>
                </tr>
                </thead>
                <tr>
                <?php $font=''; if(strlen($job->cus_comments)>1000) 
                    {
                    $font='style="font-size: 5pt"';
                    }
                    else if(strlen($job->cus_comments)>700) 
                    {
                    $font='style="font-size: 6pt"';
                    }else if(strlen($job->cus_comments)>300) 
                    {
                    $font='style="font-size: 7pt"';
                    }
                    ?> 
                    <td width="50%" <?php echo @$font; ?>>
                    
                        <b>Customer Comments:</b> <?php echo $job->cus_comments ?>
                    </td>
                    <?php $font=''; if(strlen($job->diagnostics)>1000) 
                    {
                    $font='style="font-size: 5pt"';
                    }
                    else if(strlen($job->diagnostics)>700) 
                    {
                    $font='style="font-size: 6pt"';
                    }else if(strlen($job->diagnostics)>300) 
                    {
                    $font='style="font-size: 7pt"';
                    }
                    ?> 
                    <td width="50%" <?php echo @$font; ?>>
                        <b>Diagnostics:</b> <?php echo $job->diagnostics ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Quotation : $ <?php echo $job->quotation ?>
                    </td>
                    <td>
                        Service Fees (Non-Refundable): $ <?php echo $job->fee ?>
                    </td>
                </tr>
                
                <tr>
                <td width="50%">
                        Paid :  <?php echo $job->paid ?>
                    </td>
                    <td width="50%">
                        Status :  <?php echo $job->status ?>
                    </td>
                </tr>


            </table>

            <table id="terms" class="table table-striped  bootstrap-datatable" style="text-decoration: underline;"><thead>
                <tr>
                    <th colspan="3">
                        Terms & Conditions
                    </th>
                </tr>
                </thead>
                <tr>
                    <td colspan="3" width="100%">
                        <p>
                            <u>
                                SERVICE WARRANTY: Budget Mobiles &amp; Computers Ltd (BMC) warranty only applies when the same fault occurs of the replaced <strong>part</strong> fails
                                within <strong>90 days</strong> of repair. EQUIPMENT FOUND TO BE LIQUID OR PHYSICALLY DAMAGED MAY, AT DISCRETION OF THE REPAIRER, IS EXCLUDED FROM ALL
                                WARRANTIES. Our limited warranty does not cover the following:
                            </u>
                        </p>
                        <p>
                            <img
                                width="1"
                                height="1"
                                src="file:///C:/Users/MYASI_~1/AppData/Local/Temp/msohtmlclip1/01/clip_image001.gif"
                                alt="https://ssl.gstatic.com/ui/v1/icons/mail/images/cleardot.gif"
                                />
                            <u>
                                *Failure or defects caused by misuse, abuse, accident, physical damage, abnormal operation, improper handling or storage, neglect, alternation, removal
                                or repairs, failure to follow instructions, exposure to fire, water, liquid, food.
                            </u>
                        </p>
                        <p>
                            <u>*All Motherboard Repairs &amp; Water Damage Devices Repair comes with <strong>30 days</strong> warranty.</u>
                        </p>
                        <p>
                            <u>
                                *Please be aware that all data &amp; settings may lose in some cases in the process of assessment and repair and may not be recoverable. Budget Mobiles
                                &amp; Computers Ltd (BMC) does not accept any responsibility for such loss of any user settings, contact list or data. Customer will be advice to
                                ensure all data is backed up prior to submitting in the unit for repair. Any claim against Budget Mobiles &amp; Computers Ltd (BMC) will be limited to
                                the value of the hardware being repaired.
                            </u>
                        </p>
                        <p>
                            <u>
                                *Customers are advised to take their SD card/sim card out from phone before they give for repair as Budget Mobiles &amp; Computers Ltd (BMC) takes no
                                responsibility for any loss of sim card/SD card etc.
                            </u>
                        </p>
                        <p>
                            <u>
                                *The equipment maybe kept in lieu of payment if you cannot be contacted after <strong>30 days</strong> from service completion or you being notified
                                available for collection. Your equipment may be retained permanently by Budget Mobiles &amp; Computers Ltd (BMC) to defray assessment, storage and/or
                                repair costs and that I/We will have no claim against Budget Mobiles &amp; Computers Ltd (BMC) for said equipment once retained.
                            </u>
                        </p>
                        <p>
                            <u>
                                *If you are given loan equipment it must be returned within <strong>7 days</strong> after you. a) Are notified that the equipment submitted for repair
                                cannot be repaired, b) Have decided not to proceed with any service.
                            </u>
                        </p>
                        <p>
                            <u> *If you damage or lose or do not return the loan equipment you will be charged for its repair or replacement. </u>
                        </p>

                    </td>

                </tr>
                <tr>
                    <td style="width: 33%">
                        <br>
                        <br>
                        <br>
                        <strong>Customer Signature</strong>
                    </td><td style="width: 33%">
                        <br>
                        <br>
                        <br>
                        <strong>Received by:</strong>
                    </td><td style="width: 33%">
                        <br>
                        <br>
                        <br>
                        <strong>Date:</strong>
                    </td>
                </tr>

            </table>




        </div>

        

    </div>



    <script>
    $(document).ready(function(){
    window.print();
    });

        function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }

    </script>

<?php $this->load->view('include/footer'); ?>