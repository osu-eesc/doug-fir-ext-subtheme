<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <title>OSU Catalog Invoice - </title>
  </head>
  <body style="font-family: verdana, arial, helvetica; font-size: 10pt;">
    <table width="90%" border="0" cellspacing="0" cellpadding="1" align="center" bgcolor="#CCC">
      <tr>
        <td>
          <table width="90%" border="0" cellspacing="0" cellpadding="5" align="center" bgcolor="#FFF">
            
                  <tr>
                    <td width="50%" align="center" valign="middle" style="line-height: 1.6em;">
											<!-- Invoice Header -->
                      <?php $invoice_logo = $GLOBALS['base_path'] . drupal_get_path('theme', 'doug_fir_ext') . '/images/ext_h_black.png'; ?>
											<img src="<?php print $invoice_logo; ?>" />
                    </td>
                    <td nowrap="nowrap" valign="top">
                      <p style="font-weight: bold;">Extension and Experiment Station Communications</p>
                      <p style="font-size: 8pt;">422 Kerr Administration Building <br />
                      Corvallis, OR 97331-2119 <br />
                      Phone: (541) 737-2513 &nbsp; &nbsp; Fax: (541) 737-0817<br />
                      puborders@oregonstate.edu <br />
                      extension.oregonstate.edu</p>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2" nowrap="nowrap" style="line-height: 1.6em;" valign="top">
                      <h2>Order Summary</h2>
                    </td>
          
                  </tr>
                  <tr>
                    <td nowrap="nowrap" style="line-height: 1.6em;" valign="top">
                      <b><?php print t('Invoice No:'); ?></b> <?php print date('Y-m-', $info['order_created']) . $info['order_number']; ?>
                      </td>
                    <td nowrap="nowrap" style="line-height: 1.6em;" valign="top">
                      <b><?php print t('Order Date:'); ?></b> <?php print date('j F, Y', $info['order_created']); ?>
                    </td>
                  </tr>
                  <tr>
                    <td nowrap="nowrap" style="line-height: 1.6em;" valign="top">
                     <b><?php print t('Email Address:'); ?></b> <?php print $info['order_mail']; ?>
                    </td>
                    <td nowrap="nowrap" style="line-height: 1.6em;" valign="top"> 
                      <b><?php print t('Order Status:'); ?></b> <?php print $info['order_status']; ?>
                    </td>
                  </tr>
                  <tr>
                    <td nowrap="nowrap" style="line-height: 1.6em;" valign="top">&nbsp;</td>
                    <td nowrap="nowrap" style="line-height: 1.6em;" valign="top">&nbsp;</td>
                  </tr>

                  <tr>
                    <td nowrap="nowrap" style="line-height: 1.6em;" valign="top">
                      <b>Billing Address:</b><br />
                      <?php print isset($info['customer_billing']) ? $info['customer_billing'] : ''; ?>
                    </td>
                    <td nowrap="nowrap" style="line-height: 1.6em;" valign="top">
                      <b>Shipping Address:</b><br />
                      <?php print isset($info['customer_shipping']) ? $info['customer_shipping'] : ''; ?>
                    </td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td align="center" colspan="2" class="line-items" style="line-height: 1.6em;" valign="top">
                      <?php print isset($info['line_items']) ? $info['line_items'] : ''; ?>
                    </td>
                  </tr>
                  <tr class="products">
                    <td align="center" style="font-size: 11px;" colspan="2" class="line-items" valign="top">
                      <?php print isset($info['order_total']) ? $info['order_total'] : ''; ?>
                    </td>
                  </tr>
                  <tr>
                    <td align="center" colspan="2" valign="top" nowrap="nowrap">&nbsp;</td>
                  </tr>
            
                  <tr>
                    <td colspan="2" style="background: #EEE; color: #666; padding: 1em; font-size: 10pt; line-height: 1.6em; text-align: center;">
                      <!-- Invoice footer -->
                      Add footer info here
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </body>
</html>
