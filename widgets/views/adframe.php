<?php
use yii\helpers\Url;
use humhub\models\Setting;
?>
<div class="panel">
  <div class="panel-heading">
    <?=Yii::t('AdsenseModule.base', '<strong>Community</strong> Ad'); ?>
  </div>
  <div class="panel-body">
  <?php
  	if (!Setting::Get('client', 'adsense')) {
 ?>
 	Please set your ad client and ad slot ids in administration
 <?php
	} else {
?>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- In Post Correct -->
	<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="<?php print Setting::Get('client', 'adsense');?>"
     data-ad-slot="<?php print Setting::Get('slot', 'adsense');?>"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<?php
	}
?>
    
  </div>
</div>
