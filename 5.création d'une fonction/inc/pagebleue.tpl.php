<main>
    <div>
    <h1 class="bleue">Ja suis la page bleue</h1>
    <p>Quelques éléments bleus.... pour la pomme, il esiste une légende....</p>
    <ul>
        <?php   
        foreach ($laCouleurDeMesProduits as $produit) : ?>            
        <li><?= $produit ?></li>
        <?php endforeach; ?>
    </ul>
    </div>
</main>