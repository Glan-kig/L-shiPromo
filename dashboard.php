<?php 
$header = "Dashboard";
?>
<?php require 'portions/header.php'; ?>
<?php require 'models/promotions-data.php'; ?>

<h1 class="text-2xl font-bold text-white text-center mb-4">Liste de toutes les offres</h1>

<?php foreach( $promotions as $magasin => $produits) : ?>
    <h2 class="text-xl font-semibold text-blue-400 ml-2 mb-3 border-l-4 border-blue-500 pl-3"><?php echo $magasin; ?></h2>
    
    <div class="overflow-hidden rounded-xl border border-white/10 bg-white/5 backdrop-blur-md shadow-2xl mb-10">
        <table class="min-w-full table-auto text-sm text-left">
            <thead>
                <tr class="bg-white/10 text-gray-300 uppercase text-xs tracking-widest">
                    <th class="px-4 py-3 font-medium">Num</th>
                    <th class="px-4 py-3 font-medium text-center">Aperçu</th>
                    <th class="px-4 py-3 font-medium">Produit</th>
                    <th class="px-4 py-3 font-medium">Prix Initial</th>
                    <th class="px-4 py-3 font-medium">Prix Promo</th>
                    <th class="px-4 py-3 font-medium text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-white/5 text-gray-200">
                <?php $i = 1 ?>
                <?php foreach( $produits as $produit => $detail) : ?>
                    <tr class="hover:bg-white/10 transition-all duration-200 ease-in-out">
                        <td class="px-4 py-2 font-mono text-gray-500"><?php echo $i; ?></td>
                        <td class="px-4 py-2 flex justify-center">
                            <img src="<?php echo $detail['image']; ?>" alt="<?php echo $produit; ?>" class="w-10 h-10 object-cover rounded-md border border-white/20 shadow-sm">
                        </td>
                        <td class="px-4 py-2 font-medium"><?php echo $produit; ?></td>
                        <td class="px-4 py-2 text-gray-400 line-through text-xs"><?php echo $detail['prix-initial']. " " . $detail['devise']; ?></td>
                        <td class="px-4 py-2 font-bold text-green-400"><?php echo $detail['prix-promo']. " " . $detail['devise']; ?></td>
                        <td class="px-4 py-2 text-right space-x-2">
                            <a href="controllers/modifier-offre.php?id=<?php echo $detail['id']; ?>" class="inline-block">
                                <button class="bg-blue-600/20 hover:bg-blue-600 text-blue-400 hover:text-white text-[11px] font-bold uppercase py-1.5 px-3 rounded-md border border-blue-600/50 transition-all">
                                    Modifier
                                </button>
                            </a>
                            <a href="controllers/supprimer-offre.php?id=<?php echo $detail['id']; ?>" class="inline-block">
                                <button class="bg-red-600/20 hover:bg-red-600 text-red-400 hover:text-white text-[11px] font-bold uppercase py-1.5 px-3 rounded-md border border-red-600/50 transition-all">
                                    Supprimer
                                </button>
                            </a>
                        </td>
                    </tr>
                    <?php $i++ ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?php endforeach; ?>

<?php require 'portions/footer.php'; ?>