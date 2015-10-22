<?php

class Entry extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
        public $timestamps = false;
	protected $table = 'entry';
        public static $rules = ['content'=>'required'];
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
            public function title(){
            return $this->belongsTo('Title','title','id','content');
        }
        
        

}
