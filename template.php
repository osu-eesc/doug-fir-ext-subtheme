<?php
/**
 * @file - template.php
 *
 * Theme helper functions
 */

function doug_fir_catalog_css_alter(&$css) {
  $exclude = array(
    // 'misc/vertical-tabs.css' => FALSE,
    // 'modules/aggregator/aggregator.css' => FALSE,
    // 'modules/block/block.css' => FALSE,
    // 'modules/book/book.css' => FALSE,
    // 'modules/comment/comment.css' => FALSE,
    // 'modules/dblog/dblog.css' => FALSE,
    // 'modules/file/file.css' => FALSE,
    // 'modules/filter/filter.css' => FALSE,
    // 'modules/forum/forum.css' => FALSE,
    // 'modules/help/help.css' => FALSE,
    // 'modules/menu/menu.css' => FALSE,
    // 'modules/node/node.css' => FALSE,
    // 'modules/openid/openid.css' => FALSE,
    // 'modules/poll/poll.css' => FALSE,
    // 'modules/profile/profile.css' => FALSE,
    // 'modules/search/search.css' => FALSE,
    // 'modules/statistics/statistics.css' => FALSE,
    // 'modules/syslog/syslog.css' => FALSE,
    // 'modules/system/admin.css' => FALSE,
    // 'modules/system/maintenance.css' => FALSE,
    // 'modules/system/system.css' => FALSE,
    // 'modules/system/system.admin.css' => FALSE,
    // 'modules/system/system.base.css' => FALSE,
    // 'modules/system/system.maintenance.css' => FALSE,
    // 'modules/system/system.menus.css' => FALSE,
    // 'modules/system/system.messages.css' => FALSE,
    // 'modules/system/system.theme.css' => FALSE,
    // 'modules/taxonomy/taxonomy.css' => FALSE,
    // 'modules/tracker/tracker.css' => FALSE,
    // 'modules/update/update.css' => FALSE,
    // 'modules/user/user.css' => FALSE,
    //'sites/all/themes/doug-fir/css/main-responsive.css' => FALSE,
    //'sites/default/modules/contrib/commerce_add_to_cart_confirmation/css/commerce_add_to_cart_confirmation.css' => FALSE,
    'sites/all/themes/doug-fir/css/main.css' => FALSE,
  );
  $css = array_diff_key($css, $exclude);
}

/**
 * Implements hook_preprocess_html()
 *
 *
 */
function doug_fir_catalog_preprocess_html(&$variables) {
  // load fonts before doug_fir does
  // $path = drupal_get_path('theme', 'doug_fir_catalog');

  // $options = array(
  //     'group'  =>  CSS_THEME,
  //     'weight' => -100,
  //   );
  //   drupal_add_css($path . '/css/custom.css', $options );

}



function doug_fir_catalog_preprocess_page(&$variables) {
  // Get the entire main menu tree
  $responsive_menu_tree = menu_tree_all_data('menu-responsive-menu');

  // Add the rendered output to the $main_menu_expanded variable
  $variables['responsive_menu_expanded'] = menu_tree_output($responsive_menu_tree);

  //dpm($variables['theme_hook_suggestions'], 'theme hook sugestions page');

}

function doug_fir_catalog_preprocess_node(&$vars) {
  // don't display price if "add to store" isn't checked
  if ($vars['field_add_to_store'][0]['value'] != 1 && $vars['type'] == 'osu_catalog_publication') {
    $vars['content']['product:commerce_price']['#access'] = FALSE;
  }
}

// add continue shopping button on empty cart page
// // add continue shopping button on empty cart page
function doug_fir_catalog_commerce_cart_empty_page() {
  $continue_link = l(t('Continue shopping'), '<front>', array('attributes'=>array('class'=>'button')));
  return '<div class="cart-empty-block">' . t('<p>Your shopping cart is empty.</p>') . $continue_link . '</div>';
}



/**
 * Implements hook_menu_local_task().
 */
function doug_fir_catalog_menu_local_task($variables) {
  $link = $variables['element']['#link'];
  $link['localized_options']['html'] = TRUE;
  return '<li>' . l($link['title'], $link['href'], $link['localized_options']) . '</li>' . "\n";
}

/**
 * Implements hook_menu_local_tasks().
 */
function doug_fir_catalog_menu_local_tasks($variables) {

  $output = '';

  if (!empty($variables['primary'])) {
    $variables['primary']['#prefix'] = '<ul class="nav nav-tabs">';
    $variables['primary']['#suffix'] = '</ul>';
    $output .= drupal_render($variables['primary']);
  }

  if (!empty($variables['secondary'])) {

    $variables['secondary']['#prefix'] = '<ul class="nav nav-tabs">';
    $variables['secondary']['#suffix'] = '</ul>';
    $output .= drupal_render($variables['secondary']);
  }

  return $output;
}





