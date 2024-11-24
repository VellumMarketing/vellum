<nav class="bg-[#d88200] border-gray-200 shadow-md fixed top-0 left-0 right-0 z-50">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
      <img src="/img/vellumcirculopng.png" class="h-12" alt="Vellum Logo" />
      <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">Vellum Marketing</span>
    </a>
    <div class="flex md:order-2">
      <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search" aria-expanded="false" class="md:hidden text-gray-500 dark:text-gray-400 rounded-lg text-sm p-2.5 me-1">
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
        </svg>
        <span class="sr-only">Search</span>
      </button>
      <div class="relative hidden md:block">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
          <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
          </svg>
          <span class="sr-only">Search icon</span>
        </div>
        <!-- Barra de Pesquisa -->
        <input type="text" id="search-navbar" class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-[#d88200] focus:border-[#d88200] dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-[#d88200] dark:focus:border-[#d88200]" placeholder="Search...">
      </div>
      <button data-collapse-toggle="navbar-search" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden" aria-controls="navbar-search" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
      </button>
    </div>
    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-search">
      <ul class="flex flex-col p-4 md:p-0 mt-4 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
          <a href="/#sobre-nos" class="block py-2 px-3 font-semibold text-white rounded md:hover:bg-transparent">Sobre nós</a>
        </li>
        <li>
          <a href="/#serviços" class="block py-2 px-3 font-semibold text-white rounded md:hover:bg-transparent">Serviços</a>
        </li>
        <li>
          <a href="/#packs" class="block py-2 px-3 font-semibold text-white rounded md:hover:bg-transparent">Packs</a>
        </li>
        <li>
          <a href="/#contactos" class="block py-2 px-3 font-semibold text-white rounded md:hover:bg-transparent">Contactos</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Script para a Pesquisa e Navegação -->
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const searchInput = document.getElementById('search-navbar'); // Input de pesquisa
    const bodyContent = document.body; // Conteúdo visível da página

    searchInput.addEventListener('keypress', (event) => {
      if (event.key === 'Enter') { // Verifica se a tecla pressionada foi Enter
        event.preventDefault(); // Impede o comportamento padrão do enter (por exemplo, submit do formulário)
        const query = searchInput.value.toLowerCase(); // Texto digitado

        if (query) {
          const elements = bodyContent.querySelectorAll('*'); // Todos os elementos da página
          let found = false;

          elements.forEach((element) => {
            if (element.children.length === 0 && element.textContent) { // Apenas elementos com texto
              const text = element.textContent;
              const index = text.toLowerCase().indexOf(query);

              if (index !== -1 && !found) {
                // Encontra a primeira ocorrência e rola para ela
                element.scrollIntoView({ behavior: 'smooth', block: 'center' });

                // Marca que encontrou e para de procurar
                found = true;

                // Sublinha o texto encontrado
                highlightText(element, query);
              }
            }
          });

          if (!found) {
            alert("Palavra não encontrada na página.");
          }
        }
      }
    });

    // Função para sublinhar a palavra encontrada
    function highlightText(element, query) {
      const regex = new RegExp(`(${query})`, 'gi'); // Cria um padrão de busca para a palavra (case-insensitive)
      element.innerHTML = element.innerHTML.replace(regex, '<span class="highlight">$1</span>');
    }
  });
</script>

<!-- CSS para Destaque (Sublinhado) -->
<style>
  .highlight {
    text-decoration: underline;
    background-color: #fef08a; /* Amarelo claro para destacar */
    color: black;
    font-weight: bold;
    border-radius: 4px;
  }
</style>
