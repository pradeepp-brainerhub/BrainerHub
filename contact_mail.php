<?php
require 'mailer/PHPMailerAutoload.php';
require 'mail_info.php';

$name = $_POST['fname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$id = $_POST['id'];
$radioSoftware = $_POST['radioSoftware'];
$form_company = $_POST['form_company'];
$comment = $_POST['comment'];
$g_recaptcha_response = $_POST['g-recaptcha-response'];

if (isset($g_recaptcha_response) && !empty($g_recaptcha_response)) {
    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secretkey . '&response=' . $g_recaptcha_response);
    $responseData = json_decode($verifyResponse);
    if ($responseData->success) {
        $to = "sales@brainerhub.com";
        $subject = "Contact Email received at " . date("Y-m-d h:i:sa");
        $message = "
<html>
    <head>
    </head>
        <body>
        <div style='background-color:#f7f7f7; border:#e9e9e9 1px solid; padding: 30px; border-radius: 10px; width:600px'>
            <div style='background-color:#f7f7f7;'>
                <img src='https://www.brainerhub.com/images/brainerhub_logo.png' width='273' height='38' style='margin:20px 0px 20px 20px; width:273; height:70px;  font-family:'Poppins', Arial, Century Gothic, Verdana, sans-serif; cursor:pointer'/>
            </div>
            <p>
                <font size='+3' color='#bf4252' font-family:'Arial', >Inquiry submitted</font>
            </p>
            <table>
                <tr>
                    <th style='text-align: left; width:150px'>Name :</th>
                    <td>$name</td>
                </tr>
                <tr>
                    <th style='text-align: left; width:150px'>Email :</th>
                    <td>$email</td>
                </tr>
                <tr>
                    <th style='text-align: left; width:150px'>Phone :</th>
                    <td>$phone</td>
                </tr>";
        isset($id) && $id != "" ?  $message .= "<tr>
                    <th style='text-align: left; width:150px'>Google /Skype id :</th>
                    <td>$id</td>
                    </tr>" : "";
        isset($radioSoftware) && $radioSoftware != "" ?  $message .= "<tr>
                    <th style='text-align: left; width:150px'>looking for :</th>
                    <td>$radioSoftware</td>
                    </tr>" : "";
        isset($form_company) && $form_company != "" ?  $message .= "<tr>
                    <th style='text-align: left; width:150px'>Company Name :</th>
                    <td>$form_company</td>
                    </tr>" : "";

        isset($comment) && $comment != "" ?  $message .= "<tr>
                    <th style='text-align: left; width:150px'>Messege :</th>
                    <td>$comment</td>
                    </tr>" : "";
        $message .= " </table>
        </body>
        </div>
</html>";

        $mail = new PHPMailer(true);
        $mail->Host = $mail_info['host'];
        $mail->SMTPAuth = $mail_info['SMTPAuth'];
        $mail->Port = $mail_info['port'];
        $mail->Username = $mail_info['username'];
        $mail->Password = $mail_info['password'];
        $mail->SMTPSecure = $mail_info['SMTPSecure'];
        $mail->isSMTP();
        $mail->From = $email;
        $mail->FromName = $name;
        $mail->addAddress($to, "BrainerHub");
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $message;
        $mail->AltBody = "This is the plain text version of the email content";


        if (!$mail->send()) {
            echo "Message could not be sent!";
        } else {
            echo "Message has been sent!";
        }


        $To_address = $_POST['email'];
        $From = "sales@brainerhub.com";
        $Subject_client = "Thanks For Inquiry, BrainerHub. 6:41";
        $EmailBody = <<<EOD
<html>
<body style="margin:0px; text-align:center; font-family:'Poppins', Arial, Century Gothic, Verdana, sans-serif; font-weight:normal;">
<div style=" font-family:'Poppins', Arial, Century Gothic, Verdana, sans-serif;width:600px; height:630px; margin:0px auto; background-color:#f7f7f7; border:#e9e9e9 1px solid; padding: 30px; border-radius: 10px;" >
<div style="  font-family:'Poppins', Arial, Century Gothic, Verdana, sans-serif;width:100%; float:left; height:82px; background:#f7f7f7; text-align:left;">
    <a href="https://www.brainerhub.com/"><img src="https://www.brainerhub.com/images/brainerhub_logo.png" alt="BrainerHub" name="BrainerHub" height="40" style="margin:20px 0px 20px 20px; width:190px;  font-family:'Poppins', Arial, Century Gothic, Verdana, sans-serif; cursor:pointer" id="BrainerHub" title="BrainerHub" border="0" /></a>
</div>

<div style=" float:left; width:100%; margin:0px; background:#fff; text-align:left;  font-family:'Poppins', Arial, Century Gothic, Verdana, sans-serif;">
    <p style="font-family:'Poppins', Arial, Century Gothic, Verdana, sans-serif; font-weight:lighter; font-size:45px; margin:20px 0px 0px 33px; color:#bf4252;">Thanks For Inquiry </p>
    <p style=" font-family:'Poppins', Arial, Century Gothic, Verdana, sans-serif; font-weight:normal; font-size:14px; color:#000; line-height:24px; margin:20px 0px 0px 33px; text-align:left;">Dear <strong style='text-transform:capitalize;'>$name,</strong> </p>
    <p style="font-family:'Poppins', Arial, Century Gothic, Verdana, sans-serif; font-weight:normal; font-size:14px; color:#000; line-height:24px; margin:20px 0px 0px 33px; text-align:left;">Thanks for BrainerHub . </p>
    <p style="font-family:'Poppins', Arial, Century Gothic, Verdana, sans-serif; font-weight:normal; font-size:14px; color:#000; line-height:24px; margin:0px 0px 0px 33px; text-align:left;">
        Our Responce Team will Contact You Soon..</p>
        <p style="font-family: Poppins; font-weight:normal; font-size:14px; color:#000; line-height:24px; margin:20px 0px 0px 33px; text-align:left;"><strong>Mob: </strong>+91 79 4899 5210 <strong style="margin:0px 0 0px 10px;">Mail:</strong> sales@brainerhub.com<br />
</div>
<div style=" float:left; margin:0px; width:100%; background:#fff0f3; font-family:'Poppins', Arial, Century Gothic, Verdana, sans-serif;">
    <div style=" float:left; margin:0px; width:50%; background:#fff0f3; text-align:left;  font-family:'Poppins', Arial, Century Gothic, Verdana, sans-serif;">
        <p><a href="https://www.brainerhub.com/" title="Rocket Cartridge" style="font-family:'Poppins', Arial, Century Gothic, Verdana, sans-serif; font-weight:normal; font-size:14px; color:#333;; line-height:24px; margin:28px 0px 0px 33px; text-align:left; text-decoration:none;">&copy; 2023 BrainerHub</a></p>
    </div>
    <div style="float:left; margin:0px; width:50%; text-align:right;  font-family:'Poppins', Arial, Century Gothic, Verdana, sans-serif;">
        
    </div>
</div>
</div>
</body>
</html>
EOD;

        $mail = new PHPMailer(true);
        $mail->Host = $mail_info['host'];
        $mail->SMTPAuth = $mail_info['SMTPAuth'];
        $mail->Port = $mail_info['port'];
        $mail->Username = $mail_info['username'];
        $mail->Password = $mail_info['password'];
        $mail->SMTPSecure = $mail_info['SMTPSecure'];
        $mail->isSMTP();

        $mail->From = $From;
        $mail->FromName = "BrainerHub";
        $mail->addAddress($To_address, $name);
        $mail->isHTML(true);
        $mail->Subject = $Subject_client;
        $mail->Body = $EmailBody;
        $mail->AltBody = "This is the plain text version of the email content";


        if (!$mail->send()) {
            echo "Message could not be sent!";
        } else {
            echo "Message has been sent!";
        }
    }
}
header("Location: https://www.brainerhub.com/thank-you.php?name=" . $name);
exit;
