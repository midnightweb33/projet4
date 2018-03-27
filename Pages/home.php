<?php
use App\Table\Article;
foreach (Article::getLast() as $post): ?>

	<div>
		<h2>
			<a href="<?= $post->getUrl() ?>">
				<?= $post->title ?>
			</a>
		</h2>
		<div>
			<p>
				<span><?= $post->author ?></span>
				<?= $post->date_create ?>
			</p>
			<p><?= $post->getExtract() ?></p>

		</div>
	</div>
<?php endforeach ?>