<div class="content-up">
	<a class="btn btn--add" href="/admin/albums/add">Добавить материал</a>
</div>
<table class="table">
	<thead class="thead">
		<tr>
			<th>ID</th><th>Название</th><th>Редактировать</th><th>Удаление</th>
		</tr>
	</thead>
	<?php foreach ($data as $item) : ?>
		<tr>
			<td><?= $item['Album']['id']; ?></td>
			<td><?= $item['Album']['title']; ?></td>
			<td>
				<a href="/admin/albums/edit/<?=$item['Album']['id']?>">Редактировать</a>
			 </td>
			 <td>
				<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['Album']['id']), array('confirm' => 'Подтвердите удаление')); ?>
			</td>
		</tr>
	<?php endforeach; ?>
</table>