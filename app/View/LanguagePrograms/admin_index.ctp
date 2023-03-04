<div class="content-up">
	<a class="btn btn--add" href="/admin/language_programs/add">Добавить языковую программу</a>
</div>

<table class="table">
	<thead class="thead">
		<tr>
			<th>ID</th><th>Город</th><th>Название</th><th>Редактировать</th><th>Удаление</th>
		</tr>
	</thead>
	<?php foreach ($data as $item) : ?>
		<tr>
			<td><?= $item['LanguageProgram']['id']; ?></td>
			<td><?= $item['City']['title']; ?></td>
			<td><?= $item['LanguageProgram']['title']; ?></td>
			<td>
				<a href="/admin/language_programs/edit/<?=$item['LanguageProgram']['id']?>?lang=ru">rus</a> |
				<a href="/admin/language_programs/edit/<?=$item['LanguageProgram']['id']?>?lang=kz">kaz</a> |
				<a href="/admin/language_programs/edit/<?=$item['LanguageProgram']['id']?>?lang=en">eng</a> |
			 </td>
			 <td>
				<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['LanguageProgram']['id']), array('confirm' => 'Подтвердите удаление')); ?>
					
			</td>
		</tr>
	<?php endforeach ?>
</table>

