<div id="fb-root"></div>

<?php

if (Yii::app()->user->isGuest):

echo <<<END
  <a id="{$this->fbLoginButtonId}" class="btn btn-primary" href="#"><i class="icon-user icon-white"></i> Login</a>
END;

else: 

echo <<<END
  <div class="btn-group">
    <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-user icon-white"></i> {$this->name} <span class="caret"></span></a>
    <ul class="dropdown-menu">
      <li><img src="https://graph.facebook.com/me/picture?access_token={$this->accessToken}" class="img-rounded"/></li>
      <li class="divider"></li>
      <li><a href="#"><i class="i"></i> Check In</a></li>
      <li class="divider"></li>
      <li><a id="{$this->logoutButtonId}" href="#"><i class="icon-off"></i> Logout</a></li>      
    </ul>
  </div>
END;

endif; ?>