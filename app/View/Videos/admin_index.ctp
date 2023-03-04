<div class="content-up">
	<a class="btn btn--add" href="/admin/videos/add">Добавить материал</a>
</div>
<table class="table">
<thead class="thead">
<tr><th>ID</th><th>Видео</th><th>Редактировать</th><th>Удаление</th></tr></thead>
<?php foreach ($data as $item) : ?>
	<tr>
	<td><?= $item['Video']['id']; ?></td>
	<td>
		<iframe width="250" height="150" src="https://www.youtube.com/embed/<?=$item['Video']['youtube']?>?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
	</td>
	 <td><a href="/admin/videos/edit/<?=$item['Video']['id']?>"> Редактировать</a>
	</td>
	<td><div class="news_del">	<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['Video']['id']), array('confirm' => 'Подтвердите удаление')); ?>
			</div> </td>
	</tr>
<?php endforeach; ?>
</table>
