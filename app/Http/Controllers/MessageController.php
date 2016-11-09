<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Registration;
use WhatsProt;

class MessageController extends Controller
{
    public function index()
    {
        return view("message.send");
    }

    /**
     * @param $num The number of the person you are sending the message
     * @param $text Text message
     */
    public function send($num, $text)
    {
        $username = '15169261932';    // Your number with country code, ie: 34123456789
        $nickname = 'Test';    // Your nickname, it will appear in push notifications
        $password = "/SSsb58dZpS/i2zLVtRyJmEYj5M"; // The one we got registering the number
        $debug    = true;  // Shows debug log, this is set to false if not specified
        $log      = true;  // Enables log file, this is set to false if not specified
        // Create a instance of WhatsProt class.
        $w = new WhatsProt($username, $nickname, $debug);
        //$w->connect(); // Connect to WhatsApp network
        //$w->loginWithPassword($password); // logging in with the password we got!
        //$send = $w->sendMessage($num , $text);
        //return $send;
        $w->sendPresenceSubscription($num);
        $w->pollMessage();
        $w->sendMessageComposing($num);
        sleep(1);
        $w->pollMessage();
        $w->sendMessagePaused($num);
        static::$sendLock = true;
        echo "Sending message from " . $username. " to $num... ";
        $w->sendMessage($num, $text);
    }

    public function register($num) // Your number with country code, ie: 34123456789
    {
        $debug    = true;  // Shows debug log, this is set to false if not specified
        $r = new Registration($num, $debug);
        $data = $r->checkCredentials();
        //$r->codeRequest('voice');
        print_r($data);
    }


}

//stdClass Object ( [status] => ok [login] => 15169261932 [type] => existing [pw] => /SSsb58dZpS/i2zLVtRyJmEYj5M= [expiration] => 4444444444 [kind] => free [price] => $0.99 [cost] => 0.99 [currency] => USD [price_expiration] => 1461000188 )