<?php
$define = [
    'HEADING_TITLE' => 'Exécuteur de requêtes SQL',
    'HEADING_WARNING' => 'ASSUREZ-VOUS DE FAIRE UNE SAUVEGARDE COMPLÈTE DE VOTRE BASE DE DONNÉES AVANT D\'EXÉCUTER DES SCRIPTS ICI.',
    'HEADING_WARNING2' => 'Si vous installez des contributions de tiers, notez que vous en prenez la responsabilité.<br>Zen Cart&reg; ne garantit en rien la sureté des scripts fournis par des tiers. Testez avant d\'utiliser sur votre base en production !',
    'HEADING_WARNING_INSTALLSCRIPTS' => 'NOTE : Les scripts Zen Cart® de mise à jour de la base de données NE DEVRAIENT PAS être exécutés depuis cette page.<br>À la place, veuillez uploader le nouveau répertoire <strong>zc_install</strong> et exécuter la mise à jour depuis ce répertoire pour une meilleure fiabilité.',
    'TEXT_QUERY_RESULTS' => 'Résultats de la requête : ',
    'TEXT_ENTER_QUERY_STRING' => 'Entrez la requête <br>à exécuter : &nbsp;&nbsp;<br><br>Soyez sûr(e) de <br>terminer avec un point-virgule ";"',
    'TEXT_QUERY_FILENAME' => 'Uploader le fichier-requête : ',
    'ERROR_NOTHING_TO_DO' => 'ERREUR : Rien à exécuter - aucune requête ou fichier-requête spécifié.',
    'TEXT_CLOSE_WINDOW' => '[ Fermer la fenêtre ]',
    'SQLPATCH_HELP_TEXT' => 'L\'outil SQLPATCH vous permet d\'installer des patches système en collant directement ici du code SQL dans le champ '.'zone de texte, ou en fournissant un fichier-requête (.SQL) à uploader.<br>'.'Lors de la préparation des scripts à utiliser avec cet outil, N\'INCLUEZ PAS de préfixe de table, car cet outil '.'insèrera automatiquement le bon préfixe pour la base de donnée active, en se basant sur les paramètres du fichier '.'admin/includes/configure.php de la boutique (définition de DB_PREFIX).<br><br>'.'Les commandes entrées ou uploadées doivent débuter uniquement avec les instructions suivantes, et DOIVENT être en MAJUSCULES : '.'<br><ul><li>DROP TABLE IF EXISTS</li><li>CREATE TABLE</li><li>INSERT INTO</li><li>INSERT IGNORE INTO</li><li>ALTER TABLE</li>'.'<li>UPDATE (juste une seule table)</li><li>UPDATE IGNORE (juste une seule table)</li><li>DELETE FROM</li><li>DROP INDEX</li><li>CREATE INDEX</li>'.'<br><li>SELECT </li></ul>'.'<h2>Méthodes Avancées</h2>Les méthodes suivantes peuvent être utilisées pour sortir des commandes plus complexes si nécessaire : <br>
Pour exécuter des blocs de code ensemble pour qu\'ils soient traités comme une seule commande par MySQL, vous avez besoin d\'utiliser la valeur "<code>#NEXT_X_ROWS_AS_ONE_COMMAND:xxx</code>".  L\'analyseur traitera le nombre X de commandes comme une seule.<br>
Si vous exécutez ce même fichier avec phpMyAdmin ou un équivalent, le commentaire "#NEXT..." est ignoré, et le script s\'exécutera parfaitement.<br>
<br><strong>NOTE :</strong> Les commandes SELECT.... FROM... and LEFT JOIN ont besoin que "FROM" ou "LEFT JOIN" soient sur la même ligne pour que l\'analyseur puisse ajouter le préfixe de table.<br><br>
<em><strong>Exemples : </strong></em>
<ul><li><code>#NEXT_X_ROWS_AS_ONE_COMMAND:4<br>
SET @t1=0;<br>
SELECT (@t1:=configuration_value) as t1 <br>
FROM configuration <br>
WHERE configuration_key = \'KEY_NAME_HERE\';<br>
UPDATE product_type_layout SET configuration_value = @t1 WHERE configuration_key = \'KEY_NAME_TO_CHECK_HERE\';<br>
DELETE FROM configuration WHERE configuration_key = \'KEY_NAME_HERE\';</code><br>&nbsp;</li>

<li><code>#NEXT_X_ROWS_AS_ONE_COMMAND:1<br>
INSERT INTO tablename <br>
(col1, col2, col3, col4)<br>
SELECT col_a, col_b, col_3, col_4<br>
FROM table2;</code><br>&nbsp;</li>

<li><code>#NEXT_X_ROWS_AS_ONE_COMMAND:1<br>
INSERT INTO table1 <br>
(col1, col2, col3, col4 )<br>
SELECT p.othercol_a, p.othercol_b, po.othercol_c, pm.othercol_d<br>
FROM table2 p, table3 pm<br>
LEFT JOIN othercol_f po<br>
ON p.othercol_f = po.othercol_f<br>
WHERE p.othercol_f = pm.othercol_f;</code><br>&nbsp;</li>
</ul>',
    'REASON_TABLE_ALREADY_EXISTS' => 'Impossible de créer la table %s car elle existe déjà',
    'REASON_TABLE_DOESNT_EXIST' => 'Impossible de supprimer la table %s car elle n\'existe pas.',
    'REASON_TABLE_NOT_FOUND' => 'Exécution impossible car la table %s n\'existe pas.',
    'REASON_CONFIG_KEY_ALREADY_EXISTS' => 'Impossible d\'insérer la clé de configuration "%s" car elle existe déjà',
    'REASON_COLUMN_ALREADY_EXISTS' => 'Impossible d\'ADD la colonne %s car elle existe déjà.',
    'REASON_COLUMN_DOESNT_EXIST_TO_DROP' => 'Impossible de DROP la colonne %s car elle n\'existe pas.',
    'REASON_COLUMN_DOESNT_EXIST_TO_CHANGE' => 'Impossible de CHANGE la colonne %s car elle n\'existe pas.',
    'REASON_PRODUCT_TYPE_LAYOUT_KEY_ALREADY_EXISTS' => 'Impossible d\'insérer la clé de configuration de prod-type-layout "%s" car elle existe déjà',
    'REASON_INDEX_DOESNT_EXIST_TO_DROP' => 'Impossible de supprimer l\'index %s sur la table %s car il n\'existe pas.',
    'REASON_PRIMARY_KEY_DOESNT_EXIST_TO_DROP' => 'Impossible de supprimer la clé primaire sur la table %s car elle n\'existe pas.',
    'REASON_INDEX_ALREADY_EXISTS' => 'Impossible d\'ajouter l\'index %s à la table %s car il existe déjà.',
    'REASON_PRIMARY_KEY_ALREADY_EXISTS' => 'Impossible d\'ajouter la clé primaire à la table %s car une clé primaire existe déjà.',
    'REASON_NO_PRIVILEGES' => 'Utilisateur'.DB_SERVER_USERNAME.'@'.DB_SERVER.' n\'a pas les privilèges %s sur la base de données '.DB_DATABASE.'.',
    'ERROR_RENAME_TABLE' => 'La commande RENAME TABLE n\'est pas prise en charge par l\'outil SQLpatch. Veuillez utiliser phpMyAdmin à la place.',
    'ERROR_LINE_INCOMPLETE' => 'Requête incomplète : point-virgule de fermeture manquant.',
    'TEXT_EXECUTE_SUCCESS' => 'Succès : %u instruction(s) traitée.',
    'ERROR_EXECUTE_FAILED' => 'La requête a échoué : %u instruction(s) traitée.',
    'ERROR_EXECUTE_IGNORED' => 'Remarque : %u instructions ignorées. Voir la table de base de données "upgrade_exceptions" pour plus de détails.',
    'TEXT_UPLOADQUERY_SUCCESS' => 'Succès : %u instruction(s) traitée par téléchargement de fichier',
    'ERROR_UPLOADQUERY_FAILED' => 'La requête a échoué : %u instruction(s) traitée par téléchargement de fichier',
    'ERROR_UPLOADQUERY_IGNORED' => 'Remarque : %u instructions ignorées via le téléchargement de fichier. Voir le tableau de base de données "upgrade_exceptions" pour plus de détails.',
];

return $define;