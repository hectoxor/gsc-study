<div class="content-up">
	<a class="btn btn--add" href="/admin/static_pages/add">Добавить страницу</a>
</div>	

<table class="table">
	<thead>
		<th>Название</th><th>Редактировать</th><th>Удалить</th>
	</thead>
	<?php foreach ($pages as $page) : ?>
	<tr>
		<td><a href="/static/<?=$page['StaticPage']['alias']?>"><?=$page['StaticPage']['title']?></a></td> 
		<td>
			<a href="/admin/static_pages/edit/<?=$page['StaticPage']['id']?>?lang=ru">rus</a> |
			<a href="/admin/static_pages/edit/<?=$page['StaticPage']['id']?>?lang=kz">kaz</a> |
			<a href="/admin/static_pages/edit/<?=$page['StaticPage']['id']?>?lang=en">eng</a> |
		</td>
		<td><?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $page['StaticPage']['id']), array('confirm' => 'Подтвердите удаление')); ?></td>
	</tr>
	<?php endforeach; ?>
</table>