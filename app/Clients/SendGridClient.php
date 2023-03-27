<?php
namespace App\Clients;


use SendGrid;
use SendGrid\Mail\Mail;
class SendGridClient
{
    public static function sendEmail($destinationEmail,$subject,$content) {
        $apiKey = config('sendgrid.api_key');
        $from = config('sendgrid.from');
        $mail = new Mail();
        $mail->setFrom($from['address'], $from['name']);
        $mail->setSubject($subject);
        $mail->addTo($destinationEmail, 'User');
        $mail->addContent("text/html", $content);
        $sendgrid = new SendGrid($apiKey);
        $response = $sendgrid->send($mail);
        $returnObject = json_decode(json_encode([
            'status' => $response->statusCode(),
            'headers' => $response->headers(),
            'body' => $response->body()
        ]));
        return $returnObject;
    }
}
