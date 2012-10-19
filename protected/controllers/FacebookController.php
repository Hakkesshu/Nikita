<?php
/**
 * class FacebookController
 * @author Igor Ivanović, Hakkesshu
 * Used to controll facebook login system 
 */
class FacebookController extends Controller
{

  /**
   * This method authenticate logged in facebook user 
   */
  public function actionLogin()
  {
    if (!Yii::app()->request->isAjaxRequest) {
      echo json_encode(array('error'=>'this is not ajax request'));
      die();
      
    } else {
      if (empty($_POST['email'])) {
        echo json_encode(array('error'=>'email is not provided'));
        die();
      }      
      if ($_POST['session'] == Yii::app()->session->sessionID && isset($_POST['accessToken'])) {
        
        $user = User::prepareUserForAuthorisation( $_POST['email'] );
        if ($user === null) {
          $user = new User();
          $user->email = $_POST['email'];    
          $user->username = $_POST['username'];
          $user->password = $user->createRandomUsername();
          $user->insert();
        }        
        $identity = new UserIdentity( $user->email , $user->password );
        $identity->authenticate();

        if ($identity->errorCode === UserIdentity::ERROR_NONE) {
          Yii::app()->user->login($identity, NULL);
          
          // set session variables
          Yii::app()->session['fbAccessToken'] = $_POST['accessToken'];
          Yii::app()->session['fbName'] = $_POST['name'];
          
          $redirectUrl = Yii::app()->homeUrl;
          echo json_encode( array( 'error'=>0, 'redirect'=> $redirectUrl ) );
        } else {
          echo json_encode(array('error'=>'user not logged in'));
          die();
        }
        
      } else {
        echo json_encode(array('error'=>'session id is not the same: ' . Yii::app()->session->sessionID));
        die();
      }
    }
  }
  
  public function actionLogout() {
    Yii::app()->user->logout();
  }
  
  public function actionIndex() {
    $accessToken = Yii::app()->session['fbAccessToken'];
    
    $addressInfo = Yii::app()->geoip->getCityInfoForIp('74.100.90.248');
    //$geolocations = file_get_contents("https://graph.facebook.com/search?q=Musician%2fband&type=place&center={$addressInfo['latitude']},{$addressInfo['longitude']}&distance=100&limit=50&access_token={$accessToken}");
    $geolocations = file_get_contents("https://graph.facebook.com/search?q=Musician%2fband&type=place&center={$addressInfo['latitude']},{$addressInfo['longitude']}&distance=10000&limit=50&access_token={$accessToken}");
    $geolocations = json_decode($geolocations, true);
    print_r($geolocations);die();
    $artists = array();
    foreach ($geolocations['data'] as $key => $location) {
      $data = file_get_contents("https://graph.facebook.com/{$location['id']}?&access_token={$accessToken}");
      $data = json_decode($data, true);
      //print_r($data);
      if (isset($data['owner']['category']) && $data['owner']['category'] == 'Musician/band') {
        $data = file_get_contents("https://graph.facebook.com/{$data['venue']['id']}?&access_token={$accessToken}");
        $data = json_decode($data, true);
        $artists[] = $data;
      } 
    }
    
    /*
    //$data = json_decode(file_get_contents('http://api.bandsintown.com/artists/Kesha/events.json?api_version=2.0&app_id=YOUR_APP_ID'));
    $fbArtists = file_get_contents("https://graph.facebook.com/search?q=Musician%2fband&type=page&limit=1&access_token={$accessToken}");
    $fbArtists = json_decode($fbArtists, true);
    $fbArtists = $fbArtists['data'];
    $artists = array(); 
    foreach ($fbArtists as $key => $artist) {
      if ($artist['category'] == 'Musician/band') {
        $data = file_get_contents("https://graph.facebook.com/{$artist['id']}/events?&access_token={$accessToken}");
        $data = json_decode($data, true);
        //$name = urlencode($artist['name']);
//        $data = @file_get_contents("http://api.bandsintown.com/artists/{$name}.json?api_version=2.0&app_id=YOUR_APP_ID");
//        $artist['bandsintown'] = json_decode($data, true);
        if (count($data['data'])) {
          // venues
          foreach ($data['data'] as $k => $venue) {
            $id = $venue['id'];
            $data = file_get_contents("https://graph.facebook.com/{$id}?&access_token={$accessToken}");
            $data = json_decode($data, true);
            if (isset($data['venue']['id'])) {
              $data = file_get_contents("https://graph.facebook.com/{$data['venue']['id']}?&access_token={$accessToken}");
              $data = json_decode($data, true);
              //print_r($data);
              $artist['events'] = $data;
              $artists[] = $artist;
            }
          }
        }
      }
    }*/
    //$data = file_get_contents("http://api.bandsintown.com/artists/{$artist}/events.json?api_version=2.0&app_id=YOUR_APP_ID");
    //print_r($artists);
    
    $this->render('index', array('pages'=>$artists));
  }
 
}