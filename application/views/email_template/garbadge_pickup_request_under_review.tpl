<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui, user-scalable=no">
        <meta charset="UTF-8">
        <title>Test Drive Confirmation</title>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&display=swap');
            body {
                font-family: "Exo 2", Trebuchet MS, sans-serif;
                margin: 0;
                padding: 0;
            }
            .email-container {
                width: 600px;
                background: url("images/top-bg.png") no-repeat top center #ffffff;
            }
            @media screen and (max-width:747px) {
                .email-container {
                    width: 100%;
                    padding-top: 20px;
                }
                .d-block {
                    display: block;
                    clear: both;
                    padding: 10px 0;
                    width: 100%;
                }
                .d-none {
                    display: none;
                }
                .border-none {
                    border-right: none !important;
                    border-left: none;
                }
                .w-100 {
                    width: 100%;
                }
                .padding-0 {
                    padding-left: 0 !important;
                    padding-right: 0 !important;
                }
                .logo {
                    height: 80px !important;
                    width: auto !important;
                }
                .cmn-padding {
                    padding: 0 15px !important;
                }
                .footer-text {
                    font-size: 16px !important;
                    line-height: 18px !important;
                    display: flex;
                    align-items: center;
                }
                .car-img {
                    width: 100% !important;
                    height: auto !important;
                }
            }
        </style>
    </head>
    <body id="template">
    <table cellpadding="0" cellspacing="0" width="100%" style="margin:0;padding:0;font-family:'Exo 2',Trebuchet MS,sans-serif;background-color:#f2f2f2">
<tbody><tr>
  <td>
        <table align="center" class="email-container" cellpadding="0" cellspacing="0" bgcolor="#ffffff">
            <tr>
                <td>
                    <table
                        align="center"
                        class="email-container"
                        cellpadding="0"
                        cellspacing="0"
                        bgcolor="#ffffff">
                        <tr>
                            <td>
                                <table cellpadding="0" cellspacing="0" width="100%" class="header-section">
                                    <tr>
                                        <td valign="top"></td>
                                    </tr>
                                    <tr>
                                        <td align="center" style="padding-bottom: 20px;"><img align="center" border="0" src="<%base_url()%><%$configuration['company_logo']%>" alt="image" title="<%$configuration['company_name']%>" style="padding: 14px;outline: none;text-decoration: none;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 26%;max-width: 203px;background: transparent;mix-blend-mode: multiply;"/></td>
            </tr>
          </table></td>
      </tr>
      <tr>
        <td><table cellpadding="
                                            0" cellspacing="
                                            0" width="
                                            100%" class="
                                            header-section"="header-section"">
                                            <tr>
                                                <td align="center" style="font-size: 36px;">
                                                    <span style="color:#222222">Garbage Pickup Request Is Under Review
                                                        <br></span>
                                                    <span style="color: #EC1E24;font-size: 27px;">Thank You for Keeping Your City Clean!</span></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding:0 40px" class="cmn-padding">
                                        <!-- middle content -->

                                        <table cellpadding="0" cellspacing="0" width="100%">
                                            <tr>
                                                <td style="padding-top: 20px;">
                                                    <p style="font-size: 20px;">Hello!
                                                        <strong><%$user_name%></strong>
                                                    </p>
                                                    <p style="font-size: 16px; margin-bottom:30px">Your request is currently under review. Once approved, our team will assign a staff member and schedule the pickup shortly.</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                        <tr>
                                                            <td width="200">
                                                                <span style="color: #EC1E24; font-size:16px; font-weight:600"> Garbage Pickup Request</span></td>
                                                            <td style="border-bottom: 1px dashed #EC1E24">&nbsp;</td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 20px 0;">
                                                    <table width="100%" cellpadding="0" cellspacing="0">
                                                        <tr>
                                                            <td width="200" valign="top" class="d-block">
                                                                <img
                                                                    src="<%$img%>"
                                                                    alt="<%$type_of_waste%>"
                                                                    width="236"
                                                                    height="136"
                                                                    style="border-radius: 8px;max-width: 236px;"
                                                                    class="car-img"></td>
                                                                <td width="20" class="d-none">&nbsp;</td>
                                                                <td valign="top" style="font-size: 14px;" class="d-block">
                                                                    <p style="font-size:16px">
                                                                        <font color="#666666">
                                                                            <%$request_code%></font>
                                                                    </p>
                                                                    <p style="font-size:20px">
                                                                        <a href="#car_href#" style="text-decoration:none">
                                                                            <font color="#000000">
                                                                                <strong><%$type_of_waste%></strong>
                                                                            </font>
                                                                        </a>
                                                                    </p>
                                                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                        <tr>
                                                                            <td height="20">
                                                                                <span style="font-size:12px; color:#666666">Quantity / Volume</span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <span style="font-size:14px; color:#000000"><%$qty_vol%></span>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>


                                            <tr>
                                                <td style="padding: 10px 0;">
                                                    <table width="100%" cellpadding="0" cellspacing="0" height="60px">
                                                        <tr>
                                                            <td width="50%" style="border-right:1px solid #e0e0e0;padding: 5px 0px;">
                                                                <table role="presentation" cellpadding="0" cellspacing="0" border="0">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td style="vertical-align: top; padding-right: 10px;">
                                                                                <img
                                                                                    src="<%base_url()%>public/assets/images/calendar-icon.png"
                                                                                    width="30"
                                                                                    height="30"
                                                                                    alt="Calendar Icon"
                                                                                    style="display: block;margin-top: 9px;">
                                                                            </td>
                                                                            <td style="vertical-align: top;">
                                                                                <span style="font-size:12px;color:#666666;">Date</span><br>
                                                                                <span
                                                                                    style="font-size:18px;color:#000000;font-weight:600;margin-top:5px;display:inline-block;"><%$date%></span>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                            <td width="50%" style=" padding: 5px 15px;">
                                                                <table role="presentation" cellpadding="0" cellspacing="0" border="0">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td style="vertical-align: top; padding-right: 10px;">
                                                                                <img
                                                                                    src="<%base_url()%>public/assets/images/time-icon.png"
                                                                                    width="30"
                                                                                    height="30"
                                                                                    alt="Calendar Icon"
                                                                                    style="display: block;margin-top: 9px;">
                                                                            </td>
                                                                            <td style="vertical-align: top;">
                                                                                <span style="font-size:12px;color:#666666;">Slot</span><br>
                                                                                <span
                                                                                    style="font-size:18px;color:#000000;font-weight:600;margin-top:5px;display:inline-block;"><%$time%></span>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                        <tr>
                                                            <td width="70">
                                                                <span style="color: #EC1E24; font-size:16px; font-weight:600">Location</span></td>
                                                            <td style="border-bottom: 1px dashed #EC1E24">&nbsp;</td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 20px 0; color:#222222">
                                                    <span style="font-size:14px; color:#666666">Address</span><br>
                                                    <%$location%>
                                                </td>
                                            </tr>
                                            
                                            
                                            <tr>
                                                <td style="padding-top: 20px;margin:20px 40px; border-top:1px solid #f0f0f0;">
                                            <p style="font-size: 16px; margin-bottom:30px">We’re here to assist you in keeping your city clean and green, and we’d love to welcome you as part of the <%$configuration['company_name']%> family.</p>
                                            <p style="font-size: 16px; margin-bottom:30px">Look forward to serving you and keeping your surroundings clean!</p>
                                        </td>
                                    </tr>
                                   

                                </table>
                            </tr>
                            <tr>
                            <td style="padding:0 40px" class="cmn-padding">
                                <!-- middle content -->

                                <table cellpadding="0" cellspacing="0" width="100%">
                                    <tr>
                                        <td>
                                            <span style="color:#666666;font-size:14px;">Best Regards,</span>
                                            <p style="font-size:16px; color:#222222;font-weight:600;margin:5px 0 20px"><%$configuration['company_name']%></td>
                                        </tr>
                                        
                                       
          </table></td>
      </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                    </td>
</tr>
</tbody></table>
                                </body>
                            </html>