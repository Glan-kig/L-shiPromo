<?php 
$header = "Bienvenue sur L'shi Promo";
?>
<?php require 'portions/header.php'; ?>

<main class="bg-gradient-to-br from-gray-900 via-gray-950 to-gray-900 min-h-screen relative">
    <!-- Subtle background accent -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-indigo-500/5 rounded-full blur-3xl"></div>
    
    <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
        <!-- Hero Section -->
        <div class="mb-16">
            <div class="inline-flex items-center gap-2 mb-6 px-4 py-2 bg-indigo-500/10 border border-indigo-500/30 rounded-full hover:border-indigo-500/50 transition-colors duration-300 backdrop-blur-sm">
                <span class="w-2 h-2 bg-indigo-400 rounded-full animate-pulse"></span>
                <span class="text-indigo-300 text-xs font-semibold tracking-wider uppercase">✨ Offres Exclusives</span>
            </div>
            <h1 class="text-5xl sm:text-6xl lg:text-7xl font-black text-white mb-6 tracking-tighter leading-tight">
                Profitez de Nos<br/><span class="bg-gradient-to-r from-indigo-400 via-purple-300 to-indigo-300 text-transparent bg-clip-text">Meilleures Offres</span>
            </h1>
            <p class="text-lg sm:text-xl text-white max-w-2xl leading-relaxed font-light tracking-wide">
                Découvrez des réductions exceptionnelles sur les marques que vous aimez — jusqu'à <span class="text-indigo-300 font-semibold">70% de réduction</span>
            </p>
        </div>

        <?php require 'models/promotions-data.php'; ?>

        <!-- Magasins Section -->
        <?php foreach($promotions as $magasin => $produits) : ?>
            <section class="mb-20 group">
                <!-- Titre du magasin -->
                <div class="mb-8">
                    <div class="flex items-center gap-4 mb-3">
                        <div class="h-1 w-8 bg-gradient-to-r from-indigo-500 via-indigo-400 to-transparent rounded-full group-hover:w-12 transition-all duration-300"></div>
                        <h2 class="text-3xl sm:text-4xl font-black text-white tracking-tight"><?php echo $magasin; ?></h2>
                    </div>
                    <p class="text-sm text-gray-500 ml-12 font-medium">Découvrez <?php echo count($produits); ?> offres sélectionnées pour vous</p>
                </div>

                <!-- Grille de produits -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    <?php foreach($produits as $produit => $detail) : ?>
                        <?php require 'composants/offre-card.php'; ?>
                    <?php endforeach; ?>
                </div>
            </section>
        <?php endforeach; ?>
    </div>
</main>

<?php require 'portions/footer.php'; ?>