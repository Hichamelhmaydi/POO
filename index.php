<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centre Médical - Gestion</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <header class="bg-blue-600 text-white py-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">Centre Médical</h1>
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="#rendezvous" class="hover:underline">Prendre RDV</a></li>
                    <li><a href="#profil" class="hover:underline">Mon Profil</a></li>
                    <li><a href="#factures" class="hover:underline">Mes Factures</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container mx-auto py-8">
        <section id="rendezvous" class="bg-white shadow-md rounded-lg p-6 mb-8">
            <h2 class="text-xl font-semibold mb-4">Prendre un Rendez-vous</h2>
            <form action="#" method="POST">
                <div class="mb-4">
                    <label for="date" class="block text-gray-700">Date :</label>
                    <input type="date" id="date" name="date" class="w-full border-gray-300 rounded-md">
                </div>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Prendre RDV</button>
            </form>
        </section>

        <section id="inscription" class="bg-white shadow-md rounded-lg p-6 mb-8">
            <h2 class="text-xl font-semibold mb-4">inscription</h2>
            <form action="#" method="POST">
                <div class="mb-4">
                    <label for="nom" class="block text-gray-700">Nom :</label>
                    <input type="text" id="nom" name="nom" class="w-full border-gray-300 rounded-md">
                </div>
                <div class="mb-4">
                    <label for="prenom" class="block text-gray-700">Prénom :</label>
                    <input type="text" id="prenom" name="prenom" class="w-full border-gray-300 rounded-md">
                </div>
                <div class="mb-4">
                    <select for="prenom" class="block text-gray-700">Identité :
                        <option value="Patient">Patient</option>
                        <option value="Médcin">Médecin</option>
                    </select>
                   
                </div>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Modifier</button>
            </form>
        </section>

        <section id="profil" class="bg-white shadow-md rounded-lg p-6 mb-8">
            <h2 class="text-xl font-semibold mb-4">Modifier Mes Informations</h2>
            <form action="#" method="POST">
                <div class="mb-4">
                    <label for="nom" class="block text-gray-700">Nom :</label>
                    <input type="text" id="nom" name="nom" class="w-full border-gray-300 rounded-md">
                </div>
                <div class="mb-4">
                    <label for="prenom" class="block text-gray-700">Prénom :</label>
                    <input type="text" id="prenom" name="prenom" class="w-full border-gray-300 rounded-md">
                </div>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Modifier</button>
            </form>
        </section>

        <section id="factures" class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-xl font-semibold mb-4">Mes Factures</h2>
            <table class="w-full border-collapse border border-gray-200">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="border border-gray-300 px-4 py-2">Date</th>
                        <th class="border border-gray-300 px-4 py-2">Médecin</th>
                        <th class="border border-gray-300 px-4 py-2">Montant</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2"></td>
                        <td class="border border-gray-300 px-4 py-2"></td>
                        <td class="border border-gray-300 px-4 py-2"></td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>

    <footer class="bg-gray-800 text-white py-4">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Centre Médical. Tous droits réservés.</p>
        </div>
    </footer>
</body>
</html>