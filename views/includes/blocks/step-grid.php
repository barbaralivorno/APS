<?php 
  $step_grid = $_block['step_grid'];
?>

<ul id='<?= $id ?>' class='<?= $_bem->block() ?>'>
  <?php foreach($step_grid as $item): ?>
    <li class='<?= $_bem->element('item', ['modifier' => $item['content_type']]) ?>'>
      <?php if(!empty($item['title'])): ?>
        <?= hd_component('title', [
          'class' => $_bem->element('item-title'),
          'text' => $item['title'],
          'level' => 2,
        ]) ?>
      <?php endif; ?>
      <?php if($item['content_type'] == 'text'): ?>
        <?= hd_component('rich-text', [
          'class' => $_bem->element('item-text'),
          'content' => $item['text'],
        ]) ?>
      <?php else: ?>
        <?= hd_component('media', [
          'type' => 'image',
          'resource' => $item['image'],
          'class' => $_bem->element('image'),
          'sizes' => ['crop-376w-1:1', 'crop-752w-1:1'],
          'display_sizes' => ['23.2vw'],
          'fallback' => 'crop-376w-1:1',
          'fit' => 'cover',
        ]) ?>
      <?php endif; ?>
    </li>
  <?php endforeach; ?>
</ul>