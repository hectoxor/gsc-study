<div class="content-up">
	<a class="btn btn--add" href="/admin/sertificates/add">Добавить материал</a>
</div>
<table class="table">
	<thead class="thead">
		<tr>
			<th>ID</th><th>Изображение</th><th>Редактировать</th><th>Удаление</th>
		</tr>
	</thead>
	<?php foreach ($data as $item) : ?>
		<tr>
		<td><?= $item['Sertificate']['id']; ?></td>
		
		<td><img src="/img/sertificates/thumbs/<?=$item['Sertificate']['img']?>" width="80"></td>
		<td>
			<a href="/admin/sertificates/edit/<?=$item['Sertificate']['id']?>">Редактировать</a>
		 </td>
		 <td>
	<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['Sertificate']['id']), array('confirm' => 'Подтвердите удаление')); ?>
				
		</td>
		</tr>
	<?php endforeach; ?>
</table>