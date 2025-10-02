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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <style>
        @page {
            margin: 10px 30px !important;
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

        .main-container .header {
            width: 100%;
        }

        .main-container .header .title {
            font-size: 60px;
            font-weight: 500;
            display: inline-block;
            vertical-align: middle;
            width: 75%;
            letter-spacing: 3px;
            margin-top: 20px;
            margin-bottom: 30px;
        }

        .main-container .header img {
            width: 20%;
            display: inline-block;
            vertical-align: middle;
            text-align: right;
            /* margin-top: 10px; */
        }

        .margin-top-0 {
            margin-top: 0 !important;
        }

        .line {
            background: #333;
            height: 2px;
            width: 100%;
        }

        .gradiant_color {
            background: url('D:/xampp/htdocs/projects/test/html2pdf/html_to_pdf/Screenshot_2025_09_29-1.png') repeat-x;
            /* horizontal gradient */
            height: 20px;
            width: 100%;
        }

        .headline img {
            width: 100%;
        }

        .text-white {
            color: white;
        }

        .main-container .text {
            font-size: 14px;
        }

        .main-container .pass-button {
            background: #ffa800;
            color: white;
            font-size: 25px;
            font-weight: 600;
            margin: 0px;
            padding: 0px;
            width: 100%;
            text-align: center;
            border: none;
            height: 50px;
            margin-top: 40px;
        }

        .main-container .line {
            background: #333;
            height: 2px;
            width: 100%;
        }

        .main-container .details {
            margin-top: 20px;
        }

        .row {
            width: 100%;
        }

        .col-4 {
            width: 25%;
            /* 100 ÷ 4 = 25% */
            font-size: 16px;
            vertical-align: top;
            padding: 10px;
            text-align: center;
        }

        .main-container .headline {
            position: relative;
        }

        .main-container .headline .item {
            position: absolute;
            right: 15%;
            transform: translateY(-15%);
            font-size: 30px;
            color: white;
            font-weight: 600;
        }
    </style>
</head>

<body>
    <div class="main-container">
        <div class="header">
            <h3 class="title">Credit Check</h3>
            <img src="http://192.168.100.6/projects/test/html2pdf/html_to_pdf/1595421813logo_final_wht.png">
        </div>
        <div class="user-info">
            <h3 style="margin:0px;line-height: 1px;"><b>Dr Saba Aslam</b></h3>
            <span class="text">95A Queens Road, London</span>
            <br>
            <span class="text">Reference LIB-REF-022373</span>
            <br>
            <span class="text">Requested By Cribs Estates Limited</span>
        </div>
        <button class="pass-button">Pass with condition</button>
        <div class="line" style="margin-top:15px;"></div>
        <div class="details">
            <table style="width:100%; border-collapse: collapse;">
                            <tr>
                                <td style="width:50%; vertical-align: top; display: unset;">
                                    <span class="text"><b>Date of Birth:</b> 19-04-1993</span>
                                </td>
                                <td style="width:50%; vertical-align: top;">
                                    <span class="text"><b>Date of Birth Matched:</b> Yes</span>
                                </td>
                            </tr>
                            <tr>
                                <td style="display: unset;"><span class="text"><b>Age Flag:</b> Applicant's age is valid (no warning)</span></td>
                                <td><span class="text"><b>Maiden Name:</b> N/A</span></td>
                            </tr>
                            <tr>
                                <td style="display: unset;"><span class="text"><b>Nationality:</b> --</span></td>
                                <td><span class="text"><b>Undeclared Aliases:</b> 0</span></td>
                            </tr>
                        </table>
        </div>
        <div class="headline" style="margin-top:20px;">
            <img src="http://localhost/projects/test/html2pdf/html_to_pdf/Screenshot_2025_09_29-1.jpg">
            <span class="item">553</span>
        </div>
        <div class="line" style="margin-top:25px;"></div>
        <table class="row"
            style="margin-top: 30px; background: #893185 !important; padding-bottom:10px; border-radius: 10px !important;">
            <tr>
                <td class="col-4 text-white">
                    <span style="font-size: 25px;"><b>N/A</b></span>
                    <br>
                    <div style="font-size: 12px;">Active County</div>
                    <div style="font-size: 12px;">Court Judgments</div>
                </td>
                <td class="col-4 text-white">
                    <span style="font-size: 25px;"><b>N/A</b></span>
                    <br>
                    <div style="font-size: 12px;">Satisfied County</div>
                    <div style="font-size: 12px;">Court Judgments</div>
                </td>
                <td class="col-4 text-white">
                    <span style="font-size: 25px;"><b>N/A</b></span>
                    <br>
                    <div style="font-size: 12px;">Discharged BAIs in</div>
                    <div style="font-size: 12px;">the last 6 years</div>
                </td>
                <td class="col-4 text-white">
                    <span style="font-size: 25px;"><b>N/A</b></span>
                    <br>
                    <div style="font-size: 12px;">Currently subject</div>
                    <div style="font-size: 12px;">to a BAI</div>
                </td>
            </tr>
        </table>
        <div class="details">
                        <table style="width:100%; border-collapse: collapse;">
                            <tr>
                                <td style="width:50%; vertical-align: top; display: unset;">
                                    <span class="text">Value of Active Judgments £0.00</span>
                                </td>
                                <td style="width:50%; vertical-align: top;">
                                    <span class="text"></span>
                                </td>
                            </tr>
                            <tr>
                                <td style="display: unset;"><span class="text">Age Flag Applicant's age is valid (no warning)</span></td>
                                <td><span class="text">Notice of Dispute 0</span></td>
                            </tr>
                        </table>
        </div>
        <div class="line" style="margin-top:25px;"></div>
        <div class="address-confirmation">
            <h3><b>Address Confirmation</b></h3>
            <table width="100%" style="border-collapse: collapse;">
                <tr>
                    <td width="50%" style="padding:5px; vertical-align: top;">
                        <span class="text"><b>Address</b></span><br>
                        <span style="font-size:10px;">C FLAT 30, CLYDE HOUSE, 14 CLYDE STREET, GLASGOW G1 5HN</span><br>
                    </td>
                    <td width="50%" style="vertical-align: top;">
                        <table width="100%" style="border-collapse: collapse;">
                            <tr>
                                <td width="50%" style="padding:5px; vertical-align: top;">
                                    <span class="text"><b>Level</b></span><br>
                                    <span style="font-size:10px;">Not Confirmed</span><br>
                                </td>
                                <td width="50%" style="padding:5px; vertical-align: top;">
                                    <span class="text"><b>Source</b></span><br>
                                    <span style="font-size:10px;">Not Applicable</span><br>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
        <div class="line" style="margin-top:25px;"></div>
        <footer style="text-align: center; font-size: 12px; margin-top: 20px; color: #555; margin-top:80px;">
            <div style="font-size:10px;">Date and Time of Search 29-09-2025 18:05 PM</div>
            <div style="font-size:10px;">Credit Check Reference: {98B4EA07-B113-49BE-AF5F-0C4EA2668014}</div>
        </footer>
        <br>
        <span></span>
        <div class="line" style="margin-top:35px;"></div>
        <div style="height:300px;">
            <h3><b>County Court Judgments</b></h3>
            <span>N/A</span>
        </div>
        <div class="line"></div>
        <div>
            <h3 style="margin-bottom:0px;"><b>Reported Aliases</b></h3>
            <small style="font-size:10px;">N/A</small>
        </div>
        <div class="line" style="margin-top:30px;"></div>
        <div>
            <h3 style="margin-bottom:10px;"><b>Report Comments</b></h3>
            <small style="font-size:10px;">Credit check and AML check only. The applicant has a common name and has a
                number of fuzzy matches on Adverse Media, Warnings, PEPs and Fitness probity. We
                recommend the agent reviews the report under Adverse Media.</small>
        </div>
        <div class="line" style="margin-top:20px;"></div>
        <table width="100%" style="border-collapse: collapse; margin-top:30px;">
            <tr>
                <td style="width:48%; text-align:left; vertical-align: top;">
                    <h3 style="margin:0;"><b>Condition of use</b></h3>
                </td>
                <td style="width:48%; text-align:right; vertical-align: top;">
                    <div>lettingsinabox.co.uk</div>
                </td>
            </tr>
        </table>
        <p style="font-size:11px;">The outcome in this report is based on the information available to Lettingsinabox™
            at the time. An applicant’s circumstances and credit worthiness can change from
            time to time. In accordance with statutory requirements the Agent or Landlord must view and retain an
            original copy of the applicants Right to Rent documents prior to
            completion of any tenancy agreement. This report should not be used as the sole reason for making a decision
            to let a property to a prospective tenant. Lettingsinabox™
            will not be liable for any inaccuracy or incompleteness of any information appearing in this report. This
            reference is based on data obtained at a specific point of time
            and as such will be at its most reliable on the day it is produced. The circumstances and performance of
            each tenant or guarantor may change from day to day.
            Lettingsinabox™ shall not be liable for any loss or damage suffered or incurred by any person (whether
            directly or indirectly) as a result of or in connection with a tenant
            or guarantor failing to comply with any terms of a tenancy agreement. You acknowledge that letting a
            property carries commercial risk. We recommend that you or the
            landlord purchase appropriate insurance to protect against rent arrears, damage to the property and legal
            expenses associated with the eviction of a tenant. This report
            has been provided subject to our terms and conditions.
            This report has been provided by Quodex Limited trading as Lettingsinabox™. Registered in England and Wales.
            Company number 11434933. Registered office address
            Autumn Park Business Centre, Dysart Road, Grantham, Lincolnshire, NG31 7EU. Lettingsinabox™ is also the
            trading style of a trading style of Infinity Risks Limited. Infinity
            Risks Limited is Authorised and Regulated by the Financial Conduct Authority (FRN 933869). Infinity Risks
            Limited. Registered in England No. 12812415. Registered office
            address 71-75 Shelton Street, Covent Garden, London WC2H 9JQ</p>
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
