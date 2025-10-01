<?php
require_once "./dompdf/autoload.inc.php";

use Dompdf\Dompdf;
use Dompdf\Options;

$options = new Options();
$options->set('isRemoteEnabled', true);

$dompdf = new Dompdf($options);

$html = <<<HTML
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PDF 3 Columns</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        @page {
            margin: 0 10px !important;
            size: A4;
            padding: 0 !important;
        }

        .main-container .header {
            width: 100%;
        }

        .main-container .header .title {
            font-size: 60px;
            display: inline-block;
            vertical-align: middle;
            width: 75%;
            letter-spacing: 3px;
            font-weight: normal;
            margin-top: 60px;
            margin-bottom: 30px;
        }

        .main-container .header img {
            width: 20%;
            display: inline-block;
            vertical-align: middle;
            text-align: right;
            margin-top: 10px;
        }

        .margin-top-0 {
            margin-top: 0 !important;
        }

        .label {
            font-size: 20px;
        }

        .text {
            font-size: 17px;
        }

        .margin-top-10 {
            margin-top: 10px !important
        }

        .pass-btn {
            background: #4dad33 !important;
            width: 100%;
            color: white;
            height: 30px;
            font-size: 20px;
            text-align: center;
            border: none;
            padding-top: 10px;
        }

        .line {
            background: #333;
            height: 2px;
            width: 100%;
        }

        .row {
            width: 100%;
        }

        .col {
            width: 50%;
            /* 6/12 columns */
            font-size: 18px;
            vertical-align: top;
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

        .col-4 {
            width: 25%;
            /* 100 ÷ 4 = 25% */
            font-size: 16px;
            vertical-align: top;
            padding: 10px;
            text-align: center;
        }
        .text-white{
            color:white;
        }
    </style>
</head>

<body data-new-gr-c-s-check-loaded="14.1254.0" data-gr-ext-installed="">
    <div class="main-container">
        <div class="header">
            <h3 class="title">Credit Check</h3>
            <img
                src="http://192.168.10.100/lettinginbox//application/assets/images/company/1595421813logo_final_wht.png">
        </div>
        <div class="user-detail">
            <span class="label"><b>Mr Test User CreditMr Test User Credit</b></span>
            <br>
            <span class="text">2A Abbeydale Road, Sheffield, South Yorkshire, S7 1FD</span>
            <br>
            <br>
            <span class="label"><b>Reference</b> LIB-REF-001992</span>
            <br>
            <span class="text"><b>Requested By</b>ABC Test</span>
            <br>
            <br>
            <br>
            <button class="pass-btn">Pass</button>
        </div>
        <div class="line" style="margin-top:30px;"></div>
        <div class="row" style="margin-top:20px;">
            <table width="100%">
                <tr>
                    <td class="col">
                        <div class="col-box">
                            <span class="text"><b>Date of Birth</b> 20-07-1995</span>
                            <br>
                            <br>
                            <span class="text margin-top-10"><b>Age Flag</b></span>
                            <br>
                            <br>
                            <span class="text margin-top-10"><b>Nationality</b> --</span>
                        </div>
                    </td>
                    <td class="col">
                        <div class="col-box">
                            <span class="text"><b>Date of Birth Matched</b> Yes</span>
                            <br>
                            <br>
                            <span class="text"><b>Maiden Name</b> N/A</span>
                            <br>
                            <br>
                            <span class="text"><b>Undeclared Aliases</b></span>
                        </div>
                    </td>
                </tr>
            </table>
            <br>
            <br>
            <div class="headline">
                <img src="http://localhost/projects/test/html2pdf/html_to_pdf/Screenshot_2025_09_29-1.png">
            </div>
            <div class="line" style="margin-top:30px;"></div>
            <table class="row" style="margin-top: 30px; background: #893185 !important; padding-bottom:20px; border-radius: 10px !important;">
                <tr>
                    <td class="col-4 text-white">
                        <h2 class="" style="margin-bottom:5px;"><b>N/A</b></h2>
                        <span>Active County</span>
                        <br>
                        <span>Court Judgments</span>
                    </td>
                    <td class="col-4 text-white">
                        <h2 class="" style="margin-bottom:5px;"><b>N/A</b></h2>
                          <span>Satisfied County</span>
                        <br>
                        <span>Court Judgments</span>
                    </td>
                    <td class="col-4 text-white">
                       <h2 class="" style="margin-bottom:5px;"><b>N/A</b></h2>
                         <span>Discharged BAIs in</span>
                        <br>
                        <span>the last 6 years</span>
                    </td>
                    <td class="col-4 text-white">
                      <h2 class="" style="margin-bottom:5px;"><b>N/A</b></h2>
                        <span>Currently subject</span>
                        <br>
                        <span>to a BAI</span>
                    </td>
                </tr>
            </table>
            <br>
            <br>
            <span class="text"><b>Value of Active Judgments</b> £0.00</span>
             <table width="100%">
                <tr>
                    <td class="col">
                        <div class="col-box">
                            <span class="text"><b>Notice of Correction</b> N/A</span>
                        </div>
                    </td>
                    <td class="col">
                        <div class="col-box">
                            <span class="text"><b>Date of Birth Matched</b> Yes</span>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>
HTML;

$dompdf->loadHtml($html);
$dompdf->render();
$dompdf->stream("three_columns.pdf", ["Attachment" => 0]);
