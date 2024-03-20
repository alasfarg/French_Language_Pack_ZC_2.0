<?php
$define = [
    'MODULE_PAYMENT_PAYPAL_TEXT_ADMIN_TITLE' => 'Paiements PayPal Standard',
    'MODULE_PAYMENT_PAYPAL_TEXT_ADMIN_TITLE_NONUSA' => 'Paiements PayPal Standard sur site Web - IPN',
    'MODULE_PAYMENT_PAYPAL_TEXT_CATALOG_TITLE' => 'PayPal',
    //'MODULE_PAYMENT_PAYPAL_TEXT_DESCRIPTION' => '<strong>PayPal</strong>',
    'MODULE_PAYMENT_PAYPAL_MARK_BUTTON_IMG' => 'https://www.paypal.com/en_US/i/logo/PayPal_mark_37x23.gif',
    'MODULE_PAYMENT_PAYPAL_MARK_BUTTON_ALT' => 'Encaisser avec PayPal',
    'MODULE_PAYMENT_PAYPAL_ACCEPTANCE_MARK_TEXT' => 'Gangnez du temps. Encaissez en toute sécurité. <br />Payez sans dévoiler vos informations financières.',
    'MODULE_PAYMENT_PAYPAL_PURCHASE_DESCRIPTION_TITLE' => 'Tous les Produits de votre Panier (voir les details sur la boutique et sur votre reçu).',
    'MODULE_PAYMENT_PAYPAL_PURCHASE_DESCRIPTION_ITEMNUM' => STORE_NAME . ' Commander',
    'MODULES_PAYMENT_PAYPALSTD_NOT_RECOMMENDED' => 'Merci de noter que ce module n\'est plus recommandé.  Voir <a href="https://docs.zen-cart.com/user/payment/paypal_standard/" target="_blank" rel="noreferrer noopener">cette page</a> pour une explication.',
    //'MODULE_PAYMENT_PAYPAL_TEXT_CATALOG_LOGO' => '<img src="'.MODULE_PAYMENT_PAYPAL_MARK_BUTTON_IMG.'" alt="'.MODULE_PAYMENT_PAYPAL_MARK_BUTTON_ALT.'" title="'.MODULE_PAYMENT_PAYPAL_MARK_BUTTON_ALT.'" /> &nbsp;'.'<span class="smallText">'.MODULE_PAYMENT_PAYPAL_ACCEPTANCE_MARK_TEXT.'</span>',
    'MODULE_PAYMENT_PAYPAL_ENTRY_FIRST_NAME' => 'Prénom : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_LAST_NAME' => 'Nom : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_BUSINESS_NAME' => 'Nom de l\'entreprise : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_NAME' => 'Adresse nom : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STREET' => 'Adresse : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_CITY' => 'Ville : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATE' => 'Région/Département : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_ZIP' => 'Code Postal : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_COUNTRY' => 'Pays : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_EMAIL_ADDRESS' => 'E-mail du payeur : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_EBAY_ID' => ' ID# Ebay : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_ID' => 'ID# payeur : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_STATUS' => 'Statut du payeur : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATUS' => 'Statut de l\'adresse : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_TYPE' => 'Type de paiement : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_STATUS' => 'Statut du paiement : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_PENDING_REASON' => 'Motif de mise en attente : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_INVOICE' => 'Facture : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_DATE' => 'Date de paiement : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_CURRENCY' => 'Devise : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_GROSS_AMOUNT' => 'Montant brut : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_FEE' => 'Commission : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_EXCHANGE_RATE' => 'Taux de change : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_CART_ITEMS' => 'Articles dans panier : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_TXN_TYPE' => 'Type transaction : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_TXN_ID' => 'ID# transaction : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_PARENT_TXN_ID' => 'ID# transaction parent : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_COMMENTS' => 'Commentaires système : ',
    'MODULE_PAYMENT_PAYPAL_PURCHASE_DESCRIPTION_TITLE' => 'Tous les articles dans votre panier (voir les détails dans la boutique et sur votre reçu de la boutique).',
    'MODULE_PAYMENT_PAYPAL_PURCHASE_DESCRIPTION_ITEMNUM' => STORE_NAME.' Achat',
    'MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_ONETIME_CHARGES_PREFIX' => 'Frais uniques se rapportant ',
    'MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_SURCHARGES_SHORT' => 'Surtaxes',
    'MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_SURCHARGES_LONG' => 'Frais de manutention et autres charges applicables',
    'MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_DISCOUNTS_SHORT' => 'Remises',
    'MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_DISCOUNTS_LONG' => 'Rabais appliqués, incluant les bons de réduction, chèques-cadeaux, etc',
];

if (IS_ADMIN_FLAG === true) {
    $define['MODULE_PAYMENT_PAYPAL_TEXT_DESCRIPTION'] = '<strong>PayPal Payments Standard</strong> (Older PayPal service, less reliable than Express Checkout)<br><a href="https://www.paypal.com" rel="noreferrer noopener" target="_blank">Manage your PayPal account.</a><br><br><b>Configuration Instructions:</b><br>1. <a href="https://www.zen-cart.com/partners/paypal-std" rel="noopener" target="_blank">Sign up for your PayPal account - click here.</a><br>2. In your PayPal account, under "Profile",<ul><li>set your <strong>Instant Payment Notification Preferences</strong> URL to:<br><pre>' . str_replace('index.php?main_page=index', 'ipn_main_handler.php', zen_catalog_href_link(FILENAME_DEFAULT)) . '</pre><br>(If another valid URL is already entered, you may leave it alone.)<br><span class="alert">Be sure that the Checkbox to enable IPN is checked!</span><br><br></li><li>in <strong>Website Payments Preferences</strong> set your <strong>Automatic Return URL</strong> to:<br><pre>' . zen_catalog_href_link(FILENAME_CHECKOUT_PROCESS, '', 'SSL', false) . '</pre></li>' . (defined('MODULE_PAYMENT_PAYPALSTD_STATUS') ? '' : '<li>... and click "install" above to enable PayPal Standard support... and "edit" to tell Zen Cart your PayPal settings.</li>') . '</ul><hr><strong>Requirements:</strong><br><br>*<strong>PayPal Account</strong> (<a href="https://www.zen-cart.com/partners/paypal-std" rel="noopener" target="_blank">click to setup/configure</a>)<br>*<strong>CURL with SSL</strong> is strongly recommended<br>*<strong>Port 80 (and port 443 if SSL is enabled)</strong> is used for <strong>*bidirectional*</strong> communication with the gateway, so must be open on your host\'s router/firewall.<br>*<strong>Settings</strong> within your PayPal account must be configured as described above.';
} else {
    $define['MODULE_PAYMENT_PAYPAL_TEXT_DESCRIPTION'] = '<strong>PayPal</strong>';
}
$define['MODULE_PAYMENT_PAYPAL_TEXT_CATALOG_LOGO'] = '<img src="' . $define['MODULE_PAYMENT_PAYPAL_MARK_BUTTON_IMG'] . '" alt="' . $define['MODULE_PAYMENT_PAYPAL_MARK_BUTTON_ALT'] . '" title="' . $define['MODULE_PAYMENT_PAYPAL_MARK_BUTTON_ALT'] . '"> &nbsp;' .
        '<span class="smallText">' . $define['MODULE_PAYMENT_PAYPAL_ACCEPTANCE_MARK_TEXT'] . '</span>';

return $define;
