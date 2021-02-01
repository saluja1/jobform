<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Budget Mobile And Computers</title>
</head>
<style>
    .services_form {
        width: 842px;
        margin: 0 auto;
        font-family: Arial, Helvetica, sans-serif;
    }
</style>
<body onload="window.print();">
    <div class="services_form">
        <table width="100%" cellpadding="0" cellspacing="0">
            <tr>
                <td width="45%" style="border-right: solid 0px #000; border:solid 1px #000;">
                    <img style="width:50%;" height="70%"  src="<?php echo base_url('adminfiles/img/logo.jpg')?>" alt="" />
                </td>
                <td style="background-color:#d8d8d8; padding:10px 50px; box-sizing:border-box; border:solid 1px #000;">
                    <h1 style="margin:0; font-size:14px;">Budget Mobiles & Computers Limited</h1>
                    <p style="font-size:12px;">
                        89 Grey Street, Tauranga, New Zealand – 3110
                        <br />Landline: 075712599, Mobile: 0212051442
                        <br />Email: info@budgetmobiles.co.nz
                        <br />Website: www.budgetmobiles.co.nz
                    </p>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="padding:13px 0;">
                    <table width="100%" cellpadding="0" cellspacing="0">
                        <tr>
                            <td>
                                <table width="100%" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td width="50%"><strong>Job ID: <strong><?php echo mb_strtoupper($job->job_slug) ?></strong></strong>
                                        </td>
                                        <td width="50%"><strong>Created Date: <span><?php echo $job->created_date ?></span></strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="50%">&nbsp;</td>
                                        <td width="50%"><strong>Created By: <span><?php echo $job->first_name?></span></strong>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <table width="100%" cellpadding="0" cellspacing="0" style="border:solid 1px #000; padding:10px; line-height:18px; border-bottom:solid 0px #000;">
                        <tr>
                            <td colspan="2" style="font-weight:bold; font-size:14px;">CUSTOMER DETAIL</td>
                        </tr>
                        <tr>
                            <td width="50%" style="font-size:12px;"><strong>First Name:</strong>  <span><?php echo @$job->cus_first_name ?></span>
                            </td>
                            <td width="50%" style="font-size:12px;"><strong>Last Name:</strong>  <span><?php echo @$job->cus_last_name ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td width="50%" style="font-size:12px;"><strong>Email:</strong>  <span><?php echo @$job->cus_email ?></span>
                            </td>
                            <td width="50%" style="font-size:12px;"><strong>Contact:</strong>  <span><?php echo $job->cus_number ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td width="50%" style="font-size:12px;"><strong>Address:</strong>  <span><?php echo @$job->cus_address ?></span>
                            </td>
                            <td width="50%" style="font-size:12px;">&nbsp;</td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <table width="100%" cellpadding="0" cellspacing="0" style="border:solid 1px #000; padding:10px; line-height:18px; border-bottom:solid 0px #000;">
                        <tr>
                            <td colspan="2" style="font-weight:bold; font-size:14px;">DEVICE DETAILS</td>
                        </tr>
                        <tr>
                            <td width="50%" style="font-size:12px;"><strong>Brand:</strong>  <span><?php echo $job->make ?></span>
                            </td>
                            <td width="50%" style="font-size:12px;"><strong>Model:</strong>  <span><?php echo $job->model ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td width="50%" style="font-size:12px;"><strong>Serial No./IMEI:</strong>  <span><?php echo $job->imei ?></span>
                            </td>
                            <td width="50%" style="font-size:12px;"><strong>Accessories:</strong>  <span><?php echo $job->accessories ?></span>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <table width="100%" cellpadding="0" cellspacing="0" style="border:solid 1px #000; padding:10px; line-height:18px; border-bottom:solid 0px #000;">
                        <tr>
                            <td colspan="2" style="font-weight:bold; font-size:14px;">CUSTOMER COMMENTS:</td>
                            <td colspan="2" style="font-size:12px;">
                                <p><?php echo $job->cus_comments ?></p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <table width="100%" cellpadding="0" cellspacing="0" style="border:solid 1px #000; padding:10px; line-height:18px; border-bottom:solid 0px #000;">
                        <tr>
                            <td colspan="2" style="font-weight:bold; font-size:14px;">DIAGNOSTICS:</td>
                            <td colspan="2" style="font-size:12px;">
                                <p><?php echo $job->diagnostics ?></p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <table width="100%" cellpadding="0" cellspacing="0" style="border:solid 1px #000; padding:10px; line-height:15px; border-bottom:solid 0px #000;">
                        <tr>
                            <td width="50%" style="font-size:12px;"><strong>QUOTATION:</strong>  <span>$<?php echo $job->quotation ?></span>
                            </td>
                            <td width="50%" style="font-size:12px;"><strong>SERVICE FEES (NON-REFUNDABLE):</strong>  <span>$<?php echo $job->fee ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td width="50%" style="font-size:12px;"><strong>PAID:</strong>  <span><?php echo $job->paid ?></span>
                            </td>
                            <td width="50%" style="font-size:12px;"><strong>&nbsp;</strong>  <span>&nbsp;</span>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <table width="100%" cellpadding="0" cellspacing="0" style="border:solid 1px #000; padding:10px; line-height:22px; border-bottom:solid 1px #000;">
                        <tr>
                            <td colspan="2" style="font-weight:bold; font-size:14px;">TERMS & CONDITIONS:</td>
                        </tr>
                        <tr>
                            <td colspan="2" style="font-size:12px;">
                                 <ul>
                                    <li><small>We will attempt to keep the data on the phone but we cannot guarantee for that.</small></li>
                                    <li><small>We shall under no circumstances be held responsible for anything beyond the part we fix.</small></li>
                                    <li><small>We give you 3 months guarantee for the part we fix, if you think something wrong with other parts please give us a notice within 3 days otherwise we will consider that issue is not relevant to the fixing process and if there is any dent or physical damage we do not cover for it under warranty.</small></li>
                                    <li><small>We will not be held any responsibility for any loss of SIM card and memory and other accessories.</small></li>
                                    <li><small>The device can be kept in lieu of payment if you cannot be contacted after 30 days from service completion or you being notified available for collection. Your equipment may be retained permanently by Budget Mobiles & Computers to defray assessment, storage and/or repair costs and that I/We will have no claim against Budget Mobiles & Computers for said equipment once retained.</small></li>
                                    <li><small>For any phone fixing screen, we cannot make it as an original condition. Brightness or contrast of the screen might be a little bit different with the previous screen. if you want to make it perfect condition, please ask us for the OEM screen, an additional cost will be applied.</small></li>
                                    <li><small>For the glass change, if there is too much damage to the glass, there is a risk to damage the LCD when we take the glass off. In this case, LCD surcharge can be applied.</small></li>
                                    <li><small>There is No Warranty on liquid damage repairs. Some liquid damaged phones appear to be working; However, due to the corrosion, some functions might become malfunction at some stage.</small></li>
                                    <li><small>We will not be held any responsibility for restoring or updating your iPhone by connecting to iTunes when you have broken LCD; sometimes damaged touch screen keep sending wrong signals to the main board so it causes "iPhone is disabled". If you want us to try we could help you to sort it out but we do not cover for any other errors.</small></li>
                                    <li><small>We will not be held any responsibility for any functionalities such as Phone Network, Camera, Microphone, Ear speaker or Wi-fi signal issue. Because we cannot check any functionality before we fix.</small></li>
                                    <li><small>If you are given loan equipment it must be returned within 7 days after you;</small>
                                        <ul>
                                        <li><small>Are notified that the equipment submitted for repair cannot be repaired.</small></li>
                                        <li><small>Have decided not to proceed with any service.</small></li>
                                        <li><small>If you damage or lose or do not return the loan equipment you will be charged for its repair or replacement.</small></li>
                                        </ul></li>                                                                          
                                 </ul>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>