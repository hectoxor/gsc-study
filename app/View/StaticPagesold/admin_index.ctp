<a href="/admin/static_pages/add?lang=kz">Добавить страницу</a>

<table>
<th>Название</th><th>Редактировать</th><th>Удалить</th>
	<?php foreach ($pages as $page) : ?>
	<tr>
		<td>

		<a href="/static_page/<?=$page['StaticPage']['alias']?>" target="_blank"><?=$page['StaticPage']['title']?></a>
		</td> 
		
		<td><a href="/admin/static_pages/edit/<?=$page['StaticPage']['id']?>?lang=ru"> рус</a> | 
		<a href="/admin/static_pages/edit/<?=$page['StaticPage']['id']?>?lang=kz"> каз</a> 
		</td>
		<td><?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $page['StaticPage']['id']), array('confirm' => 'Подтвердите удаление')); ?></td>
	</tr>
	<?php endforeach; ?>
</table>