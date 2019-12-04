<?php 
    require 'vendor/autoload.php';

    class SendEmail{

        public static function SendMail($to,$subject,$content){
            $key = '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';

            $email = new \SendGrid\Mail\Mail();
            $email->setFrom("dvirtue@gmail.com", "Damian Salesman");
            $email->setSubject($subject);
            $email->addTo($to);
            $email->addContent("text/plain", $content);
            //$email->addContent("text/html", $content);

            $sendgrid = new \SendGrid($key);

            try{
                $response = $sendgrid->send($email);
                return $response;
            }catch(Exception $e){
                echo 'Email exception Caught : '. $e->getMessage() ."\n";
                return false;
            }
        }
    }
?>