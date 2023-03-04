
<h1>Компании курсов</h1>

<a class="btn btn--add" href="/admin/program_companies/add">Добавить материал</a>
<br><br>

<?php if($data): ?>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Картинка</th>
				<th>Название</th>
				<th>Приоритет</th>
				<th>Редактирование</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach( $data as $advan ): ?>
			<tr>
				<td>
					<?php echo $advan['ProgramCompany']['id'] ?>
				</td>
				<td>
					<img src="/img/program_companies/thumbs/<?=$advan['ProgramCompany']['img']?>" width="120">
				</td>
				<td>
					<?= $advan['ProgramCompany']['title'] ?>
				</td>
				<td>
					<?= $advan['ProgramCompany']['item_order'] ?>
				</td>
				<td>
					<a href="/admin/program_companies/edit/<?php echo $advan['ProgramCompany']['id'] ?>">Редактировать</a> |
					<?php  echo $this->Form->postLink('Удалить', "/admin/program_companies/delete/{$advan['ProgramCompany']['id']}", array('confirm' => 'Удалить материал?')) ?>
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
