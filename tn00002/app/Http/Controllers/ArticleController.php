<?php
	namespace App\Http\Controllers;
	use Illuminate\Http\Request;
	use App\Article;
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
	}