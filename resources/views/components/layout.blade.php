<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>By koji | {{ $title }} </title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Markazi+Text:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inknut+Antiqua:wght@300;400;600;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Krona+One&display=swap" rel="stylesheet">

    @vite('resources/css/app.css')
</head>

<body class="bg-zinc-950 h-screen w-full max-w-[1300px] mx-auto">
    <div class="fixed bg-clouds w-full h-full left-0 bg-no-repeat bg-cover opacity-25"></div>
    {{ $slot }}
</body>

</html>
