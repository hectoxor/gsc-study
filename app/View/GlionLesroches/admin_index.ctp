<div class="content-up">
	<a class="btn btn--add" href="/admin/glion_lesroches/add">Добавить учебное заведение</a>
</div>
<table>
	<tr>
		<th>ID</th>
		<th>Название</th>
		<th>Изображение</th>
		<th>Тип</th>
		<th>Приоритет</th>
		<th>Редактировать</th>
		<th>Удаление</th>
	</tr>

	<?php foreach ($data as $item) : ?>
	<tr>
		<td><?=$item['GlionLesroche']['id']?></td> 
		<td>
			<b><?=$item['GlionLesroche']['title']?></b>
		</td> 
		<td>
			<img src="/img/glion_lesroches/thumbs/<?=$item['GlionLesroche']['img']?>" width="100px">
		</td> 
		<td><?= $types[$item['GlionLesroche']['type']] ?>	</td>
		<td><?=$item['GlionLesroche']['item_order']?></td>
		<td>
			<a href="/admin/glion_lesroches/edit/<?=$item['GlionLesroche']['id']?>?lang=ru">rus</a> |
			<a href="/admin/glion_lesroches/edit/<?=$item['GlionLesroche']['id']?>?lang=kz">kaz</a> |
			<a href="/admin/glion_lesroches/edit/<?=$item['GlionLesroche']['id']?>?lang=en">eng</a> |
		</td>
		<td><?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['GlionLesroche']['id']), array('confirm' => 'Подтвердите удаление')); ?></td>
	</tr>
	<?php endforeach; ?>
</table>

<div class="pagi">
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
</div>