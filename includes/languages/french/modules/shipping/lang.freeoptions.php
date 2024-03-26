<?php
$define = [
    'MODULE_SHIPPING_FREEOPTIONS_TEXT_TITLE' => 'Options de livraison gratuite',
    'MODULE_SHIPPING_FREEOPTIONS_TEXT_DESCRIPTION' => '
freeoptions est utilisé pour afficher une option de livraison gratuite lorsque d\'autres modules de livraison sont affichés.
Il peut être basé sur: Toujours afficher, Total commande, Poids commande, Nombre d\'articles commandés.
Le module freeoptions ne s\'affiche pas quand freeshipper est actif.<br /><br />
Mettre un total à &gt;= 0.00 et &lt;= rien (en blanc) activera ce module pour qu\'il s\'affiche avec les autres modules, sauf pour LIVRAISON GRATUITE - freeshipper.<br /><br />
NOTE: Le fait de laisser tous les réglages vides pour Total, Poids et Nombre d\'articles désactivera ce module.<br /><br />
NOTE: Les options de livraison gratuite ne s\'affichent pas si LIVRAISON GRATUITE est utilisé avec un poids de 0.
Voir: freeshipper
',
    'MODULE_SHIPPING_FREEOPTIONS_TEXT_WAY' => 'Livraison gratuite',
];

return $define;