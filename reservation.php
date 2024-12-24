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

    <main class="container mx-auto py-8">
        <section id="rendezvous" class="bg-white shadow-md rounded-lg p-6 mb-8">
            <h2 class="text-xl font-semibold mb-4">Prendre un Rendez-vous</h2>
            <form action="form.php" method="POST">
                <div class="mb-4">
                    <label for="date_res" class="block text-gray-700">Date :</label>
                    <input type="date" id="date" name="date_res" class="w-full border-gray-300 rounded-md">
                </div>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Prendre RDV</button>
            </form>
        </section>

    </main>

   
</body>
</html>