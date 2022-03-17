# Les acupuncteurs Lyonnais

## Sur quoi on a avancé:

Nous avons pas mal avancé sur notre site depuis la dernière fois, nous avons notamment travaillé sur les points suivants:

* Le rendu visuel de notre site: nous avons en effet entièrement refait le design, en utilisant bootstrap pour notre barre de navigation et du css pour le reste (formulaires et pages de filtrage).
* Nous avons relié nos pages de connexion et inscription au reste du site, et quand l'utilisateur se connecte, il aura "bonjour+son nom" qui s'affichera en haut avec une possibilité de modifier son mot de passe.
* Pour le filtrage nous avons mis un formulaire et on recupère les valeurs saisies avec la methode POST (au lieu de travailler avec des liens et des ?fitre= à la fin du lien avec GET). Nous avons aussi coder les requête sql pour eviter l'accès depuis l'éxterieur. 
* Nous avons rajouté la possibilité de sélectionner 2 ou 3 filtres en même temps et l'obligation de ne choisir qu'une seule option dans les filtres par mer et par type. 
* Nous avons rajouté une page de filtrage par mots clés. Nous cherchons le mot saisie dans la table keywords et on relie les key idk aux ids et après aux idp pour enfin trouvé les pathologies.
* Nous avons rajouté une page de "Contact".


## Sur quoi on bloque:

* Quand un utilisateur se connecte, et essaie de changer son mot de passe, la BDD détecte bien le changement, mais il n'arrive pas à se reconnecter avec le nouveau mot de passe.
* Le filtre par mot clef est bien fonctionnel et fait ce qu'on a voulu faire ( trouver les idk, trouver les ids qui leur correspendent, trouver les idp qui correspendent aux ids et enfin afficher les patho des idp), et ce que fait le filtre est identique à ce qu'on fait à la main. Mais le problème c'est que si on saisie un mot, la desc du patho affiché n'est pas cohérente.

## A quoi ressemble notre site:

![image](https://user-images.githubusercontent.com/69010419/158897993-174c7b6f-7f76-4d11-9e7f-e3fe1d414189.png)

