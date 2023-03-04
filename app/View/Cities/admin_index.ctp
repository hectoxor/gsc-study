<div class="content-up">
	<a class="btn btn--add" href="/admin/cities/add">Добавить материал</a>
</div>
<table class="table">
	<thead class="thead">
		<tr>
			<th>ID</th><th>Название</th><th>Приоритет</th><th>Редактировать</th><th>Удаление</th>
		</tr>
	</thead>
	<?php foreach ($data as $item) : ?>
		<tr>
			<td><?= $item['City']['id']; ?></td>
			<td><?= $item['City']['title']; ?></td>
			<td><?= $item['City']['priority']; ?></td>
			<td>
				<a href="/admin/cities/edit/<?=$item['City']['id']?>?lang=ru">rus</a> |
				<a href="/admin/cities/edit/<?=$item['City']['id']?>?lang=kz">kaz</a> |
				<a href="/admin/cities/edit/<?=$item['City']['id']?>?lang=en">eng</a> |
			 </td>
			 <td>
				<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['City']['id']), array('confirm' => 'Подтвердите удаление')); ?>
			</td>
		</tr>
	<?php endforeach; ?>
</table>