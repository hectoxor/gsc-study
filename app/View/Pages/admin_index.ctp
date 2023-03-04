<span class="admin-heading">Статические страницы</span>
<div class="content-up">
	<a class="btn btn--add" href="/admin/pages/add">Добавить материал</a>
</div>
<table>
<th>Название</th><th>Редактировать</th><!-- <th>Удалить</th> -->
	<?php foreach ($pages as $page) : ?>
	<tr>
		<td><a href="/page/<?=$page['Page']['alias']?>" target="_blank"><?=$page['Page']['title']?></a></td> 
		
		<td>
			<a href="/admin/pages/edit/<?=$page['Page']['id']?>?lang=ru">rus</a> |
			<a href="/admin/pages/edit/<?=$page['Page']['id']?>?lang=kz">kaz</a> |
			<a href="/admin/pages/edit/<?=$page['Page']['id']?>?lang=en">eng</a> |
		</td>
		<!-- <td><?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $page['Page']['id']), array('confirm' => 'Подтвердите удаление')); ?></td> -->
	</tr>
	<?php endforeach; ?>
</table>