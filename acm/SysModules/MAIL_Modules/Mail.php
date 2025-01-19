<?php

//mailer starter
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/vendor/phpmailer/phpmailer/src/Exception.php';
require __DIR__ . '/vendor/phpmailer/phpmailer/src/PHPMailer.php';
require __DIR__ . '/vendor/phpmailer/phpmailer/src/SMTP.php';

require __DIR__ . '/vendor/autoload.php';

//Send Mails
function SENDMAILS($Subject, $Title, $Sendto, $MAIL_MSG, $ATTACHEMENTS = NULL, $die = false)
{

  if ($Sendto != null && $Sendto != "" && $Sendto != " ") {
    if (CONTROL_MAILS == true) {
      $mail = new PHPMailer(true);

      //Server settings
      if ($die == true) {
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                     //Enable verbose debug output
      }

      $mail->isSMTP();                                               //Send using SMTP
      $mail->Host       = SMTP_CONFIGS("HOST");                     //Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                    //Enable SMTP authentication
      $mail->Username   = SMTP_CONFIGS("USERNAME");                     //SMTP username
      $mail->Password   = SMTP_CONFIGS("PASSWORD");                          //SMTP password
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;          //Enable implicit TLS encryption
      $mail->Port       = SMTP_CONFIGS("PORT");                                 //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`


      //Check authentication status
      if (!$mail->smtpConnect()) {
        return false;
      }

      //Recipients
      $mail->setFrom(SMTP_CONFIGS("FROM"));
      $mail->addAddress($Sendto);                                 //Add a recipient

      //Add Attachments
      if ($ATTACHEMENTS != null) {
        if (array($ATTACHEMENTS)) {
          foreach ($ATTACHEMENTS as $Name => $Attachements) {
            $mail->addAttachment($Attachements, $Name);
          }
        }
      }

      //Content
      $mail->isHTML(true);                                  //Set email format to HTML
      $mail->Subject = $Subject;
      $mail->Body = '
    <body style="line-height:0.9rem !important;">
    <style>
    .otp {padding: 0.5rem 0.5rem !important;font-size: 2.5rem !important;letter-spacing: 5px !important;box-shadow: 0px 0px 1px grey !important;border-radius: 1rem  !important;background-color: #ffffff00 !important;font-weight: 600 !important;}
    </style>
    <div style="padding: 1rem !important; background-color: rgb(245, 244, 244) !important; font-family: Verdana, Geneva, Tahoma, sans-serif !important; border-radius:10px !important;box-shadow:0px 0px 7px grey !important; font-weight:300 !important; color:#333 !important;">
    <h2 style="margin-bottom: 1px !important;background-image: repeating-linear-gradient(45deg, #0066ff1c, transparent 1px);padding: 0.5rem;border-radius: 5px;padding-left: 0.75rem;font-size: 15px!important;color: #3a3939!important;font-weight: 600;margin-top: 0.3rem;">
     ♣ ' . APP_NAME . '
    </h2>
    <div>
      <h4 style="font-weight:300 !important;color:grey !important;margin-top:0.5rem;">
      ' . $Title . '
      </h4>
      <p style="text-decoration:none !important; color: grey !important;font-size:13px;font-weight:300 !important;">
      ' . $MAIL_MSG . '
      </p>
      <br>
     <p style="font-size:0.75rem !important; font-weight:300 !important;color:grey !important;background-color:white;padding:0.75rem;border-radius:0.3rem;text-align:right;">
     <img src="' . APP_LOGO . '" style="width:100px !important;border-radius:0.25rem;box-shadow:0px 0px 2px grey;"><br>
        <span style="color:black;">' . APP_NAME . '</span><br>
        <span> ' . SECURE(PRIMARY_ADDRESS, "d") . '</span><br>
        <span>' . PRIMARY_EMAIL . ',</span>
        <span>' . PRIMARY_PHONE . '</span><br>
        <span>' . DOMAIN . '</span>
      </p>
    </div>
   <p style="font-size:10px !important; color:grey !important; font-weight:300 !important;margin-top:1.5rem;">
      <b>Note: </b> This is an auto generated mail. do not reply this. if you find something incorrect then forward this at ' . REPLY_TO . '
   </p>
</body>';

      //send response
      if ($mail->send() == true) {
        return true;
      } else {
        return false;
      }
    } else {
      return false;
    }
  } else {
    return false;
  }
}
