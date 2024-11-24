<x-layouts.app>
    <div class="container mx-auto py-8 mt-28">
        <div class="max-w-2xl mx-auto bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="p-5">
                <h5 class="mb-2 text-3xl font-bold tracking-tight text-yellow-600 dark:text-yellow-300">Plano Premium</h5>
                <p class="mb-3 font-bold text-gray-700 dark:text-gray-400">
                    Pacote completo para utilizadores que desejam a melhor experiência:
                </p>
                <ul class="font-semibold list-disc list-inside mb-4 text-gray-700 dark:text-gray-400">
                    <li>Website Completo Avançado: Até 10 páginas com funcionalidades  blog ou galeria.</li>
                    <li>Gestão Completa de Redes Sociais: Publicação de 3 posts por semana em até 3 plataformas.</li>
                    <li>Campanhas Publicitárias Avançadas: Gestão de anúncios em várias plataformas (Google, Facebook, Instagram) com análise (orçamento das campanhas gerido por cliente).</li>
                    <li>Design Gráfico Premium: Criação de 2 banners, 1 flyers, cartão de visita, logotipo, 1 apresentação e Posts para redes sociais.</li>
                    <li>Landing Pages Personalizadas: Até 2 landing pages para campanhas espicificas.</li>
                </ul>
                <ul>
                    <li><strong>Objetivo:</strong> Fornecer soluções completas para empresas que desejam maximizar o impacto digital e obter resultados sólidos.</li>
                    <li><strong>Preço:</strong> 850-900€</li>
                </ul>
            </div>
        </div>

        <!-- Formulário de Envio de E-mail -->
        <div class="max-w-2xl mx-auto mt-8 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="p-5">
                <h5 class="mb-4 text-2xl font-bold text-gray-700 dark:text-white">Envie-nos um e-mail</h5>

                <!-- Formulário -->
                <form action="{{ route('enviar.email') }}" method="POST" class="space-y-4">
                    @csrf
                    <input type="hidden" name="plano" value="Premium"> <!-- Identifica o plano -->

                    <!-- Nome -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nome Cliente</label>
                        <input type="text" id="name" name="name" required class="w-full mt-1 px-3 py-2 border border-gray-300 rounded-lg dark:bg-gray-700 dark:text-white dark:border-gray-600 focus:outline-none focus:ring-2 focus:ring-yellow-500">
                    </div>
                
                    <!-- E-mail -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Seu E-mail</label>
                        <input type="email" id="email" name="email" required class="w-full mt-1 px-3 py-2 border border-gray-300 rounded-lg dark:bg-gray-700 dark:text-white dark:border-gray-600 focus:outline-none focus:ring-2 focus:ring-yellow-500">
                    </div>
                
                    <!-- Mensagem -->
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Mensagem</label>
                        <textarea id="message" name="message" rows="4" required class="w-full mt-1 px-3 py-2 border border-gray-300 rounded-lg dark:bg-gray-700 dark:text-white dark:border-gray-600 focus:outline-none focus:ring-2 focus:ring-yellow-500"></textarea>
                    </div>
                
                    <!-- Botão de Envio -->
                    <div>
                        <button type="submit" class="w-full py-2 px-4 text-white bg-yellow-600 rounded-lg hover:bg-yellow-700 focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:bg-yellow-500 dark:hover:bg-yellow-600 dark:focus:ring-yellow-800">
                            Enviar E-mail
                        </button>
                    </div>
                </form>
                    
            </div>
        </div>
    </div>
</x-layouts.app>
