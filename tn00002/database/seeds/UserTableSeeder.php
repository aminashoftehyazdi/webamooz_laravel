<?php
	use Illuminate\Database\Seeder;
	use App\User;

	class UserTableSeeder extends Seeder
	{
		/**
			* Run the database seeds.
			*
			* @return void
		*/
		public function run()
		{
			if(!User::count()) {
				$this->registerData();
			}
		}
		private function registerData(){
			User::create([
			'name'=>'user1',
			'email'=>'user1@webamooz.net',
			'password'=>bcrypt('password'),
			'api_token'=>null,
			]);
			User::create([
			'name'=>'user2',
			'email'=>'user2@webamooz.net',
			'password'=>bcrypt('password'),
			'api_token'=>null,
			]);
			User::create([
			'name'=>'user3',
			'email'=>'user3@webamooz.net',
			'password'=>bcrypt('password'),
			'api_token'=>null,
			]);
			User::create([
			'name'=>'user4',
			'email'=>'user4@webamooz.net',
			'password'=>bcrypt('password'),
			'api_token'=>null,
			]);
			User::create([
			'name'=>'user5',
			'email'=>'user5@webamooz.net',
			'password'=>bcrypt('password'),
			'api_token'=>null,
			]);
			
		}
	}			