<x-layouts.head class="">
    <x-layouts.navbar></x-layouts.navbar>
    <div class="flex flex-col min-h-screen mt-10">
        <!-- Conteúdo principal -->
        <div class="flex-grow">
            {{ $slot }}
        </div>
        <!-- Footer -->
        <x-layouts.footer class="bg-[#d88200]"></x-layouts.footer>
    </div>
</x-layouts.head>
