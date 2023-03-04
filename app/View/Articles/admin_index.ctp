<span class="admin-heading">Статьи</span>
<div class="content-up">
	<a class="btn btn--add" href="/admin/articles/add">Добавить материал</a>
</div>
<table class="table">
	<thead class="thead">
		<tr>
			<th>ID</th><th>Название</th><th>Редактировать</th><th>Удаление</th>
		</tr>
	</thead>
	<?php foreach ($data as $item) : ?>
		<tr>
		<td><?= $item['Article']['id']; ?></td>
		<td><?= $item['Article']['title']; ?></td>
		<td>
			<a href="/admin/articles/edit/<?=$item['Article']['id']?>?lang=ru">rus</a> |
			<a href="/admin/articles/edit/<?=$item['Article']['id']?>?lang=kz">kaz</a> |
			<a href="/admin/articles/edit/<?=$item['Article']['id']?>?lang=en">eng</a> |
		 </td>
		 <td>
	<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['Article']['id']), array('confirm' => 'Подтвердите удаление')); ?>
				
		</td>
		</tr>
	<?php endforeach; ?>
</table>