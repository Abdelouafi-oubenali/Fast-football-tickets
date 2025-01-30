<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Tickets de Football</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.js"></script>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>

</head>
<body class="bg-gray-100">
<!-- header here -->
 <?php include "../../layout/header.php"  ?>
    <div class="min-h-screen">
        <!-- Barre latérale -->
        <?php include "../../layout/nav.php" ?>

        <!-- Contenu principal -->
        <main class="ml-64 p-8">
            <!-- En-tête -->
            <div class="flex justify-between items-center mb-8">
                <h1 class="text-2xl font-bold">Gestion des Tickets</h1>
                <div>
                    <select id="matchSelect" class="p-2 border rounded-lg">
                        <option value="match1">PSG vs Marseille - 15/02/2025</option>
                        <option value="match2">Lyon vs Lille - 22/02/2025</option>
                        <option value="match3">Monaco vs Lens - 01/03/2025</option>
                    </select>
                </div>
            </div>

            <!-- Statistiques des tickets -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="text-gray-500 text-sm">Tickets Vendus</div>
                    <div class="text-2xl font-bold mt-2" id="ticketsSold">0</div>
                    <div class="text-green-500 text-sm mt-2">sur 50,000 places</div>
                </div>
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="text-gray-500 text-sm">Revenus</div>
                    <div class="text-2xl font-bold mt-2" id="revenue">0 €</div>
                    <div class="text-green-500 text-sm mt-2" id="revenueGrowth">+0%</div>
                </div>
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="text-gray-500 text-sm">Places VIP</div>
                    <div class="text-2xl font-bold mt-2" id="vipTickets">0</div>
                    <div class="text-orange-500 text-sm mt-2">Disponibles: 100</div>
                </div>
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="text-gray-500 text-sm">Taux de remplissage</div>
                    <div class="text-2xl font-bold mt-2" id="occupancyRate">0%</div>
                    <div class="text-blue-500 text-sm mt-2">Objectif: 0%</div>
                </div>
            </div>

            <!-- Plan du stade et ventes -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">
                <div class="bg-white rounded-lg shadow p-6">
                    <h2 class="text-lg font-semibold mb-4">Répartition des ventes par tribune</h2>
                    <canvas id="stadiumChart" height="200"></canvas>
                </div>
                <div class="bg-white rounded-lg shadow p-6">
                    <h2 class="text-lg font-semibold mb-4">Dernières ventes</h2>
                    <div class="space-y-4" id="recentSales"></div>
                </div>
            </div>
            
            <!-- Tableau des catégories de prix -->
            <div class="bg-white rounded-lg shadow p-6">
                <h2 class="text-lg font-semibold mb-4">Catégories de prix</h2>
                <table class="w-full">
                    <thead>
                        <tr class="text-left bg-gray-50">
                            <th class="p-4">Catégorie</th>
                            <th class="p-4">Prix</th>
                            <th class="p-4">Disponibilité</th>
                            <th class="p-4">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="priceCategories">
                    </tbody>
                </table>
            </div>
        </main>
    </div>

    <script src="../../../../public/assets/js/scrept.js">

    </script>
</body>
</html>