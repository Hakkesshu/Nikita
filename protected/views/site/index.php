<?php $this->widget('application.widgets.facebook.Facebook',array('appId'=>'393318364070151')); ?>
 
 <div data-role="view" id="button-home" data-title="Sports Academy">
    <div class="home head">&nbsp;</div>   
    <a class="button" data-role="button" href="#button-home" style="background-color: #f60">Home</a><a class="button" data-role="button" href="#facility">Facility</a><a class="button" data-role="button" href="#sports">Sports</a>
    <ul data-role="listview" data-style="inset">
        <li>
            <p>Our Sports Academy provides a venue for outdoor and indoor sports and activities for children and adults of all ages.</p>
        </li>
    </ul>
</div>

<div data-role="view" id="facility" data-title="Facility">
    <div class="facility head">&nbsp;</div>
    <a class="button" data-role="button" href="#button-home">Home</a><a class="button" data-role="button" href="#facility" style="background-color: #f60">Facility</a><a class="button" data-role="button" href="#sports">Sports</a>
    <ul data-role="listview" data-style="inset">
        <li>
            <p>The facility has two indoor basketball fields, olympic size swimming pool, outdoor soccer field, baseball field, golf club and more.</p>
        </li>
    </ul>
</div>

<style scoped>
.button {
    margin: 0 0 0 .5em;
    text-align: center;
}
.button:first-of-type {
    margin: 0 0 0 1em;
}
.home {
    background: url(../../content/mobile/shared/sports-home.jpg) no-repeat center center;	
}
.facility {
    background: url(../../content/mobile/shared/sports-facility.jpg) no-repeat center center;	
}
.sports {
    background: url(../../content/mobile/shared/sports.jpg) no-repeat center center;	
}
#button-home .head,
#facility .head,
#sports .head {
	display: block;
	margin: 1em;
	height: 120px;
    -webkit-background-size: 100% auto;
    background-size: 100% auto;
}
.km-ios .head,
.km-blackberry .head {
    -webkit-border-radius: 10px;
    border-radius: 10px;
}
</style>

<script>
    $("#home-link").kendoMobileButton();
</script>

<script>
    var app = new kendo.mobile.Application(document.body);
</script>