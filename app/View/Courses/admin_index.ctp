<span class="admin-heading">Летние курсы за рубежом</span>
<div class="content-up">
	<a class="btn btn--add" href="/admin/courses/add">Добавить материал</a>
</div>
<table>
<th>Название</th><th>Редактировать</th><th>Удалить</th>
	<?php foreach ($data as $page) : ?>
	<tr>
		<td><a href="/course/<?=$page['Course']['alias']?>" target="_blank"><?=$page['Course']['title']?></a></td> 
		
		<td>
			<a href="/admin/courses/edit/<?=$page['Course']['id']?>?lang=ru">rus</a> |
			<a href="/admin/courses/edit/<?=$page['Course']['id']?>?lang=kz">kaz</a> |
			<a href="/admin/courses/edit/<?=$page['Course']['id']?>?lang=en">eng</a> |
		</td>
		<td><?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $page['Course']['id']), array('confirm' => 'Подтвердите удаление')); ?></td>
	</tr>
	<?php endforeach; ?>
</table>