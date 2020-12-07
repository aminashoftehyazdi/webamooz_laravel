<?php
	namespace App;
	use Illuminate\Database\Eloquent\Model;
	class Article extends Model
	{
		protected $fillable = ['title','user_id','body'];
		public function user(){
			return $this->belongsTo(User::class);
		}
	}