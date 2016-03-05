<?php
namespace humhub\modules\adsense\forms;

use Yii;

class SettingsForm extends \yii\base\Model
{

    public $client;

    public $slot;

    public $sort;

    public function rules()
    {
        return [
            [
                [
                    'client',
                    'slot',
                    'sort'
                ],
                'safe'
            ],
            [
                [
                    'client',
                    'slot',
                    'sort'
                ],
                'required'
            ],
            [
                [
                    'client'
                ],
                'string',
                'max' => 255
            ],
            [
                [
                    'slot'
                ],
                'string',
                'max' => 255
            ],
            [
                [
                    'sort'
                ],
                'integer',
                'min' => 0,
                'max' => '2000'
            ]
        ];
    }

    public function attributeLabels()
    {
        return [
            'client' => Yii::t('AdsenseModule.base', 'client'),
            'slot' => Yii::t('AdsenseModule.base', 'slot'),
            'sort' => Yii::t('AdsenseModule.base', 'sort')
        ];
    }
}
