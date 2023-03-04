<div class="content-up">
  <a class="btn btn--add" href="/admin/countries/add">Добавить страну</a>
</div>
<table class="table">
  <thead class="thead">
    <tr>
      <th>ID</th><th>Название</th><th>Редактировать</th><th>Удаление</th>
    </tr>
  </thead>
  <?php foreach ($data as $item) : ?>
    <tr>
      <td><?= $item['Country']['id']; ?></td>
      <td><?= $item['Country']['title']; ?></td>

      <td>
          <a href="/admin/countries/edit/<?php echo $item['Country']['id'] ?>?lang=ru">rus</a> |
          <a href="/admin/countries/edit/<?php echo $item['Country']['id'] ?>?lang=kz">kaz</a> |
          <a href="/admin/countries/edit/<?php echo $item['Country']['id'] ?>?lang=en">eng</a> |
       </td>
       <td>
        <?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['Country']['id']), array('confirm' => 'Подтвердите удаление')); ?>
      </td>
    </tr>
    
  <?php endforeach; ?>
</table>