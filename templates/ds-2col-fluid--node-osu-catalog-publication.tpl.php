<?php

/**
 * @file
 * Display Suite 2 column template.
 */

  // dpm($content, 'content array');

  // dpm($node, 'node array');

  // $content['product:commerce_price']['#object']->commerce_price['und'][0]['amount'] = '66654';

  // if ($node->field_add_to_store['und'][0]['value'] == '0') {
  //   //drupal_set_message('hey now');
  //   $content['product:commerce_price'][0]['#markup'] = t('');
  //   //print render($content['field_spouse_name'][0]);
  // } 

  // Add sidebar classes so that we can apply the correct width in css.
  if (($left && !$right) || ($right && !$left)) {
    $classes .= ' group-one-column';
  }
?>
<<?php print $layout_wrapper; print $layout_attributes; ?> class="ds-2col-fluid <?php print $classes;?> clearfix">

  <?php if (isset($title_suffix['contextual_links'])): ?>
  <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>

  <?php if ($left): ?>
    <<?php print $left_wrapper ?> class="group-left<?php print $left_classes; ?>">
      <?php print $left; ?>
    </<?php print $left_wrapper ?>>
  <?php endif; ?>

  <?php if ($right): ?>
    <<?php print $right_wrapper ?> class="group-right<?php print $right_classes; ?>">
      <?php print $right; ?>
    </<?php print $right_wrapper ?>>
  <?php endif; ?>

</<?php print $layout_wrapper ?>>

<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
