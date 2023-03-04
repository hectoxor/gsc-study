<span class="admin-heading">Услуги</span>
<div class="content-up">
	<a class="btn btn--add" href="/admin/services/add">Добавить материал</a>
</div>
<table class="table">
	<thead class="thead">
		<tr>
			<th>ID</th><th>Название</th><th>Редактировать</th><th>Удаление</th>
		</tr>
	</thead>
	<?php foreach ($data as $item) : ?>
		<tr>
		<td><?= $item['Service']['id']; ?></td>
		
		<td>
			<?= $item['Service']['title']; ?>
		</td>
		<td>
			<a href="/admin/services/edit/<?=$item['Service']['id']?>">Редактировать</a>
		 </td>
		 <td>
	<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['Service']['id']), array('confirm' => 'Подтвердите удаление')); ?>
				
		</td>
		</tr>
	<?php endforeach; ?>
</table>