<?php


namespace App\Mailer;

use Mail;
use Naux\Mail\SendCloudTemplate;

class Mailer
{
    public function sendTo($template,$email,array $data)
    {
        $content = new SendCloudTemplate($template, $data);

        Mail::raw($content, function ($message)  use($email){
            $message->from('alshin@126.com', 'li123456');

            $message->to($email);
        });
    }
}