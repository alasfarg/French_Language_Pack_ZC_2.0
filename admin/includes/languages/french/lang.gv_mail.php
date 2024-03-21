<?php
$define = [
    'HEADING_TITLE' => 'Envoi de  '.TEXT_GV_NAME.' aux clients',
    'TEXT_FROM' => 'De :',
    'TEXT_TO' => 'E-mail à :',
    'TEXT_TO_CUSTOMERS' => 'Aux listes de clients :',
    'TEXT_TO_EMAIL' => 'ou à un adresse e-mail :',
    'TEXT_TO_EMAIL_NAME' => 'Nom (facultatif) :',
    'TEXT_TO_EMAIL_INFO' => '<span class="smallText">Choisissez une liste dans la liste déroulante ci-dessus ou utilisez les champs suivants pour envoyer un seul e-mail.</span>',
    'TEXT_SUBJECT' => 'Sujet :',
    'TEXT_AMOUNT' => TEXT_GV_NAME.' Valuer :',
    'ERROR_GV_AMOUNT' => '<span class="smallText">Veuillez indiquer un montant sous forme de valeur sans symbole. P. ex. : 25,00.</span>',
    'TEXT_AMOUNT_INFO' => '<span class="smallText">'.ERROR_GV_AMOUNT.'</span>',
    'TEXT_HTML_MESSAGE' => 'HTML<br>Message :',
    'TEXT_MESSAGE' => 'Au format Text-Only<br>Message :',
    'TEXT_MESSAGE_INFO' => '<p>Inclut éventuellement un message spécifique, inséré avant le standard '.TEXT_GV_NAME.' email text.</p>',
    'NOTICE_EMAIL_SENT_TO' => 'NOTE : %1s E-mail(s) envoyé à %2s',
    'ERROR_NO_CUSTOMER_SELECTED' => 'Erreur : Aucun client sélectionné.',
    'ERROR_NO_AMOUNT_ENTERED' => 'Erreur : valeur de certificat invalide.',
    'ERROR_NO_SUBJECT' => 'Erreur : Aucun sujet Email indiqué.',
    'TEXT_GV_ANNOUNCE' => 'Nous sommes heureux de vous offrir un '.TEXT_GV_NAME.' for %s.',
    'TEXT_GV_TO_REDEEM_TEXT' => 'Utilisez le lien suivant pour utiliser le'.TEXT_GV_NAME."\n\n ".'%1$s%2$s'."\n\n".'ou visitez'.STORE_NAME." à ".HTTP_CATALOG_SERVER.DIR_WS_CATALOG."\n".'et entrez le code %2$s sur la page de paiement.',
    'TEXT_GV_TO_REDEEM_HTML' => '<a href="%1$s%2$s"> Cliquez ici pour utiliser le '.TEXT_GV_NAME.'</a> ou visitez <a href="'.HTTP_CATALOG_SERVER.DIR_WS_CATALOG.'">'.STORE_NAME.'</a> et saisissez le code <strong>%2$s</strong> sur la page de paiement.',
];

return $define;