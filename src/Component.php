<?php
namespace SonkoDmitry\Yii\TelegramBot;

use Yii;
use Exception;
use \yii\base\Configurable;
use \TelegramBot\Api\BotApi;

/**
 * Component for telegram fot api
 *
 * @package SonkoDmitry\TelegramBot\Api
 */
class Component extends BotApi implements Configurable
{
	/**
	 * Bot token
	 *
	 * @var string
	 */
	public $apiToken;

	public function __construct($config = [])
	{
		if (!empty($config)) {
			Yii::configure($this, $config);
		}

		if (empty($this->apiToken)) {
			throw new Exception('Bot token cannot be empty');
		}

		parent::__construct($this->apiToken);
	}
}