<div class="group h-full bg-gradient-to-br from-gray-800/60 to-gray-900/60 backdrop-blur-sm border border-gray-700/30 hover:border-indigo-400/50 rounded-2xl shadow-lg hover:shadow-2xl hover:shadow-indigo-500/15 transition-all duration-300 overflow-hidden flex flex-col hover:scale-103 hover:-translate-y-1.5">
    <!-- Image Container -->
    <a href="#" class="block overflow-hidden bg-gradient-to-b from-gray-800/50 to-gray-900/50 h-44 flex items-center justify-center relative">
        <img class="w-full h-full object-contain p-4 group-hover:scale-105 transition-transform duration-300" 
             src="<?php echo 'images/'.$detail['image']; ?>" alt="<?php echo $produit; ?>" />
    </a>

    <div class="p-5 flex-1 flex flex-col justify-between">
        <!-- Titre du produit -->
        <a href="#" class="block group/title">
            <h5 class="text-sm font-medium tracking-tight text-gray-50 line-clamp-2 group-hover/title:text-indigo-300 transition-colors duration-300 mb-3 leading-snug">
                <?php echo $produit; ?>
            </h5>
        </a>

        <!-- Reduction Badge + Old Price -->
        <div class="flex items-center gap-2.5 mb-4">
            <span class="inline-block bg-gradient-to-br from-red-600 to-red-500 text-white text-xs font-bold px-3 py-1.5 rounded-lg shadow-lg shadow-red-600/20 tracking-wider">
                −<?php echo round(($detail['prix-initial'] - $detail['prix-promo']) * 100 / $detail['prix-initial']); ?>%
            </span>
            <span class="text-xs text-gray-400 line-through font-medium">
                <?php echo $detail['prix-initial']; ?> <?php echo $detail['devise']; ?>
            </span>
        </div>

        <!-- Pricing Section -->
        <div class="mb-4">
            <div class="flex items-baseline gap-1.5 mb-2">
                <span class="text-3xl font-black text-white">
                    <?php echo $detail['prix-promo']; ?>
                </span>
                <span class="text-sm font-medium text-gray-400"><?php echo $detail['devise']; ?></span>
            </div>
            <p class="text-xs text-gray-400 font-medium">
                Économisé: <span class="text-emerald-400 font-bold"><?php echo round($detail['prix-initial'] - $detail['prix-promo'], 2); ?> <?php echo $detail['devise']; ?></span>
            </p>
        </div>

        <!-- Action Button -->
        <a href="#" class="w-full flex items-center justify-center gap-2 text-white bg-gradient-to-r from-indigo-600 to-indigo-500 hover:from-indigo-700 hover:to-indigo-600 font-medium rounded-xl text-xs px-4 py-3 transition-all duration-300 shadow-lg hover:shadow-xl hover:shadow-indigo-500/30 group/btn overflow-hidden relative">
            <!-- Subtle hover effect -->
            <div class="absolute inset-0 bg-white/0 group-hover/btn:bg-white/10 transition-colors duration-300"></div>
            <span class="relative flex items-center gap-2">
                <svg class="w-4 h-4 group-hover/btn:translate-x-0.5 transition-transform duration-300" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.148-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.653a11.883 11.883 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                </svg>
                Profiter
            </span>
        </a>
    </div>
</div>
