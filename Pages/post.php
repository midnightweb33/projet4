<?php 

	$post = App\App::getDataBase()->prepare ('SELECT * FROM posts WHERE id=?',[$_GET['id']],'App\Table\Article',true);
?>
	<h2><?= $post->title?></h2>

<p><?= $post->content ?></p>
<p><?= $post->author?> le <?= $post->date_create?></p>

