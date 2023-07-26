<?php 
global $post;
$blocks = get_field('blocks');
$is_first_block_a_hero = $blocks[0]['acf_fc_layout'] == 'hero';
?>
<header class="site__header site-header <?= !$is_first_block_a_hero && $post->post_name != 'technology' && $post->post_name != 'contact' ? 'site-header--solid' : '' ?>">
  <a href="/" class="site-header__logo"><?= file_get_contents(asset_path('images/logo.svg')) ?></a>
  <?= hd_component('button', [
    'class' => "site-header__button",
    'link' => [
      'title' => "Get in touch",
      'url' => '/contact'
    ],
    'modifier' => 'orange'
  ]) ?>
  <nav class="site-header__main-nav">
    <?= partial('includes/main-menu', [
      'parent' => 'site-header',
    ]) ?>
  </nav>
  <button class="site-header__nav-icon nav-icon lines-button" type="button" role="button" aria-label="Toggle Navigation"><?= file_get_contents(asset_path('images/icon-nav.svg')) ?></button>
</header>