<?php

/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or 'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 */
$html_classes = doug_fir_get_html_classes();
$lang = $language->language;
?>
<!DOCTYPE HTML>
<!--[if lte IE 7]> <html lang="<?php echo $lang; ?>" class="ie ie7 <?php print $html_classes; ?>"> <![endif]-->
<!--[if IE 8]> <html lang="<?php echo $lang; ?>" class="ie ie8 <?php print $html_classes; ?>"> <![endif]-->
<!--[if gt IE 8]><!--><html class="<?php print $html_classes; ?>" lang="<?php echo $lang; ?>"><!--<![endif]-->

<head>
  <?php print $head; ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php
      /* If site title is "Oregon State University" then don't display it twice
       * This is for the o.e/main site, as there is not a good name for that site.
       */
      if (! strpos('Oregon State University', $head_title)) {
        $head_title .= ' | Oregon State University';
      }
      print $head_title;
    ?>
  </title>

  <!-- CSS -->
  <?php print $styles; ?>
  <link href='http://fonts.googleapis.com/css?family=Gudea:400,400italic,700' rel='stylesheet' type='text/css'>
  <!-- These will insert some CSS to hide or show elements based on our theme settings -->
  <?php echo hide_book_nav(); ?>
  <?php echo hide_terms(); ?>

  <!-- Javascripts -->

  <?php print $scripts; ?>

</head>

<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
<!-- OSU Top Hat -->
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
