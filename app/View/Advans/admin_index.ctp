<h1>Список Преимуществ</h1>

<a class="btn btn--add" href="/admin/advans/add">Добавить преимущество</a>
<br><br>

<?php if($advans): ?>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Заголовок</th>
				<th>Описание</th>
				<th>Приоритет</th>
				<th>Редактирование</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach( $advans as $advan ): ?>
			<tr>
				<td>
					<?php echo $advan['Advan']['id'] ?>
				</td>
				<td>
					<?= $advan['Advan']['title'] ?>
				</td>
				<td>
					<?= $advan['Advan']['body'] ?>
				</td>
				<td>
					<?= $advan['Advan']['item_order'] ?>
				</td>
				<td>
					<a href="/admin/advans/edit/<?php echo $advan['Advan']['id'] ?>?lang=ru">rus</a> |
					<a href="/admin/advans/edit/<?php echo $advan['Advan']['id'] ?>?lang=kz">kaz</a> |
					<a href="/admin/advans/edit/<?php echo $advan['Advan']['id'] ?>?lang=en">eng</a> |
					<?php  echo $this->Form->postLink('Удалить', "/admin/advans/delete/{$advan['Advan']['id']}", array('confirm' => 'Удалить преимущество?')) ?>
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