<h1>Заявки</h1>
<table class="table">
	<thead class="thead">
		<tr>
			<th>ID</th><th>ФИО</th><th>E-mail</th><th>Телефон</th><th>Текст</th><!-- <th>Редактировать</th> --><th>Удаление</th>
		</tr>
	</thead>
	<?php foreach ($data as $item) : ?>
		<tr>
		<td><?= $item['Request']['id']; ?></td>
		<td><?= $item['Request']['name']; ?></td>
		<td><?= $item['Request']['email']; ?></td>
		<td><?= $item['Request']['phone']; ?></td>
		<td><?= $item['Request']['body']; ?></td>
		<!-- <td>
			<a href="/admin/requests/edit/<?=$item['Request']['id']?>">Редактировать</a>
		 </td> -->
		 <td>
	<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['Request']['id']), array('confirm' => 'Подтвердите удаление')); ?>
				
		</td>
		</tr>
	<?php endforeach; ?>
</table>