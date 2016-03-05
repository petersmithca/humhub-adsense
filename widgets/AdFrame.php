<?php
namespace humhub\modules\adsense\widgets;

use humhub\components\Widget;

class AdFrame extends Widget
{

    public $contentContainer;

    public function run()
    {
        return $this->render('adframe', []);
    }
}

