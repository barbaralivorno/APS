<?php
$image = get_field('preview_image', $item->ID);
$date = get_field('date', $item->ID);
$card_only = get_field('card_only', $item->ID);
$link = $card_only ? get_field('link', $item->ID) : get_post_permalink($item);
$topic = get_field('topic', $item->ID);
$excerpt = get_field('excerpt', $item->ID);
?>

<div class="<?= $_bem->element('image') ?>">
  <?= hd_component('media', [
    'type' => 'image',
    'resource' => $image,
    'sizes' => ['crop-590w-1:1'],
    'display_sizes' => ['desktop' => '20.42vw', 'phone' => '75vw'],
    'fallback' => 'crop-590w-1:1',
    'fit' => 'cover'
  ]) ?>
</div>
<div class="<?= $_bem->element('info') ?>">
  <?php if (!empty($link)) : ?>
  <a href="<?= $link ?>" rel="noopener" target="<?= $card_only ? '_blank' : '_self' ?>">
    <h2 class="<?= $_bem->element('title') ?>"><?= $item->post_title ?></h2>
  </a>
  <?php else : ?>
  <h2 class="<?= $_bem->element('title') ?>"><?= $item->post_title ?></h2>
  <?php endif ?>
  <div class="<?= $_bem->element('group') ?>">
    <div class="<?= $_bem->element('second-line') ?>">
      <span class=" <?= $_bem->element('date', ['modifier' => !empty($topic) ? 'has-topic' : null]) ?>">
        <?= $date ?>
      </span>
      </span><?php if (!empty($topic)) : ?>
      <span class="<?= $_bem->element('topic') ?>"><?= $topic ?></span>
      <?php endif ?>
    </div>
    <div class="<?= $_bem->element('text') ?>"><?= $excerpt  ?></div>
    <?php if (!empty($link)) : ?>
    <?= hd_component('button', [
      'class' => $_bem->element('link'),
      'modifier' => ['orange', 'with-arrow'],
      'link' => [
        'title' => "Read More",
        'url' => $link,
        'target' => $card_only ? '_blank' : '_self',
      ],
    ]) ?>
    <?php endif ?>
  </div>
</div>