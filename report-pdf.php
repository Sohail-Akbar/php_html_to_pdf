<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <style>
        @font-face {
            font-family: 'Gotham Rounded Medium';
            src: url('./GothamRounded-Medium.otf');
        }

        body {
            font-family: 'Gotham Rounded Medium';
            color: #708090 !important;
        }

        .left_side {
            width: 63%;
            float: left;
            height: 97vh;
        }

        .right_side {
            width: 35%;
            float: right;
            background-color: #CCC;
            height: 97vh;
        }

        .width_100_per {
            width: 100%;
        }

        .width_90_per {
            width: 90%;
        }

        .width_95 {
            width: 95%;
            float: left;
        }

        .width_50 {
            width: 50%;
            float: left;
        }

        .color_white {
            color: #fff;
        }

        .border_radius_5 {
            border-radius: 5px;
        }

        .border_radius_10 {
            border-radius: 10px;
        }

        .bg_green {
            background-color: green;
        }

        .bg_red {
            background-color: red;
        }

        .bg_gray {
            background-color: #CCC;
        }

        .bg_purple {
            background-color: #8A3186;
        }

        .dark_bg_purple {
            background-color: #8A3186;
        }

        .mr_top20 {
            margin-top: 20px;
        }

        .mr_btm20 {
            margin-bottom: 20px;
        }

        .mr_top10 {
            margin-top: 10px;
        }

        .mr_btm10 {
            margin-bottom: 10px;
        }

        .height30 {
            height: 30px;
        }

        .mr_left_right_10 {
            margin-left: 10px;
            margin-right: 10px;
        }

        .padding_left_right_10 {
            padding-left: 10px;
            padding-right: 10px;
        }

        .heading_style {
            line-height: 30px;
            margin-top: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .gray_box_style {
            background-color: #ccc;
            border-radius: 10px;
            padding: 10px;
            font-size: 13px;
        }

        .gray_box_style tr {
            line-height: 10px;
        }

        .font-size_14 {
            font-size: 12px;
        }

        .font-size_13 {
            font-size: 11px;
        }

        .mr_top_bottom_30 {
            margin-top: 30px;
            margin-bottom: 30px;
        }

        .mr_top_bottom_20 {
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .mr_top_bottom_40 {
            margin-top: 40px;
            margin-bottom: 40px;
        }

        .mr_top_bottom_80 {
            margin-top: 80px;
            margin-bottom: 80px;
        }

        .mr_top_bottom_50 {
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .head_title_style {
            font-size: 24px;
            margin: 20px auto;
        }

        .font_size_11 {
            font-size: 10px;
            line-height: 22px;
            text-align: justify;
        }

        .font_size_16 {
            font-size: 14px;
            line-height: 22px;
            text-align: justify;
        }

        .font_color_purple {
            color: #893185;
        }

        .line_height10 {
            line-height: 10px;
        }

        .line_height30 {
            line-height: 30px;
        }

        .line_height35 {
            line-height: 35px;
        }

        .line_height100 {
            line-height: 100px;
        }

        .padding_btm {
            padding-bottom: 30px !important;
        }

        .font_size20 {
            font-size: 18px !important;
        }

        .font_size26 {
            font-size: 24px !important;
        }

        .font_size30 {
            font-size: 30px !important;
        }

        .font_size22 {
            font-size: 22px !important;
        }

        .table_td_style td {
            font-size: 20px;
            line-height: 26px;
        }

        .font_size4 {
            font-size: 4em;
        }

        .font_size2 {
            font-size: 2em;
        }

        .gray_color {
            color: #565a5a;
        }

        .margin_left20 {
            margin-left: 20px;
        }

        .margin_left50 {
            margin-left: 50px;
        }

        .margin_top100 {
            margin-top: 100px;
        }

        .margin_top50 {
            margin-top: 50px;
        }

        .font_size1point5 {
            font-size: 1.5em;
        }

        .margin_left_right_4_percent {
            margin-left: 4%;
            margin-right: 4%;
        }

        .border_right_top_btm_radius {
            border-top-right-radius: 100px;
            border-bottom-right-radius: 100px;
        }

        .width_75 {
            width: 75%;
            float: left;
        }

        .font_size3 {
            font-size: 2.5em;
        }

        .margin_top5 {
            margin-top: 5%;
        }

        .margin_top1 {
            margin-top: 0.8%;
        }

        .color_white {
            color: #ffffff !important;
        }

        .bg_red {
            background: #F64E60 !important;
        }

        .bg_success {
            background: #4dad33 !important;
        }

        .bg_warning {
            background: #FFA800 !important;
        }

        .line_height65 {
            line-height: 60px !important;
        }

        .border_radius {
            border-radius: 100px;
        }

        .width_86 {
            width: 86%;
            float: left;
            margin-left: 7%;
        }

        .line_height45 {
            line-height: 40px !important;
        }

        .text_center {
            text-align: center;
        }

        .text_right {
            text-align: right;
        }

        table.gray_color tr td {
            color: #565a5a;
        }

        .width_80_with_margin_20 {
            width: 92%;
            margin-left: 8%;
            float: left;
        }
    </style>
</head>

<body>
    <div class='left_side'>

        <div class='width_100_per gray_color'>
            <div class='width_80_with_margin_20'>
                <div class='width_50 mr_top_bottom_50'>
                    <div class='width_25 margin_left5'>
                        <img src='" . $agency_logo_image . "' style='width:50%;' />
                    </div>
                </div>
            </div>

            <div class='width_75 bg_purple border_right_top_btm_radius font_size3 margin_top5 '>
                <span class='color_white' style='marign-top: 20px; margin-left: 10%; line-height: 90px;'><b>Summary Report</b></span>
            </div>
            <div class='width_80_with_margin_20'>
                <h1 class='font_size2'><br>" . $TenantName . "</h1><br><br>
                <div class='width_95 color_white bg_success text_center border_radius'>
                    <span class='font_size3 line_height65'>Pass</span>
                </div>
            </div>
            <div class='width_80_with_margin_20'>
                <div class='width_100 line_height45'>

                    <table class='width_100_per  gray_color table_td_style' cellpadding='5'>
                        <tr>
                            <td colspan='2'>
                            <td>
                        </tr>
                        <tr>
                            <td colspan='2'>
                            <td>
                        </tr>
                        <tr>
                            <td colspan='2'>
                            <td>
                        </tr>
                        <tr>
                            <td colspan='2'>
                            <td>
                        </tr>
                        <tr>
                            <td width='35%' class='gray_color'><b>Reference</b></td>
                            <td width='65%'>" . $ObjTenants[0]->tenant_reference_number . "</td>
                        </tr>
                        <tr>
                            <td class='gray_color'><b>Requested by</b></td>
                            <td>" . $ObjTenants[0]->AgencyDetail->name . "</td>
                        </tr>
                        <tr>
                            <td class='gray_color'><b>Report Type</b></td>
                            <td>" . $ObjTenants[0]->reference_case . "</td>
                        </tr>
                        <tr>
                            <td class='gray_color'><b>Report Produced</b></td>
                            <td>" . date("d-m-Y H:i:s") . "</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class='width_80_with_margin_20'>
                <table class='width_95 mr_top_bottom_30' cellpadding='5'>
                    <tr class=' line_height30'>
                        <td colspan='4' align='left' style='border-bottom: 1px solid #ccc;'></td>
                    </tr>
                </table>
            </div>
            <div class='width_80_with_margin_20'>
                <table class='width_100_per' cellpadding='5'>
                    <tr class='mr_top_bottom_40 line_height30'>
                        <td colspan='4' align='left' class='gray_color font_size30'> <b>Applicant</b></td>
                    </tr>
                </table>

                <table class='width_100_per gray_color table_td_style' cellpadding='5'>
                    <tr>
                        <td width='35%' class='gray_color'><b>Applicant Name</b></td>
                        <td width='65%'>" . $TenantName . "</td>
                    </tr>
                    <tr>
                        <td class='gray_color'><b>Previous Name</b></td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td class='gray_color'><b>Date of Birth</b></td>
                        <td>" . date("d/m/Y", strtotime($ObjTenants[0]->dob)) . "</td>
                    </tr>
                    <tr>
                        <td class='gray_color'><b>Current Address</b></td>
                        <td>" . (($CurrentAddress) ? $CurrentAddress : 'N/A') . "</td>
                    </tr>
                    <tr>
                        <td class='gray_color'><b>Nationality</b></td>
                        <td>" . (($ObjTenants[0]->RightToRent->Nationality) ? $ObjTenants[0]->RightToRent->Nationality : 'N/A') . "</td>
                    </tr>
                    <tr>
                        <td class='gray_color'><b>Marital Status</b></td>
                        <td>" . (($ObjTenants[0]->marital_status) ? $ObjTenants[0]->marital_status : 'N/A') . "</td>
                    </tr>
                    <tr>
                        <td class='gray_color'><b>Dependents</b></td>
                        <td>" . (($ObjTenants[0]->check_dependants == '1' and trim($ObjTenants[0]->under_dependants) != "") ? $ObjTenants[0]->under_dependants : "None") . "</td>
                    </tr>
                    <tr>
                        <td class='gray_color'><b>Pets</b></td>
                        <td>" . (($ObjTenants[0]->pets == '1') ? ($ObjTenants[0]->pets_detail ? $ObjTenants[0]->pets_detail : 'Yes') : 'No') . "</td>
                    </tr>
                    <tr>
                        <td class='gray_color'><b>Smoker</b></td>
                        <td>" . (($ObjTenants[0]->smoker == '1') ? 'Yes' : 'No') . "</td>
                    </tr>
                </table>
            </div>
            <div class='width_80_with_margin_20'>
                <table class='width_95 mr_top_bottom_30' cellpadding='5'>
                    <tr class=' line_height30'>
                        <td colspan='4' align='left' style='border-bottom: 1px solid #ccc;'></td>
                    </tr>
                </table>
            </div>

            <div class='width_80_with_margin_20'>
                <table class='width_100_per' cellpadding='5'>
                    <tr class='mr_top_bottom_40 line_height30'>
                        <td colspan='4' align='left' class='gray_color font_size30'> <b>Residency</b></td>
                    </tr>
                </table>

                <table class='width_100_per gray_color table_td_style ' cellpadding='5'>
</body>

</html>