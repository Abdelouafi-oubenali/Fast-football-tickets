<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billetterie Football</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <!-- Header -->
    <header class="bg-gradient-to-r from-blue-800 to-blue-600">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <a href="#" class="text-white text-2xl font-bold">⚽ FootTickets</a>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href="#" class="text-white hover:bg-blue-700 px-3 py-2 rounded-md">Accueil</a>
                        <a href="#" class="text-white hover:bg-blue-700 px-3 py-2 rounded-md">Matchs</a>
                        <a href="#" class="text-white hover:bg-blue-700 px-3 py-2 rounded-md">Équipes</a>
                        <a href="#" class="text-white hover:bg-blue-700 px-3 py-2 rounded-md">Contact</a>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <button class="bg-white text-blue-800 px-4 py-2 rounded-md hover:bg-gray-100">
                        Connexion
                    </button>
                </div>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <div class="relative bg-blue-900 h-96">
    <div class="absolute inset-0 overflow-hidden">
        <div id="slider" class="w-full h-full relative">
            <img src="https://cdn.sofifa.net/players/020/801/25_120.png" alt="Stadium">
            <img src="https://cdn.sofifa.net/players/192/985/25_120.png" 
                 class="w-full h-full object-cover opacity-0 absolute transition-opacity duration-1000" alt="Match">
            <img src="https://cdn.sofifa.net/players/231/747/25_120.png" 
                 class="w-full h-full object-cover opacity-0 absolute transition-opacity duration-1000" alt="Fan Zone">
        </div>
        <button id="prev" class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white px-4 py-2 rounded-full shadow-md">◀</button>
        <button id="next" class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white px-4 py-2 rounded-full shadow-md">▶</button>
    </div>
</div>

<script>
    const images = document.querySelectorAll('#slider img');
    let currentIndex = 0;
    
    function updateSlider(index) {
        images.forEach((img, i) => {
            img.classList.remove('opacity-30', 'opacity-0');
            img.classList.add(i === index ? 'opacity-30' : 'opacity-0');
        });
    }
    
    document.getElementById('prev').addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + images.length) % images.length;
        updateSlider(currentIndex);
    });
    
    document.getElementById('next').addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % images.length;
        updateSlider(currentIndex);
    });
</script>

    <!-- Search Section -->

    <!-- Matches Grid -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <h2 class="text-3xl font-bold text-gray-900 mb-8">Matchs à venir</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Match Card 1 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300">
                <div class="bg-gradient-to-r from-blue-50 to-blue-100 p-6">
                    <div class="flex justify-between items-center mb-4">
                        <span class="bg-blue-600 text-white px-3 py-1 rounded-full text-sm">Ligue 1</span>
                        <span class="text-blue-600 font-medium">J-25</span>
                    </div>
                    <div class="text-center space-y-4">
                        <p class="text-gray-600">15 Février 2025 - 21:00</p>
                        <div class="flex justify-center items-center space-x-8">
                            <div class="text-center space-y-2">
                                <img src="/api/placeholder/64/64" alt="PSG" class="mx-auto h-16 w-16 rounded-full shadow">
                                <p class="font-bold text-gray-900">PSG</p>
                            </div>
                            <div class="text-2xl font-bold text-gray-900">VS</div>
                            <div class="text-center space-y-2">
                                <img src="/api/placeholder/64/64" alt="OM" class="mx-auto h-16 w-16 rounded-full shadow">
                                <p class="font-bold text-gray-900">OM</p>
                            </div>
                        </div>
                        <p class="text-gray-600 font-medium">Parc des Princes</p>
                    </div>
                </div>
                <div class="p-6 space-y-4">
                    <div class="space-y-2">
                        <div class="flex justify-between items-center">
                            <span class="text-gray-700">VIP</span>
                            <div class="text-right">
                                <p class="text-xl font-bold text-gray-900">250 €</p>
                                <p class="text-sm text-green-600">12 places restantes</p>
                            </div>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-700">Tribune</span>
                            <div class="text-right">
                                <p class="text-xl font-bold text-gray-900">80 €</p>
                                <p class="text-sm text-amber-600">45 places restantes</p>
                            </div>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-700">Pelouse</span>
                            <div class="text-right">
                                <p class="text-xl font-bold text-gray-900">40 €</p>
                                <p class="text-sm text-red-600">Complet</p>
                            </div>
                        </div>
                    </div>
                    <button class="w-full bg-blue-600 hover:bg-blue-700 text-white py-3 px-4 rounded-lg transition duration-150">
                        Réserver maintenant
                    </button>
                </div>
            </div>

            <!-- Match Card 2 -->
            [Répéter la même structure avec des données différentes]

            <!-- Match Card 3 -->
            [Répéter la même structure avec des données différentes]
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-lg font-bold mb-4">FootTickets</h3>
                    <p class="text-gray-400">
                        Votre billetterie en ligne pour tous les matchs de football.
                    </p>
                </div>
                <div>
                    <h3 class="text-lg font-bold mb-4">Liens rapides</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Accueil</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Matchs</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Équipes</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-bold mb-4">Contact</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li>📞 01 23 45 67 89</li>
                        <li>📧 contact@foottickets.fr</li>
                        <li>📍 Paris, France</li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-bold mb-4">Newsletter</h3>
                    <form class="space-y-4">
                        <input type="email" placeholder="Votre email" 
                               class="w-full px-4 py-2 rounded-md bg-gray-800 text-white border border-gray-700 focus:ring-2 focus:ring-blue-500">
                        <button class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-md transition duration-150">
                            S'abonner
                        </button>
                    </form>
                </div>
            </div>
            <div class="mt-8 pt-8 border-t border-gray-800 text-center text-gray-400">
                <p>&copy; 2025 FootTickets. Tous droits réservés.</p>
            </div>
        </div>
    </footer>
</body>
</html>