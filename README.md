Telegram bot API for Yii2
================

This extension is the way to integrate [telegram-bot/api](https://packagist.org/packages/telegram-bot/api) wrapper with your Yii2 application.

Installation
------------
The preferred way to install this extension is through [composer](http://getcomposer.org/download/). 

 To install, either run
 ```
 $ php composer.phar require sonko-dmitry/yii2-telegram-bot-api:*
 ```
 or add
 ```
 "sonko-dmitry/yii2-telegram-bot-api": "*"
 ```
 to the `require` section of your `composer.json` file.


Usage
-----
0. Add the component configuration in your *global* `main.php` config file:
 ```php
 'components' => [
     'bot' => [
         'class' => 'SonkoDmitry\TelegramBot\Api\Component',
         'apiToken' => 'YOUR_BOT_API_TOKEN',
     ],
 ],
 ```

0. Now you can use component
 ```php
 \Yii::$app->bot->sendMessage(1234567, 'Hello world!');
 ```
 Where "1234567" receiver telegram id or chat id.