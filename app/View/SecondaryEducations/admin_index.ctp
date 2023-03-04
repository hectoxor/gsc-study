<div class="content-up">
	<a class="btn btn--add" href="/admin/secondary_educations/add">Добавить материал </a>
</div>

<table class="table">
	<thead class="thead">
		<tr>
			<th>ID</th><th>Город</th><th>Название</th><th>Редактировать</th><th>Удаление</th>
		</tr>
	</thead>
	<?php foreach ($data as $item) : ?>
		<tr>
			<td><?= $item['SecondaryEducation']['id']; ?></td>
			<td><?= $item['City']['title']; ?></td>
			<td><?= $item['SecondaryEducation']['title']; ?></td>
			<td>
				<a href="/admin/secondary_educations/edit/<?=$item['SecondaryEducation']['id']?>?lang=ru">rus</a> |
				<a href="/admin/secondary_educations/edit/<?=$item['SecondaryEducation']['id']?>?lang=kz">kaz</a> |
				<a href="/admin/secondary_educations/edit/<?=$item['SecondaryEducation']['id']?>?lang=en">eng</a> |
			 </td>
			 <td>
				<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['SecondaryEducation']['id']), array('confirm' => 'Подтвердите удаление')); ?>
					
			</td>
		</tr>
	<?php endforeach ?>
</table>

