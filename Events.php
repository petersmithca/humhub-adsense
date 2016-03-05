<?php
namespace humhub\modules\adsense;

use Yii;
use yii\helpers\Url;
use humhub\modules\adsense\widgets\AdFrame;
use humhub\models\Setting;

class Events extends \yii\base\Object
{

    public static function onAdminMenuInit(\yii\base\Event $event)
    {
        $event->sender->addItem([
            'label' => Yii::t('AdsenseModule.base', 'AdSense Settings'),
            'url' => Url::toRoute('/adsense/admin/index'),
            'group' => 'settings',
            'icon' => '<i class="fa fa-weixin"></i>',
            'isActive' => Yii::$app->controller->module && Yii::$app->controller->module->id == 'adsense' && Yii::$app->controller->id == 'admin',
            'sortOrder' => 650
        ]);
    }

    public static function addAdFrame($event)
    {
        if (Yii::$app->user->isGuest) {
            return;
        }
        $event->sender->addWidget(AdFrame::className(), [], [
            'sortOrder' => Setting::Get('timeout', 'adsense')
        ]);
    }
}
