<?php

class Backend_LoginController extends BackendController {

    public function login() {

        return View::make('backend.login.login');
    }
        public function modlogin() {

        return View::make('backend.login.modlogin');
    }
            public function logout(){
            if(Auth::check()) Auth::logout();
            return Redirect::to('/');
        }

    public function loginpost() {
        $validate = Validator::make(Input::all(), User::$rules);
        $messages = $validate->messages();
        if ($validate->fails())
            return Redirect::back()->with(array('mesaj' => 'true', 'title' => 'Doğrulama Hatası', 'text' => '' . $messages->first() . '', 'type' => 'error'));

        if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password')), Input::get('remember'))) {
            /* Kullanıcı başarılı bir şekilde giriş yapmış ise */
            return Redirect::intended('panel')->with(array('mesaj' => 'true', 'title' => 'Hoşgeldiniz', 'text' => 'Sayın ' . Auth::user()->email . ' sisteme bağlandınız', 'type' => 'success'));
        } else {
            return Redirect::back()->with(array('mesaj' => 'true', 'title' => 'Giriş Hatası', 'text' => 'E-Posta adresiniz veya şifreniz hatalıdır.', 'type' => 'error'));
        }
    }
        public function modloginpost() {
        $validate = Validator::make(Input::all(), User::$rules);
        $messages = $validate->messages();
        if ($validate->fails())
            return Redirect::back()->with(array('mesaj' => 'true', 'title' => 'Doğrulama Hatası', 'text' => '' . $messages->first() . '', 'type' => 'error'));

        if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password')), Input::get('remember'))) {
            /* Kullanıcı başarılı bir şekilde giriş yapmış ise */
            return Redirect::intended('modpanel')->with(array('mesaj' => 'true', 'title' => 'Hoşgeldiniz', 'text' => 'Sayın ' . Auth::user()->email . ' sisteme bağlandınız', 'type' => 'success'));
        } else {
            return Redirect::back()->with(array('mesaj' => 'true', 'title' => 'Giriş Hatası', 'text' => 'E-Posta adresiniz veya şifreniz hatalıdır.', 'type' => 'error'));
        }
    }

}
