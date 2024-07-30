<?php

//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                              //Send using SMTP
    $mail->Host       = 'a2plcpnl0195.prod.iad2.secureserver.net';                        //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'sonu@outsourcingservicesusa.com';                  //SMTP username
    $mail->Password   = 'sonu-dev@202324';                           //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         //Enable implicit TLS encryption
    $mail->Port       = 465;                                   //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    if(isset($_POST['email']) && isset($_POST['name'])){
        $email = 'contact@ingeniousresults.com';
        $name  = $_POST['name'];
        $clientemail  = $_POST['email'];
        $phone  = $_POST['phone'];
        $title  = $_POST['title'];
        $project  = $_POST['project'];
        $description  = $_POST['description'];

        if($email !=  '' && $name != ''){

            //Recipients
            $mail->setFrom("ingeniousresults31@gmail.com", 'Ingenious Results');
            $mail->addAddress($email);     //Add primary recipient

            // Add multiple recipients
            $additionalRecipients = [
                'ingeniousresults31@gmail.com',
                'anil@outsourcingservicesusa.com'
            ];

            foreach ($additionalRecipients as $recipient) {
                $mail->addAddress($recipient);
            }

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = "Request for Services";
            $mail->Body    = "<!DOCTYPE html>
            <html lang='en'>
            <head>
                <meta charset='UTF-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>	
                <style>		
                .verifylink{background: #000f4b; font-family: 'Segoe UI'; color: #FFF !important; padding: 10px 80px; text-decoration: none; letter-spacing: 2px; font-size: 15px; border-radius: 5px; display:inline-block;}	
                .questionspan{
                    font-family: 'Segoe UI';
                    font-size: 13px;
                    letter-spacing: 1px;
                    margin-top: 12px;
                    display: inline-block;}
                </style>
                <title></title>
            </head>
            <body>	
            <p>Hello</p>
            <p></p>
            Name :- $name<br>
            email:- ".$_POST['email']."<br>
            phone:- ".$_POST['phone']."<br>
            title:- ".$_POST['title']."<br>
            project:- ".$_POST['project']."<br>
            description:- ".$_POST['description']."<br>
            Thank You
            </body>
            </html>";

            $mail->send();
            header("location: https://ingeniousresults.com/thank-you.php");
        } else {
            echo json_encode(['status' => 201, 'message' => 'Please Enter Email and Name']);
        }
    } else {
        echo json_encode(['status' => 201, 'message' => 'Please Enter Email and Name']);
    }

} catch (Exception $e) {
    echo json_encode(['status' => 404, 'message' => 'Mail sending failed!']);
}
