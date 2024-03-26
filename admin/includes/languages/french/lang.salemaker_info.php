<?php
$define = [
    'HEADING_TITLE' => 'Soldeur (Salemaker)',
    'SUBHEADING_TITLE' => 'Conseils sur l\'utilisation du Soldeur',
    'INFO_TEXT' => '<ul>
                      <li>
                        Utilisez toujours un point décimal \'.\' pour la déduction et l\'intervalle de prix.
                      </li>
                      <li>
                        Entrez les montants dans la même devise que celle utilisée pour créer/éditer un produit.
                      </li>
                      <li>
                        Pour la déduction, vous pouvez entrer un montant ou un pourcentage à déduire,
                        ou encore un prix de remplacement. (ex: déduire 5.00 EUR sur tous les prix, déduire 10% sur
                        tous les prix, ou changer tous les prix à 25.00 EUR)
                      </li>
                      <li>
                        Saisir un intervalle de prix réduit le nombre de produits qui seront affectés. (ex:
                        les produits de 50.00 à 150.00 EUR)
                      </li>
                      <li>
                        Vous devez sélectionner l\'action à accomplir si un produit est en promotion <i>et</i> est affecté par cette solde:
                        <ul>
                          <li>
                            <strong>Ignorer le prix promotionnel - Appliquer au prix du produit et remplacer la promotion</strong><br>
                            La déduction de solde sera appliquée au prix normal du produit.
                            (Ex: prix normal = 10.00 EUR, prix promotionnel = 9.50 EUR, et la condition de solde est une remise de 10%.
                            Le prix final du produit sera affiché à 9.00 EUR. Le prix promotionnel est ignoré.)
                          </li>
                          <li>
                            <strong>Ignorer la condition de solde - Pas de mise en solde si le produit est en promotion</strong><br>
                            La déduction de solde ne sera pas appliquée aux produits en promotion. Le prix promotionnel sera affiché comme
                            si aucune solde n\'était définie. (Ex: prix normal = 10.00 EUR, prix promotionnel = 9.50 EUR,
                            et la condition de solde est une remise de 10%. Le prix final du produit sera affiché à 9.50 EUR.
                            La condition de solde est ignorée.)
                          </li>
                          <li>
                            <strong>Appliquer la déduction de solde au prix promotionnel - Sinon, appliquer au prix du produit</strong><br>
                            La déduction de solde sera appliqué au prix promotionnel. Un prix combiné sera affiché.
                            (Ex: prix normal = 10.00 EUR, prix promotionnel = 9.50 EUR, et la condition de solde est une remise de 10%.
                            Le prix final du produit sera affiché à 8.55 EUR. Il s\'agit d\'une remise de 10% sur le prix promotionnel.)
                          </li>
                        </ul>
                      </li>
                      <li>
                        Laisser la date de début de solde vide démarrera la solde immédiatement.
                      </li>
                      <li>
                        Laisser la date de fin de solde vide prolongera la solde indéfiniment.</li>
                      <li>
                        Cocher une catégorie incluera automatiquement ses sous-catégories.
                      </li>
                    </ul>',
    'TEXT_CLOSE_WINDOW' => '[ Fermer la fenêtre ]',
];

return $define;