<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\ResetPasswordEmail;
use App\Mail\SubscriptionEmail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public static function sendResetPassword($address, $login, $token)
    {
        $obj = new \stdClass();
        $obj->login = $login;
        $obj->link = 'http://127.0.0.1:8000/api/auth/password-reset/'.$token;

        Mail::to($address)->send(new ResetPasswordEmail($obj));
    }
    public static function sendSubscriptionNotification($address, $login, $user, $comment, $post, $title)
    {
        $obj = new \stdClass();
        $obj->login = $login;
        $obj->link = 'http://127.0.0.1:8000/api/posts/'.$post;
        $obj->user = $user;
        $obj->comment = $comment;
        $obj->title = $title;

        Mail::to($address)->send(new SubscriptionEmail($obj));
    }
}
