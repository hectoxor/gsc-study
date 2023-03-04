<a href="/admin/images/add">Добавить фото</a>
<br>
<table>
<th>Изображение</th><th>Элемент</th><th>Действия</th>
<?php foreach ($data as $item) : ?>
	<tr>
	<td><img src="/img/developments/thumbs/<?=$item['Image']['img']?>" width="100"></td>
	<td><?=$item['Development']['title']?></td>
	<td>
	<a href="/admin/images/edit/<?=$item['Image']['id']?>"> Редактировать</a> 
<div class="news_del">	<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['Image']['id']), array('confirm' => 'Подтвердите удаление')); ?>
			</div> 
	</td>
	</tr>
<?php endforeach; ?>
</table>
