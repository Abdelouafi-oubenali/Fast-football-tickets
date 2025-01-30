<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vente de Billets de Football</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100">
    <!-- Header -->
    <header class="fixed top-0 right-0 left-64 bg-white shadow-md z-50">
        <div class="flex justify-between items-center px-8 py-4">
            <div class="flex items-center space-x-4">
                <div class="bg-green-600 text-white p-2 rounded-full">⚽</div>
                <h1 class="text-xl font-bold">Vente de Billets</h1>
            </div>
            <div class="flex items-center space-x-4">
                <button 
                    class="px-4 py-2 text-red-600 hover:text-white hover:bg-red-600 rounded-lg border border-red-600 transition-colors duration-300"
                >
                    Déconnexion
                </button>
            </div>
        </div>
    </header>

    <!-- Sidebar -->
    <nav class="fixed top-0 left-0 h-full w-64 bg-green-800 p-4">
        <div class="text-white text-xl font-bold mb-8">⚽ Billetterie</div>
        <ul class="space-y-2">
            <li>
                <a href="#" class="text-gray-300 hover:text-white block py-2 px-4 rounded hover:bg-green-700">
                    Dashboard
                </a>
            </li>
            <li>
                <a href="#" class="bg-green-700 text-white block py-2 px-4 rounded">
                    Vente de Billets
                </a>
            </li>
            <li>
                <a href="#" class="text-gray-300 hover:text-white block py-2 px-4 rounded hover:bg-green-700">
                    Historique
                </a>
            </li>
        </ul>
    </nav>

    <!-- Contenu principal -->
    <main class="ml-64 pt-20 p-8">
        <!-- Sélecteur de match -->
        <div class="bg-white rounded-lg shadow p-6 mb-6">
            <h2 class="text-lg font-semibold mb-4">Sélectionner un match</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <select class="px-4 py-2 border rounded-lg" id="matchSelect">
                    <option value="">Sélectionner un match</option>
                    <option value="1">PSG vs Marseille - 15/02/2025</option>
                    <option value="2">Lyon vs Lille - 22/02/2025</option>
                    <option value="3">Monaco vs Lens - 01/03/2025</option>
                </select>
                <select class="px-4 py-2 border rounded-lg" id="categorySelect">
                    <option value="">Catégorie de billet</option>
                    <option value="vip">VIP - 150€</option>
                    <option value="category1">Catégorie 1 - 80€</option>
                    <option value="category2">Catégorie 2 - 50€</option>
                    <option value="category3">Catégorie 3 - 30€</option>
                </select>
                <select class="px-4 py-2 border rounded-lg" id="quantitySelect">
                    <option value="1">1 billet</option>
                    <option value="2">2 billets</option>
                    <option value="3">3 billets</option>
                    <option value="4">4 billets</option>
                </select>
            </div>
        </div>

        <!-- Plan du stade -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Visualisation stade -->
            <div class="md:col-span-2 bg-white rounded-lg shadow p-6">
                <h2 class="text-lg font-semibold mb-4">Plan du stade</h2>
                <div class="border-2 border-gray-300 p-4 rounded-lg h-96 relative">
                    <!-- Tribune Nord -->
                    <div class="absolute top-0 left-1/4 right-1/4 h-16 bg-green-100 border border-green-300 rounded flex items-center justify-center cursor-pointer hover:bg-green-200" onclick="selectTribune('nord')">
                        Tribune Nord
                    </div>
                    
                    <!-- Tribune Sud -->
                    <div class="absolute bottom-0 left-1/4 right-1/4 h-16 bg-blue-100 border border-blue-300 rounded flex items-center justify-center cursor-pointer hover:bg-blue-200" onclick="selectTribune('sud')">
                        Tribune Sud
                    </div>
                    
                    <!-- Tribune Est -->
                    <div class="absolute top-1/4 bottom-1/4 right-0 w-16 bg-yellow-100 border border-yellow-300 rounded flex items-center justify-center cursor-pointer hover:bg-yellow-200 writing-mode-vertical" onclick="selectTribune('est')">
                        Tribune Est
                    </div>
                    
                    <!-- Tribune Ouest -->
                    <div class="absolute top-1/4 bottom-1/4 left-0 w-16 bg-purple-100 border border-purple-300 rounded flex items-center justify-center cursor-pointer hover:bg-purple-200 writing-mode-vertical" onclick="selectTribune('ouest')">
                        Tribune Ouest
                    </div>
                    
                    <!-- Terrain -->
                    <div class="absolute top-1/4 left-1/4 right-1/4 bottom-1/4 bg-green-500 rounded-lg flex items-center justify-center text-white">
                        Terrain
                    </div>
                </div>
            </div>

            <!-- Résumé et paiement -->
            <div class="bg-white rounded-lg shadow p-6">
                <h2 class="text-lg font-semibold mb-4">Résumé de la commande</h2>
                <div class="space-y-4">
                    <div class="flex justify-between">
                        <span>Match:</span>
                        <span id="selectedMatch">-</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Tribune:</span>
                        <span id="selectedTribune">-</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Catégorie:</span>
                        <span id="selectedCategory">-</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Quantité:</span>
                        <span id="selectedQuantity">-</span>
                    </div>
                    <div class="flex justify-between font-bold">
                        <span>Total:</span>
                        <span id="totalPrice">0 €</span>
                    </div>

                    <hr class="my-4">

                    <form class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Nom</label>
                            <input type="text" class="mt-1 block w-full border rounded-md p-2">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="email" class="mt-1 block w-full border rounded-md p-2">
                        </div>
                        <button type="submit" class="w-full bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">
                            Procéder au paiement
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <script src="../../../../public/assets/js/scrept.js">


    </script>
</body>
</html>