
<h1>Список Сотрудников</h1>

<a class="btn btn--add" href="/admin/teams/add">Добавить сотрудника</a>
<br><br>

<?php if($data): ?>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>ФИО</th>
				<th>Должность</th>
				<th>Картинка</th>
				<th>Приоритет</th>
				<th>Редактирование</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach( $data as $advan ): ?>
			<tr>
				<td>
					<?php echo $advan['Team']['id'] ?>
				</td>
				<td>
					<?= $advan['Team']['title'] ?>
				</td>
				<td>
					<?= $advan['Team']['position'] ?>
				</td>
				<td>
					<img src="/img/teams/thumbs/<?=$advan['Team']['img']?>" width="120">
				</td>
				<td>
					<?= $advan['Team']['item_order'] ?>
				</td>
				<td>
					<a href="/admin/teams/edit/<?php echo $advan['Team']['id'] ?>?lang=ru">rus</a> |
					<a href="/admin/teams/edit/<?php echo $advan['Team']['id'] ?>?lang=kz">kaz</a> |
					<a href="/admin/teams/edit/<?php echo $advan['Team']['id'] ?>?lang=en">eng</a> |
					<?php  echo $this->Form->postLink('Удалить', "/admin/teams/delete/{$advan['Team']['id']}", array('confirm' => 'Удалить преимущество?')) ?>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
<?php endif; ?>

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
