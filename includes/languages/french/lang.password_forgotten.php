<?php
$define = [
    'NAVBAR_TITLE_1' => 'Connexion',
    'NAVBAR_TITLE_2' => 'Mot de passe oublié',
    'HEADING_TITLE' => 'Mot de passe oublié',
    'TEXT_MAIN' => 'Entrez ci-dessous l\'adresse e-mail de votre compte client et nous vous enverrons un message contenant votre nouveau mot de passe.',
    'EMAIL_PASSWORD_REMINDER_SUBJECT' => STORE_NAME . ' - Nouveau mot de passe',
    'EMAIL_PASSWORD_REMINDER_BODY' => 'Un nouveau mot de passe a été demandé depuis ' . $_SERVER['REMOTE_ADDR'] . '.' . "\n\n".'Votre nouveau mot de passe pour vous connecter sur \'' . STORE_NAME . '\' est :' . "\n\n" . '   %s' . "\n\nAprès vous être connecté(e) à l\'aide du nouveau mot de passe, vous pouvez le changer en allant dans 'Mon compte'",
    'SUCCESS_PASSWORD_SENT' => 'Un nouveau mot de passe a été envoyé à votre adresse e-mail.',
];

return $define;
