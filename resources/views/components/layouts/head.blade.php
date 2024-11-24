<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>{{'Vellum Marketing Agency' }}</title>
    <style>
        body {
            background: url('/img/fundo.jpg') no-repeat center center fixed;
            background-size: cover;
        }
    </style>
</head>
<body>
    {{ $slot }}

    @if (session('success'))
    <div id="toast-success" class="fixed bottom-4 right-4 flex items-center w-full max-w-xs p-4 space-x-4 text-white bg-green-600 rounded-lg shadow">
        <img src="{{ asset('img/certo.png') }}" alt="Sucesso" class="w-6 h-6 rounded-full bg-transparent">
        <div class="text-sm font-bold">Mensagem enviada com sucesso!</div>
    </div>

@endif

</body>
</html>
<script>
    AOS.init(); 
</script>
<script>
    // Ocultar Toast após 5 segundos
    setTimeout(() => {
        document.getElementById('toast-success').remove();
    }, 5000);
</script>
