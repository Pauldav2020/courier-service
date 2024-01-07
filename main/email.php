<?php
    // AUTO_LOAD
    require_once "vendor/autoload.php";

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    

    $sender = "speedxpressdelivermail@speedxpdel.com";
    function sendNotification($recName,$trackNo,$depCity,$delCity,$deliver_Date,$recEmail,$sender){
        $mail = new PHPMailer(true);
        
        $mail->setFrom($sender,"SPEEDXPRESSDELIVERY");
        $mail->addAddress($recEmail);
        
        $mail->isHTML(true);
        
        $mail->Subject = "Package Registration";
        $mail->Body = "
            <h4>Dear ".$recName."</h4>
            <p>".$trackNo." is your Luggage tracking Code ".$depCity." is the location origin and '.$delCity.' is the destination.</p>
            <p>".$deliver_Date." is the expected delivery date.</p>
            <p>For safety and security reasons never share your tracking code info with anyone.</p>
            <p>Contact us at <a href='$sender'>'.$sender.'</a></p>
            <p>You can track the current location of your package via our website below</p>
            <h4><span style='font-weight: bold, color: blue'>WEBSITE:</span> <a href='#' target='_black'>Web</a></h4>

            <p>
                The content of this mail is confidential and may also be privileged. if you are not '.$recName.',
                 do not disclose,copy,circulate or in any other way use or rely on this content.
                 Sterling Express Courier Service and its subsidiaries do not accept liability for damage caused by
                 careless handling of client's tracking information leading to security breach and non-permitted
                 account access by unauthorised entity.
            </p>
        ";
        $mail->AltBody = "This is the plain text version of the email content";
        
        try {
            $mail->send();
            // echo "Message has been sent successfully";
        } catch (Exception $e) {
            // echo "Mailer Error: " . $mail->ErrorInfo;
        }
      };
?>