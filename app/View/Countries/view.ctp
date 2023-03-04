<div class="page_block">
	<div class="container">
		<?=$this->element('breadcrumbs')?>
		<p class="title">Проекты</p>
		<ul class="project_type">
			<?php foreach($category_projects_menu as $item): ?>
			<li><a class="type_link <?=($item['CategoryProject']['alias'] == $alias) ? 'active' : ''?>" href="/category-projects/<?=$item['CategoryProject']['alias']?>"><?=$item['CategoryProject']['title']?></a></li>
			<?php endforeach ?>
		</ul>
		<div class="project_block">
			<?php foreach($projects as $item): ?>
			<a href="/project/<?=$item['Project']['alias']?>" class="project_item img" style="background-image: url(/img/projects/<?=$item['Project']['img']?>);">
				<div class="project_name">
					<p><?=$item['Project']['title']?></p>
					<p class="project_text"><?= $this->Text->truncate(strip_tags($item['Project']['body']), 307, array('ellipsis' => '...', 'exact' => true)) ?></p>
				</div>
			</a>
			<?php endforeach ?>
		</div>
	</div>
</div>