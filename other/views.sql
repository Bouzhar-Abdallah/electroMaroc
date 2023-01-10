create VIEW commande_details AS
SELECT l.id_produit, l.quantite, l.prix_vente, c.`date_creation`, c.`date_envoi`, c.`date_livraison`, c.`id_client`, c.`etat`
from ligne_commande as l inner JOIN commande as c 
where l.id_commande = c.id;

create VIEW commande_details AS
SELECT l.id_produit, l.quantite, l.prix_vente, c.`date_creation`, c.`date_envoi`, c.`date_livraison`, c.`id_client`, c.`etat`,p.`libelle`, p.`prix_achat`, p.`id_photo_principale`
from ligne_commande as l inner JOIN commande as c INNER JOIN produit as p
where l.id_commande = c.id && l.id_produit = p.id;


create VIEW facture AS
SELECT 
l.quantite, l.prix_vente, 
c.`date_creation`, c.`etat`, c.id,
p.`libelle`, p.`id_photo_principale`,
u.nom, u.prenom, u.adresse, u.ville, u.numero_tel
from ligne_commande as l inner JOIN commande as c INNER JOIN produit as p INNER JOIN user as u 
where l.id_commande = c.id && l.id_produit = p.id && u.id = c.id_client;