<a href="<?= $item['link'] ?>" rel="noopener" target="_blank">
  <?= hd_component('media', [
    'type' => 'image',
    'resource' => $item['logo'],
    'class' => $_bem->element('slide-media'),
    'sizes' => ['scale-300w', 'scale-600w'],
    'display_sizes' => ['20vw'],
    'fallback' => 'scale-300w',
    'background' => true,
    'fit' => 'contain',
  ]) ?>
</a>