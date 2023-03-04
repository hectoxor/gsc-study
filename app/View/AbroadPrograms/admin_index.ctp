<div class="content-up">
	<a class="btn btn--add" href="/admin/abroad_programs/add">Добавить материал </a>
</div>

<table class="table">
	<thead class="thead">
		<tr>
			<th>ID</th><th>Город</th><th>Название</th><th>Редактировать</th><th>Удаление</th>
		</tr>
	</thead>
	<?php foreach ($data as $item) : ?>
		<tr>
			<td><?= $item['AbroadProgram']['id']; ?></td>
			<td><?= $item['City']['title']; ?></td>
			<td><?= $item['AbroadProgram']['title']; ?></td>
			<td>
				<a href="/admin/abroad_programs/edit/<?=$item['AbroadProgram']['id']?>?lang=ru">rus</a> |
				<a href="/admin/abroad_programs/edit/<?=$item['AbroadProgram']['id']?>?lang=kz">kaz</a> |
				<a href="/admin/abroad_programs/edit/<?=$item['AbroadProgram']['id']?>?lang=en">eng</a> |
			 </td>
			 <td>
				<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['AbroadProgram']['id']), array('confirm' => 'Подтвердите удаление')); ?>
					
			</td>
		</tr>
	<?php endforeach ?>
</table>

