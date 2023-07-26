<?php
  $lb = $_block;
  $title = $lb['title'];
  $logos = $lb['logos']; 
  $text = $lb['text'];
  $cta = $lb['cta'];
  $config = $lb['config'];
  $title_config = $config['title'];
  $without_background_color = $config['without_background_color'];
?>
<section id='<?= $id ?>' class='<?= $_bem->block(
  ['modifier' => $without_background_color ? 'without-background-color' : [] ]) ?>' style="--title-config:<?= $title_config ?>" >
  <?php if($title): ?>
    <?= hd_component('title', [
      'modifier' => 'xxl',
      'class' => $_bem->element('title') . ($title_config == 'lowercase' ? ' logos-box__title--lowercase' : ''),
      'text' => $title,
    ]) ?>
  <?php endif; ?>
  <?= hd_component('slider', [
    'parent' => 'logos-box',
    'class' => $_bem->element('slider'),
    'items' => $logos,
    'item_view' => 'blocks/logos-box/logo-item',
  ]) ?>
  <?php if($text): ?>
    <?= hd_component('rich-text', [
      'class' => $_bem->element('text'),
      'content' => $text,
    ]) ?>
  <?php endif; ?>
  <?php if($cta): ?>
    <?= hd_component('button', [
      'class' => $_bem->element('button'),
      'modifier' => ['orange', 'with-arrow'],
      'link' => [
        'title' => $cta['title'],
        'url' => $cta['url'],
      ]
    ]) ?>
  <?php endif; ?>
</section>