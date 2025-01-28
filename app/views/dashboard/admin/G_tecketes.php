<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billetterie Matchs</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <!-- En-tête -->
   <?php include "../../layout/header.php" ?>
   <?php include "../../layout/nav.php" ?>

  <main class="ml-64 pt-20 p-8">
    <!-- Filtres -->
    <div class="container mx-auto px-4 py-6">
        <div class="bg-white rounded-lg shadow p-4 flex flex-wrap gap-4">
            <select class="border p-2 rounded-md w-full md:w-auto">
                <option>Tous les mois</option>
                <option>Janvier 2025</option>
                <option>Février 2025</option>
                <option>Mars 2025</option>
            </select>
            <select class="border p-2 rounded-md w-full md:w-auto">
                <option>Toutes équipes</option>
                <option>PSG</option>
                <option>OM</option>
                <option>Lyon</option>
            </select>
            <select class="border p-2 rounded-md w-full md:w-auto">
                <option>Prix croissant</option>
                <option>Prix décroissant</option>
                <option>Date</option>
            </select>
        </div>
    </div>

    <!-- Liste des matchs -->
    <div class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Match 1 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <div class="bg-blue-50 p-4">
                    <div class="flex justify-between items-center mb-2">
                        <span class="text-blue-800 font-semibold">Ligue 1</span>
                        <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">Places disponibles</span>
                    </div>
                    <div class="text-center space-y-2">
                        <p class="text-gray-500">15 Février 2025 - 21:00</p>
                        <div class="flex justify-center items-center gap-4">
                            <div class="text-center">
                                <p class="font-bold text-xl">PSG</p>
                                <img src="/api/placeholder/50/50" alt="PSG" class="mx-auto"/>
                            </div>
                            <div class="text-2xl font-bold">VS</div>
                            <div class="text-center">
                                <p class="font-bold text-xl">OM</p>
                                <img src="/api/placeholder/50/50" alt="OM" class="mx-auto"/>
                            </div>
                        </div>
                        <p class="font-medium">Parc des Princes</p>
                    </div>
                </div>
                <div class="p-4 space-y-4">
                    <div class="space-y-2">
                        <div class="flex justify-between items-center">
                            <span class="font-medium">VIP</span>
                            <div class="text-right">
                                <p class="font-bold text-lg">250 €</p>
                                <p class="text-sm text-green-600">12 places restantes</p>
                            </div>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="font-medium">Tribune</span>
                            <div class="text-right">
                                <p class="font-bold text-lg">80 €</p>
                                <p class="text-sm text-amber-600">45 places restantes</p>
                            </div>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="font-medium">Pelouse</span>
                            <div class="text-right">
                                <p class="font-bold text-lg">40 €</p>
                                <p class="text-sm text-red-600">Complet</p>
                            </div>
                        </div>
                    </div>
                    <button class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">
                        Réserver maintenant
                    </button>
                </div>
            </div>

            <!-- Match 2 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <div class="bg-blue-50 p-4">
                    <div class="flex justify-between items-center mb-2">
                        <span class="text-blue-800 font-semibold">Ligue 1</span>
                        <span class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-sm">Presque complet</span>
                    </div>
                    <div class="text-center space-y-2">
                        <p class="text-gray-500">20 Février 2025 - 19:00</p>
                        <div class="flex justify-center items-center gap-4">
                            <div class="text-center">
                                <p class="font-bold text-xl">Lyon</p>
                                <img src="/api/placeholder/50/50" alt="Lyon" class="mx-auto"/>
                            </div>
                            <div class="text-2xl font-bold">VS</div>
                            <div class="text-center">
                                <p class="font-bold text-xl">Nice</p>
                                <img src="/api/placeholder/50/50" alt="Nice" class="mx-auto"/>
                            </div>
                        </div>
                        <p class="font-medium">Groupama Stadium</p>
                    </div>
                </div>
                <div class="p-4 space-y-4">
                    <div class="space-y-2">
                        <div class="flex justify-between items-center">
                            <span class="font-medium">VIP</span>
                            <div class="text-right">
                                <p class="font-bold text-lg">200 €</p>
                                <p class="text-sm text-amber-600">5 places restantes</p>
                            </div>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="font-medium">Tribune</span>
                            <div class="text-right">
                                <p class="font-bold text-lg">60 €</p>
                                <p class="text-sm text-red-600">Complet</p>
                            </div>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="font-medium">Pelouse</span>
                            <div class="text-right">
                                <p class="font-bold text-lg">30 €</p>
                                <p class="text-sm text-red-600">Complet</p>
                            </div>
                        </div>
                    </div>
                    <button class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">
                        Réserver maintenant
                    </button>
                </div>
            </div>

            <!-- Match 3 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <div class="bg-blue-50 p-4">
                    <div class="flex justify-between items-center mb-2">
                        <span class="text-blue-800 font-semibold">Ligue 1</span>
                        <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">Places disponibles</span>
                    </div>
                    <div class="text-center space-y-2">
                        <p class="text-gray-500">25 Février 2025 - 20:00</p>
                        <div class="flex justify-center items-center gap-4">
                            <div class="text-center">
                                <p class="font-bold text-xl">Monaco</p>
                                <img src="/api/placeholder/50/50" alt="Monaco" class="mx-auto"/>
                            </div>
                            <div class="text-2xl font-bold">VS</div>
                            <div class="text-center">
                                <p class="font-bold text-xl">Lille</p>
                                <img src="/api/placeholder/50/50" alt="Lille" class="mx-auto"/>
                            </div>
                        </div>
                        <p class="font-medium">Stade Louis II</p>
                    </div>
                </div>
                <div class="p-4 space-y-4">
                    <div class="space-y-2">
                        <div class="flex justify-between items-center">
                            <span class="font-medium">VIP</span>
                            <div class="text-right">
                                <p class="font-bold text-lg">180 €</p>
                                <p class="text-sm text-green-600">20 places restantes</p>
                            </div>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="font-medium">Tribune</span>
                            <div class="text-right">
                                <p class="font-bold text-lg">50 €</p>
                                <p class="text-sm text-green-600">100 places restantes</p>
                            </div>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="font-medium">Pelouse</span>
                            <div class="text-right">
                                <p class="font-bold text-lg">25 €</p>
                                <p class="text-sm text-green-600">150 places restantes</p>
                            </div>
                        </div>
                    </div>
                    <button class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">
                        Réserver maintenant
                    </button>
                </div>
            </div>
        </div>
    </div>
  </main>
</body>
</html>