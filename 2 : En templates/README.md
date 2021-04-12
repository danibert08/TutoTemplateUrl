## Ici, les pages ont été découpéé : 

## Les templates sont créés dans un dossier inc.
## Dans mon exemple, le header reçoit la partie doctype avec head et nav,
## les pages home, pagebleue, pagerouge, pageverte, ne reçoivent en contenu, que 
## la partie qui les concernent et donc qui doit changer d'une page à l'autre.
## et le footer reçoit bien sûr la partie footer.

# Tous ces templates sont inclus dans l'index.php suivant ce qui est cliqué dans le menu nav du header.
# De ce fait, les liens sont modifiés car les pagecouleur.html n'existent plus, puisqu'on a créé des templates.

# Dans les href du menu, tout doit désormais passer par index.php?clef=valeur.

# On s'invente donc une clef, (ici le nom choisi est : pageAAfficher), qui vient après l'adresse url de l'index, dans la partie href,  et on lui passe la valeur de la page sur laquelle on a cliqué
# Cette valeur passée dans l'url de l'index, est donc récupérée dans la page index avec le if isset, et stockéé dans la variable pageSouhaitee.
# Cette variable pageSouhaitée étant appellée dans l'include en bas de l'index.php, c'est donc la bonne page qui va s'afficher.
