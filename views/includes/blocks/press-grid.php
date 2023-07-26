<?php
  $query_params = [
    'post_type' => 'press_article',
    'post_status' => 'publish',
    'posts_per_page' => -1,
  ];

  $press_article = new WP_Query($query_params);

  $press = $_block;
?>


<section id='<?= $id ?>' class="<?= $_bem->block() ?>">
  <div class='<?= $_bem->element('heading') ?>'>
    <?= hd_component('title', [
      'class' => $_bem->element('title'),
      'modifier' => 'xxl',
      'text' => $press['title']
    ]) ?>
    <?php if($press['subtitle']): ?>
    <?= hd_component('title', [
        'level' => '2',
        'class' => $_bem->element('subtitle'),
        'text' => $press['subtitle'],
      ]) ?>
    <?php endif; ?>
  </div>
  <div class="<?= $_bem->element('group') ?>">
    <?php if(!empty($press['text'])): ?>
    <p class="<?= $_bem->element('text') ?>"><?= $press['text'] ?></p>
    <?php endif; ?>
    <?= hd_component('button', [
      'class' => $_bem->element('button'),
      'modifier' => ['orange', 'with-arrow'],
      'link' => [
        'title' => 'Contact Us',
        'url' => '/contact',
      ],
    ]) ?>
  </div>
  <ul class="<?= $_bem->element('list') ?>">
    <?php foreach ($press_article->posts as $item) : ?>
    <li class="<?= $_bem->element('item') ?>">
      <?= block("includes/blocks/press-grid/item", [
          'item' => $item,
          'parent' => "press-grid"
        ]) ?>
    </li>
    <?php endforeach; ?>
  </ul>
</section>