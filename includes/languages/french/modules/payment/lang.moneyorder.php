<?php
$define = [
    'MODULE_PAYMENT_MONEYORDER_TEXT_TITLE' => 'Chèque/Virement Bancaire',
    'MODULE_PAYMENT_MONEYORDER_TEXT_DESCRIPTION' => 'Les clients peuvent envoyer leur paiement par courrier. Leur e-mail de confirmation de commande leur demandera de : <br /><br />Veuillez établir votre chèque ou virement bancaire à l\'ordre de :<br />'.(defined('%%MODULE_PAYMENT_MONEYORDER_PAYTO%%')),
];
 if (defined('MODULE_PAYMENT_MONEYORDER_STATUS')) {   
    'MODULE_PAYMENT_MONEYORDER_TEXT_EMAIL_FOOTER' => "Veuillez établir votre chèque ou virement bancaire à l\'ordre de :"."\n\n".MODULE_PAYMENT_MONEYORDER_PAYTO."\n\nEnvoyez votre paiement à :\n".STORE_NAME_ADDRESS."\n\n".'Votre commande ne sera envoyée qu\'à réception du règlement et de sa validation par notre banque.',
 }

return $define;
