<?php
  $heading = $_block;
  $config = $heading['config'];
  $text_align = $config['text_align'];
  $title_size = $config['title_size'];
  $title_margin_bottom = $config['title_margin_bottom'];
  $width = $config['width'] == 'small' ? 'small-width' : '';
?>
<section class='<?= $_bem->block(['modifier' => [$text_align, $title_size]])?>' id='<?= $id ?>'>
  <div class='<?= $_bem->element('text-wrapper', !empty($width) ? ['modifier' => [$width]] : [])?>' style="--text-align:<?= $text_align ?>; --margin-bottom:<?= $title_margin_bottom ?>">
    <?php if(!empty($heading['title'])): ?>
      <?= hd_component('title', [
        'class' => $_bem->element('title'),
        'text' => $heading['title'],
      ]) ?>
    <?php endif; ?>
    <?php if(!empty($heading['text'])): ?>
      <?= hd_component('rich-text', [
        'class' => $_bem->element('text'),
        'content' => $heading['text'],
      ]) ?>
    <?php endif; ?>
  </div>
</section>