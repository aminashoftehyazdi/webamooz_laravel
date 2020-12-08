<?php
	namespace App\Http\Controllers;
	use Illuminate\Http\Request;
	use App\User;
	use Illuminate\Support\Facades\Hash;
	class AuthController extends Controller
	{
		public function login(Request $request){
			/* // correct but we want another and simple way
				$user = User::where(['email'=>$request->username])->first();
				if(!empty($user)){
				$check = Hash::check($request->password, $user->password);
				dd($check);
				}
			*/
			$user = auth()->attempt([
			'email'=>$request->username,
			'password'=>$request->password
			]);
			if(auth()->check()){
				//return auth()->user();
				return response(['token'=>auth()->user()->myGenerateToken()],200); 
			}
			return response(['error'=>'credential is incorrect'],401);
		}
	}			