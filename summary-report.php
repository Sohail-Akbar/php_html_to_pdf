<?php
require_once "./dompdf/autoload.inc.php";

use Dompdf\Dompdf;
use Dompdf\Options;

$options = new Options();
$options->set('isRemoteEnabled', true);
$options->set('defaultFont', 'Outfit');

$dompdf = new Dompdf($options);

$html = <<<HTML
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Summary Report</title>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <style>
        @page {
            margin: 20px 10px !important;
            size: A4;
        }

        html,
        body {
            height: 100%;
            /* ensure full height */
            margin: 0;
            padding: 0;
            /* font-family: sans-serif; */
            font-family: "Outfit", sans-serif;
        }

        .row {
            display: table;
            /* table banaya */
            width: 100%;
            table-layout: fixed;
        }

        .col-8,
        .col-4 {
            display: table-cell;
            /* dono ko table cell banaya */
            vertical-align: top;
            /* content top pe rahe */
            /* border:1px solid #ccc */
        }

        .col-8 {
            width: 60%;
            /* 8/12 */
        }

        .col-4 {
            width: 38%;
            /* 4/12 */
        }

        .crown-img {
            width: 20px;
        }

        .content-center {
            text-align: center;
        }

        .main-container .top-heading {
            background: #8a3186;
            width: 75%;
            border-radius: 0 50px 50px 0px !important;
            height: 50px;
            margin-top: 30px;
        }

        .main-container .top-heading .title {
            font-size: 23px;
            color: white;
            /* padding-top: 10px; */
            padding-left: 38px;
            align-items: center;
        }

        .logo {
            width: 50%;
        }

        .main-container .pass-btn {
            background: #4dad33 !important;
            font-size: 20px;
            color: white;
            border-radius: 50% !important;
            width: 100%;
            border: none;
        }

        .main-container .report-info {
            width: 80%;
            margin-left: 40px;
        }

        .main-container .left-content {
            width: 50%;
        }

        .main-container  .text,
        .main-container .text {
            font-size: 14px;
            opacity: 0.8;
            margin-bottom: 20px;
            line-height: 1;
        }

        .main-container .right-content {
            width: 50%;
        }

        .line {
            width: 100%;
            height: 1px;
            background: #ccc;
            opacity: 0.5;
        }
    </style>
</head>

<body>
    <div class="main-container">
        <div class="row">
            <div class="col-8">
                <div class="content-center" style="width:200px">
                    <img src="https://cdn-icons-png.flaticon.com/512/657/657694.png" class="crown-img">
                    <br>
                    <span style="font-size:13px; margin-top:5px; letter-spacing: 4px;">KINGSDENE</span>
                </div>
                <div class="top-heading">
                    <h3 class="title">Summary Report</h3>
                </div>
                <h3 style="margin-left:40px;"><b>Mr Ricky John Turpin</b></h3>
                <div class="report-info">
                    <button class="pass-btn">Pass</button>
                    <table style="width:100%; border-collapse: collapse; margin-top:30px;">
                        <tr>
                            <td style="width:40%; vertical-align: top; display: unset;">
                                <span class="text"><b>Reference</b></span>
                            </td>
                            <td style="width:60%; vertical-align: top;">
                                <span class="text">LIB-REF-022176</span>
                            </td>
                        </tr>
                        <tr>
                            <td style="display: unset;"><span class="text"><b>Requested by</b></span></td>
                            <td><span class="text">Kingsdene Limited</span></td>
                        </tr>
                        <tr>
                            <td style="display: unset;"><span class="text"><b>Report Type</b></span></td>
                            <td><span class="text">Superior</span></td>
                        </tr>
                        <tr>
                            <td style="display: unset;"><span class="text"><b>Report Produced</b></span></td>
                            <td><span class="text">19-09-2025 16:43:06</span></td>
                        </tr>
                    </table>

                    <div class="line" style="margin-top:20px;margin-bottom:20px;"></div>
                    <h3 style="margin-bottom:0px; font-size:20px;" class="text"><b>Applicant</b></h3>
                    <table style="width:100%; border-collapse: collapse;">
                        <tr>
                            <td style="width:40%; vertical-align: top; display: unset;">
                                <span class="text"><b>Applicant Name</b></span>
                            </td>
                            <td style="width:60%; vertical-align: top;">
                                <span class="text">Mr Ricky John Turpin</span>
                            </td>
                        </tr>
                        <tr>
                            <td style="display: unset;"><span class="text"><b>Previous Name</b></span></td>
                            <td><span class="text">N/A</span></td>
                        </tr>
                        <tr>
                            <td style="display: unset;"><span class="text"><b>Date of Birth</b></span></td>
                            <td><span class="text">25/10/1971</span></td>
                        </tr>
                        <tr>
                            <td style="display: unset;"><span class="text"><b>Current Address</b></span></td>
                            <td><span class="text">44 Partisan Green Warrington WA5 7AA</span></td>
                        </tr>
                        <tr>
                            <td style="display: unset;"><span class="text"><b>Nationality</b></span></td>
                            <td><span class="text">British</span></td>
                        </tr>
                        <tr>
                            <td style="display: unset;"><span class="text"><b>Marital Status</b></span></td>
                            <td><span class="text">Married</span></td>
                        </tr>
                        <tr>
                            <td style="display: unset;"><span class="text"><b>Dependents</b></span></td>
                            <td><span class="text">None</span></td>
                        </tr>
                        <tr>
                            <td style="display: unset;"><span class="text"><b>Pets</b></span></td>
                            <td><span class="text">No</span></td>
                        </tr>
                        <tr>
                            <td style="display: unset;"><span class="text"><b>Smoker</b></span></td>
                            <td><span class="text">No</span></td>
                        </tr>
                    </table>
                    <div class="line" style="margin-top:20px;margin-bottom:20px;"></div>
                    <h3 style="margin-bottom:0px; font-size:20px;" class="text"><b>Residency</b></h3>
                    <table style="width:100%; border-collapse: collapse;">
                        <tr>
                            <td style="width:40%; vertical-align: top; display: unset;">
                                <span class="text"><b>Residential Status</b></span>
                            </td>
                            <td style="width:60%; vertical-align: top;">
                                <span class="text">Home Owner</span>
                            </td>
                        </tr>
                        <tr>
                            <td style="display: unset;"><span class="text"><b>Move In Date</b></span></td>
                            <td><span class="text">November 2015</span></td>
                        </tr>
                        <tr>
                            <td style="display: unset;"><span class="text"><b>Move Out Date</b></span></td>
                            <td><span class="text">N/A</span></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-4 right-sidebar content-center" style="background: #8a3186; color: #fff;">
                <div style="position:relative; height:1080px; width:100%;">
                    <!-- Top -->
                    <div style="position:absolute; top:0; left:0; right:0; padding:15px;">
                        <img src="http://localhost/projects/test/html2pdf/html_to_pdf/company_logo_white.png"
                            style="margin-top:20px;" class="logo">
                    </div>
                    <!-- Center -->
                    <div
                        style="position:absolute; top:50%; left:0; right:0; transform:translateY(-50%); padding:15px; text-align:center;">
                        <div class="center-content">
                            <p style="font-size:18px; margin-left: 30px;margin-right: 30px;">Protect your rental
                                income with
                                Rent Protection &
                                Legal Expenses
                                insurance.
                                Contact
                                Kingsdene Limited
                                to discuss the unique
                                benefits.</p>
                            <h2 style="margin: 0 !important;">£480</h2>
                            <h3 style="margin: 0 !important; font-size:14px;">Inc. IPT</h3>
                        </div>
                    </div>
                    <!-- Bottom -->
                    <div style="position:absolute; bottom:20px; left:0; right:0; padding:15px;">
                        <small class="footer-content">lettingsinabox.co.uk</small>
                    </div>
                </div>
            </div>
        </div>
        <!-- second page -->
        <div class="row">
            <div class="col-8">
                <div style="position:relative; width:100%;">
                    <div class="report-info" style="margin-top:30px;">
                        <h3 style="margin-bottom:0px; font-size:20px;" class="text"><b>Credit History</b></h3>
                        <table style="width:100%; border-collapse: collapse;">
                            <tr>
                                <td style="width:40%; vertical-align: top; display: unset;">
                                    <span class="text"><b>Reference</b></span>
                                </td>
                                <td style="width:60%; vertical-align: top;">
                                    <span class="text">LIB-REF-022176</span>
                                </td>
                            </tr>
                            <tr>
                                <td style="display: unset;"><span class="text"><b>Requested by</b></span></td>
                                <td><span class="text">Kingsdene Limited</span></td>
                            </tr>
                            <tr>
                                <td style="display: unset;"><span class="text"><b>Report Type</b></span></td>
                                <td><span class="text">Superior</span></td>
                            </tr>
                            <tr>
                                <td style="display: unset;"><span class="text"><b>Report Produced</b></span></td>
                                <td><span class="text">19-09-2025 16:43:06</span></td>
                            </tr>
                        </table>
                        <div class="line" style="margin-top:20px;margin-bottom:20px;"></div>
                        <h3 style="margin-bottom:0px; font-size:20px;" class="text"><b>Applicant</b></h3>
                        <table style="width:100%; border-collapse: collapse;">
                            <tr>
                                <td style="width:40%; vertical-align: top; display: unset;">
                                    <span class="text"><b>Applicant Name</b></span>
                                </td>
                                <td style="width:60%; vertical-align: top;">
                                    <span class="text">Mr Ricky John Turpin</span>
                                </td>
                            </tr>
                            <tr>
                                <td style="display: unset;"><span class="text"><b>Previous Name</b></span></td>
                                <td><span class="text">N/A</span></td>
                            </tr>
                            <tr>
                                <td style="display: unset;"><span class="text"><b>Date of Birth</b></span></td>
                                <td><span class="text">25/10/1971</span></td>
                            </tr>
                            <tr>
                                <td style="display: unset;"><span class="text"><b>Current Address</b></span></td>
                                <td><span class="text">44 Partisan Green Warrington WA5 7AA</span></td>
                            </tr>
                            <tr>
                                <td style="display: unset;"><span class="text"><b>Nationality</b></span></td>
                                <td><span class="text">British</span></td>
                            </tr>
                            <tr>
                                <td style="display: unset;"><span class="text"><b>Marital Status</b></span></td>
                                <td><span class="text">Married</span></td>
                            </tr>
                            <tr>
                                <td style="display: unset;"><span class="text"><b>Dependents</b></span></td>
                                <td><span class="text">None</span></td>
                            </tr>
                            <tr>
                                <td style="display: unset;"><span class="text"><b>Pets</b></span></td>
                                <td><span class="text">No</span></td>
                            </tr>
                            <tr>
                                <td style="display: unset;"><span class="text"><b>Smoker</b></span></td>
                                <td><span class="text">No</span></td>
                            </tr>
                        </table>
                        <div class="line" style="margin-top:20px;margin-bottom:20px;"></div>
                        <h3 style="margin-bottom:0px;font-size:20px;" class="text"><b>Residency</b></h3>
                        <table style="width:100%; border-collapse: collapse;">
                            <tr>
                                <td style="width:40%; vertical-align: top; display: unset;">
                                    <span class="text"><b>Residential Status</b></span>
                                </td>
                                <td style="width:60%; vertical-align: top;">
                                    <span class="text">Home Owner</span>
                                </td>
                            </tr>
                            <tr>
                                <td style="display: unset;"><span class="text"><b>Move In Date</b></span></td>
                                <td><span class="text">November 2015</span></td>
                            </tr>
                            <tr>
                                <td style="display: unset;"><span class="text"><b>Move Out Date</b></span></td>
                                <td><span class="text">N/A</span></td>
                            </tr>
                        </table>
                    </div>
                    <!-- Bottom -->
                    <div
                        style="position:absolute; bottom:0; left:25px; right:30px; padding:15px; text-align: justify !important;">
                        <small class="footer-content" style="font-size:9px; text-align: justify !important;">
                            This report has been provided by Quodex
                            The outcome in this report is based on the information available to Lettings in a box™ at
                            the
                            time. An applicant's circumstances and credit worthiness can change from time to time. In
                            accordance with statutory requirements the Agent or Landlord must view and retain an
                            original
                            copy of the applicants Right to Rent documents prior to completion of any tenancy agreement.
                            This report should not be used as the sole reason for making a decision to let a property to
                            a
                            prospective tenant. Lettings in a box™ will not be liable for any inaccuracy or
                            incompleteness of
                            any information appearing in this report. This reference is based on data obtained at a
                            specific
                            point of time and as such will be at its most reliable on the day it is produced. The
                            circumstances and performance of each tenant or guarantor may change from day to day.
                            Lettings in a box™ shall not be liable for any loss or damage suffered or incurred by any
                            person
                            (whether directly or indirectly) as a result of or in connection with a tenant or guarantor
                            failing
                            to comply with any terms of a tenancy agreement. You acknowledge that letting a property
                            carries commercial risk. We recommend that you or the landlord purchase appropriate
                            insurance to protect against rent arrears, damage to the property and legal expenses
                            associated with the eviction of a tenant. This report has been provided subject to our terms
                            and
                            conditions.
                        </small>
                    </div>
                </div>

            </div>
            <div class="col-4 right-sidebar content-center" style="background: #8a3186; color: #fff;">
                <div style="position:relative; height:1080px; width:100%;">
                    <!-- Top -->
                    <div style="position:absolute; top:0; left:0; right:0; padding:15px;">
                        <img src="http://localhost/projects/test/html2pdf/html_to_pdf/company_logo_white.png"
                            style="margin-top:20px;" class="logo">
                    </div>
                    <!-- Center -->
                    <div
                        style="position:absolute; top:50%; left:0; right:0; transform:translateY(-50%); padding:15px; text-align:center;">
                    </div>
                    <!-- Bottom -->
                    <div
                        style="position:absolute; bottom:40px; left:0; right:0; padding:15px; text-align: justify !important;">
                        <small class="footer-content" style="font-size:9px; text-align: justify !important;">
                            This report has been provided by Quodex
                            Limited trading as Lettings in a box™.
                            Registered in England and Wales. Company
                            number 11434933. Registered office address 10
                            Guildhall Street, Grantham, Lincolnshire, NG31
                            6NJ. Lettings in a box™ is also the trading style
                            of a trading style of C&C Risks UK Limited. C&C
                            Risks UK Limited is an Appointed
                            Representative of Spero Limited which is
                            Authorised and Regulated by the Financial
                            Conduct Authority (FRN 950311). C&C Risks UK
                            Limited. Registered in England No. 13016555.
                            Registered office address The Stables 32 Main
                            Street, Ashley, Market Harborough, United
                            Kingdom, LE16 8HF.</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
HTML;

$dompdf->loadHtml($html);
$dompdf->render();
$dompdf->stream("columns_8_4.pdf", ["Attachment" => 0]);



// $dompdf->loadHtml($html);
// $dompdf->render();

// // ✅ PDF ko save karna
// $output = $dompdf->output();
// $filePath = __DIR__ . "/summary_report.pdf"; // current folder me save hoga

// file_put_contents($filePath, $output);

// echo "PDF saved successfully at: " . $filePath;
