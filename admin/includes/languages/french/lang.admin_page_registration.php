<?php
$define = [
    'HEADING_TITLE' => 'Page d\'Enregistrement Admin',
    'TEXT_PAGE_KEY' => 'Clé de la page',
    'TEXT_LANGUAGE_KEY' => 'Constante intitulé de page',
    'TEXT_MAIN_PAGE' => 'Constante nom fichier page',
    'TEXT_PAGE_PARAMS' => 'Paramètres pour la page',
    'TEXT_MENU_KEY' => 'Menu de rattachement',
    'TEXT_DISPLAY_ON_MENU' => 'Afficher dans le menu ?',
    'TEXT_SORT_ORDER' => 'Classement',
    'TEXT_EXAMPLE_PAGE_KEY' => '(ex. myModPageName)',
    'TEXT_EXAMPLE_LANGUAGE_KEY' => '(ex. BOX_MY_MOD_PAGE_NAME)',
    'TEXT_EXAMPLE_MAIN_PAGE' => '(ex. FILENAME_PAGE_NAME)',
    'TEXT_EXAMPLE_PAGE_PARAMS' => '(ex. option=1 ou, habituellement, laisser vide)',
    'TEXT_SELECT_MENU' => 'Choisir menu',
    'ERROR_PAGE_KEY_NOT_ENTERED' => 'Clé de page non saisie. Toutes les pages admin doivent posséder une clé de page unique.',
    'ERROR_PAGE_KEY_ALREADY_EXISTS' => 'Clé de page déjà existante. Les clés de page doivent être uniques.',
    'ERROR_LANGUAGE_KEY_NOT_ENTERED' => 'Le "define" pour l\'intitulé de page n\'a pas été saisi. Toutes les pages admin doivent posséder une constante clé qui définit, pour chaque langue, le texte sur chaque lien du menu.',
    'ERROR_LANGUAGE_KEY_HAS_NOT_BEEN_DEFINED' => 'Le "define" saisi pour l\'intitulé de page n\'a pas été défini. Veuillez vérifier qu\'il est correctement orthographié.',
    'ERROR_MAIN_PAGE_NOT_ENTERED' => 'Le "define" pour le nom de fichier page n\'a pas été saisi.',
    'ERROR_FILENAME_HAS_NOT_BEEN_DEFINED' => 'Le "define" saisi pour le nom de fichier page n\'existe pas. Veuillez vérifier qu\'il est correctement orthographié.',
    'ERROR_MENU_NOT_CHOSEN' => 'Menu non sélectionné. Vous devez associer la nouvelle page à un menu, même si elle ne sera pas affichée sur ce menu.',
    'SUCCESS_ADMIN_PAGE_REGISTERED' => 'Votre page admin a été enregistrée.',
];

return $define;