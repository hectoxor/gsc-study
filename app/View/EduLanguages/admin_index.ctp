<h1>Список Языков обучения</h1>

<a class="btn btn--add" href="/admin/edu_languages/add">Добавить язык обучения</a>
<br><br>

<?php if($data): ?>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Заголовок</th>
				<th>Приоритет</th>
				<th>Редактирование</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach( $data as $advan ): ?>
			<tr>
				<td>
					<?php echo $advan['EduLanguage']['id'] ?>
				</td>
				<td>
					<?= $advan['EduLanguage']['title'] ?>
				</td>
				<td>
					<?= $advan['EduLanguage']['priority'] ?>
				</td>
				<td>
					<a href="/admin/edu_languages/edit/<?php echo $advan['EduLanguage']['id'] ?>?lang=ru">rus</a> |
					<a href="/admin/edu_languages/edit/<?php echo $advan['EduLanguage']['id'] ?>?lang=kz">kaz</a> |
					<a href="/admin/edu_languages/edit/<?php echo $advan['EduLanguage']['id'] ?>?lang=en">eng</a> |
					<?php  echo $this->Form->postLink('Удалить', "/admin/edu_languages/delete/{$advan['EduLanguage']['id']}", array('confirm' => 'Удалить преимущество?')) ?>
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