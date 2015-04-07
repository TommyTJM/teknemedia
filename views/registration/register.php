<?php
use app\assets\HomeAsset;

/* @var $this yii\web\View */
$this->title = 'Teknet Media Inc';

$hmBundle = HomeAsset::register($this);

$imgLoc = $hmBundle->baseUrl.'/home/';

?>
