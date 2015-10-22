<?php

class Frontend_HomeController extends FrontendController {
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

    public function home() {
        $titles = Title::paginate(10);
        return View::make('frontend.index', array('titles' => $titles));
    }
     public function giris() {

        return View::make('frontend.login.giris');
    }
             public function postGirispost() {
        $validate = Validator::make(Input::all(), User::$rules);
        $messages = $validate->messages();
        if ($validate->fails())
            return Redirect::back()->with(array('mesaj' => 'true', 'title' => 'Doğrulama Hatası', 'text' => '' . $messages->first() . '', 'type' => 'error'));

        if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password')), Input::get('remember'))) {
            /* Kullanıcı başarılı bir şekilde giriş yapmış ise */
            return Redirect::intended('anasayfa')->with(array('mesaj' => 'true', 'title' => 'Hoşgeldiniz', 'text' => 'Sayın ' . Auth::user()->email . ' Giriş Yapıldı', 'type' => 'success'));
        } else {
            return Redirect::back()->with(array('mesaj' => 'true', 'title' => 'Giriş Hatası', 'text' => 'E-Posta adresiniz veya şifreniz hatalıdır.', 'type' => 'error'));
        }
    }
     public function cikis(){
            if(Auth::check()) Auth::logout();
            return Redirect::to('/');
        }

     public function kayitol() {

        return View::make('frontend.login.kayit');
    }
    }
    
       


