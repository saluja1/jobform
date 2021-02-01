<style>
    td a {
        text-decoration: underline;
        color: blue;
    }
    .table p {
    text-decoration: underline;
}
</style>
    <div style="width: 98%; border: 1px solid #0044cc">


        <table style="border: none;width: 100%">
            <tr style="border-bottom: 2px solid #ff0000 ">
                <td colspan="2">
                    <img style="width: 28%;padding: 22px 0px 0px;"
                         src="<?php echo base_url('adminfiles/img/icon.jpg') ?>">
                </td>
            </tr>
            <tr>

                <td style="width: 50%;padding: 0 60px 0 10px;">
                    <strong>Budget Mobiles & Computers</strong><br>
                    89 Grey street, Tauranga 3110, New Zealand
                    Phone <a>07-5712599</a>, Mobile <a>021-2051442</a>
                    Email: <a>info@budgetmobiles.co.nz</a>
                    Website: <a>www.budgetmobiles.co.nz</a>
                </td>
                <td style="width: 50%;float: right;padding: 10px 0">
                    <div>
                        <strong>Job ID : </strong><?php echo mb_strtoupper($job->job_slug) ?><br>
                        <strong>Created Date : </strong><?php echo $job->created_date ?><br>
                        <strong>Created By : </strong><?php echo $job->first_name . ' ' . $job->last_name ?>
                    </div>
                </td>
            </tr>
        </table>

        <table style="border: 1px solid #0044cc;width: 100%">
            <thead>
            <tr>
                <th colspan="2" style="float: left">
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
                <td colspan="2" style="float: left">
                    Address: <?php echo @$job->cus_address ?>
                </td>
            </tr>

        </table>

        <table style="border: 1px solid #0044cc;width: 100%">
            <thead>
            <tr>
                <th colspan="2" style="float: left">
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
                <td>
                    Accessories : <?php echo $job->accessories ?>
                </td>
            </tr>

        </table>

        <table style="border: 1px solid #0044cc;width: 100%">
            <thead>
            <tr>
                <th colspan="2" style="float: left">
                    Complaint Details
                </th>
            </tr>
            </thead>
            <tr>
                <td width="50%">
                    Customer Comments: <?php echo $job->cus_comments ?>
                </td>
                <td>
                    Diagnostics: <?php echo $job->diagnostics ?>
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
                
                <tr>
                <td colspan="2" >
                        Technician :  <?php echo @$tech ?>
                    </td>
                    
                </tr>

        </table>

        <table style="border: 1px solid #0044cc;width: 100%">
            <thead>
            <tr>
                <th colspan="2" style="float: left">
                    Terms & Condtions
                </th>
            </tr>
            </thead>
            <tr>
                <td width="100%" style="font-size: x-small;">
                        <p>
                            <u>SERVICE WARRANTY: Budget Mobiles warranty only applies when the same fault occurs of the replaced part fails
                            within <strong>90 days</strong>
                            
                                of repair. EQUIPMENT FOUND TO BE LIQUID OR PHYSICALLY DAMAGED MAY, AT DISCRETION OF THE REPAIRER, IS EXCLUDED FROM ALL WARRANTIES. Our limited warranty
                                does not cover the following:
                            
                        </p>
                        <p>
                            
                                *Failure or defects caused by misuse, abuse, accident, physical damage, abnormal operation, improper handling or storage, neglect, alternation, removal
                                or repairs, failure to follow instructions, exposure to fire, water, liquid, food.
                            
                        </p>
                        <p>
                            
                                *Please be aware that all data &amp; settings may lose in some cases in the process of assessment and repair and may not be recoverable. Budget Mobiles
                                does not accept any responsibility for such loss of any user settings, contact list or data. Customer will be advice to ensure all data is backed up
                                prior to submitting in the unit for repair. Any claim against Budget Mobiles will be limited to the value of the hardware being repaired.
                            
                        </p>
                        <p>
                            *The equipment maybe kept in lieu of payment if you cannot be contacted after
                            <strong>30 days</strong>
                            
                                from service completion or you being notified available for collection. Your equipment may be retained permanently by Budget Mobiles to defray
                                assessment, storage and/or repair costs and that I/We will have no claim against Budget Mobiles for said equipment once retained.
                            
                        </p>
                        <p>
                            *If you are given loan equipment it must be returned
                            within <strong> 7 daysafter</strong> you. a) Are notified that the equipment submitted for repair cannot be repaired, b) Have decided not to proceed with any service.
                        </p>
                        <p>If you damage or lose or do not return the loan equipment you will be charged for its repair or replacement. For more details of your terms &amp;
                                conditions please visit our website at <a href="http://www.budgetmobiles.co.nz/" target="_blank">www.budgetmobiles.co.nz</a>
                            
                        </p>
                    </td>

            </tr>

        </table>


    </div>