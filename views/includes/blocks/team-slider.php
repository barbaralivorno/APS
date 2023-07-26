<?php 
    $team = $_block;
?>

<div id='<?= $id ?>' class="<?= $_bem->element('container') ?>">
  <?= hd_component('media', [
    'type' => 'image',
    'resource' => $team['background_image'],
    'class' => $_bem->element('background-image'),
    'sizes' => ['crop-2880w-3:1', 'crop-1440w-2:1', 'crop-767w-2:3'],
    'display_sizes' => ['100vw'],
    'fallback' => 'crop-1440w-2:1',
    'background' => true,
    'fit' => 'cover',
  ]) ?>
  <?= hd_component('slider', [
    'parent' => 'team-slider',
    'class' => $_bem->block(),
    'items' => $team['team_members'],
    'item_view' => 'blocks/team-slider/item',
    'counter' => true,
  ]) ?>
</div>