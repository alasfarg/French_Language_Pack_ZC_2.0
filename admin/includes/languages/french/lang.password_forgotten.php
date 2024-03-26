<?php
$define = [
    'HEADING_TITLE' => 'Réinitialisation de mot de passe',
    'TEXT_ADMIN_EMAIL' => 'Adresse e-mail de l\'administrateur : ',
    'TEXT_ADMIN_USERNAME' => 'Nom d\'utilisateur de l\'administrateur',
    'TEXT_BUTTON_REQUEST_RESET' => 'Demande de réinitialisation',
    'TEXT_BUTTON_LOGIN' => 'Connexion',
    'TEXT_BUTTON_CANCEL' => 'Annuler',
    'ERROR_WRONG_EMAIL' => 'Vous avez saisi une mauvaise adresse e-mail.',
    'ERROR_WRONG_EMAIL_NULL' => 'Bien vu... :-P',
    'MESSAGE_PASSWORD_SENT' => 'Un nouveau mot de passe a été envoyé à l\'adresse e-mail que vous avez saisi.<br />Cliquez sur "Connexion" ci-dessous pour vous connecter avec le nouveau mot de passe temporaire.',
    'TEXT_EMAIL_SUBJECT_PWD_RESET' => 'Votre demande de modification',
    'TEXT_EMAIL_MESSAGE_PWD_RESET' => 'Un nouveau mot de passe a été demandé depuis %s.'."\n\n".'Votre nouveau mot de passe temporaire est :'."\n\n   %s\n\nIl vous sera demandé de choisir un nouveau mot de passe avant de vous connecter.\n\nCe mot de passe temporaire expire dans 24 heures.\n\n\n",
    'TEXT_EMAIL_SUBJECT_PWD_FAILED_RESET' => 'Alerte de l\'accès !',
    'TEXT_EMAIL_MESSAGE_PWD_FAILED_RESET' => "Failed attempts for admin password resets have been received from %s\n\nInvalid email and/or username supplied.\n\nIf you have admin accounts sharing the same email address you should consider assigning unique email addresses to them, to make resets easier.",
];

return $define;