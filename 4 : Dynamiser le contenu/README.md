## Dans cette partie, on veut dynamiser le contenu des pagecouleur. 

## 1; Un tableau est donc créé dans le fichier data pour stocker les différentes valeurs que doivent prendre ces contenus.

# J'ai donc créé un tableau associatif $elements qui comprends 3 clefs (les couleurs) et pour chacune d'elle trois sous-tableau de produits;

## 2. Dans index je determine la couleur sur laquelle je vais travailler en fonction de la couleur de la page appelée...

# Je décide donc dans une conditions que si la page à afficher est bleue , les produits à récupérer seront ceux de l'index 'bleu' du tableau des $elements. 
# et idem pour les autres couleurs. 


## 3. Je peux desormais aller faire une boucle dans le ul de la pagecouleur concernée. Cette boucle porte sur le sous-tableau qui est ciblé par $laCouleurDeMesProduits que l'on a défini dans index.php 