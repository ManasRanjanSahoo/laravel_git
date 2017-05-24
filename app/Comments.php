<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    //
        protected $table = 'comments' ;

        public function post(){
        	return $this->belongsTo(Post::class);
        }

        public function user()
		{
		      //return $this->belongsTo('App\User');
			return $this->belongsTo(User::class);
		}

}
