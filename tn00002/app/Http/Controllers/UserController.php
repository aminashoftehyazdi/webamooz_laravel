<?php
	namespace App\Http\Controllers;
	use Illuminate\Http\Request;
	use App\User;
	class UserController extends Controller
	{
		public function index(Request $request){
	
		// for find who is login
		//dd($request->guard('api')->user());
			$articles = User::all()->toArray();
			return $articles;
		}
		public function show(Request $request, $id) {
			try{
				$user = User::findOrFail($id);
				return $user;
			}
			catch (\Exception $e){
				return response(['message'=>'Not Found Resource'], 404);
			}
		}
		public function store(Request $request){
			$user = User::create([
			'name'=>$request->name,
			'email'=>$request->email,
			'password'=>bcrypt($request->password)
			]);
			return response($user,201);
		}
	}					