<?php
	use Illuminate\Database\Seeder;
	use App\Article;
	class ArticleTableSeeder extends Seeder
	{
		/**
			* Run the database seeds.
			*
			* @return void
		*/
		public function run()
		{
			if(!Article::count()) {
				$this->registerData();
			}
		}
		private function registerData(){
			foreach([1,2,3,4,5] as $user_id){
				foreach(range(6,9) as $i){
					Article::create([
					'user_id'=>$user_id,
					'title'=>'article '. $i . $i . ' way to be happy ',
					'body'=>'article '. $i . $i . ' being good ',
					]);
				}
			}
		}
	}		