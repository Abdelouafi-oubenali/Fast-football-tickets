<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - FootTickets</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center py-12">
    <div class="bg-white p-8 rounded-lg shadow-lg w-96">
        <div class="text-center mb-8">
            <h1 class="text-2xl font-bold text-gray-800">FootTickets</h1>
            <p class="text-gray-600">Créez votre compte</p>
        </div>

        <form class="space-y-4">
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="prenom">
                        Prénom
                    </label>
                    <input 
                        type="text" 
                        id="prenom" 
                        class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:border-blue-500"
                        required
                    >
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="nom">
                        Nom
                    </label>
                    <input 
                        type="text" 
                        id="nom" 
                        class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:border-blue-500"
                        required
                    >
                </div>
            </div>

            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                    Adresse email
                </label>
                <input 
                    type="email" 
                    id="email" 
                    class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:border-blue-500"
                    placeholder="exemple@email.com"
                    required
                >
            </div>

            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="telephone">
                    Numéro de téléphone
                </label>
                <input 
                    type="tel" 
                    id="telephone" 
                    class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:border-blue-500"
                    placeholder="+33 6 XX XX XX XX"
                    required
                >
            </div>

            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Mot de passe
                </label>
                <input 
                    type="password" 
                    id="password" 
                    class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:border-blue-500"
                    required
                >
            </div>

            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="confirm-password">
                    Confirmer le mot de passe
                </label>
                <input 
                    type="password" 
                    id="confirm-password" 
                    class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:border-blue-500"
                    required
                >
            </div>

            <div class="flex items-center">
                <input type="checkbox" id="conditions" class="h-4 w-4 text-blue-600" required>
                <label for="conditions" class="ml-2 text-sm text-gray-600">
                    J'accepte les conditions d'utilisation et la politique de confidentialité
                </label>
            </div>

            <button 
                type="submit"
                class="w-full bg-blue-600 text-white py-3 rounded hover:bg-blue-700 transition duration-200"
            >
                Créer mon compte
            </button>
        </form>

        <div class="mt-6 text-center">
            <p class="text-gray-600 text-sm">
                Déjà inscrit? 
                <a href="#" class="text-blue-600 hover:text-blue-800">Se connecter</a>
            </p>
        </div>
    </div>
</body>
</html>