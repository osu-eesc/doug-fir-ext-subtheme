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

  /* mode of delivery options: 
  1 = Online
  2 = Preview
  3 = Print-on-demand
  4 = Print
  */


  // foreach ($node->field_mode_of_delivery['und'] as $key => $value) {
  //   if(in_array(1, $value)) {
  //     dpm('Mode of delivery contains 1 = Online');
  //     if($node->field_link_or_upload['und'][0]['value'] == 1) {
        
  //       $content['field_mode_of_delivery'][0]['#markup'] = t('happy days');
  //     }
  //     else {

  //     }
  //   }
  // }

  //  dpm($content, 'content array');


  // Add sidebar classes so that we can apply the correct width in css.
  if (($left && !$right) || ($right && !$left)) {
    $classes .= ' group-one-column';
  }

  $left_classes .= ' span4';
  $right_classes .= ' span8';

?>
<<?php print $layout_wrapper; print $layout_attributes; ?> class="row-fluid ds-2col-fluid <?php print $classes;?> clearfix">

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
