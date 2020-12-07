<?php
	
	namespace App\Http\Controllers;
	
	use Illuminate\Http\Request;
	use App\User;
	class UserController extends Controller
	{
		public function index(Request $request){
			
			$articles = User::all()->toArray();
			return $articles;
		}
		
		public function show(Request $request, $id) {
			
			$user = User::findOrFail($id);
			return $user;
		}
		
	}
