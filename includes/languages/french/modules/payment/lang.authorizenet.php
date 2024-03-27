<?php
$define = [
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_ADMIN_TITLE' => 'Authorize.net (SIM)',
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_CATALOG_TITLE' => 'Carte de Crédit',
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_TYPE' => 'Type : ',
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_OWNER' => 'Propriétaire de la carte de crédit : ',
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_NUMBER' => 'Numéro de la carte de crédit : ',
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_EXPIRES' => 'Date d\'expiration la carte : ',
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_CVV' => 'Numéro CVV : ',
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_POPUP_CVV_LINK' => 'Qu\'est-ce que c\'est ?',
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_OWNER' => '* Le nom du propriétaire de la carte de crédit doit comporter au moins  '.CC_OWNER_MIN_LENGTH.' caractères.',
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_NUMBER' => '* Le numéro de carte doit comporter au moins '.CC_NUMBER_MIN_LENGTH.' caractères.',
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_CVV' => '* Les 3 or 4 chiffres du numéro CVV doivent être recopiés à partir du dos de la carte bancaire.',
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_ERROR_MESSAGE' => 'Une erreur est survenue lors du traitement de votre carte de crédit. Merci de bien vouloir recommencer.',
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_DECLINED_MESSAGE' => 'Votre carte de crédit a été refusée. Veuillez essayer une autre carte ou contacter votre banque pour plus d\'informations.',
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_ERROR' => 'Erreur de carte de crédit !',
];

if (defined('MODULE_PAYMENT_AUTHORIZENET_STATUS') && MODULE_PAYMENT_AUTHORIZENET_STATUS == 'True') {
    $define['MODULE_PAYMENT_AUTHORIZENET_TEXT_DESCRIPTION'] = '<a rel="noreferrer noopener" target="_blank" href="https://account.authorize.net/">Authorize.net Merchant Login</a>' . (MODULE_PAYMENT_AUTHORIZENET_TESTMODE != 'Production' ? '<br><br>Testing Info:<br><b>Automatic Approval Credit Card Numbers:</b><br>Visa#: 4007000000027<br>MC#: 5424000000000015<br>Discover#: 6011000000000012<br>AMEX#: 370000000000002<br><br><b>Note:</b> These credit card numbers will return a decline in live mode, and an approval in test mode.  Any future date can be used for the expiration date and any 3 or 4 (AMEX) digit number can be used for the CVV Code.<br><br><b>Automatic Decline Credit Card Number:</b><br><br>Card #: 4222222222222<br><br>This card number can be used to receive decline notices for testing purposes.' : '') . '<br><br><strong>SETTINGS</strong><br>Your "response" and "receipt" and "relay" URL settings in your Authorize.net Merchant Profile can be left BLANK, or if necessary you can set the "relay URL" to point to https://your_domain.com/foldername/index.php?main_page=checkout_process<br><br>If you are having problems with this, see <a href="https://docs.zen-cart.com/user/payment/authorizenet_sim/" rel="noreferrer noopener" target="_blank">the SIM Setup FAQ article</a> for detailed setup instructions.';
} else {
    $define['MODULE_PAYMENT_AUTHORIZENET_TEXT_DESCRIPTION'] = '<a rel="noreferrer noopener" target="_blank" href="https://reseller.authorize.net/application?resellerId=10023">Click Here to Sign Up for an Account</a><br><br><a rel="noreferrer noopener" target="_blank" href="https://account.authorize.net/">Click to Login to the Authorize.net Merchant Area</a><br><br><strong>Requirements:</strong><br><hr>*<strong>Authorize.net Account</strong> (see link above to signup)<br>*<strong>Authorize.net username and transaction key</strong> available from your Merchant Area<br><br>See <a href="https://docs.zen-cart.com/user/payment/authorizenet_sim/" rel="noreferrer noopener" target="_blank">the SIM Setup FAQ article</a> for detailed setup instructions.';
}

return $define;