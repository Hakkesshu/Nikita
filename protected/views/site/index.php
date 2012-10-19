<?php

/* @var $this SiteController */

// $this->pageTitle=Yii::app()->name;

?>


<!--
<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>Congratulations! You have successfully created your Yii application.</p>

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <code><?php echo __FILE__; ?></code></li>
	<li>Layout file: <code><?php  echo $this->getLayoutFile('main'); ?></code></li>
</ul>

<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>

-->



<!DOCTYPE html>
<html lang="en-US">
<head>
<title>Sunrise Video</title>

</head>
<body>

<?php $this->widget('application.widgets.facebook.Facebook',array('appId'=>'393318364070151')); ?>

  <div id="container">
    <div id="logo">
    </div>
    
    <div id="nav">
      <ul>
        <li>Video Games</li>
        <li>Technology</li>
        <li>Music</li>
        <li>Movies</li>
        <li>TV</li>
        <li>Web Design</li>
        <li>Arhitecture</li>
        <li>Automotive</li>
        <li>Sports</li>
        <li>Random</li>
      </ul>
    </div>
    
    <div id="main_content">
      <div id="reaction_sidebar">
        <h3>Recent Reactions</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur posuere feugiat nunc id commodo. Proin ut hendrerit justo. Etiam dapibus vestibulum risus, a consequat nulla lacinia sed. Quisque risus lacus, volutpat a pretium quis, adipiscing et nunc. Aliquam erat volutpat. Nulla vestibulum lacus et nibh porttitor vehicula. Suspendisse aliquet magna eu augue rhoncus ac tempor [...]</p>
      </div>
      <h3>In The Spotlight</h3>
      <div id="showcase">
        <img />
        <div id="synopsis">
          <h4>Title</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur posuere feugiat nunc id commodo. Proin ut hendrerit justo. Etiam dapibus vestibulum risus, a consequat nulla lacinia sed. Quisque risus lacus, volutpat a pretium quis, adipiscing et nunc. Aliquam erat volutpat. Nulla vestibulum lacus et nibh porttitor vehicula. Suspendisse aliquet magna eu augue rhoncus ac tempor [...]</p>
        </div>
        
        <div id="reel">
          <ul>
            <li><a><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/test.jpg" /></a></li>
            <li>img2</li>
            <li>img3</li>
            <li>img4</li>
            <li>img4</li>
          </ul>
        </div>
        
      </div>
    </div>
    
    <div id="latest_nav">
      <ul>
        <li>THE LATEST</li>
        <li>SPORTS</li>
        <li>MOVIES</li>
        <li>VIDEO GAMES</li>
        <li>TV</li>
      </ul>
    </div>
    
    <div id="feed_nav">
      <ul>
        <li>RECENT</li>
        <li>MOST COMMENTED</li>
        <li>RANDOM</li>
        <li id="rss_icons">
          <ul></ul>
        </li>
      </ul>
    </div>
  </div>



</body>
</html>
