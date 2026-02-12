<?php 

session_start();

$header= 'Publier une offre';
?>

<?php require 'portions/header.php'; ?>

<main class="bg-gradient-to-br from-gray-900 via-gray-950 to-gray-900 min-h-screen relative">
    <!-- Subtle background accent -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-indigo-500/5 rounded-full blur-3xl"></div>
    
    <div class="relative mx-auto max-w-2xl px-4 sm:px-6 lg:px-8 py-16">
        <!-- Hero Section -->
        <div class="mb-12">
            <div class="inline-flex items-center gap-2 mb-6 px-4 py-2 bg-indigo-500/10 border border-indigo-500/30 rounded-full hover:border-indigo-500/50 transition-colors duration-300 backdrop-blur-sm">
                <span class="w-2 h-2 bg-indigo-400 rounded-full animate-pulse"></span>
                <span class="text-indigo-300 text-xs font-semibold tracking-wider uppercase">📝 Créer une Offre</span>
            </div>
            <h1 class="text-4xl sm:text-5xl font-black text-white mb-4 tracking-tight">
                Publiez Votre<br/><span class="bg-gradient-to-r from-indigo-400 via-purple-300 to-indigo-300 text-transparent bg-clip-text">Offre Promo</span>
            </h1>
            <p class="text-lg text-white max-w-xl leading-relaxed font-light">
                Partagez vos meilleures réductions avec notre communauté
            </p>
        </div>

        <!-- Messages d'alerte -->
        <?php if(isset($_SESSION['succes'])): ?>
            <div class="mb-8 p-4 bg-emerald-500/10 border border-emerald-500/30 rounded-xl backdrop-blur-sm">
                <p class="text-emerald-300 text-sm font-medium flex items-center gap-2">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                    <?php echo $_SESSION['succes']; ?>
                </p>
            </div>
        <?php unset($_SESSION['succes']); endif; ?>

        <?php if(isset($_SESSION['error'])): ?>
            <div class="mb-8 p-4 bg-red-500/10 border border-red-500/30 rounded-xl backdrop-blur-sm">
                <p class="text-red-300 text-sm font-medium flex items-center gap-2">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/></svg>
                    <?php echo $_SESSION['error']; ?>
                </p>
            </div>
        <?php unset($_SESSION['error']); endif; ?>

        <!-- Form Container -->
        <form class="bg-gradient-to-br from-gray-800/70 to-gray-900/70 backdrop-blur-sm border border-gray-700/40 rounded-2xl shadow-lg p-8 space-y-6" method="POST" action="controllers/creer-offre.php" enctype="multipart/form-data">
            
            <!-- Image Input -->
            <div>
                <label for="image" class="block mb-3 text-sm font-semibold text-white tracking-tight">
                    📷 Image du produit
                </label>
                <input type="file" id="image" name="image"
                    class="w-full px-4 py-3 bg-gray-900/50 border border-gray-700/50 rounded-xl text-gray-200 text-sm transition-all duration-300 focus:border-indigo-500/50 focus:ring-2 focus:ring-indigo-500/20 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-xs file:font-semibold file:bg-indigo-600 file:text-white hover:file:bg-indigo-700 file:transition-colors file:cursor-pointer" 
                    required />
            </div>

            <!-- Nom Produit -->
            <div>
                <label for="nom_produit" class="block mb-3 text-sm font-semibold text-white tracking-tight">
                    📦 Nom du produit
                </label>
                <input type="text" id="nom_produit" name="nom_produit" placeholder="Ex: Téléphone Samsung..."
                    class="w-full px-4 py-3 bg-gray-900/50 border border-gray-700/50 rounded-xl text-gray-50 placeholder-gray-500 text-sm transition-all duration-300 focus:border-indigo-500/50 focus:ring-2 focus:ring-indigo-500/20" 
                    required />
            </div>

            <!-- Prix Initial et Promo en grid -->
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label for="prix_initial" class="block mb-3 text-sm font-semibold text-white tracking-tight">
                        💰 Prix initial
                    </label>
                    <input type="number" id="prix_initial" name="prix_initial" step="0.01" placeholder="0.00"
                        class="w-full px-4 py-3 bg-gray-900/50 border border-gray-700/50 rounded-xl text-gray-50 placeholder-gray-500 text-sm transition-all duration-300 focus:border-indigo-500/50 focus:ring-2 focus:ring-indigo-500/20" 
                        required />
                </div>
                <div>
                    <label for="prix_promo" class="block mb-3 text-sm font-semibold text-white tracking-tight">
                        🎉 Prix promo
                    </label>
                    <input type="number" id="prix_promo" name="prix_promo" step="0.01" placeholder="0.00"
                        class="w-full px-4 py-3 bg-gray-900/50 border border-gray-700/50 rounded-xl text-gray-50 placeholder-gray-500 text-sm transition-all duration-300 focus:border-indigo-500/50 focus:ring-2 focus:ring-indigo-500/20" 
                        required />
                </div>
            </div>

            <!-- Devise et Magasin en grid -->
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label for="devise" class="block mb-3 text-sm font-semibold text-white tracking-tight">
                        💵 Devise
                    </label>
                    <select id="devise" name="devise"
                        class="w-full px-4 py-3 bg-gray-900/50 border border-gray-700/50 rounded-xl text-gray-50 text-sm transition-all duration-300 focus:border-indigo-500/50 focus:ring-2 focus:ring-indigo-500/20 cursor-pointer">
                        <option value="FC">FC</option>
                        <option value="$">USD ($)</option>
                        <option value="€">EUR (€)</option>
                    </select>
                </div>
                <div>
                    <label for="magasin" class="block mb-3 text-sm font-semibold text-white tracking-tight">
                        🏪 Magasin
                    </label>
                    <select id="magasin" name="magasin"
                        class="w-full px-4 py-3 bg-gray-900/50 border border-gray-700/50 rounded-xl text-gray-50 text-sm transition-all duration-300 focus:border-indigo-500/50 focus:ring-2 focus:ring-indigo-500/20 cursor-pointer">
                        <option value="">Sélectionner un magasin...</option>
                        <option value="Top Market">Top Market</option>
                        <option value="Kin Marché">Kin Marché</option>
                        <option value="Jambo">Jambo</option>
                        <option value="Rocheio">Rocheio</option>
                    </select>
                </div>
            </div>

            <!-- Submit Button -->
            <button type="submit" 
                class="w-full flex items-center justify-center gap-2 text-white bg-gradient-to-r from-indigo-600 to-indigo-500 hover:from-indigo-700 hover:to-indigo-600 font-semibold rounded-xl text-sm px-6 py-3 transition-all duration-300 shadow-lg hover:shadow-xl hover:shadow-indigo-500/30 mt-8 group">
                <svg class="w-5 h-5 group-hover:scale-110 transition-transform" fill="currentColor" viewBox="0 0 20 20"><path d="M5.5 13a3.5 3.5 0 01-.369-6.98 4 4 0 117.754-1 4.5 4.5 0 11-4.164 6.98h.005z"/></svg>
                Créer l'offre
            </button>
        </form>
    </div>
</main>

<?php require 'portions/footer.php'; ?>