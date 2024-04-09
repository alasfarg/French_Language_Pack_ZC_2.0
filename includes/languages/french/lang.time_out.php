<?php
$define = [
    'NAVBAR_TITLE' => 'Déconnexion Automatique',
    'HEADING_TITLE' => 'Ouups! Votre session a expiré',
    'HEADING_TITLE_LOGGED_IN' => 'Ouups! Désolé, mais vous n\'êtes pas autorisé(e) à effectuer l\'action demandée. ',
    'TEXT_INFORMATION' => '<p>Si vous êtiez en train de passer commande, veuillez vous connecter et votre panier sera restauré. Vous pouvez ensuite revenir à la caisse et finaliser vos derniers achats.</p><p>Si vous avez finalisé une commande et souhaitez la consulter' . (DOWNLOAD_ENABLED == 'true' ? ', ou vous avez effectué un téléchargement et souhaitez le récupérer' : '') . ', veuillez vous rendre sur votre page <a href="' . zen_href_link(FILENAME_ACCOUNT) . '">Mon compte</a> pour consulter votre commande.</p>',
    'TEXT_INFORMATION_LOGGED_IN' => 'Vous êtes toujours connecté à votre compte et vous pouvez continuer vos achats. Veuillez choisir une destination à partir du menu.',
    'HEADING_RETURNING_CUSTOMER' => 'Connexion',
];

return $define;