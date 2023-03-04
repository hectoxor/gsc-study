<span class="admin-heading">Элементы сайта</span>
<div class="content-up">
	<a class="btn btn--add" href="/admin/comps/add">Добавить элемент</a>
</div>
<table class="table">
<thead class="thead">
	<tr>
		<th>ID</th><th>Комментарий</th><th>Текст</th><th>Редактировать</th><!-- <th>Удаление</th> -->
	</tr>
</thead>
<?php foreach ($data as $item) : ?>
	<tr>
		<td><?= $item['Comp']['id']; ?></td>
		<td><?=$item['Comp']['comments']?></td>
		<td><?= $this->Text->truncate(strip_tags($item['Comp']['body']), 70, array('ellipsis' => '...', 'exact' => true)) ?> </td>
		<td>
			<a href="/admin/comps/edit/<?=$item['Comp']['id']?>?lang=ru">rus</a> |
			<a href="/admin/comps/edit/<?=$item['Comp']['id']?>?lang=kz">kaz</a> |
			<a href="/admin/comps/edit/<?=$item['Comp']['id']?>?lang=en">eng</a> |
		</td>
		<!-- <td>
	<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['Comp']['id']), array('confirm' => 'Подтвердите удаление')); ?>
				
		</td> -->
	</tr>
<?php endforeach; ?>
</table>
