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
                    <li><a href="facture.php" class="hover:underline">facture</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container mx-auto py-8">

        <section id="inscription" class="bg-white shadow-md rounded-lg p-6 mb-8">
            <h2 class="text-xl font-semibold mb-4">inscription</h2>
            <form action="form.php" method="POST">
                <div class="mb-4">
                    <label for="nom" class="block text-gray-700">Nom :</label>
                    <input type="text" id="nom" name="nom" class="w-full border-gray-300 rounded-md">
                </div>
                <div class="mb-4">
                    <label for="prenom" class="block text-gray-700">Prénom :</label>
                    <input type="text" id="prenom" name="prenom" class="w-full border-gray-300 rounded-md">
                </div>
                <div class="mb-4">
                    <select name="Identite" class="block text-gray-700">Identité :
                        <option value="Pateint">Patient</option>
                        <option value="Médecin">Médecin</option>
                    </select>
                   
                </div>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">submit</button>
            </form>
        </section>

    

       
    </main>
</body>
</html>