<div class="content-up">
  <a class="btn btn--add" href="/admin/categories/add">Добавить материал</a>
</div>
<table class="table">
  <thead class="thead">
    <tr>
      <th>ID</th><th>Название</th><th>Редактировать</th><th>Удаление</th>
    </tr>
  </thead>
  <?php foreach ($data as $item) : ?>
    <tr>
      <td><?= $item['Category']['id']; ?></td>
      <td><?= $item['Category']['title']; ?></td>

      <td>
        <a href="/admin/categories/edit/<?=$item['Category']['id']?>">Редактировать</a>
       </td>
       <td>
        <?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['Category']['id']), array('confirm' => 'Подтвердите удаление')); ?>
      </td>
    </tr>
    <?php if(!empty($item['children'])): ?>
        <?php foreach($item['children'] as $child): ?>
          <tr>
          <td><?=$child['Category']['id']?></td>
    <td>&nbsp;&nbsp;- <?=$child['Category']['title']?></td>
    <td><a href="/admin/categories/edit/<?=$child['Category']['id']?>">Редактировать</a>
      </td>
      <td><?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $child['Category']['id']), array('confirm' => 'Подтвердите удаление')); ?></td>
        </tr>
        <?php endforeach ?>
      <?php endif ?>
  <?php endforeach; ?>
</table>