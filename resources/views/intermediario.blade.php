<x-layouts.app>
    <div class="container mx-auto py-8 mt-28">
        <div class="max-w-2xl mx-auto bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="p-5">
                <h5 class="mb-2 text-3xl font-bold tracking-tight text-green-700 dark:text-green-300">Plano Intermediário</h5>
                <p class="mb-3 font-bold text-gray-700 dark:text-gray-400">
                    Para quem busca mais funcionalidades e flexibilidade:
                </p>
                <ul class="font-semibold list-disc list-inside mb-4 text-gray-700 dark:text-gray-400">
                    <li>Website Completo: Até 5 páginas, com funcionalidades como blog ou galeria.</li>
                    <li>Gestão de Redes Sociais: Publicação de 3 posts por semana em até 2 plataformas.</li>
                    <li>Campanhas Publicitárias: Gestão de anúncios em Google Ads ou redes sociais (orçamento das campanhas gerido por cliente).</li>
                    <li>Design Gráfico Intermédio: Criação de materiais como 2 banners, 1 flyer, cartão de visita e logotipo.</li>
                    <li>Landing Pages Otimizadas: Até 1 landing pages para campanhas específicas.</li>
                </ul>
                <ul>
                    <li><strong>Objetivo:</strong> Aumentar a visibilidade online e captar mais leads.</li>
                    <li><strong>Preço:</strong> 450-500€</li>
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
                    <input type="hidden" name="plano" value="Intermediario"> <!-- Identifica o plano -->

                    <!-- Nome -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nome Cliente</label>
                        <input type="text" id="name" name="name" required class="w-full mt-1 px-3 py-2 border border-gray-300 rounded-lg dark:bg-gray-700 dark:text-white dark:border-gray-600 focus:outline-none focus:ring-2 focus:ring-green-500">
                    </div>
                
                    <!-- E-mail -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Seu E-mail</label>
                        <input type="email" id="email" name="email" required class="w-full mt-1 px-3 py-2 border border-gray-300 rounded-lg dark:bg-gray-700 dark:text-white dark:border-gray-600 focus:outline-none focus:ring-2 focus:ring-green-500">
                    </div>
                
                    <!-- Mensagem -->
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Mensagem</label>
                        <textarea id="message" name="message" rows="4" required class="w-full mt-1 px-3 py-2 border border-gray-300 rounded-lg dark:bg-gray-700 dark:text-white dark:border-gray-600 focus:outline-none focus:ring-2 focus:ring-green-500"></textarea>
                    </div>
                
                    <!-- Botão de Envio -->
                    <div>
                        <button type="submit" class="w-full py-2 px-4 text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                            Enviar E-mail
                        </button>
                    </div>
                </form>
                    
            </div>
        </div>
    </div>
</x-layouts.app>
