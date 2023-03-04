<div class="content-up">
	<!-- <a class="btn btn--add" href="/admin/libraries/add">Добавить материал рус</a> -->
	<a class="btn btn--add" href="/admin/contacts/add">Добавить материал</a>
</div>

<?php $types = array('' => 'Нет', 'filial' => 'Филиал', 'education' => 'Образование за рубежом', 'school' => 'Языковая школа'); ?>

<table class="table">
	<thead class="thead">
		<tr>
			<th>ID</th><th>Название</th><th>Тип</th><th>Город</th><th>Редактировать</th><th>Удаление</th>
		</tr>
	</thead>
	<?php foreach ($data as $item) : ?>
		<tr>
		<td><?= $item['Contact']['id']; ?></td>
		
		<td><?=$item['Contact']['title']?></td>
		<td><?= $types[$item['Contact']['type']] ?></td>
		<td><?=$item['City']['title']?></td>
		<td>
			<a href="/admin/contacts/edit/<?=$item['Contact']['id']?>?lang=ru">rus</a> |
			<a href="/admin/contacts/edit/<?=$item['Contact']['id']?>?lang=kz">kaz</a> |
			<a href="/admin/contacts/edit/<?=$item['Contact']['id']?>?lang=en">eng</a> |
		 </td>
		 <td>
	<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['Contact']['id']), array('confirm' => 'Подтвердите удаление')); ?>
				
		</td>
		</tr>
	<?php endforeach; ?>
</table>