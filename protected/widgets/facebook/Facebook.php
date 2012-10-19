<?php
/**
 * class Facebook
 * @author Igor Ivanović 
 */
class Facebook extends CWidget{

  public $appId;
  public $status = true;
  public $cookie = true;
  public $xfbml  = true;
  public $oauth  = true;
  public $userSession;
  public $facebookButtonTitle = "Facebook Connect";
  public $fbLoginButtonId     = "fb_login_button_id";
  public $logoutButtonId      = "your_logout_button_id";
  public $facebookLoginUrl    = "facebook/login";
  public $facebookLogoutUrl    = "facebook/logout";
  public $facebookPermissions = "publish_stream";
  public $accessToken;
  public $channelFile = 'fbChannel.html';
  public $name;
  

  /**
  * Run Widget
  */
  public function run()
  {
    $this->facebookLoginUrl = Yii::app()->createAbsoluteUrl($this->facebookLoginUrl);
    $this->facebookLogoutUrl = Yii::app()->createAbsoluteUrl($this->facebookLogoutUrl);
    $this->userSession = Yii::app()->session->sessionID;
    $this->accessToken = Yii::app()->session['fbAccessToken'];
    $this->channelFile = Yii::app()->createAbsoluteUrl($this->channelFile);
    $this->name = Yii::app()->session['fbName'];;
    $this->renderJavascript();
    $this->render('login');
  }
  
  
  /**
  * Render necessary facebook  javascript
  */
  private function renderJavascript()
  {
    $script = <<<EOL
    
window.fbAsyncInit = function() {
  FB.init({
    appId: '{$this->appId}',
    channelUrl: '{$this->channelFile}', // Channel File 
    status: {$this->status}, 
    cookie: {$this->cookie},
    xfbml: {$this->xfbml},
    oauth: {$this->oauth}
  });

  function updateButton(response) {
    var b = document.getElementById("{$this->fbLoginButtonId}");
    if (b) {
      b.onclick = function() {
        FB.login(function(response) {
          if(response.authResponse) {
            FB.api('/me', function(user) {
              $.ajax({
                type: 'post',
                url: '{$this->facebookLoginUrl}',
                data: ( { 
                    id: user.id,
                    username: user.username,
                    name: user.name, 
                    email: user.email,
                    accessToken: response.authResponse['accessToken'],
                    session: "{$this->userSession}" 
                } ),
                dataType: 'json',
                success: function( data ){
                  if (data.error == 0) {
                    window.location.href = data.redirect;
                  } else {
                    alert(data.error);
                    FB.logout();
                  }
                }
              });
            });	   
          }
        }, {scope: '{$this->facebookPermissions}'});	
      }
    }                
  }
              
  FB.getLoginStatus(updateButton);
  FB.Event.subscribe('auth.statusChange', updateButton);	

  var c = document.getElementById("{$this->logoutButtonId}");
  if (c) {
    c.onclick = function() {
      FB.logout();
      $.ajax({
        type: 'get',
        url: '{$this->facebookLogoutUrl}',
        success: function() {
          location.reload(true);
        }
      });
    }
  }            
  
  FB.api('/me?access_token={$this->accessToken}', function(response) {
    //alert(dump(response));
  });
  
  /*$.ajax({
    type: 'get',
    url: 'http://api.bandsintown.com/artists/Skrillex/events.json?api_version=2.0&app_id=YOUR_APP_ID',
    success: function(data) {
      console.log(dump(data));
    }
  });*/
  
  
    
           
            
  /**
   REMOVE FUNCTION AFTER DONE TESTING
   */
  function dump(arr,level) {
  	var dumped_text = "";
  	if(!level) level = 0;
  	
  	//The padding given at the beginning of the line.
  	var level_padding = "";
  	for(var j=0;j<level+1;j++) level_padding += "    ";
  	
  	if(typeof(arr) == 'object') { //Array/Hashes/Objects 
  		for(var item in arr) {
  			var value = arr[item];
  			
  			if(typeof(value) == 'object') { //If it is an array,
  				dumped_text += level_padding + "'" + item + "' ...\\n";
  				dumped_text += dump(value,level+1);
  			} else {
  				dumped_text += level_padding + "'" + item + "' => \\"" + value + "\\"\\n";
  			}
  		}
  	} else { //Stings/Chars/Numbers etc.
  		dumped_text = "===>"+arr+"<===("+typeof(arr)+")";
  	}
  	return dumped_text;
  }            
            
};
        
(function(d){var e,id = "fb-root";if( d.getElementById(id) == null ){e = d.createElement("div");e.id=id;d.body.appendChild(e);}}(document));
(function(d){var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];if (d.getElementById(id)) {return;} js = d.createElement('script'); js.id = id; js.async = true; js.src = "//connect.facebook.net/en_US/all.js"; ref.parentNode.insertBefore(js, ref); }(document));
  
EOL;

    Yii::app()->clientScript->registerScript('facebook-connect', $script, CClientScript::POS_END);
  }
}
