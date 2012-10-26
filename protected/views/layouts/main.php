<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/kendoui/kendo.mobile.min.js" ></script>
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/kendoui/kendo.common.min.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/kendoui/kendo.mobile.all.min.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div data-role="view" data-layout="overview-layout" id="overview-cities" data-title="Weekly Featured DJs">
  <ul data-role="listview" data-style="inset" data-type="group">
    <li>
      <ul>
        <div data-role="view" id="scrollview-home" data-title="Photo Gallery">
          <div id="scrollview-container">
            <div data-role="scrollview" data-page="2">
              <div class="photo photo1" data-role="page">
                <img src="../../content/mobile/overview/christina.jpg" /><img src="../../content/mobile/overview/christina.jpg" />
              </div>
              <div class="photo photo2" data-role="page">
                <img src="../../content/mobile/overview/christina.jpg" /><img src="../../content/mobile/overview/christina.jpg" />
              </div>
              <div class="photo photo3" data-role="page">
                <img src="../../content/mobile/overview/christina.jpg" /><img src="../../content/mobile/overview/christina.jpg" />
              </div>
              <div class="photo photo4" data-role="page">
                <img src="../../content/mobile/overview/christina.jpg" /><img src="../../content/mobile/overview/christina.jpg" />
              </div>
            </div>
          </div>
        </div>
      </ul>
    </li>
    <li>
      <ul>
        <li><h3>Events This Month</h3></li>
        <li><img src="../../content/mobile/overview/boston.jpg" /></li>
          <ul id="settings-view" data-index="0">
            <li>Going</li>
            <li>Detail</li>
          </ul>
        <li><img src="../../content/mobile/overview/ottawa.jpg" /></li>
        <li><img src="../../content/mobile/overview/san-francisco.jpg" /></li>
      </ul>
    </li>
  </ul>
</div>

<div data-role="view" data-layout="overview-layout" id="overview-gallery" data-title="Check-Ins/Maps">
  <div id="scrollview-container">
  </div>
</div>

<div data-role="view" data-layout="overview-layout" id="overview-contacts" data-title="Events">
  <ul data-role="listview" data-style="inset" data-type="group">
    <li>
      <ul id="settings-view" data-index="0">
        <li>This Week</li>
        <li>This Month</li>
      </ul>
    </li>
    <li>
      <ul>
        <li><h3>This Week</h3></li>
        <li><img src="../../content/mobile/overview/annette.jpg" /></li>
        <li><img src="../../content/mobile/overview/antonio.jpg" /></li>
      </ul>
    </li>
    <li>
      <ul>
        <li><h3>This Month</h3></li>
        <li><img src="../../content/mobile/overview/carine.jpg" /></li>
        <li><img src="../../content/mobile/overview/catherine.jpg" /></li>
      </ul>
    </li>
    <li>
      <input id="search" type="search" placeholder="Find DJs" />
    </li>
  </ul>
</div>

<div data-role="view" data-layout="overview-layout" data-init="mobileAccountViewInit" id="overview-account" data-title="Request">
  <header data-role="header">
    <div data-role="navbar">
      <a data-align="left" data-role="button" href="">Search</a>
      <a data-align="right" data-role="button" href="">Sort</a>
    </div>
  </header>
  <ul data-role="listview" data-style="inset" data-type="group">
    <li>
      <ul>
        <li><h2>@Mensa Lounge<span>Oct. 9th|Chill,Ambient</span></h2><img src="../../content/mobile/overview/christina.jpg" /></li>
        <li>
          <ul id="settings-view" data-index="0">
            <li>Check-In</li>
            <li>Add Venue</li>
            <li>Follow DJ</li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <ul>
        <li><h3>DJ Request List</h3></li>
        <li>Song 1</li>
        <li>Song 2</li>
        <li>Song 3</li>
        <li>Song 4</li>
        <li>Song 5</li>
      </ul>
    </li>
  </ul>
</div>

<div data-role="layout" data-id="overview-layout">
    <header data-role="header">
        <div data-role="navbar">
            <!--a class="nav-button" data-align="left" data-role="backbutton">Back</a-->
            <span data-role="view-title">My Contacts</span>
            <a data-align="right" data-role="button" class="nav-button" href="#index">Index</a>
        </div>
    </header>

    <footer data-role="footer">
        <div data-role="tabstrip">
            <a data-icon="globe" href="#overview-cities">Home</a>
            <a data-icon="organize" href="#overview-gallery">Check-In/Maps</a>
            <a data-icon="contacts" href="#overview-contacts">Events</a>
            <a data-icon="settings" href="#overview-account">Request</a>
        </div>
    </footer>
</div>

<script>
    function mobileAccountViewInit() {
        var listviews = this.element.find("ul.km-listview");

        $("#settings-view").kendoMobileButtonGroup({
            select: function() {
                listviews.hide()
                         .eq(this.selectedIndex)
                         .show();
            },
            index: 0
        });
    }
</script>

<style scoped>

#tabstrip-weekly-featured-djs li{
  background-color: #e45922;
}

#navbar-home h2,
#navbar-grouped h2 {
    display: inline-block;
    font-size: 1.1em;
    margin: 1em 0 1.5em 1em;
}

#navbar-home img,
#navbar-grouped img {
	float: left;
    width: 4em;
    height: 4em;
    margin: 0;
    -webkit-box-shadow: 0 1px 3px #333;
    box-shadow: 0 1px 3px #333;
    -webkit-border-radius: 8px;
    border-radius: 8px;
}

.km-ios #navbar-home .km-listview,
.km-ios #navbar-grouped .km-list {
    background-color: #eaf1f5;
}



#overview-contacts h2,
#overview-cities h2 {
    display: inline-block;
    font-size: 1.1em;
    margin: 1em 0 .5em 1em;
}
#overview-account h2 {
    display: inline-block;
    font-size: 1.1em;
    margin: 1.5em 0 0 1em;
}
#overview-account h2 span {
    display: block;
    clear: both;
    font-size: 2em;
    margin: .2em 0 0 0;
}
#overview-contacts img,
#overview-cities img,
#overview-account img {
	float: left;
    width: 4em;
    height: 4em;
    margin: 0;
    -webkit-box-shadow: 0 1px 3px #333;
    box-shadow: 0 1px 3px #333;
    -webkit-border-radius: 8px;
    border-radius: 8px;
}
#overview-account img {
    width: 5em;
    height: 5em;
    margin: 1em;
}
#overview-account .value {
	float: right;
	color: #ccc;
}
#settings-view {
	margin: 1em auto .4em auto;
}
#overview-gallery .photo {
    width: 277px;
    margin: 20px 20px 7px;
    height: 220px;
    display: inline-block;
    -webkit-background-size: auto 100%;
    background-size: auto 100%;
    background-repeat: no-repeat;
    background-position: center center;
    -webkit-transform: translatez(0);
}
.photo1 {background-image: url("../../content/mobile/cities/220/sydney.jpg");}
.photo2 {background-image: url("../../content/mobile/cities/220/bonn.jpg");}
.photo3 {background-image: url("../../content/mobile/cities/220/boston.jpg");}
.photo4 {background-image: url("../../content/mobile/cities/220/cairo.jpg");}
.photo5 {background-image: url("../../content/mobile/cities/220/cancun.jpg");}
.photo6 {background-image: url("../../content/mobile/cities/220/cape-town.jpg");}
.photo7 {background-image: url("../../content/mobile/cities/220/liverpool.jpg");}
.photo8 {background-image: url("../../content/mobile/cities/220/london.jpg");}
.photo9 {background-image: url("../../content/mobile/cities/220/melbourne.jpg");}
.photo10 {background-image: url("../../content/mobile/cities/220/san-francisco.jpg");}

#scrollview-container {
    margin: 3px 0 1em 0;
    padding-bottom: 10px;
    background: rgba(0,0,0,.1);
    border: 1px solid rgba(0,0,0,.3);
    border-width: 1px 0;
    box-shadow: 0 1px 1px rgba(255,255,255,.3);
}
#overview-gallery .km-ios .km-content {
    background: #bbb;
}

#select-period {
    margin: 1em auto .4em auto;
}
</style>


<script>
    var app = new kendo.mobile.Application(document.body);
</script>



<div class="container" id="page">


	<div id="header">
		<div id="logo"><?php // echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php /* $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); */?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>
  
  
  

</div><!-- page -->

</body>
</html>
