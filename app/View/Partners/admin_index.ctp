<div class="content-up">
	<a class="btn btn--add" href="/admin/partners/add">Добавить материал</a>
</div>
<table class="table">
<thead class="thead">
<tr><th>ID</th><th>Название</th><th>Изображение</th><th>Тип</th><th>Редактировать</th><th>Удаление</th></tr></thead>
<?php foreach ($data as $item) : ?>
	<tr>
	<td><?= $item['Partner']['id']; ?></td>
	 <td><?=$item['Partner']['title']?></td>
	<td style="background-color: black;">
		<img src="/img/partners/<?=$item['Partner']['img']?>" width="100px">
	</td>
	 <td><?=$item['Partner']['type']?></td>
	 <td><a href="/admin/partners/edit/<?=$item['Partner']['id']?>"> Редактировать</a>
	</td>
	<td><div class="news_del">	<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['Partner']['id']), array('confirm' => 'Подтвердите удаление')); ?>
			</div> </td>
	</tr>
<?php endforeach; ?>
</table>
