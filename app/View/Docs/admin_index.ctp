<div class="content-up">
	<a class="btn btn--add" href="/admin/docs/add">Добавить материал </a>
</div>

<table class="table">
	<thead class="thead">
		<tr>
			<th>ID</th><th>Название</th><th>Документ</th><th>Редактировать</th><th>Удаление</th>
		</tr>
	</thead>
	<?php foreach ($data as $item) : ?>
		<tr>
			<td><?= $item['Doc']['id']; ?></td>
			<td><?= $item['Doc']['title']; ?></td>
			<td>
				<a href="/files/docs/<?=$item['Doc']['doc']?>">Документ</a>
			</td>
			<td>
				<a href="/admin/docs/edit/<?=$item['Doc']['id']?>">Редактировать</a>
			 </td>
			 <td>
				<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['Doc']['id']), array('confirm' => 'Подтвердите удаление')); ?>
					
			</td>
		</tr>
	<?php endforeach ?>
</table>

