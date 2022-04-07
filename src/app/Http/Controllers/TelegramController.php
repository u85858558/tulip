<?php

namespace App\Http\Controllers;

use Exception;
use Telegram\Bot\Api;

class TelegramController extends Controller
{
    /**
     * @return \Telegram\Bot\Objects\Message|string
     */
    public function init(): \Telegram\Bot\Objects\Message|string
    {
        try {
            $telegram = new Api(env('TELEGRAM_BOT_TOKEN'));

            return $telegram->sendMessage([
                'chat_id' => env('TELEGRAM_ID_USER'),
                'text'    => 'Hello'
            ]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
