<div class="content-up">
	<a class="btn btn--add" href="/admin/edu_organizations/add">Добавить учебное заведение</a>
</div>
<table>
<th>ID</th><th>Изображение</th><th width="30%">Название</th><th>Страна</th><th>Приоритет</th><th>Опубликовано</th><th>Редактировать</th><th>Удаление</th>
	<?php foreach ($data as $item) : ?>
	<tr>
		<td><?=$item['EduOrganization']['id']?></td> 
		<td><img src="/img/edu_organizations/thumbs/<?=$item['EduOrganization']['img']?>" width="100px"></td> 
		<td>
			<b><?=$item['EduOrganization']['title']?></b><br>
			<?= $types[$item['EduOrganization']['type']] ?>	
		</td> 
		<td><?=$item['Country']['title']?></td> 
		<td><?=$item['EduOrganization']['item_order']?></td>
		<td><?=($item['EduOrganization']['active']) ? 'Да' : 'Нет'?></td>
		<td>
			<a href="/admin/edu_organizations/edit/<?=$item['EduOrganization']['id']?>?lang=ru">rus</a> |
			<a href="/admin/edu_organizations/edit/<?=$item['EduOrganization']['id']?>?lang=kz">kaz</a> |
			<a href="/admin/edu_organizations/edit/<?=$item['EduOrganization']['id']?>?lang=en">eng</a> |
		</td>
		<td><?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['EduOrganization']['id']), array('confirm' => 'Подтвердите удаление')); ?></td>
	</tr>
	<?php endforeach; ?>
</table>

<!-- <div class="pagi">
	<div class="pages"><div class="page-count"> <strong><?=__('Страница')?>:</strong></div>
	<?php 
	echo $this->Paginator->counter(array(
	    'separator' => ' из ',
	    
	    ));
	 ?>
	</div>		
	<div class="pag-bot">
		<div class="pag-bot__arrow"><?php echo $this->Paginator->first('<<'); ?></div>
		<ul class="pagination">
		<?php echo $this->Paginator->numbers(
		    array(
		        'separator' => '',
		        'tag' => 'li',
		        'modulus' => 4
		        )
		); ?>
    	</ul>
		<div class="pag-bot__arrow"><?php echo $this->Paginator->last('>>'); ?></div>
	</div>	
</div> -->