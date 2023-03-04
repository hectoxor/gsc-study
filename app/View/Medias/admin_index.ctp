<div class="content-up">
	<a class="btn btn--add" href="/admin/medias/add">Добавить материал</a>
</div>
<table class="table">
<thead class="thead">
<tr><th>ID</th><th>Видео</th><th>Курс</th><th>Редактировать</th><th>Удаление</th></tr></thead>
<?php foreach ($data as $item) : ?>
	<tr>
	<td><?= $item['Media']['id']; ?></td>
	<td>
		<iframe width="250" height="150" src="https://www.youtube.com/embed/<?=$item['Media']['youtube']?>?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
	</td>
	 <td><?=$item['Course']['title']?></td>
	 <td><a href="/admin/medias/edit/<?=$item['Media']['id']?>"> Редактировать</a>
	</td>
	<td><div class="news_del">	<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['Media']['id']), array('confirm' => 'Подтвердите удаление')); ?>
			</div> </td>
	</tr>
<?php endforeach; ?>
</table>
