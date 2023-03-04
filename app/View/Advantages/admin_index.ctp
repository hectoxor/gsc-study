<span class="admin-heading">Преимущества</span>
<div class="content-up">
	<a class="btn btn--add" href="/admin/advantages/add">Добавить материал</a>
</div>
<table class="table">
	<thead class="thead">
		<tr>
			<th>ID</th><th>Название</th><th>Редактировать</th><th>Удаление</th>
		</tr>
	</thead>
	<?php foreach ($data as $item) : ?>
		<tr>
		<td><?= $item['Advantage']['id']; ?></td>
		
		<td>
			<?= $item['Advantage']['title']; ?>
		</td>
		<td>
			<a href="/admin/advantages/edit/<?=$item['Advantage']['id']?>">Редактировать</a>
		 </td>
		 <td>
	<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['Advantage']['id']), array('confirm' => 'Подтвердите удаление')); ?>
				
		</td>
		</tr>
	<?php endforeach; ?>
</table>