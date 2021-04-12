<main>
    <div>
    <h1 class="rouge">Ja suis la page rouge</h1>
    <p>Quelques éléments rouges.....</p>
    <ul>
        <?php   foreach ($laCouleurDeMesProduits as $produit) : ?>            
        <li><?= $produit ?></li>
        <?php endforeach; ?>
    </ul>
    </div>
</main>