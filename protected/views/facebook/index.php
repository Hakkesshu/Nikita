<?php

$this->widget('application.widgets.facebook.Facebook',array('appId'=>'393318364070151'));

print_r($pages);

//echo $ip = Yii::app()->geoip->getRemoteIpAddress();
$addressInfo = Yii::app()->geoip->getCityInfoForIp('74.100.90.248');

Yii::import('ext.jquery-gmap.*');

$gmap = new EGmap3Widget();
$gmap->setSize(600, 400);

// base options
$options = array(
	'scaleControl' => true,
	'streetViewControl' => false,
	'zoom' => 20,
	'center' => array(0, 0),
	'mapTypeId' => EGmap3MapTypeId::HYBRID,
	'mapTypeControlOptions' => array(
		'style' => EGmap3MapTypeControlStyle::DROPDOWN_MENU,
		'position' => EGmap3ControlPosition::TOP_CENTER,
	),
	'zoomControlOptions' => array(
		'style' => EGmap3ZoomControlStyle::SMALL,
		'position' => EGmap3ControlPosition::BOTTOM_CENTER
	),
);
$gmap->setOptions($options);

foreach ($pages as $key => $page) {
  $marker = new EGmap3Marker(array('title' => $page['name']));
  //$marker = new EGmap3Marker(array('title' => 'YOUR LOCATION, NIGGA'));
  //$marker->address = 'Jacksonville, FL';
  $marker->centerOnMap();
  $marker->latLng = array($page['location']['latitude'], $page['location']['longitude']);
  //$marker->latLng = array($addressInfo['latitude'], $addressInfo['longitude']);
  //$marker->centerOnMap();
  //$marker->setMapZoom(8);
  $gmap->add($marker);
}

$gmap->renderMap();