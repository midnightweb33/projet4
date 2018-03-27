<?php
	require '../App/Autoloader.php';
	App\autoloader::register();

	use App\Table\Article;
	use App\Main;
//require '../App/Database.php';
//require '../App/Table/Article.php';
//require '../App/app.php';

		if(isset($_GET['p'])){
			$p=$_GET['p'];
		}else{
			$p="home";
		}

include '../Pages/Home.php';

	ob_start();
		if($p=== 'home'){
			require '../Pages/Home.php';
		}elseif ($p=== 'post') {
			require '../Pages/post.php';
		}
	$content= ob_get_clean();
	require '../Pages/Templates/default.php';
?>