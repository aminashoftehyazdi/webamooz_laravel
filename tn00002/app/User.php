<?php
	
	namespace App;
	
	use Illuminate\Contracts\Auth\MustVerifyEmail;
	use Illuminate\Foundation\Auth\User as Authenticatable;
	use Illuminate\Notifications\Notifiable;
	use Illuminate\Support\Str;

	
	class User extends Authenticatable
	{
		use Notifiable;
		
		/**
			* The attributes that are mass assignable.
			*
			* @var array
		*/
		protected $fillable = [
        'name', 'email', 'password', 'api_token'
		];
		 
		/**
			* The attributes that should be hidden for arrays.
			*
			* @var array
		*/
		protected $hidden = [
        'password', 'remember_token', 'api_token', 'email_verified_at'
		];
		
		/**
			* The attributes that should be cast to native types.
			*
			* @var array
		*/
		protected $casts = [
        'email_verified_at' => 'datetime',
		];
		
		
		public function articles(){
			return $this->hasMany(Article::class);
			
		}
		
		public function myGenerateToken(){ // a method that we create 
			/* step 1
			return 'asdasdfasdf';
			*/
		
			$token = Str::random(50); // ????? how can check it is unique in table
			$this->api_token = $token;
			$this->save();
			return $token;
			
		}
	}
