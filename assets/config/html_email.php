<?php
session_start();

if (!isset($_POST['send'])) {
    //1. Redirect the users if they don't click our button
    $_SESSION['error_msg'] = "Try again!";
    header("Location: ../../contact");
} else {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // $html = "
    //     <div style=\"background-color: #fff000; border-radius: 10px; margin: 20px auto; color: #ffffff; padding=\"20px\"  \">
    //         <img src=\"https://earlyblog.frontfinancecapital.com/assets/img/logo.png\" style=\"width: 100px; height:100px; border-radius: 50%;\">
    //         <h3>Name: $name</h3>
    //         <h3>Email: $email</h3>
    //         <h3>Phone: $phone</h3>

    //         <h5>Message</h5>
    //         <p>
    //             $message
    //         </p>
    //     </div>
    // ";

    $html = "
        <!DOCTYPE HTML PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional //EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
        <html xmlns=\"http://www.w3.org/1999/xhtml\" xmlns:v=\"urn:schemas-microsoft-com:vml\" xmlns:o=\"urn:schemas-microsoft-com:office:office\">
        <head>
        <!--[if gte mso 9]>
        <xml>
          <o:OfficeDocumentSettings>
            <o:AllowPNG/>
            <o:PixelsPerInch>96</o:PixelsPerInch>
          </o:OfficeDocumentSettings>
        </xml>
        <![endif]-->
          <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
          <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
          <meta name=\"x-apple-disable-message-reformatting\">
          <!--[if !mso]><!--><meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"><!--<![endif]-->
          <title></title>
          
            <style type=\"text/css\">
              @media only screen and (min-width: 670px) {
          .u-row {
            width: 650px !important;
          }
          .u-row .u-col {
            vertical-align: top;
          }
        
          .u-row .u-col-50 {
            width: 325px !important;
          }
        
          .u-row .u-col-100 {
            width: 650px !important;
          }
        
        }
        
        @media (max-width: 670px) {
          .u-row-container {
            max-width: 100% !important;
            padding-left: 0px !important;
            padding-right: 0px !important;
          }
          .u-row .u-col {
            min-width: 320px !important;
            max-width: 100% !important;
            display: block !important;
          }
          .u-row {
            width: 100% !important;
          }
          .u-col {
            width: 100% !important;
          }
          .u-col > div {
            margin: 0 auto;
          }
        }
        body {
          margin: 0;
          padding: 0;
        }
        
        table,
        tr,
        td {
          vertical-align: top;
          border-collapse: collapse;
        }
        
        p {
          margin: 0;
        }
        
        .ie-container table,
        .mso-container table {
          table-layout: fixed;
        }
        
        * {
          line-height: inherit;
        }
        
        a[x-apple-data-detectors='true'] {
          color: inherit !important;
          text-decoration: none !important;
        }
        
        table, td { color: #000000; } #u_body a { color: #0000ee; text-decoration: underline; }
            </style>
          
          
        
        </head>
        
        <body class=\"clean-body u_body\" style=\"margin: 0;padding: 0;-webkit-text-size-adjust: 100%;background-color: #ffffff;color: #000000\">
          <!--[if IE]><div class=\"ie-container\"><![endif]-->
          <!--[if mso]><div class=\"mso-container\"><![endif]-->
          <table id=\"u_body\" style=\"border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;min-width: 320px;Margin: 0 auto;background-color: #ffffff;width:100%\" cellpadding=\"0\" cellspacing=\"0\">
          <tbody>
          <tr style=\"vertical-align: top\">
            <td style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top\">
            <!--[if (mso)|(IE)]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td align=\"center\" style=\"background-color: #ffffff;\"><![endif]-->
            
        
        <div class=\"u-row-container\" style=\"padding: 0px;background-color: transparent\">
          <div class=\"u-row\" style=\"Margin: 0 auto;min-width: 320px;max-width: 650px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #0d3a95;\">
            <div style=\"border-collapse: collapse;display: table;width: 100%;height: 100%;background-image: url('images/image-6.jpeg');background-repeat: no-repeat;background-position: center top;background-color: transparent;\">
              <!--[if (mso)|(IE)]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"padding: 0px;background-color: transparent;\" align=\"center\"><table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"width:650px;\"><tr style=\"background-image: url('images/image-6.jpeg');background-repeat: no-repeat;background-position: center top;background-color: #0d3a95;\"><![endif]-->
              
        <!--[if (mso)|(IE)]><td align=\"center\" width=\"650\" style=\"width: 650px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;\" valign=\"top\"><![endif]-->
        <div class=\"u-col u-col-100\" style=\"max-width: 320px;min-width: 650px;display: table-cell;vertical-align: top;\">
          <div style=\"height: 100%;width: 100% !important;\">
          <!--[if (!mso)&(!IE)]><!--><div style=\"box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;\"><!--<![endif]-->
          
        <table style=\"font-family:trebuchet ms,geneva;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
          <tbody>
            <tr>
              <td style=\"overflow-wrap:break-word;word-break:break-word;padding:300px 10px 10px;font-family:trebuchet ms,geneva;\" align=\"left\">
                
        <table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
          <tr>
            <td style=\"padding-right: 0px;padding-left: 0px;\" align=\"center\">
              
              <img align=\"center\" border=\"0\" src=\"https://cdn.templates.unlayer.com/assets/1593762363764-ss.png\" alt=\"Image\" title=\"Image\" style=\"outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 37%;max-width: 233.1px;\" width=\"233.1\"/>
              
            </td>
          </tr>
        </table>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table style=\"font-family:trebuchet ms,geneva;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
          <tbody>
            <tr>
              <td style=\"overflow-wrap:break-word;word-break:break-word;padding:10px 30px 40px;font-family:trebuchet ms,geneva;\" align=\"left\">
                
          <div style=\"line-height: 140%; text-align: left; word-wrap: break-word;\">
            <p style=\"font-size: 14px; line-height: 140%; text-align: center;\"><span style=\"font-size: 38px; line-height: 53.2px;\"><span style=\"line-height: 53.2px; font-family: 'trebuchet ms', geneva; font-size: 38px;\"><span style=\"line-height: 53.2px; font-size: 38px;\"><span style=\"color: #ffffff; line-height: 53.2px; font-size: 38px;\">Now taking off </span></span><span style=\"line-height: 53.2px; font-size: 38px;\"><span style=\"color: #ffffff; line-height: 53.2px; font-size: 38px;\">at </span></span></span><span style=\"line-height: 53.2px; font-family: 'trebuchet ms', geneva; font-size: 38px;\"><strong><span style=\"color: #ffffff; line-height: 53.2px; font-size: 38px;\">Los Angeles International Airport </span></strong></span></span></p>
          </div>
        
              </td>
            </tr>
          </tbody>
        </table>
        
          <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
          </div>
        </div>
        <!--[if (mso)|(IE)]></td><![endif]-->
              <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
            </div>
          </div>
        </div>
        
        
        
        <div class=\"u-row-container\" style=\"padding: 0px;background-color: transparent\">
          <div class=\"u-row\" style=\"Margin: 0 auto;min-width: 320px;max-width: 650px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #0f3b95;\">
            <div style=\"border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;\">
              <!--[if (mso)|(IE)]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"padding: 0px;background-color: transparent;\" align=\"center\"><table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"width:650px;\"><tr style=\"background-color: #0f3b95;\"><![endif]-->
              
        <!--[if (mso)|(IE)]><td align=\"center\" width=\"650\" style=\"width: 650px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;\" valign=\"top\"><![endif]-->
        <div class=\"u-col u-col-100\" style=\"max-width: 320px;min-width: 650px;display: table-cell;vertical-align: top;\">
          <div style=\"height: 100%;width: 100% !important;\">
          <!--[if (!mso)&(!IE)]><!--><div style=\"box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;\"><!--<![endif]-->
          
        <table style=\"font-family:trebuchet ms,geneva;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
          <tbody>
            <tr>
              <td style=\"overflow-wrap:break-word;word-break:break-word;padding:40px 10px 10px;font-family:trebuchet ms,geneva;\" align=\"left\">
                
          <div style=\"color: #ffffff; line-height: 140%; text-align: left; word-wrap: break-word;\">
            <p style=\"line-height: 140%; text-align: center; font-size: 14px;\"><span style=\"font-family: 'trebuchet ms', geneva; font-size: 14px; line-height: 19.6px;\"><span style=\"font-size: 30px; line-height: 42px;\">Welcome Airlines!</span></span></p>
          </div>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table style=\"font-family:trebuchet ms,geneva;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
          <tbody>
            <tr>
              <td style=\"overflow-wrap:break-word;word-break:break-word;padding:10px 40px 40px;font-family:trebuchet ms,geneva;\" align=\"left\">
                
          <div style=\"color: #ffffff; line-height: 160%; text-align: left; word-wrap: break-word;\">
            <p style=\"font-size: 14px; line-height: 160%; text-align: center;\"><span style=\"font-size: 16px; line-height: 25.6px;\">Big news! We're partnering with United to bring more places across the country, starting with Los Angeles International Airport. Find us in Terminal C for PreCheck passengers </span><span style=\"font-size: 16px; line-height: 25.6px;\">with standard security coming soon.</span></p>
          </div>
        
              </td>
            </tr>
          </tbody>
        </table>
        
          <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
          </div>
        </div>
        <!--[if (mso)|(IE)]></td><![endif]-->
              <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
            </div>
          </div>
        </div>
        
        
        
        <div class=\"u-row-container\" style=\"padding: NaNpx NaNpx NaNpx NaNpx;background-color: transparent\">
          <div class=\"u-row\" style=\"Margin: 0 auto;min-width: 320px;max-width: 650px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #1c2d97;\">
            <div style=\"border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;\">
              <!--[if (mso)|(IE)]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"padding: NaNpx NaNpx NaNpx NaNpx;background-color: transparent;\" align=\"center\"><table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"width:650px;\"><tr style=\"background-color: #1c2d97;\"><![endif]-->
              
        <!--[if (mso)|(IE)]><td align=\"center\" width=\"650\" style=\"width: 650px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;\" valign=\"top\"><![endif]-->
        <div class=\"u-col u-col-100\" style=\"max-width: 320px;min-width: 650px;display: table-cell;vertical-align: top;\">
          <div style=\"height: 100%;width: 100% !important;\">
          <!--[if (!mso)&(!IE)]><!--><div style=\"box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;\"><!--<![endif]-->
          
        <table style=\"font-family:trebuchet ms,geneva;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
          <tbody>
            <tr>
              <td style=\"overflow-wrap:break-word;word-break:break-word;padding:24px 10px 10px;font-family:trebuchet ms,geneva;\" align=\"left\">
                
          <div style=\"color: #ffffff; line-height: 140%; text-align: left; word-wrap: break-word;\">
            <p style=\"font-size: 14px; line-height: 140%; text-align: center;\"><strong><span style=\"font-size: 44px; line-height: 61.6px;\">Get 40% Off</span></strong></p>
          </div>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table style=\"font-family:trebuchet ms,geneva;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
          <tbody>
            <tr>
              <td style=\"overflow-wrap:break-word;word-break:break-word;padding:10px 40px 22px;font-family:trebuchet ms,geneva;\" align=\"left\">
                
          <div style=\"color: #ffffff; line-height: 160%; text-align: left; word-wrap: break-word;\">
            <p style=\"font-size: 14px; line-height: 160%; text-align: center;\"><span style=\"font-size: 18px; line-height: 28.8px;\">With the grand EWR opening, </span></p>
        <p style=\"font-size: 14px; line-height: 160%; text-align: center;\"><span style=\"font-size: 18px; line-height: 28.8px;\">it's the perfect time to try us again.</span></p>
          </div>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table style=\"font-family:trebuchet ms,geneva;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
          <tbody>
            <tr>
              <td style=\"overflow-wrap:break-word;word-break:break-word;padding:10px 10px 20px;font-family:trebuchet ms,geneva;\" align=\"left\">
                
          <!--[if mso]><style>.v-button {background: transparent !important;}</style><![endif]-->
        <div align=\"center\">
          <!--[if mso]><v:roundrect xmlns:v=\"urn:schemas-microsoft-com:vml\" xmlns:w=\"urn:schemas-microsoft-com:office:word\" href=\"\" style=\"height:49px; v-text-anchor:middle; width:264px;\" arcsize=\"183.5%\"  stroke=\"f\" fillcolor=\"#ffffff\"><w:anchorlock/><center style=\"color:#2c0e99;font-family:trebuchet ms,geneva;\"><![endif]-->  
            <a href=\"\" target=\"_blank\" class=\"v-button\" style=\"box-sizing: border-box;display: inline-block;font-family:trebuchet ms,geneva;text-decoration: none;-webkit-text-size-adjust: none;text-align: center;color: #2c0e99; background-color: #ffffff; border-radius: 90px;-webkit-border-radius: 90px; -moz-border-radius: 90px; width:auto; max-width:100%; overflow-wrap: break-word; word-break: break-word; word-wrap:break-word; mso-border-alt: none;font-size: 14px;\">
              <span style=\"display:block;padding:15px 50px;line-height:120%;\"><span style=\"font-size: 16px; line-height: 19.2px;\"><strong><span style=\"line-height: 19.2px; font-size: 16px;\">COME BACK FOR $220</span></strong></span></span>
            </a>
          <!--[if mso]></center></v:roundrect><![endif]-->
        </div>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table style=\"font-family:trebuchet ms,geneva;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
          <tbody>
            <tr>
              <td style=\"overflow-wrap:break-word;word-break:break-word;padding:10px 40px 32px;font-family:trebuchet ms,geneva;\" align=\"left\">
                
          <div style=\"color: #ffffff; line-height: 160%; text-align: left; word-wrap: break-word;\">
            <p style=\"line-height: 160%; text-align: center; font-size: 14px;\"><em><span style=\"font-size: 14px; line-height: 22.4px;\">Claim the offer before [Date Here]</span></em></p>
          </div>
        
              </td>
            </tr>
          </tbody>
        </table>
        
          <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
          </div>
        </div>
        <!--[if (mso)|(IE)]></td><![endif]-->
              <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
            </div>
          </div>
        </div>
        
        
        
        <div class=\"u-row-container\" style=\"padding: 0px;background-color: transparent\">
          <div class=\"u-row\" style=\"Margin: 0 auto;min-width: 320px;max-width: 650px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #f3f4f4;\">
            <div style=\"border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;\">
              <!--[if (mso)|(IE)]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"padding: 0px;background-color: transparent;\" align=\"center\"><table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"width:650px;\"><tr style=\"background-color: #f3f4f4;\"><![endif]-->
              
        <!--[if (mso)|(IE)]><td align=\"center\" width=\"650\" style=\"width: 650px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;\" valign=\"top\"><![endif]-->
        <div class=\"u-col u-col-100\" style=\"max-width: 320px;min-width: 650px;display: table-cell;vertical-align: top;\">
          <div style=\"height: 100%;width: 100% !important;\">
          <!--[if (!mso)&(!IE)]><!--><div style=\"box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;\"><!--<![endif]-->
          
        <table style=\"font-family:trebuchet ms,geneva;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
          <tbody>
            <tr>
              <td style=\"overflow-wrap:break-word;word-break:break-word;padding:38px 28px 28px;font-family:trebuchet ms,geneva;\" align=\"left\">
                
          <div style=\"color: #333333; line-height: 140%; text-align: left; word-wrap: break-word;\">
            <p style=\"font-size: 14px; line-height: 140%; text-align: center;\"><strong><span style=\"font-size: 28px; line-height: 39.2px;\">Starting in more places</span></strong></p>
          </div>
        
              </td>
            </tr>
          </tbody>
        </table>
        
          <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
          </div>
        </div>
        <!--[if (mso)|(IE)]></td><![endif]-->
              <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
            </div>
          </div>
        </div>
        
        
        
        <div class=\"u-row-container\" style=\"padding: 0px;background-color: transparent\">
          <div class=\"u-row\" style=\"Margin: 0 auto;min-width: 320px;max-width: 650px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #f3f4f4;\">
            <div style=\"border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;\">
              <!--[if (mso)|(IE)]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"padding: 0px;background-color: transparent;\" align=\"center\"><table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"width:650px;\"><tr style=\"background-color: #f3f4f4;\"><![endif]-->
              
        <!--[if (mso)|(IE)]><td align=\"center\" width=\"650\" style=\"width: 650px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;\" valign=\"top\"><![endif]-->
        <div class=\"u-col u-col-100\" style=\"max-width: 320px;min-width: 650px;display: table-cell;vertical-align: top;\">
          <div style=\"height: 100%;width: 100% !important;\">
          <!--[if (!mso)&(!IE)]><!--><div style=\"box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;\"><!--<![endif]-->
          
        <table style=\"font-family:trebuchet ms,geneva;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
          <tbody>
            <tr>
              <td style=\"overflow-wrap:break-word;word-break:break-word;padding:40px 10px;font-family:trebuchet ms,geneva;\" align=\"left\">
                
          <!--[if mso]><style>.v-button {background: transparent !important;}</style><![endif]-->
        <div align=\"center\">
          <!--[if mso]><v:roundrect xmlns:v=\"urn:schemas-microsoft-com:vml\" xmlns:w=\"urn:schemas-microsoft-com:office:word\" href=\"\" style=\"height:47px; v-text-anchor:middle; width:221px;\" arcsize=\"191.5%\"  stroke=\"f\" fillcolor=\"#2c0e99\"><w:anchorlock/><center style=\"color:#ffffff;font-family:trebuchet ms,geneva;\"><![endif]-->  
            <a href=\"\" target=\"_blank\" class=\"v-button\" style=\"box-sizing: border-box;display: inline-block;font-family:trebuchet ms,geneva;text-decoration: none;-webkit-text-size-adjust: none;text-align: center;color: #ffffff; background-color: #2c0e99; border-radius: 90px;-webkit-border-radius: 90px; -moz-border-radius: 90px; width:auto; max-width:100%; overflow-wrap: break-word; word-break: break-word; word-wrap:break-word; mso-border-alt: none;font-size: 14px;\">
              <span style=\"display:block;padding:15px 50px;line-height:120%;\"><span style=\"line-height: 16.8px;\"><strong><span style=\"line-height: 16.8px;\">View the locations</span></strong></span></span>
            </a>
          <!--[if mso]></center></v:roundrect><![endif]-->
        </div>
        
              </td>
            </tr>
          </tbody>
        </table>
        
          <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
          </div>
        </div>
        <!--[if (mso)|(IE)]></td><![endif]-->
              <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
            </div>
          </div>
        </div>
        
        
        
        <div class=\"u-row-container\" style=\"padding: 0px;background-color: transparent\">
          <div class=\"u-row\" style=\"Margin: 0 auto;min-width: 320px;max-width: 650px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #000000;\">
            <div style=\"border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;\">
              <!--[if (mso)|(IE)]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"padding: 0px;background-color: transparent;\" align=\"center\"><table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"width:650px;\"><tr style=\"background-color: #000000;\"><![endif]-->
              
        <!--[if (mso)|(IE)]><td align=\"center\" width=\"325\" style=\"width: 325px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;\" valign=\"top\"><![endif]-->
        <div class=\"u-col u-col-50\" style=\"max-width: 320px;min-width: 325px;display: table-cell;vertical-align: top;\">
          <div style=\"height: 100%;width: 100% !important;\">
          <!--[if (!mso)&(!IE)]><!--><div style=\"box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;\"><!--<![endif]-->
          
        <table style=\"font-family:trebuchet ms,geneva;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
          <tbody>
            <tr>
              <td style=\"overflow-wrap:break-word;word-break:break-word;padding:30px 20px 0px;font-family:trebuchet ms,geneva;\" align=\"left\">
                
          <div style=\"color: #9ca5a8; line-height: 140%; text-align: left; word-wrap: break-word;\">
            <p style=\"font-size: 14px; line-height: 140%; text-align: center;\"><span style=\"font-size: 16px; line-height: 22.4px;\"><strong><span style=\"line-height: 22.4px; font-size: 16px;\">Who we are&nbsp; &nbsp;How it works&nbsp; &nbsp; Support</span></strong></span></p>
          </div>
        
              </td>
            </tr>
          </tbody>
        </table>
        
          <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
          </div>
        </div>
        <!--[if (mso)|(IE)]></td><![endif]-->
        <!--[if (mso)|(IE)]><td align=\"center\" width=\"325\" style=\"width: 325px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;\" valign=\"top\"><![endif]-->
        <div class=\"u-col u-col-50\" style=\"max-width: 320px;min-width: 325px;display: table-cell;vertical-align: top;\">
          <div style=\"height: 100%;width: 100% !important;\">
          <!--[if (!mso)&(!IE)]><!--><div style=\"box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;\"><!--<![endif]-->
          
        <table style=\"font-family:trebuchet ms,geneva;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
          <tbody>
            <tr>
              <td style=\"overflow-wrap:break-word;word-break:break-word;padding:24px 20px 10px;font-family:trebuchet ms,geneva;\" align=\"left\">
                
        <div align=\"center\">
          <div style=\"display: table; max-width:264px;\">
          <!--[if (mso)|(IE)]><table width=\"264\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"border-collapse:collapse;\" align=\"center\"><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"border-collapse:collapse; mso-table-lspace: 0pt;mso-table-rspace: 0pt; width:264px;\"><tr><![endif]-->
          
            
            <!--[if (mso)|(IE)]><td width=\"32\" style=\"width:32px; padding-right: 21px;\" valign=\"top\"><![endif]-->
            <table align=\"left\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"32\" height=\"32\" style=\"width: 32px !important;height: 32px !important;display: inline-block;border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 21px\">
              <tbody><tr style=\"vertical-align: top\"><td align=\"left\" valign=\"middle\" style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top\">
                <a href=\" \" title=\"Facebook\" target=\"_blank\">
                  <img src=\"images/image-3.png\" alt=\"Facebook\" title=\"Facebook\" width=\"32\" style=\"outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important\">
                </a>
              </td></tr>
            </tbody></table>
            <!--[if (mso)|(IE)]></td><![endif]-->
            
            <!--[if (mso)|(IE)]><td width=\"32\" style=\"width:32px; padding-right: 21px;\" valign=\"top\"><![endif]-->
            <table align=\"left\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"32\" height=\"32\" style=\"width: 32px !important;height: 32px !important;display: inline-block;border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 21px\">
              <tbody><tr style=\"vertical-align: top\"><td align=\"left\" valign=\"middle\" style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top\">
                <a href=\" \" title=\"LinkedIn\" target=\"_blank\">
                  <img src=\"images/image-1.png\" alt=\"LinkedIn\" title=\"LinkedIn\" width=\"32\" style=\"outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important\">
                </a>
              </td></tr>
            </tbody></table>
            <!--[if (mso)|(IE)]></td><![endif]-->
            
            <!--[if (mso)|(IE)]><td width=\"32\" style=\"width:32px; padding-right: 21px;\" valign=\"top\"><![endif]-->
            <table align=\"left\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"32\" height=\"32\" style=\"width: 32px !important;height: 32px !important;display: inline-block;border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 21px\">
              <tbody><tr style=\"vertical-align: top\"><td align=\"left\" valign=\"middle\" style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top\">
                <a href=\" \" title=\"Pinterest\" target=\"_blank\">
                  <img src=\"images/image-2.png\" alt=\"Pinterest\" title=\"Pinterest\" width=\"32\" style=\"outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important\">
                </a>
              </td></tr>
            </tbody></table>
            <!--[if (mso)|(IE)]></td><![endif]-->
            
            <!--[if (mso)|(IE)]><td width=\"32\" style=\"width:32px; padding-right: 21px;\" valign=\"top\"><![endif]-->
            <table align=\"left\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"32\" height=\"32\" style=\"width: 32px !important;height: 32px !important;display: inline-block;border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 21px\">
              <tbody><tr style=\"vertical-align: top\"><td align=\"left\" valign=\"middle\" style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top\">
                <a href=\" \" title=\"Vimeo\" target=\"_blank\">
                  <img src=\"images/image-5.png\" alt=\"Vimeo\" title=\"Vimeo\" width=\"32\" style=\"outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important\">
                </a>
              </td></tr>
            </tbody></table>
            <!--[if (mso)|(IE)]></td><![endif]-->
            
            <!--[if (mso)|(IE)]><td width=\"32\" style=\"width:32px; padding-right: 0px;\" valign=\"top\"><![endif]-->
            <table align=\"left\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"32\" height=\"32\" style=\"width: 32px !important;height: 32px !important;display: inline-block;border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 0px\">
              <tbody><tr style=\"vertical-align: top\"><td align=\"left\" valign=\"middle\" style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top\">
                <a href=\" \" title=\"YouTube\" target=\"_blank\">
                  <img src=\"images/image-4.png\" alt=\"YouTube\" title=\"YouTube\" width=\"32\" style=\"outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important\">
                </a>
              </td></tr>
            </tbody></table>
            <!--[if (mso)|(IE)]></td><![endif]-->
            
            
            <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
          </div>
        </div>
        
              </td>
            </tr>
          </tbody>
        </table>
        
          <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
          </div>
        </div>
        <!--[if (mso)|(IE)]></td><![endif]-->
              <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
            </div>
          </div>
        </div>
        
        
        
        <div class=\"u-row-container\" style=\"padding: 0px;background-color: transparent\">
          <div class=\"u-row\" style=\"Margin: 0 auto;min-width: 320px;max-width: 650px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #000000;\">
            <div style=\"border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;\">
              <!--[if (mso)|(IE)]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"padding: 0px;background-color: transparent;\" align=\"center\"><table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"width:650px;\"><tr style=\"background-color: #000000;\"><![endif]-->
              
        <!--[if (mso)|(IE)]><td align=\"center\" width=\"650\" style=\"width: 650px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;\" valign=\"top\"><![endif]-->
        <div class=\"u-col u-col-100\" style=\"max-width: 320px;min-width: 650px;display: table-cell;vertical-align: top;\">
          <div style=\"height: 100%;width: 100% !important;\">
          <!--[if (!mso)&(!IE)]><!--><div style=\"box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;\"><!--<![endif]-->
          
        <table style=\"font-family:trebuchet ms,geneva;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
          <tbody>
            <tr>
              <td style=\"overflow-wrap:break-word;word-break:break-word;padding:9px;font-family:trebuchet ms,geneva;\" align=\"left\">
                
          <table height=\"0px\" align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 1px solid #000000;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%\">
            <tbody>
              <tr style=\"vertical-align: top\">
                <td style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%\">
                  <span>&#160;</span>
                </td>
              </tr>
            </tbody>
          </table>
        
              </td>
            </tr>
          </tbody>
        </table>
        
          <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
          </div>
        </div>
        <!--[if (mso)|(IE)]></td><![endif]-->
              <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
            </div>
          </div>
        </div>
        
        
        
        <div class=\"u-row-container\" style=\"padding: 0px;background-color: transparent\">
          <div class=\"u-row\" style=\"Margin: 0 auto;min-width: 320px;max-width: 650px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #07164d;\">
            <div style=\"border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;\">
              <!--[if (mso)|(IE)]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"padding: 0px;background-color: transparent;\" align=\"center\"><table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"width:650px;\"><tr style=\"background-color: #07164d;\"><![endif]-->
              
        <!--[if (mso)|(IE)]><td align=\"center\" width=\"650\" style=\"width: 650px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;\" valign=\"top\"><![endif]-->
        <div class=\"u-col u-col-100\" style=\"max-width: 320px;min-width: 650px;display: table-cell;vertical-align: top;\">
          <div style=\"height: 100%;width: 100% !important;\">
          <!--[if (!mso)&(!IE)]><!--><div style=\"box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;\"><!--<![endif]-->
          
        <table style=\"font-family:trebuchet ms,geneva;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
          <tbody>
            <tr>
              <td style=\"overflow-wrap:break-word;word-break:break-word;padding:30px 30px 0px;font-family:trebuchet ms,geneva;\" align=\"left\">
                
          <div style=\"color: #9ca5a8; line-height: 140%; text-align: left; word-wrap: break-word;\">
            <p style=\"font-size: 14px; line-height: 140%; text-align: center;\"><em>Questions relating to privacy and the protection of your personal information should be sent to touch@Airlines.com </em></p>
          </div>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table style=\"font-family:trebuchet ms,geneva;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
          <tbody>
            <tr>
              <td style=\"overflow-wrap:break-word;word-break:break-word;padding:10px 10px 30px;font-family:trebuchet ms,geneva;\" align=\"left\">
                
          <div style=\"color: #9ca5a8; line-height: 140%; text-align: left; word-wrap: break-word;\">
            <p style=\"font-size: 14px; line-height: 140%; text-align: center;\">&copy; Airlines.&nbsp; All Rights Reserved </p>
          </div>
        
              </td>
            </tr>
          </tbody>
        </table>
        
          <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
          </div>
        </div>
        <!--[if (mso)|(IE)]></td><![endif]-->
              <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
            </div>
          </div>
        </div>
        
        
            <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
            </td>
          </tr>
          </tbody>
          </table>
          <!--[if mso]></div><![endif]-->
          <!--[if IE]></div><![endif]-->
        </body>
        
        </html>
        
        ";

    // $to = "chrisgraham2625@gmail.com";
    $to = "support@earlyblog.frontfinancecapital.com";
    $subject = "Contact Message";
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    $headers .= "From: Early Blog <support@earlyblog.frontfinancecapital.com>";

    if (mail($to, $subject, $html, $headers)) {
        $_SESSION['success_msg'] = "We have received your mail";
        header("Location: ../../contact");
    } else {
        $_SESSION['error_msg'] = "Mail Not Sent!";
        header("Location: ../../contact");
    }
}
