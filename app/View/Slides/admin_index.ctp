<div class="content-up">
	<a class="btn btn--add" href="/admin/slides/add">Добавить материал</a>
</div>
<table class="table">
<thead class="thead">
<tr><th>ID</th><th>Изображение</th><th>Название</th><th>Приоритет</th><th>Город</th><th>Редактировать</th><th>Удалить</th></tr></thead>
<?php foreach ($data as $item) : ?>
	<tr>
	<td><?= $item['Slide']['id']; ?></td>
	<td>
		<img src="/img/slides/thumbs/<?=$item['Slide']['img']?>" width="100">
	</td>
	<td><?=$item['Slide']['title']?></td>
	<td><?=$item['Slide']['priority']?></td>
	<td><?= $item['City']['title']; ?></td>
	 <td>
	 	<a href="/admin/slides/edit/<?=$item['Slide']['id']?>?lang=ru">rus</a> |
	 	<a href="/admin/slides/edit/<?=$item['Slide']['id']?>?lang=kz">kaz</a> |
	 	<a href="/admin/slides/edit/<?=$item['Slide']['id']?>?lang=en">eng</a> |
	 </td>
	<td><div class="news_del">	<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['Slide']['id']), array('confirm' => 'Подтвердите удаление')); ?>
			</div> </td>
	</tr>
<?php endforeach; ?>
</table>
