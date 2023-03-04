<div class="content-up">
	<a class="btn btn--add" href="/admin/reviews/add">Добавить материал</a>
</div>
<table class="table">
<thead class="thead">
<tr><th>ID</th><th>Название</th><th>Редактировать</th><th>Удаление</th></tr></thead>
<?php foreach ($data as $item) : ?>
	<tr>
	<td><?= $item['Review']['id']; ?></td>
	<td>
		<?= $item['Review']['title']; ?>
	</td>
	 <td><a href="/admin/reviews/edit/<?=$item['Review']['id']?>"> Редактировать</a>
	</td>
	<td><div class="news_del">	<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['Review']['id']), array('confirm' => 'Подтвердите удаление')); ?>
			</div> </td>
	</tr>
<?php endforeach; ?>
</table>
