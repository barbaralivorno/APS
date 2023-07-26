<?php 
  $list_items = $_block['numbered_list'];
  $navigation_enabled = $_block['navigation_enabled'];
?>
<section id='<?= $id ?>' class='<?= $_bem->block() ?>'>
  <ul class='<?= $_bem->element('items') ?>'>
    <?php foreach($list_items as $index => $_block): ?>
      <li id='item-<?= $index + 1 ?>' class='<?= $_bem->element('item') ?>'>
        <?= block("includes/blocks/" . str_replace('_', '-', $_block['acf_fc_layout']), compact('_block') + [
          'parent' => explode(' ', $_bem->block()),
        ]) ?>
      </li>
    <?php endforeach; ?>
  </ul>
  <?php if($navigation_enabled): ?>
    <div class='<?= $_bem->element('navigation-wrapper') ?>'>
      <div class='<?= $_bem->element('navigation') ?>'>
        <ul class='<?= $_bem->element('navigation-list') ?>'>
          <?php foreach($list_items as $index => $_block): ?>
            <li class='<?= $_bem->element('navigation-list-item', [
              'modifier' => $index == 0 ? 'active' : '',
            ]) ?>'>
              <button data-item='item-<?= $index + 1 ?>' class='<?= $_bem->element('navigation-list-item-button') ?>'>0<?= $index + 1 ?></button>
              <span class='<?= $_bem->element('navigation-list-item-label') ?>'>Benefit <?= $index + 1 ?></span>
            </li>
          <?php endforeach; ?>
        </ul>
        <div class='<?= $_bem->element('navigation-buttons') ?>'>
          <?= hd_component('button', [
            'class' => $_bem->element('navigation-buttons-item'),
            'modifier' => ['up'],
            'text' => file_get_contents(asset_path('images/icon-arrow-down--rounded-orange.svg')),
            'disabled' => true,
          ]) ?>
          <?= hd_component('button', [
            'class' => $_bem->element('navigation-buttons-item'),
            'modifier' => ['down'],
            'text' => file_get_contents(asset_path('images/icon-arrow-down--rounded-orange.svg'))
          ]) ?>
        </div>
      </div>
    </div>
  <?php endif; ?>
</section>