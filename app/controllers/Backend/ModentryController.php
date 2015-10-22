<?php

class Backend_ModentryController extends BackendController {
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


    
    public function getEntrylistele(){
        $entryler = Entry::all();
        return View::make('backend.mod.entry.listele',array('entry'=>$entryler));
    }
    
    public function getEntrysil($id){
        $entry = Entry::findOrFail($id);
        $entry->delete();
        if (!$entry->delete()) {
            return Redirect::back()->with(array('mesaj' => 'true', 'title' => 'Entry Silindi', 'text' => 'Entry Başarı İle Silindi', 'type' => 'success'));
        } else {
            return Redirect::back()->with(array('mesaj' => 'true', 'title' => 'Entry Silinemedi', 'text' => 'Entry Silinirken Sorun İle Karşılaşıldı', 'type' => 'error'));
        }
    }
    
    public function getEntryduzenle($id){
       $entry = Entry::findOrFail($id);
       return View::make('backend.mod.entry.duzenle',array('entry'=>$entry));
    }
    
    
    public function postEntryduzenle($id) {
        $validate = Validator::make(Input::all(), Entry::$rules);
        $messages = $validate->messages();
        if ($validate->fails())
            return Redirect::back()->with(array('mesaj' => 'true', 'title' => 'Doğrulama Hatası', 'text' => '' . $messages->first() . '', 'type' => 'error'));
        
        $entry = Entry::findOrFail($id);
        $entry ->content = Input::get('content');
        $entry ->save();
        if ($entry->save()) {
            return Redirect::back()->with(array('mesaj' => 'true', 'title' => 'Entry Güncellendi', 'text' => 'Entry Başarı İle Güncellendi', 'type' => 'success'));
        } else {
            return Redirect::back()->with(array('mesaj' => 'true', 'title' => 'Entry Güncellenemedi', 'text' => 'Entry Güncellenirken Sorun İle Karşılaşıldı', 'type' => 'error'));
        }

    }
    
    
    
    
    
    
    

}
