<?php

class Title extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
        public $timestamps = false;
	protected $table = 'title';
        public static $rules = ['content'=>'required'];
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
        public function entry(){
            return $this->belongsTo('Entry','entry','id','content');
        }
        

}
