<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - FootTickets</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-lg w-96">
        <div class="text-center mb-8">
            <h1 class="text-2xl font-bold text-gray-800">FootTickets</h1>
            <p class="text-gray-600">Connectez-vous pour réserver vos billets</p>
        </div>

        <form class="space-y-6">
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
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Mot de passe
                </label>
                <input 
                    type="password" 
                    id="password" 
                    class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:border-blue-500"
                    placeholder="Votre mot de passe"
                    required
                >
            </div>

            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <input type="checkbox" id="remember" class="h-4 w-4 text-blue-600">
                    <label for="remember" class="ml-2 text-sm text-gray-600">
                        Se souvenir de moi
                    </label>
                </div>
                <a href="#" class="text-sm text-blue-600 hover:text-blue-800">
                    Mot de passe oublié?
                </a>
            </div>

            <button 
                type="submit"
                class="w-full bg-blue-600 text-white py-3 rounded hover:bg-blue-700 transition duration-200"
            >
                Se connecter
            </button>
        </form>

        <div class="mt-6 text-center">
            <p class="text-gray-600 text-sm">
                Pas encore de compte? 
                <a href="#" class="text-blue-600 hover:text-blue-800">S'inscrire</a>
            </p>
        </div>
    </div>
</body>
</html>