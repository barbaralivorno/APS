<?php 
  $fl = $_block;
  $is_an_intro = $fl['is_an_intro'];
  $list_items = $fl['feature_list'];
  $config = $fl['config'];
  $columns = $config['columns'];
?>
<ul id='<?= $id ?>' class='<?= $_bem->block([
  'modifier' => $is_an_intro ? 'intro' : null, 'class' => $is_an_intro ? 'section--overlaped' : '']) ?>' 
style="--columns:<?= $columns ?>">
  <?php foreach($list_items as $index => $item): 
    $item = $item['item'];
  ?>
    <li class='<?= $_bem->element('item') ?>'>
      <?= hd_component('icon-with-text', [
        'parent' => 'feature-list',
        'icon' => $item['icon'],
        'title' => $item['title'],
        'text' => $item['text'],
        'expand_svg' => true,
      ]) ?>
    </li>
  <?php endforeach; ?>
</ul>