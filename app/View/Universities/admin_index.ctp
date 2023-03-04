<div class="content-up">
	<a class="btn btn--add" href="/admin/universities/add">Добавить учебное заведение</a>
</div>
<table>
<th>ID</th><th>Изображение</th><th width="30%">Название</th><th>Страна</th><th>Приоритет</th><th>Опубликовано</th><th>Редактировать</th><th>Удаление</th>
	<?php foreach ($data as $item) : ?>
	<tr>
		<td><?=$item['University']['id']?></td> 
		<td><img src="/img/universities/thumbs/<?=$item['University']['img']?>" width="100px"></td> 
		<td>
			<b><?=$item['University']['title']?></b><br>
			<?= $types[$item['University']['type']] ?>	
		</td> 
		<td><?=$item['Country']['title']?></td> 
		<td><?=$item['University']['priority']?></td>
		<td><?=($item['University']['active']) ? 'Да' : 'Нет'?></td>
		<td>
			<a href="/admin/universities/edit/<?=$item['University']['id']?>?lang=ru">rus</a> |
			<a href="/admin/universities/edit/<?=$item['University']['id']?>?lang=kz">kaz</a> |
			<a href="/admin/universities/edit/<?=$item['University']['id']?>?lang=en">eng</a> |
		</td>
		<td><?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['University']['id']), array('confirm' => 'Подтвердите удаление')); ?></td>
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