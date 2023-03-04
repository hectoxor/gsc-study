<span class="admin-heading">Фото</span>
<div class="content-up">
	<a class="btn btn--add" href="/admin/pictures/add">Добавить материал</a>
</div>
<table>
<th>ID</th><th>Изображение</th><th>Название</th><th>Действия</th>
<?php foreach ($data as $item) : ?>
	<tr>
	<td><?=$item['Picture']['id']?></td>
	<td><img src="/img/pictures/thumbs/<?=$item['Picture']['img']?>" width="100px"></td>
	<td><?=$item['Picture']['title']?></td>
	<td>
	<a href="/admin/pictures/edit/<?=$item['Picture']['id']?>"> Редактировать</a> 
<div class="news_del">	<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['Picture']['id']), array('confirm' => 'Подтвердите удаление')); ?>
			</div> 
	</td>
	</tr>
<?php endforeach; ?>
</table>
