
<?php 
  $image = get_field('image', $item->ID);
  $linkedin = get_field('linkedin', $item->ID);
?>

<div class="<?= $_bem->element('team-member-info') ?>">
  <?php if(isset($linkedin)): ?>
    <a class="<?= $_bem->element('team-member-linkedin') ?>" href="<?= $linkedin ?>" target="_blank" rel="noopener">></a>
  <?php endif; ?>
  <div class="<?= $_bem->element('team-member-info-content') ?>">
    <?= hd_component('title', [
      'modifier' => 'xxl',
      'level' => 2,
      'class' => $_bem->element('team-member-name'),
      'text' => $item->post_title,
    ]) ?>
    <div class="<?= $_bem->element('team-member-description') ?>"><?= $item->post_content ?></div>
  </div>
</div>
<div class="<?= $_bem->element('team-member-photo') ?>">
  <?= hd_component('media', [
    'type' => 'image',
    'resource' => $image,
    'sizes' => ['crop-500w-1:1'],
    'display_sizes' => ['desktop' => '34.5vw', 'phone' => '65vw'],
    'fallback' => 'crop-500w-1:1',
  ]) ?>
</div>