<div class="admin_add">
	<div class="ad_up">
		<h2>Редактирование материала</h2>
	</div>
<?php 
	echo $this->Form->create('Album', array('type' => 'file'));
	echo $this->Form->input('title', array('label' => 'Название:'));
	echo $this->Form->input('id');
	echo $this->Form->end('Редактировать');
 ?>
</div>
<form action="/admin/gallery/add" id="Gallery/addForm" enctype="multipart/form-data" method="post" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST"></div><div class="input file required"><label for="GalleryImg">Изображение:</label><input type="file" name="data[Gallery][img][]" multiple="multiple" id="GalleryImg" required="required"></div><input type="hidden" name="data[Gallery][album_id]" value="<?=$id?>">
<div class="submit"><input type="submit" value="Добавить"></div>
</form>
<table class="table">
	<thead class="thead">
		<tr>
			<th>ID</th><th>Изображение</th><th>Действия</th>
		</tr>
	</thead>
	<?php foreach ($photos as $item) : ?>
		<tr>
			<td><?= $item['Gallery']['id']; ?></td>
			<td><img src="/img/gallery/thumbs/<?=$item['Gallery']['img']?>" width="100"></td>

			<td><!-- <a href="/admin/gallery/edit/<?=$item['Gallery']['id']?>">Редактировать</a> | -->
			<div class="news_del">	<?php echo $this->Form->postLink('Удалить', array('controller' => 'gallery', 'action' => 'admin_delete', $item['Gallery']['id']), array('confirm' => 'Подтвердите удаление')); ?>
					</div> 
			</td>
		</tr>
	<?php endforeach; ?>
</table>