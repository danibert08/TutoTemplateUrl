<main>
    <div>
    <h1 class="verte">Ja suis la page verte</h1>
    <p>Quelques éléments verts....</p>
    <ul>
        <?php   foreach ($laCouleurDeMesProduits as $produit) : ?>            
        <li><?= $produit ?></li>
        <?php endforeach; ?>
    </ul>
    </div>
</main>