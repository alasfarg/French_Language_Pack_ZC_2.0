<?php
$define = [
    'HEADING_CVV' => 'Que signifie CVV ?',
    'TEXT_CVV_HELP1' => '<strong>Card Verification Number. Il s\'agit du cryptogramme des cartes bancaires Visa, Mastercard, Discover...</strong><br/><br/>
                    Pour votre sécurité et la protection de vos données personnelles, nous vous demandons d\'entrer le numéro de vérification de votre carte bancaire.<br/><br/>
                    Ce numéro de vérification est formé par les 3 derniers chiffres qui figurent au dos de votre carte.
                    Ces chiffres sont habituellement imprimés à droite ou à gauche de votre numéro principal.<br/><br/>' . zen_image(DIR_WS_TEMPLATE_ICONS . 'cvv2visa.gif)',
    'TEXT_CVV_HELP2' => '<strong>Cryptogramme à 4 chiffres des Cartes American Express</strong><br/><br/>
                    Pour votre sécurité et la protection de vos données personnelles, nous vous demandons d\'entrer le numéro de vérification de votre carte bancaire.<br/>
                    Le numéro de vérification est le numéro formé par les 3 derniers chiffres qui figurent au recto de votre carte.
                    Ces chiffres sont habituellement imprimés à droite de votre numéro principal.<br/><br/>' . zen_image(DIR_WS_TEMPLATE_ICONS . 'cvv2amex.gif)',
    'TEXT_CLOSE_CVV_WINDOW' => '[ Fermer la fenêtre [x] ]',
];

return $define;
