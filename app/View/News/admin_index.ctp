<span class="admin-heading">Новости</span>
<div class="content-up">
	<a class="btn btn--add" href="/admin/news/add">Добавить материал</a>
</div>
<table class="table">
	<thead class="thead">
		<tr>
			<th>ID</th><th>Название</th><th>Город</th><th>Редактировать</th><th>Удаление</th>
		</tr>
	</thead>
	<?php foreach ($data as $item) : ?>
		<tr>
		<td><?= $item['News']['id']; ?></td>
		<td><?= $item['News']['title']; ?></td>
		<td><?= $item['City']['title']; ?></td>
		<td>
			<a href="/admin/news/edit/<?=$item['News']['id']?>?lang=ru">rus</a> |
			<a href="/admin/news/edit/<?=$item['News']['id']?>?lang=kz">kaz</a> |
			<a href="/admin/news/edit/<?=$item['News']['id']?>?lang=en">eng</a> |
		 </td>
		 <td>
	<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['News']['id']), array('confirm' => 'Подтвердите удаление')); ?>
				
		</td>
		</tr>
	<?php endforeach; ?>
</table>