<?php 
  global $post;
  $blocks = $blocks ?? (get_field('blocks') ?: []);
  foreach($blocks as $index => $_block):
?>
  <?= block("includes/blocks/" . str_replace('_', '-', $_block['acf_fc_layout']), compact('_block', 'index') + [
    'id' => 'frame-' . ($index + 1),
    'parent' => $post->post_type == 'page' ? "{$post->post_name}-page" : "{$post->post_type}-post",
  ]) ?>
<?php endforeach; ?>