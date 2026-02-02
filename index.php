<?php 
$header = "Bienvenue sur L'shi Promo";
?>
<?php require 'portions/header.php'; ?>

<h1 class = "text-2xl font-bold text-white">Profiter de nos meuilleurs offres </h1>

<?php require 'models/promotions-data.php'; ?>

<?php foreach($promotions as $magasin => $produits) : ?>
    <div>
        <h1 class = "text-white"><?php echo $magasin; ?></h1>
        <?php foreach($produits as $produit => $detail) : ?>
            <p class="text-white">Nom de l'article : <?php echo $produit; ?></p>
            <p class="text-white">prix initial : <?php echo $detail['prix-initial']; ?> <?php echo $detail['devise']; ?></p>
            <p class="text-white">prix promo : <?php echo $detail['prix-promo']; ?> <?php echo $detail['devise']; ?></p>
            <p class="text-white">Reduction : - <?php echo round(($detail['prix-initial'] - $detail['prix-promo']) * 100 / $detail['prix-initial']); ?>%</p>
            <br>
        <?php endforeach; ?>
    </div>
<?php endforeach; ?>

<?php require 'portions/footer.php'; ?>