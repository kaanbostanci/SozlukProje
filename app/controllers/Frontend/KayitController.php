<?php

class Frontend_KayitController extends FrontendController {
    /*
      |--------------------------------------------------------------------------
      | Default Home Controller
      |--------------------------------------------------------------------------
      |
      | You may wish to use controllers instead of, or in addition to, Closure
      | based routes. That's great! Here is an example controller method to
      | get you started. To route to this controller, just add the route:
      |
      |	Route::get('/', 'HomeController@showWelcome');
      |
     */

     public function getKayit(){
         
         
         return View::make('frontend.login.kayit');
         
     }
     public function postKayit() {
        $validate = Validator::make(Input::all(), User::$rules);
        $messages = $validate->messages();
        if ($validate->fails())
            return Redirect::back()->with(array('mesaj' => 'true', 'title' => 'Doğrulama Hatası', 'text' => '' . $messages->first() . '', 'type' => 'error'));

        $user = new User;
        $email = Input::get('email');
        $namesurname = Input::get('adsoyad');
        $password = Hash::make(Input::get('password'));


        $user->email = $email;
        $user->namesurname = $namesurname;
        $user->password = $password;
        $user->save();

        if ($user->save()) {
            return Redirect::back()->with(array('mesaj' => 'true', 'title' => 'Kayit Başarili', 'text' => 'Kayit Olundu', 'type' => 'success'));
        } else {
            return Redirect::back()->with(array('mesaj' => 'true', 'title' => 'Kayit Başarısız', 'text' => 'Kayit olunurken sorun çıktı', 'type' => 'error'));
        }
    }
    
    
    
    
}