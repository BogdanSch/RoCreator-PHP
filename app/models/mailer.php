<?php

class Mailer
{
    private $fullName;
    private $email;
    private $subject;
    private $message;

    public function __construct($fullName, $email, $subject, $message)
    {
        $this->fullName = $fullName;
        $this->email = $email;
        $this->subject = $subject;
        $this->message = $message;
    }

    public function sendMail()
    {
        $to = "rocreator.help@egmail.com";
        $headers = "From: " . $this->fullName . " <" . $this->email . ">\r\n";
        $headers .= "Reply-To: " . $this->email . "\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        $messageBody = "Subject: " . $this->subject . "\n";
        $messageBody .= "From: " . $this->fullName . " <" . $this->email . ">\n\n";
        $messageBody .= "Message:\n" . $this->message;

        return mail($to, $this->subject, $messageBody, $headers);
    }
}