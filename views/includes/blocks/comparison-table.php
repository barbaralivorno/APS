<?php
  $ct = $_block;
  $header = $ct['header'];
  $rows = $ct['rows'];
?>

<section class='<?= $_bem->block()?>' id='<?= $id ?>'>
  <div class='<?= $_bem->element('header')?>'>
    <span class='<?= $_bem->element('title') ?>'><?= $header['first_product'] ?></span>
    <span class='<?= $_bem->element('title') ?>'><?= $header['steps_title'] ?></span>
    <span class='<?= $_bem->element('title') ?>'><?= $header['second_product'] ?></span>
  </div>
  <dl class='<?= $_bem->element('list')?>'>
    <?php foreach($rows as $row): ?>
      <div class='<?= $_bem->element('row')?>'>
        <dt class='<?= $_bem->element('step')?>'><?= $row['row']['step'] ?></dt>
        <dd class='<?= $_bem->element('first-product-item')?>'><?= $row['row']['first_product_data'] ?></dd>
        <dd class='<?= $_bem->element('second-product-item')?>'><?= $row['row']['second_product_data'] ?></dd>
      </div>
    <?php endforeach; ?>
  </dl>
</section>