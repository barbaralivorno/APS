<?php 
  global $post;
  $date = get_field('date', $post->ID);
  $topic = get_field('topic', $post->ID);
  $view_image = get_field('view_image', $post->ID);
  $preview_image = get_field('preview_image', $post->ID);
  $link = get_field('link', $post->ID);
?>
<section class="press-article">
  <h1 class="press-article__title"><?= $post->post_title ?></h1>
  <div class="press-article__group">
    <span class="press-article__date">
      <?= $date ?>
    </span>
    </span><?php if (!empty($topic)) : ?>
    <span class="press-article__topic"><?= $topic ?></span>
    <?php endif ?>
  </div>
  <?php if (!empty($view_image)) : ?>
  <div class="press-article__image">
    <?= hd_component('media', [
    'type' => 'image',
    'resource' => $view_image,
    'sizes' => ['scale-1440w', 'scale-1920w'],
    'display_sizes' => ['desktop' => '80vw', 'phone' => '100vw'],
    'fallback' => 'scale-1440w',
    'fit' => 'cover'
  ]) ?>
  </div>
  <?php else : ?>
  <div class="press-article__image--sm">
    <?= hd_component('media', [
      'type' => 'image',
      'resource' => $preview_image,
      'sizes' => ['crop-590w-1:1'],
      'display_sizes' => ['desktop' => '20.42vw', 'phone' => '75vw'],
      'fallback' => 'crop-590w-1:1',
      'fit' => 'cover'
    ]) ?>
  </div>
  <?php endif ?>
  </div>
  <div class="press-article__content"><?= $post->post_content ?></div>
  <?php if($link): ?>
  <?= hd_component('button', [
      'class' => "press-article__button",
      'modifier' => ['orange', 'with-arrow'],
      'link' => [
        'title' => "Download PDF",
        'url' => $link,
        'target' => "_blank"
      ],
    ]) ?>
  <?php endif ?>
</section>