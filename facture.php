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
                    <li><a href="index.php" class="hover:underline">Home</a></li>
                </ul>
            </nav>
        </div>
    </header>


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
</body>
</html>