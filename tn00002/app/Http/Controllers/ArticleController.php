<?php
	namespace App\Http\Controllers;
	use Illuminate\Http\Request;
	use App\Article;
	use App\User;
	class ArticleController extends Controller
	{
		public function index(Request $request){
			$articles = Article::all()->toArray();
			return $articles;
		}
		public function show(Request $request, $id) {
			try{
				$article = Article::findOrFail($id);
				return $article;
			}
			catch (\Exception $e){
				return response(['message'=>'Not Found Resource'], 404);
			}
		}
		
		
		public function store(Request $request) {
			 $data = $request->only('title','body');
			 $user = User::find(1);
			 $article = $user->articles()->create($data);
			 return response($article, 201);
			
		}
	}		