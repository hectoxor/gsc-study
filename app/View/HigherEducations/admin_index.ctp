<div class="content-up">
	<a class="btn btn--add" href="/admin/higher_educations/add">Добавить материал </a>
</div>

<table class="table">
	<thead class="thead">
		<tr>
			<th>ID</th><th>Город</th><th>Название</th><th>Редактировать</th><th>Удаление</th>
		</tr>
	</thead>
	<?php foreach ($data as $item) : ?>
		<tr>
			<td><?= $item['HigherEducation']['id']; ?></td>
			<td><?= $item['City']['title']; ?></td>
			<td><?= $item['HigherEducation']['title']; ?></td>
			<td>
				<a href="/admin/higher_educations/edit/<?=$item['HigherEducation']['id']?>?lang=ru">rus</a> |
				<a href="/admin/higher_educations/edit/<?=$item['HigherEducation']['id']?>?lang=kz">kaz</a> |
				<a href="/admin/higher_educations/edit/<?=$item['HigherEducation']['id']?>?lang=en">eng</a> |
			 </td>
			 <td>
				<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['HigherEducation']['id']), array('confirm' => 'Подтвердите удаление')); ?>
					
			</td>
		</tr>
	<?php endforeach ?>
</table>

