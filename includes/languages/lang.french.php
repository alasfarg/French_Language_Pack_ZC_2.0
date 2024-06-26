<?php
// -----
// Since the languages are now loaded via classes, the $locales definition
// needs to be globalized for use in payment-methods (e.g. paypalwpp) and
// other processing.
//
global $locales;
$locales = ['fr_FR', 'fr_FR.utf8', 'fr', 'French_France.1252'];
@setlocale(LC_TIME, $locales);

$define = [
'ARIA_DELETE_ITEM_FROM_CART' => 'Supprimer cet article du panier',
'ARIA_EDIT_QTY_IN_CART' => 'Modifier la quantité dans le panier',
'ARIA_PAGINATION_' => '',
'ARIA_PAGINATION_CURRENT_PAGE' => 'Page actuelle',
'ARIA_PAGINATION_CURRENTLY_ON' => ', maintenant sur la page %s',
'ARIA_PAGINATION_ELLIPSIS_NEXT' => 'Obtenir le prochain groupe de pages',
'ARIA_PAGINATION_ELLIPSIS_PREVIOUS' => 'Récupérer le groupe de pages précédent',
'ARIA_PAGINATION_GOTO' => 'Aller à',
'ARIA_PAGINATION_NEXT_PAGE' => 'Aller à la page suivante',
'ARIA_PAGINATION_PAGE_NUM' => 'Page %s',
'ARIA_PAGINATION_PREVIOUS_PAGE' => 'Aller à la page précédente',
'ARIA_PAGINATION_ROLE_LABEL_FOR' => '%s Pagination',
'ARIA_PAGINATION_ROLE_LABEL_GENERAL' => 'Pagination',
'ARIA_QTY_ADD_TO_CART' => 'Entrez la quantité à ajouter au panier',
'ASK_A_QUESTION' => 'Poser une question sur cet élément',
'ATTRIBUTES_PRICE_DELIMITER_PREFIX' => ' ( ',
'ATTRIBUTES_PRICE_DELIMITER_SUFFIX' => ' )',
'ATTRIBUTES_WEIGHT_DELIMITER_PREFIX' => ' (',
'ATTRIBUTES_WEIGHT_DELIMITER_SUFFIX' => ') ',
'BOX_HEADING_BANNER_BOX' => 'Partenaires',
'BOX_HEADING_BANNER_BOX_ALL' => 'Partenaires',
'BOX_HEADING_BANNER_BOX2' => 'Avez-vous vu ...',
'BOX_HEADING_BESTSELLERS' => 'Meilleures Ventes',
'BOX_HEADING_BRANDS' => 'Magasiner par marque',
'BOX_HEADING_CATEGORIES' => 'Catégories',
'BOX_HEADING_CURRENCIES' => 'Devises',
'BOX_HEADING_CUSTOMER_ORDERS' => 'Re-commande Rapide',
'BOX_HEADING_FEATURED_PRODUCTS' => 'En Vedette',
'BOX_HEADING_INFORMATION' => 'Informations',
'BOX_HEADING_LANGUAGES' => 'Langues',
'BOX_HEADING_LINKS' => '&nbsp;&nbsp;[+]',
'BOX_HEADING_MANUFACTURER_INFO' => 'Infos Fabricant',
'BOX_HEADING_MANUFACTURERS' => 'Fabricants',
'BOX_HEADING_MORE_INFORMATION' => 'En savoir plus',
'BOX_HEADING_NOTIFICATIONS' => 'Notifications',
'BOX_HEADING_REVIEWS' => 'Avis',
'BOX_HEADING_SEARCH' => 'Recherche',
'BOX_HEADING_SHOPPING_CART' => 'Mon Panier',
'BOX_HEADING_SPECIALS' => 'Promotions',
'BOX_HEADING_WHATS_NEW' => 'Nouveautés',
'BOX_INFORMATION_ABOUT_US' => 'A Propos de nous',
'BOX_INFORMATION_ACCESSIBILITY' => 'Accessibilité',
'BOX_INFORMATION_CONDITIONS' => 'Conditions générales',
'BOX_INFORMATION_CONTACT' => 'Nous contacter',
'BOX_INFORMATION_DISCOUNT_COUPONS' => 'Coupons de réduction',
'BOX_INFORMATION_ORDER_STATUS' => 'Statut de commande',
'BOX_INFORMATION_PAGE_2' => 'Page 2',
'BOX_INFORMATION_PAGE_3' => 'Page 3',
'BOX_INFORMATION_PAGE_4' => 'Page 4',
'BOX_INFORMATION_PRIVACY' => 'Confidentialité',
'BOX_INFORMATION_SHIPPING' => 'Livraisons &amp; retours',
'BOX_INFORMATION_SITE_MAP' => 'Plan du site',
'BOX_INFORMATION_UNSUBSCRIBE' => 'Désabonnement au bulletin',
'BOX_MANUFACTURER_INFO_HOMEPAGE' => 'Site de %s',
'BOX_MANUFACTURER_INFO_OTHER_PRODUCTS' => 'Autres Produits',
'BOX_NOTIFICATIONS_NOTIFY' => 'Informez moi des mises à jour de <strong %s</strong ',
'BOX_NOTIFICATIONS_NOTIFY_REMOVE' => 'Ne plus m\'informer des mises à jour de <strong %s</strong ',
'BOX_REVIEWS_NO_REVIEWS' => 'Il n\'y a actuellement aucun avis sur ce produit.',
'BOX_REVIEWS_TEXT_OF_5_STARS' => '%s sur 5 étoiles!',
'BOX_REVIEWS_WRITE_REVIEW' => 'Écrire un avis sur ce produit.',
'BOX_SEARCH_ADVANCED_SEARCH' => 'Recherche avancée',
'BOX_SHOPPING_CART_EMPTY' => 'Votre panier est vide.',
'CAPTION_UPCOMING_PRODUCTS' => 'Ces produits seront en stock prochainement',
'CART_ITEMS' => 'Articles dans le panier : ',
'CART_QUANTITY_SUFFIX' => '&nbsp;x ',
'CART_SHIPPING_METHOD_ADDRESS' => 'Adresse : ',
'CART_SHIPPING_METHOD_ALL_DOWNLOADS' => '- Downloads',
'CART_SHIPPING_METHOD_FREE_TEXT' => 'Livraison gratuite',
'CART_SHIPPING_METHOD_RATES' => 'Taux : ',
'CART_SHIPPING_METHOD_TEXT' => 'Méthodes de livraison disponibles : ',
'CART_SHIPPING_METHOD_TO' => 'Livré à : ',
'CART_SHIPPING_OPTIONS' => 'Estimation des frais de livraison : ',
'CART_SHIPPING_QUOTE_CRITERIA' => 'Les frais de port sont basés sur l\'adresse de livraison choisie :',
'CATEGORIES_BOX_HEADING_FEATURED_PRODUCTS' => 'Produits phares ...',
'CATEGORIES_BOX_HEADING_PRODUCTS_ALL' => 'Tous les produits ...',
'CATEGORIES_BOX_HEADING_SPECIALS' => 'Promotions ...',
'CATEGORIES_BOX_HEADING_WHATS_NEW' => 'Nouveautés ...',
'CATEGORY_COMPANY' => 'Détails entreprise',
'CATEGORY_PERSONAL' => 'Vos informations personnelles',
'CHARSET' => 'utf-8',
'DATE_FORMAT' => 'd/m/Y',
'DATE_FORMAT_LONG' => '%A %d %B %Y',
'DB_ERROR_NOT_CONNECTED' => 'ERREUR : Impossible de se connecter à la base de données',
'DOB_FORMAT_STRING' => 'dd/mm/yyyy',
'DOWNLOADS_CONTROLLER_ON_HOLD_MSG' => 'NOTE : Les téléchargements ne sont pas disponibles tant que le paiement n\'a pas été validé',
'EMAIL_SALUTATION' => 'Cher',
'EMAIL_SEND_FAILED' => 'ERREUR : Échec de l\'envoi d\'e-mail à : "%s" <%s  avec le sujet : "%s".',
'EMP_SHOPPING_FOR_MESSAGE' => 'Actuellement à la recherche de %1$s (%2$s).',
'EMPTY_CART_TEXT_NO_QUOTE' => 'Oups ! Votre session a expiré ... Veuillez mettre à jour votre panier pour les frais de port ...',
'ENTRY_CITY' => 'Ville : ',
'ENTRY_CITY_ERROR' => 'Votre ville doit contenir un minimum de '.ENTRY_CITY_MIN_LENGTH.' caractères.',
'ENTRY_CITY_TEXT' => ' ',
'ENTRY_COMPANY' => 'nom de l\'entreprise : ',
'ENTRY_COMPANY_ERROR' => 'Veuillez entrer le nom de votre société.',
'ENTRY_COMPANY_TEXT' => '',
'ENTRY_COUNTRY' => 'Pays : ',
'ENTRY_COUNTRY_ERROR' => 'Vous devez sélectionner un pays dans la liste déroulante.',
'ENTRY_COUNTRY_TEXT' => ' ',
'ENTRY_CUSTOMERS_REFERRAL' => 'Code de parrainage :',
'ENTRY_DATE_FROM' => 'Daté de:',
'ENTRY_DATE_OF_BIRTH' => 'Date de naissance : ',
'ENTRY_DATE_OF_BIRTH_ERROR' => 'Votre date de naissance doit être au format suivant : JJ/MM/AAAA (ex : 21/05/1970)',
'ENTRY_DATE_OF_BIRTH_TEXT' => '  (ex : 21/05/1970)',
'ENTRY_DATE_TO' => 'Daté de:',
'ENTRY_EMAIL' => 'Adresse e-mail:',
'ENTRY_EMAIL_ADDRESS' => 'Adresse e-mail : ',
'ENTRY_EMAIL_ADDRESS_CHECK_ERROR' => 'Votre adresse e-mail ne semble pas valide. Veuillez corriger et réessayer.',
'ENTRY_EMAIL_ADDRESS_ERROR' => 'Votre adresse e-mail doit contenir un minimum de '.ENTRY_EMAIL_ADDRESS_MIN_LENGTH.' caractères. Veuillez rectifier et réessayer.',
'ENTRY_EMAIL_ADDRESS_ERROR_EXISTS' => 'Votre adresse e-mail est déjà présente dans notre base de données - Veuillez vous connecter avec cette adresse e-mail ou créer un compte différent avec une autre adresse.',
'ENTRY_EMAIL_ADDRESS_TEXT' => ' ',
'ENTRY_EMAIL_CONTENT_CHECK_ERROR' => 'Vous avez oublié votre message ? Nous aimerions avoir de vos nouvelles. Vous pouvez taper vos commentaires dans la zone de texte ci-dessous.',
'ENTRY_EMAIL_HTML_DISPLAY' => 'HTML',
'ENTRY_EMAIL_NAME_CHECK_ERROR' => 'Désolé, votre nom est-il correct ? Notre système nécessite un minimum de ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' personnages. Veuillez réessayer.',
'ENTRY_EMAIL_TEXT_DISPLAY' => 'TEXTE-Seulement',
'ENTRY_ENQUIRY' => 'Message:',
'ENTRY_FAX_NUMBER' => 'Fax : ',
'ENTRY_FAX_NUMBER_TEXT' => '',
'ENTRY_FIRST_NAME' => 'Prénom : ',
'ENTRY_FIRST_NAME_ERROR' => 'Votre prénom doit comporter un minimum de '.ENTRY_FIRST_NAME_MIN_LENGTH.' caractères. Veuillez rectifier et réessayer.',
'ENTRY_FIRST_NAME_TEXT' => ' ',
'ENTRY_GENDER' => 'Civilité : ',
'ENTRY_GENDER_ERROR' => 'Veuillez choisir une civilité.',
'ENTRY_GENDER_TEXT' => ' ',
'ENTRY_INCLUDE_SUBCATEGORIES' => 'Inclure les Subcategories',
'ENTRY_LAST_NAME' => 'Nom : ',
'ENTRY_LAST_NAME_ERROR' => 'Votre nom doit comporter un minimum de '.ENTRY_LAST_NAME_MIN_LENGTH.' caractères. Veuillez rectifier et réessayer.',
'ENTRY_LAST_NAME_TEXT' => ' ',
'ENTRY_NAME' => 'Nom Complet:',
'ENTRY_NEWSLETTER' => 'S\'abonner à notre bulletin : ',
'ENTRY_NEWSLETTER_TEXT' => '',
'ENTRY_NICK' => 'Pseudo pour le forum : ',
'ENTRY_NICK_DUPLICATE_ERROR' => 'Ce pseudo est déjà utilisé ! Veuillez en choisir un autre.',
'ENTRY_NICK_TEXT' => ' ',
'ENTRY_PASSWORD' => 'Mot de passe : ',
'ENTRY_PASSWORD_CONFIRMATION' => 'Confirmation du mot de passe : ',
'ENTRY_PASSWORD_CONFIRMATION_TEXT' => ' ',
'ENTRY_PASSWORD_CURRENT' => 'Mot de passe en cours : ',
'ENTRY_PASSWORD_CURRENT_TEXT' => ' ',
'ENTRY_PASSWORD_ERROR' => 'Votre mot de passe doit contenir un minimum de '.ENTRY_PASSWORD_MIN_LENGTH.' caractères.',
'ENTRY_PASSWORD_ERROR_NOT_MATCHING' => 'Le mot de passe et sa confirmation doivent être identiques.',
'ENTRY_PASSWORD_NEW' => 'Nouveau mot de passe : ',
'ENTRY_PASSWORD_NEW_ERROR' => 'Votre nouveau mot de passe doit contenir un minimum de '.ENTRY_PASSWORD_MIN_LENGTH.' caractères.',
'ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING' => 'Le mot de passe et sa confirmation doivent être identiques.',
'ENTRY_PASSWORD_NEW_TEXT' => ' ',
'ENTRY_PASSWORD_TEXT' => '  ('.ENTRY_PASSWORD_MIN_LENGTH.' caractères au minimum)',
'ENTRY_POST_CODE' => 'Code postal : ',
'ENTRY_POST_CODE_ERROR' => 'Votre code postal doit contenir un minimum de '.ENTRY_POSTCODE_MIN_LENGTH.' caractères.',
'ENTRY_POST_CODE_TEXT' => ' ',
'ENTRY_PRICE_FROM' => 'Prix ​​à partir:',
'ENTRY_PRICE_TO' => 'Prix jusqu\'​​à:',
'ENTRY_RECIPIENT_NAME' => 'Nom du destinataire:',
'ENTRY_REQUIRED_SYMBOL' => ' ',
'ENTRY_STATE' => 'Région/Département : ',
'ENTRY_STATE_ERROR' => 'Le champ région/département doit contenir un minimum de '.ENTRY_STATE_MIN_LENGTH.' caractères.',
'ENTRY_STATE_ERROR_SELECT' => 'Merci de renseigner le champ région/département.',
'ENTRY_STATE_TEXT' => ' ',
'ENTRY_STREET_ADDRESS' => 'Adresse : ',
'ENTRY_STREET_ADDRESS_ERROR' => 'Votre adresse doit contenir un minimum de '.ENTRY_STREET_ADDRESS_MIN_LENGTH.' caractères.',
'ENTRY_STREET_ADDRESS_TEXT' => ' ',
'ENTRY_SUBURB' => 'Adresse (complément) : ',
'ENTRY_SUBURB_TEXT' => '',
'ENTRY_TELEPHONE_NUMBER' => 'Téléphone : ',
'ENTRY_TELEPHONE_NUMBER_ERROR' => 'Votre numéro de téléphone doit contenir un minimum de '.ENTRY_TELEPHONE_MIN_LENGTH.' caractères.',
'ENTRY_TELEPHONE_NUMBER_TEXT' => ' ',
'ERROR_AT_LEAST_ONE_INPUT' => 'Au moins un des champs du formulaire de recherche doit être renseigné.',
'ERROR_CART_UPDATE' => '<strong Veuillez mettre à jour votre commande. </strong  ',
'ERROR_CONDITIONS_NOT_ACCEPTED' => 'Veuillez confirmer votre acceptation de nos conditions générales liées à cette commande en cochant la case ci-dessous.',
'ERROR_CORRECTIONS_HEADING' => 'Veuillez corriger l\'info suivante : <br / ',
'ERROR_CUSTOMERS_ID_INVALID' => 'Les informations client ne peuvent pas être validées !<br / Veuillez vous connecter ou recréer votre compte ...',
'ERROR_DATABASE_MAINTENANCE_NEEDED' => '<a href "https://docs.zen-cart.com/user/troubleshooting/error_71_maintenance_required/" rel "noopener" target "_blank" ERREUR 0071 Il semble y avoir un problème avec la base de données. Une maintenance est requise.</a ',
'ERROR_DESTINATION_DOES_NOT_EXIST' => 'ERREUR : Destination inexistante.',
'ERROR_DESTINATION_NOT_WRITEABLE' => 'ERREUR : Destination non inscriptible.',
'ERROR_FILE_NOT_SAVED' => 'ERREUR : Fichier non sauvegardé.',
'ERROR_FILE_TOO_BIG' => 'AVERTISSEMENT : Le fichier était trop gros pour être uploadé !<br / La commande peut être passée mais veuillez contacter le site pour de l\'aide sur l\'upload.',
'ERROR_FILETYPE_NOT_ALLOWED' => 'ERREUR : Type de fichier interdit.',
'ERROR_INVALID_FROM_DATE' => 'Date de début invalide.',
'ERROR_INVALID_KEYWORDS' => 'Mots clés invalides.',
'ERROR_INVALID_TO_DATE' => 'Date de fin invalide.',
'ERROR_MAXIMUM_QTY' => 'La quantité ajoutée à votre panier a été ajustée en raison d\'une restriction sur le nombre maximum de produits autorisés. Voir cet article :<br / ',
'ERROR_MISSING_SEARCH_OPTIONS' => 'Options de recherche manquantes',
'ERROR_NO_PAYMENT_MODULE_SELECTED' => 'Veuillez choisir une méthode de paiement pour votre commande.',
'ERROR_PRICE_FROM_MUST_BE_NUM' => 'Le prix à partir de doit être un nombre.',
'ERROR_PRICE_TO_LESS_THAN_PRICE_FROM' => 'Le prix jusqu\'à doit être supérieur ou égal au prix à partir de.',
'ERROR_PRICE_TO_MUST_BE_NUM' => 'Le prix jusqu\à doit être un nombre.',
'ERROR_PRIVACY_STATEMENT_NOT_ACCEPTED' => 'Veuillez confirmer votre acceptation de nos dispositions concernant la confidentialité en cochant la case ci-dessous.',
'ERROR_PRODUCT' => '<br / L\'article : ',
'ERROR_PRODUCT_ATTRIBUTES' => '<br / L\'article : ',
'ERROR_PRODUCT_OPTION_SELECTION' => '<br /  ... Valeurs d\'option sélectionnées invalides ',
'ERROR_PRODUCT_QUANTITY_MAX' => ' ... Erreur de quantité maximum - ',
'ERROR_PRODUCT_QUANTITY_MAX_SHOPPING_CART' => ' ... Erreur de quantité maximum - ',
'ERROR_PRODUCT_QUANTITY_MIN' => ',  ... Erreur de quantité minimum - ',
'ERROR_PRODUCT_QUANTITY_MIN_SHOPPING_CART' => ', a une restriction de quantité minimum. ',
'ERROR_PRODUCT_QUANTITY_ORDERED' => '<br /  Vous avez commandé un total de : ',
'ERROR_PRODUCT_QUANTITY_UNITS' => ' ... Erreur de quantité des unités - ',
'ERROR_PRODUCT_QUANTITY_UNITS_SHOPPING_CART' => ' ... Erreur de quantité des unités - ',
'ERROR_PRODUCT_STATUS_SHOPPING_CART' => '<br / Nous sommes désolés mais ce produit a été retiré de notre stock à cet instant.<br / Cet article a été enlevé de votre panier.',
'ERROR_PRODUCT_STATUS_SHOPPING_CART_ATTRIBUTES' => '<br / Nous sommes désolés mais les options choisies pour ce produit ont changé et ont été retirées de notre stock à cet instant.<br / Cet article a été enlevé de votre panier.',
'ERROR_QUANTITY_ADJUSTED' => 'La quantité ajoutée à votre panier a été ajustée. La quantité de l\'article que vous voulez n\'est pas divisible. La quantité de l\'article :<br / ',
'ERROR_QUANTITY_CHANGED_FROM' => ', a été modifié de : ',
'ERROR_QUANTITY_CHANGED_TO' => ' en ',
'ERROR_TEXT_COUNTRY_DISABLED_PLEASE_CHANGE' => 'Désolé, mais nous n\'acceptons plus les adresses de facturation ou de livraison dans "%s". Veuillez mettre à jour cette adresse pour continuer.',
'ERROR_TO_DATE_LESS_THAN_FROM_DATE' => 'La date de fin doit être supérieure ou égale à la date de début.',
'FAILED_TO_ADD_UNAVAILABLE_PRODUCTS' => 'Les produits sélectionnés ne sont actuellement pas disponibles à l\'achat...',
'FEMALE' => 'Mme.',
'FOOTER_TEXT_BODY' => 'Copyright &copy; ' . date('Y') . ' <a href "' . zen_href_link(FILENAME_DEFAULT) . '" ' . STORE_NAME . '</a . Propulsé par <a href "https://www.zen-cart.com" rel "noopener noreferrer" target "_blank" Zen Cart</a ',
'FORM_REQUIRED_INFORMATION' => '  Obligatoire',
'FREE_SHIPPING_DESCRIPTION' => 'Livraison gratuite pour les commandes supérieures à %s',
'HEADING_ADDRESS_INFORMATION' => 'Information adresse',
'HEADING_BILLING_ADDRESS' => 'adresse de facturation',
'HEADING_DELIVERY_ADDRESS' => 'Adresse de livraison',
'HEADING_DOWNLOAD' => 'Pour télécharger vos fichiers, cliquez sur le bouton de téléchargement et choisissez "Enregistrer sur le disque" dans le menu popup.',
'HEADING_ORDER_COMMENTS' => 'Instructions spéciales ou commentaires sur la commande',
'HEADING_ORDER_DATE' => 'Date de Commande:',
'HEADING_ORDER_HISTORY' => 'Historique des statuts &amp; commentaires',
'HEADING_ORDER_NUMBER' => 'Commande #%s',
'HEADING_PAYMENT_METHOD' => 'Méthode de paiement',
'HEADING_PRODUCTS' => 'Produits',
'HEADING_QUANTITY' => 'Qté.',
'HEADING_SEARCH_HELP' => 'Rechercher de l\'aide',
'HEADING_SHIPPING_METHOD' => 'Mode de livraison',
'HEADING_TAX' => 'Taxe',
'HEADING_TOTAL' => 'Total',
'HTML_PARAMS' => 'dir "ltr" lang "fr"',
'ICON_ERROR_ALT' => 'Erreur',
'ICON_IMAGE_ERROR' => 'erreur.png',
'ICON_IMAGE_SUCCESS' => 'succes.png',
'ICON_IMAGE_TINYCART' => 'panier.gif',
'ICON_IMAGE_TRASH' => 'small_delete.png',
'ICON_IMAGE_UPDATE' => 'button_update_cart.png',
'ICON_IMAGE_WARNING' => 'warning.png',
'ICON_SUCCESS_ALT' => 'Succes',
'ICON_TINYCART_ALT' => 'Ajoutez ce produit à votre panier en cliquant ici.',
'ICON_TRASH_ALT' => 'Supprimez cet article du panier en cliquant sur cette icône.',
'ICON_UPDATE_ALT' => 'Modifiez votre quantité en mettant en surbrillance le numéro dans la case, en corrigeant la quantité et en cliquant sur ce bouton.',
'ICON_WARNING_ALT' => 'Avertissement',
'IMAGE_ALT_PREFIX' => '(image for)',
'IMAGE_ALT_TEXT_NO_TITLE' => 'Une image générique',
'JS_ERROR' => 'Des erreurs se sont produites pendant la validation de votre formulaire.\n\nMerci de rectifier les points suivants : \n\n',
'JS_ERROR_NO_PAYMENT_MODULE_SELECTED' => '  Veuillez choisir une méthode de paiement pour votre commande.',
'JS_ERROR_SUBMITTED' => 'Ce formulaire a déjà été envoyée. Veuillez cliquer sur OK et attendre la fin du traitement en cours.',
'JS_REVIEW_RATING' => '  Veuillez attribuer une note à cet article.',
'JS_REVIEW_TEXT' => '  Veuillez ajouter quelques mots à vos commentaires. L\'avis doit comporter un minimum de '.REVIEW_TEXT_MIN_LENGTH.' caractères.',
'LANGUAGE_CURRENCY' => 'EUR',
'MALE' => 'Mr.',
'META_TAG_PRODUCTS_PRICE_IS_FREE_TEXT' => 'C\'est Gratuit !',
'MORE_INFO_TEXT' => '... plus d\'infos',
'NOT_LOGGED_IN_TEXT' => 'Pas connecté',
'ORDER_HEADING_DIVIDER' => '&nbsp;-&nbsp;',
'OTHER_BOX_NOTIFY_REMOVE_ALT' => 'Supprimer cette notification de produit.',
'OTHER_BOX_NOTIFY_YES_ALT' => 'Me prévenir des mises à jour de ce produit.',
'OTHER_BOX_WRITE_REVIEW_ALT' => 'Donnez votre avis sur ce produit.',
'OTHER_DOWN_FOR_MAINTENANCE_ALT' => 'Le site est actuellement en maintenance. Merci de revenir plus tard.',
'OTHER_IMAGE_BLACK_SEPARATOR' => 'pixel_black.gif',
'OTHER_IMAGE_BOX_NOTIFY_REMOVE' => 'box_products_notifications_remove.gif',
'OTHER_IMAGE_BOX_NOTIFY_YES' => 'box_products_notifications.gif',
'OTHER_IMAGE_BOX_WRITE_REVIEW' => 'box_write_review.gif',
'OTHER_IMAGE_CALL_FOR_PRICE' => 'call_for_prices.png',
'OTHER_IMAGE_CUSTOMERS_AUTHORIZATION' => 'customer_authorization.gif',
'OTHER_IMAGE_CUSTOMERS_AUTHORIZATION_ALT' => 'L\'APPROBATION DU CLIENT EST EN ATTENTE ...',
'OTHER_IMAGE_DOWN_FOR_MAINTENANCE' => 'down_for_maintenance.png',
'OTHER_IMAGE_PRICE_IS_FREE' => 'free.png',
'OTHER_IMAGE_REVIEWS_RATING_STARS_FIVE' => 'stars_5_small.png',
'OTHER_IMAGE_REVIEWS_RATING_STARS_FOUR' => 'stars_4_small.png',
'OTHER_IMAGE_REVIEWS_RATING_STARS_ONE' => 'stars_1_small.png',
'OTHER_IMAGE_REVIEWS_RATING_STARS_THREE' => 'stars_3_small.png',
'OTHER_IMAGE_REVIEWS_RATING_STARS_TWO' => 'stars_2_small.png',
'OTHER_REVIEWS_RATING_STARS_FIVE_ALT' => 'Cinq étoiles',
'OTHER_REVIEWS_RATING_STARS_FOUR_ALT' => 'Quatre étoiles',
'OTHER_REVIEWS_RATING_STARS_ONE_ALT' => 'Une étoile',
'OTHER_REVIEWS_RATING_STARS_THREE_ALT' => 'Trois étoiles',
'OTHER_REVIEWS_RATING_STARS_TWO_ALT' => 'Deux étoiles',
'OUT_OF_STOCK_CAN_CHECKOUT' => 'Les produits marqués avec'.STOCK_MARK_PRODUCT_OUT_OF_STOCK.'sont en rupture de stock. <br  Les articles none en stock seront mis en rupture de stock.',
'OUT_OF_STOCK_CANT_CHECKOUT' => 'Les produits marqués avec'.STOCK_MARK_PRODUCT_OUT_OF_STOCK.'sont en rupture de stock ou il n\'y en a pas assez pour remplir votre commande. <br  Veuillez modifier la quantité de produits marqués avec ('.STOCK_MARK_PRODUCT_OUT_OF_STOCK.'). Merci',
'PAGE_ACCOUNT' => 'Mon Compte',
'PAGE_ACCOUNT_EDIT' => 'Information sur le compte',
'PAGE_ACCOUNT_HISTORY' => 'Historique des commandes',
'PAGE_ACCOUNT_NOTIFICATIONS' => 'Abonnement à la Newsletter',
'PAGE_ADDRESS_BOOK' => 'Carnet d\'adresses',
'PAGE_ADVANCED_SEARCH' => 'Recherche',
'PAGE_CHECKOUT_SHIPPING' => 'Vérifier',
'PAGE_FEATURED' => 'En vedette',
'PAGE_PRODUCTS_ALL' => 'Tous les produits',
'PAGE_PRODUCTS_NEW' => 'Nouveaux produits',
'PAGE_REVIEWS' => 'Commentaires',
'PAGE_SHOPPING_CART' => 'Panier',
'PAGE_SPECIALS' => 'Offres spéciales',
'PAYMENT_JAVASCRIPT_DISABLED' => 'Nous n\'avons pas pu continuer le paiement car Javascript est désactivé. Vous devez l\'activer pour continuer',
'PAYMENT_METHOD_GV' => 'Chèque cadeau/Bon',
'PAYMENT_MODULE_GV' => 'CC/BR',
'PLEASE_SELECT' => 'Veuillez sélectionner ...',
'PREVNEXT_BUTTON_NEXT' => '[Suivant&nbsp;&raquo;]',
'PREVNEXT_BUTTON_PREV' => '[&laquo;&nbsp;Prev]',
'PREVNEXT_TITLE_NEXT_PAGE' => 'Page suivante',
'PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE' => 'Ensemble suivant de %d pages',
'PREVNEXT_TITLE_PAGE_NO' => 'Page %d',
'PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE' => 'Ensemble précédent de %d pages',
'PREVNEXT_TITLE_PREVIOUS_PAGE' => 'Page précédente',
'PREV_NEXT_PRODUCT' => 'Produit ',
'PRIMARY_ADDRESS_TITLE' => 'Addresse Principale',
'PRODUCT_PRICE_DISCOUNT_AMOUNT' => '&nbsp;de remise',
'PRODUCT_PRICE_DISCOUNT_PERCENTAGE' => '%',
'PRODUCT_PRICE_DISCOUNT_PREFIX' => 'Économie : -',
'PRODUCT_PRICE_SALE' => 'Soldé :&nbsp;',
'PRODUCT_PRICE_WHOLESALE' => 'Votre Prix:&nbsp;',
'PRODUCTS_ORDER_QTY_TEXT' => 'Quantité : ',
'PRODUCTS_ORDER_QTY_TEXT_IN_CART' => 'Quantité dans le panier : ',
'PRODUCTS_PRICE_IS_CALL_FOR_PRICE_TEXT' => 'Prix sur demande',
'PRODUCTS_PRICE_IS_FREE_TEXT' => 'C\'est Gratuit !',
'PRODUCTS_QUANTITY_MAX_TEXT_LISTING' => 'Max :',
'PRODUCTS_QUANTITY_MIN_TEXT_LISTING' => 'Min : ',
'PRODUCTS_QUANTITY_UNIT_TEXT_LISTING' => 'Unités : ',
'PULL_DOWN_ALL' => 'Veuillez choisir',
'PULL_DOWN_ALL_RESET' => '- RESET - ',
'PULL_DOWN_DEFAULT' => 'Veuillez choisir votre pays',
'PULL_DOWN_MANUFACTURERS' => '- Réinitialisation -',
'PULL_DOWN_SHIPPING_ESTIMATOR_SELECT' => 'Veuillez choisir',
'SEND_TO_TEXT' => 'Envoyer un e-mail à:',
'SET_AS_PRIMARY' => 'Établir en tant qu\'adresse principale',
'SUCCESS_ADDED_TO_CART_PRODUCT' => 'Produit ajouté au panier avec succès  ...',
'SUCCESS_ADDED_TO_CART_PRODUCTS' => 'Produit(s) choisi(s) ajouté(s) au panier avec succès ...',
'SUCCESS_FILE_SAVED_SUCCESSFULLY' => 'SUCCÈS : Fichier sauvegardé.',
'TABLE_ATTRIBUTES_QTY_PRICE_PRICE' => 'PRIX',
'TABLE_ATTRIBUTES_QTY_PRICE_QTY' => 'QTÉ',
'TABLE_HEADING_ADDRESS_DETAILS' => 'Vos coordonnées',
'TABLE_HEADING_BUY_NOW' => 'Acheter maintenant',
'TABLE_HEADING_BYTE_SIZE' => 'Taille du fichier',
'TABLE_HEADING_CREDIT_PAYMENT' => 'Crédits disponibles',
'TABLE_HEADING_DATE_EXPECTED' => 'Date prévue',
'TABLE_HEADING_DATE_OF_BIRTH' => 'Vérification de votre âge',
'TABLE_HEADING_DOWNLOAD_COUNT' => 'Jours restants',
'TABLE_HEADING_DOWNLOAD_DATE' => 'Expiration du lien',
'TABLE_HEADING_DOWNLOAD_FILENAME' => 'Nom du fichier',
'TABLE_HEADING_FEATURED_PRODUCTS' => 'Produits Phares',
'TABLE_HEADING_IMAGE' => 'Image du produit',
'TABLE_HEADING_LOGIN_DETAILS' => 'Détails de connexion',
'TABLE_HEADING_MANUFACTURER' => 'Fabricant',
'TABLE_HEADING_MODEL' => 'Modèle',
'TABLE_HEADING_NEW_PRODUCTS' => 'Nouveautés pour %s',
'TABLE_HEADING_PHONE_FAX_DETAILS' => 'Détails additionnels de contact',
'TABLE_HEADING_PRICE' => 'Prix',
'TABLE_HEADING_PRIVACY_CONDITIONS' => 'Confidentialité',
'TABLE_HEADING_PRODUCT_NAME' => 'Nom de l\'article',
'TABLE_HEADING_PRODUCTS' => 'Nom Article',
'TABLE_HEADING_QUANTITY' => 'Qté',
'TABLE_HEADING_REFERRAL_DETAILS' => 'Nous avez-vous été envoyé ?',
'TABLE_HEADING_SHIPPING_ADDRESS' => 'Adresse de livraison',
'TABLE_HEADING_SPECIALS_INDEX' => 'Promotions du mois de %s',
'TABLE_HEADING_STATUS_COMMENTS' => 'Commentaires',
'TABLE_HEADING_STATUS_DATE' => 'Date',
'TABLE_HEADING_STATUS_ORDER_STATUS' => 'Statut de la commande',
'TABLE_HEADING_TOTAL' => 'Total',
'TABLE_HEADING_UPCOMING_PRODUCTS' => 'Produits attendus...',
'TABLE_HEADING_WEIGHT' => 'Poids',
'TEXT_ADMIN_DOWN_FOR_MAINTENANCE' => 'NOTE : Le site est actuellement arrêté pour maintenance, il est fermé au public',
'TEXT_ALL_CATEGORIES' => 'Toutes les Categories',
'TEXT_ALL_MANUFACTURERS' => 'Tous les fabricants',
'TEXT_ALSO_PURCHASED_PRODUCTS' => 'Les clients qui ont acheté ce produit ont aussi acheté...',
'TEXT_APPROVAL_REQUIRED' => '<strong>NOTE:</strong>  Les avis nécessitent une approbation préalable avant d\'être affichés.',
'TEXT_ASCENDINGLY' => 'croissant',
'TEXT_ATTRIBUTES_PRICE_WAS' => ' [était: ',
'TEXT_ATTRIBUTES_QTY_PRICES_HELP' => 'Option de remises par quantités',
'TEXT_ATTRIBUTES_QTY_PRICES_ONETIME_HELP' => 'Option de remises par quantités avec frais uniques',
'TEXT_ATTRIBUTES_QTY_PRICE_HELP_LINK' => 'Remises sur quantité disponibles',
'TEXT_ATTRIBUTE_IS_FREE' => ' c\'est maintenant : Gratuit]',
'TEXT_AUTHORIZATION_PENDING_BUTTON_REPLACE' => 'APPROBATION EN ATTENTE',
'TEXT_AUTHORIZATION_PENDING_CHECKOUT' => 'Commander non disponible - approbation en attente',
'TEXT_AUTHORIZATION_PENDING_PRICE' => 'Prix non disponible',
'TEXT_BANNER_BOX' => 'Rendez visite à nos partenaires ...',
'TEXT_BANNER_BOX_ALL' => 'Visitez nos partenaires ...',
'TEXT_BANNER_BOX2' => 'Examinez ceci dès aujourd\'hui !',
'TEXT_BASE_PRICE' => 'À partir de : ',
'TEXT_BEFORE_DOWN_FOR_MAINTENANCE' => 'NOTE : Le site sera arrêté pour maintenance le : ',
'TEXT_BY' => 'par',
'TEXT_CALL_FOR_PRICE' => 'Prix sur demande',
'TEXT_CCVAL_ERROR_INVALID_DATE' => 'La date d\'expiration saisie pour la carte de crédit n\'est pas valide. Veuillez vérifier la date et réessayer.',
'TEXT_CCVAL_ERROR_INVALID_NUMBER' => 'Le numéro de carte de crédit entré n\'est pas valide. Veuillez vérifier le numéro et réessayer.',
'TEXT_CCVAL_ERROR_UNKNOWN_CARD' => 'Le numéro de carte de crédit commençant par %s n\'a pas été saisi correctement ou nous n\'acceptons pas ce type de carte. Veuillez réessayer ou utiliser une autre carte de crédit.',
'TEXT_CHARGES_LETTERS' => 'Frais calculés : ',
'TEXT_CHARGES_WORD' => 'Frais calculés : ',
'TEXT_CLICK_TO_ENLARGE' => 'plus grande image',
'TEXT_CLOSE_WINDOW_IMAGE' => ' - Cliquez sur l\'image pour la fermer',
'TEXT_COUPON_GV_RESTRICTION_ZONES' => 'Des restrictions d\'adresse de facturation s\'appliquent.',
'TEXT_COUPON_HELP_DATE' => 'Le coupon est valable entre %s et %s',
'TEXT_COUPON_HELP_HEADER' => 'Le code d\'utilisation du coupon de réduction que vous avez saisi est destiné',
'TEXT_COUPON_HELP_MINORDER' => 'Vous devez dépenser %s pour utiliser ce coupon, sur des produits éligibles.',
'TEXT_COUPON_LINK_TITLE' => 'voir les conditions du coupon',
'TEXT_CURRENT_CLOSE_WINDOW' => '[ Fermer la fenêtre [x] ]',
'TEXT_CURRENT_REVIEWS' => 'Commentaires actuels:',
'TEXT_DATE_ADDED' => 'Ce produit a été ajouté à notre catalogue le %s.',
'TEXT_DATE_ADDED_LISTING' => 'Date d\'ajout:',
'TEXT_DATE_AVAILABLE' => 'Ce produit sera en stock le %s.',
'TEXT_DESCENDINGLY' => 'décroissant',
'TEXT_DISPLAY_NUMBER_OF_ORDERS' => 'Affiche <b>%d</b>  à <b>%d</b>  (sur <b%d</b>  commandes)',
'TEXT_DISPLAY_NUMBER_OF_PRODUCTS' => 'Affiche <b>%d</b  à <b>%d</b>  (sur <b>%d</b>  articles)',
'TEXT_DISPLAY_NUMBER_OF_PRODUCTS_ALL' => 'Affiche <strong>%d</strong>  à <strong>%d</strong>  (sur <strong>%d</strong>  produits)',
'TEXT_DISPLAY_NUMBER_OF_PRODUCTS_FEATURED_PRODUCTS' => 'Affiche <strong>%d</strong  à <strong>%d</strong>  (sur <strong>%d</strong>  produits phares)',
'TEXT_DISPLAY_NUMBER_OF_PRODUCTS_NEW' => 'Affiche <b>%d</b>  à <b>%d</b>  (sur <b>%d</b>  nouveautés)',
'TEXT_DISPLAY_NUMBER_OF_REVIEWS' => 'Affiche <b>%d</b>  à <b>%d</b>  (sur <b>%d</b>  avis)',
'TEXT_DISPLAY_NUMBER_OF_SPECIALS' => 'Affiche <b>%d</b>  à <b>%d</b>  (sur <b>%d</b>  promotions)',
'TEXT_DOWNLOADS_UNLIMITED' => 'Illimité',
'TEXT_DOWNLOADS_UNLIMITED_COUNT' => '---  ---',
'TEXT_ERROR' => 'Une erreur est survenue',
'TEXT_ERROR_OPTION_FOR' => ' sur l\'option pour : ',
'TEXT_EZPAGES_STATUS_FOOTER_ADMIN' => 'AVERTISSEMENT : PIED-DE-PAGE d\'EZ-PAGES - Actif  pour l\'IP de l\'Admin seulement',
'TEXT_EZPAGES_STATUS_HEADER_ADMIN' => 'AVERTISSEMENT : EN-TÊTE d\'EZ-PAGES - Actif pour l\'IP de l\'Admin seulement',
'TEXT_EZPAGES_STATUS_SIDEBOX_ADMIN' => 'AVERTISSEMENT : SIDEBOX d\'EZ-PAGES  - Actif  pour l\'IP de l\'Admin seulement',
'TEXT_FIELD_REQUIRED' => '&nbsp;<span class "alert" </span ',
'TEXT_FILESIZE_BYTES' => ' octets',
'TEXT_FILESIZE_KBS' => 'Ko',
'TEXT_FILESIZE_MEGS' => 'Mo',
'TEXT_FILESIZE_UNKNOWN' => 'Inconnu',
'TEXT_FOOTER_DISCOUNT_QUANTITIES' => '  Les remises peuvent varier en fonction des options ci-dessus',
'TEXT_GV_NAME' => 'chèque cadeau',
'TEXT_GV_NAMES' => 'chèques cadeaux',
'TEXT_GV_REDEEM' => 'Code de remboursement',
'TEXT_HEADER_DISCOUNT_PRICES_ACTUAL_PRICE' => 'Nouveau prix de remise par qté',
'TEXT_HEADER_DISCOUNT_PRICES_AMOUNT_OFF' => 'Prix avec remise par qté',
'TEXT_HEADER_DISCOUNT_PRICES_PERCENTAGE' => 'Prix avec remise par qté',
'TEXT_HEADER_DISCOUNTS_OFF' => 'Remises par qté non disponibles ...',
'TEXT_INFO_SORT_BY' => 'Trier par : ',
'TEXT_INFO_SORT_BY_RECOMMENDED' => 'Recommandé',
'TEXT_INFO_SORT_BY_PRODUCTS_DATE' => 'Date de création - ancien vers nouveau',
'TEXT_INFO_SORT_BY_PRODUCTS_DATE_DESC' => 'Date de création - nouveau vers ancien',
'TEXT_INFO_SORT_BY_PRODUCTS_MODEL' => 'Modèle',
'TEXT_INFO_SORT_BY_PRODUCTS_NAME' => 'Nom du produit',
'TEXT_INFO_SORT_BY_PRODUCTS_NAME_DESC' => 'Nom du produit - desc',
'TEXT_INFO_SORT_BY_PRODUCTS_PRICE' => 'Prix - bas vers haut',
'TEXT_INFO_SORT_BY_PRODUCTS_PRICE_DESC' => 'Prix - haut vers bas',
'TEXT_INVALID_COUPON_ORDER_LIMIT' => 'Vous avez dépassé le nombre total de commandes autorisées (%2$u), pour utiliser le coupon "%1$s".',
'TEXT_INVALID_COUPON_PRODUCT' => 'Ce code de réduction n\'est valable pour aucun des produits qui se trouvent actuellement dans votre panier.',
'TEXT_INVALID_FINISHDATE_COUPON' => 'Ce bon a expiré',
'TEXT_INVALID_REDEEM_COUPON' => 'Code de réduction invalide',
'TEXT_INVALID_REDEEM_COUPON_MINIMUM' => 'Vous devez dépenser au moins %s pour utiliser ce bon',
'TEXT_INVALID_SELECTION' => ' Sélection non valide : ',
'TEXT_INVALID_STARTDATE_COUPON' => 'Ce bon n\'est pas encore disponible',
'TEXT_INVALID_USER_INPUT' => 'Saisie utilisateur obligatoire<br / ',
'TEXT_INVALID_USES_COUPON' => 'Le coupon "%1$s" a déjà été utilisé le nombre maximum de fois autorisé (%2$u).',
'TEXT_INVALID_USES_USER_COUPON' => 'Vous avez utilisé ce code de réduction : %s le nombre maximum de fois autorisé par client.',
'TEXT_LETTERS_FREE' => ' Lettre(s) gratuite(s) ',
'TEXT_LOGIN_FOR_PRICE_BUTTON_REPLACE' => 'Connectez-vous pour connaître le prix',
'TEXT_LOGIN_FOR_PRICE_BUTTON_REPLACE_SHOWROOM' => 'Vitrine seulement',
'TEXT_LOGIN_FOR_PRICE_PRICE' => 'Prix non disponible',
'TEXT_LOGIN_FOR_PRICE_PRICE_SHOWROOM' => '',
'TEXT_LOGIN_TO_SHOP_BUTTON_REPLACE' => 'Se connecter à la boutique',
'TEXT_MANUFACTURER' => 'Fabricant:',
'TEXT_MAXIMUM_CHARACTERS_ALLOWED' => ' caractères maximum  autorisés',
'TEXT_MORE_INFORMATION' => 'Pour plus d\'informations, veuillez visiter la <a href="%s" rel="noreferrer noopener" target="_blank">page Web</a> de ce produit..',
'TEXT_NO_ALL_PRODUCTS' => 'Plus de produits seront ajoutés bientôt. Merci de revenir ultérieurement.',
'TEXT_NO_CAT_RESTRICTIONS' => 'Ce coupon est valable pour toutes les catégories.',
'TEXT_NO_CAT_TOP_ONLY_DENY' => 'Ce coupon a des restrictions de produit spécifiques.',
'TEXT_NO_FEATURED_PRODUCTS' => 'Plus de produits phares seront ajoutés bientôt. Merci de revenir ultérieurement.',
'TEXT_NO_NEW_PRODUCTS' => 'D\'autres nouveaux produits seront bientôt ajoutés. Veuillez réessayer plus tard.',
'TEXT_NO_PROD_RESTRICTIONS' => 'Ce coupon est valable pour toutes les produits.',
'TEXT_NO_PROD_SALES' => 'Ce coupon n\'est pas valide pour les produits en solde.',
'TEXT_NO_SHIPPING_AVAILABLE_ESTIMATOR' => 'Désolé, nous n\'avons aucune option en ligne pour expédier cette commande à l\'adresse sélectionnée.<br><br>Veuillez vous connecter ou modifier l\'adresse de livraison souhaitée pour obtenir des devis mis à jour.<br><br>Si les devis ne sont toujours pas disponibles, veuillez contactez-nous pour prendre d\'autres dispositions!',
'TEXT_NO_REVIEWS' => 'Il n\'y a actuellement aucune critique de produit.',
'TEXT_NUMBER_SYMBOL' => '# ',
'TEXT_OF_5_STARS' => '',
'TEXT_ONETIME_CHARGES' => ' frais uniques   ',
'TEXT_ONETIME_CHARGES_EMAIL' => "\t".' frais uniques   ',
'TEXT_ONETIME_CHARGE_DESCRIPTION' => ' Des frais uniques peuvent s\'appliquer',
'TEXT_ONETIME_CHARGE_SYMBOL' => ' *',
'TEXT_OPTION_DIVIDER' => '&nbsp;-&nbsp;',
'TEXT_OUT_OF_STOCK' => 'En rupture de stock',
'TEXT_PASSWORD_FORGOTTEN' => 'Mot de passe oublié?',
'TEXT_PER_LETTER' => '<br / Prix par lettre : ',
'TEXT_PER_WORD' => '<br / Prix par mot : ',
'TEXT_PRICE' => 'Prix:',
'TEXT_PRIVACY_CONDITIONS_CONFIRM' => 'J\'ai lu et suis d\'accord avec vos conditions de confidentialité.',
'TEXT_PRIVACY_CONDITIONS_DESCRIPTION' => 'Veuillez reconnaître l\'acceptation de nos conditions de confidentialité en cochant la case suivante. La notice de confidentialité peut être consultée <a href="' . zen_href_link(FILENAME_PRIVACY) . '"><span class="pseudolink">Ici</span></a>.',
'TEXT_PRODUCT_ALL_LISTING_MULTIPLE_ADD_TO_CART' => 'Ajouter : ',
'TEXT_PRODUCT_FEATURED_LISTING_MULTIPLE_ADD_TO_CART' => 'Ajouter : ',
'TEXT_PRODUCT_LISTING_MULTIPLE_ADD_TO_CART' => 'Ajouter : ',
'TEXT_PRODUCT_MANUFACTURER' => 'Fabriqué par: ',
'TEXT_PRODUCT_MODEL' => 'Modèle :',
'TEXT_PRODUCT_NEW_LISTING_MULTIPLE_ADD_TO_CART' => 'Ajouter : ',
'TEXT_PRODUCT_NOT_FOUND' => 'Désolé, le produit n\'a pas été trouvé.',
'TEXT_PRODUCT_OPTIONS' => 'Choisissez s\'il vous plaît: ',
'TEXT_PRODUCT_QUANTITY' => ' Unités en Stock',
'TEXT_PRODUCT_WEIGHT' => 'Poids d\'expédition: ',
'TEXT_PRODUCT_WEIGHT_UNIT' => 'gr',
'TEXT_PRODUCTS_LISTING_ALPHA_SORTER' => '',
'TEXT_PRODUCTS_LISTING_ALPHA_SORTER_NAMES' => 'Articles commençant par ... ',
'TEXT_PRODUCTS_LISTING_ALPHA_SORTER_NAMES_RESET' => '-- Reset  --',
'TEXT_PRODUCTS_MIX_OFF' => ' Mixé OFF',
'TEXT_PRODUCTS_MIX_OFF_SHOPPING_CART' => '<br / Vous ne pouvez pas mixer les options sur ce produit pour respecter les quantités minimum requises.<br / ',
'TEXT_PRODUCTS_MIX_ON' => ' Mixé ON',
'TEXT_PRODUCTS_MIX_ON_SHOPPING_CART' => ' Les valeurs d\'options mixées sont sur ON',
'TEXT_PRODUCTS_QUANTITY' => 'En Stock: ',
'TEXT_PRODUCTS_WEIGHT' => 'Poids: ',
'TEXT_REMOVE_REDEEM_COUPON_ZONE' => 'Le code de réduction que vous avez entré est invalide pour l\'adresse que vous avez choisie.',
'TEXT_RESULT_PAGE' => '',
'TEXT_REVIEW_BY' => 'par %s',
'TEXT_REVIEW_DATE_ADDED' => 'Date d\'ajout : %s',
'TEXT_SEARCH_HELP' => '<p>Les mots clés peuvent être séparés par des instructions AND et/ou OR pour un meilleur contrôle des résultats de recherche.<br>Par exemple, la souris AND de Microsoft renverrait des résultats contenant les deux mots.<br>Cependant, pour la souris OU le clavier, les résultats renvoyés seraient contiennent les deux mots, ou l\'un des deux.</p><p>Les correspondances exactes peuvent être trouvées en plaçant les mots-clés entre guillemets.<br>Par exemple, "ordinateur portable" renvoie des résultats contenant la chaîne exacte.</p>< p>Les parenthèses peuvent également être utilisées pour un contrôle encore plus fin des résultats.<br>Par exemple, Microsoft AND (clavier OU souris OU "visual basic").</p>',
'TEXT_SEARCH_HELP_LINK' => 'Rechercher de l\'aide [?]',
'TEXT_SEARCH_IN_DESCRIPTION' => 'Rechercher dans les descriptions de produits',
'TEXT_SHIPPING_BOXES' => 'Boîtes',
'TEXT_SHIPPING_WEIGHT' => 'gr',
'TEXT_SHOWCASE_ONLY' => 'Nous Contacter',
'TEXT_SORT_PRODUCTS' => 'Trier les produits',
'TEXT_TOP' => 'Haut',
'TEXT_TOTAL_AMOUNT' => '&nbsp;&nbsp;Montant: ',
'TEXT_TOTAL_ITEMS' => 'Articles au total: ',
'TEXT_TOTAL_WEIGHT' => '&nbsp;&nbsp;Poids: ',
'TEXT_UNKNOWN_TAX_RATE' => 'Taxe de vente',
'TEXT_VALID_COUPON' => 'Félicitations vous avez remboursé le bon de réduction',
'TEXT_WORDS_FREE' => ' Mot(s) gratuit(s) ',
'TEXT_YOUR_IP_ADDRESS' => 'Votre adresse IP est : ',
'TYPE_BELOW' => 'Choisir ci-dessous ...',
'WARNING_COULD_NOT_LOCATE_LANG_FILE' => 'AVERTISSEMENT : Impossible de localiser le fichier de langue : ',
'WARNING_NO_FILE_UPLOADED' => 'AVERTISSEMENT : Aucun fichier uploadé.',
'WARNING_PRODUCT_QUANTITY_ADJUSTED' => 'La quantité a été ajustée à ce qu\'est en stock.',
'WARNING_SHOPPING_CART_COMBINED' => 'REMARQUE : Dans votre intérêt, votre panier courant a été combiné avec le panier de votre visite précédente. Pensez tout de même à vérifier votre panier avant de passer à la caisse.',
];

// Definitions that require references to other definitions
    $define['ATTRIBUTES_QTY_PRICE_SYMBOL'] = zen_image(DIR_WS_TEMPLATE_ICONS . 'icon_status_green.gif', $define['TEXT_ATTRIBUTES_QTY_PRICE_HELP_LINK'], 10, 10) . '&nbsp;';
    $define['BOX_HEADING_GIFT_VOUCHER'] = $define['TEXT_GV_NAME'] . ' Compte';
    $define['BOX_INFORMATION_GV'] = $define['TEXT_GV_NAME'] . ' FAQ';
    $define['ENTRY_EMAIL_PREFERENCE'] = 'Newsletter and Email Details';
    if (ACCOUNT_NEWSLETTER_STATUS === '0') {
       $define['ENTRY_EMAIL_PREFERENCE'] = 'Email Details';
    }
    $define['ERROR_NO_INVALID_REDEEM_GV'] = 'Invalide ' . $define['TEXT_GV_NAME'] . ' ' . $define['TEXT_GV_REDEEM'];
    $define['ERROR_NO_REDEEM_CODE'] = 'Vous n\'avez pas entré un ' . $define['TEXT_GV_REDEEM'] . '.';
    $define['ERROR_REDEEMED_AMOUNT'] = 'Félicitations, vous avez utilisé ';
    $define['GV_FAQ'] = $define['TEXT_GV_NAME'] . ' FAQ';
    $define['TABLE_HEADING_CREDIT'] = 'Crédits disponibles';
    $define['TEXT_AVAILABLE_BALANCE'] = 'Votre ' . $define['TEXT_GV_NAME'] . ' Compte';
    $define['TEXT_BALANCE_IS'] = 'Votre ' . $define['TEXT_GV_NAME'] . ' solde est de: ';
    $define['TEXT_COUPON_GV_RESTRICTION'] = '<p class="smallText">Les coupons de réduction ne peuvent pas être appliqués à l\'achat de ' . $define['TEXT_GV_NAMES'] . '. Limite de 1 coupon par commande.</p>';
    $define['TEXT_SEND_OR_SPEND'] = 'Vous avez un solde disponible sur votre compte ' . $define['TEXT_GV_NAME'] . ' . Vous pouvez le dépenser ou l\'envoyer à quelqu\'un. Pour l\'envoyer, cliquez sur le bouton ci-dessous.';
    $define['VOUCHER_BALANCE'] = $define['TEXT_GV_NAME'] . ' Balance ';

return $define;
