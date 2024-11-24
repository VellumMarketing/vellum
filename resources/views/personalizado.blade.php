<x-layouts.app>
    <div class="container mx-auto py-8 mt-28">
        <div class="max-w-2xl mx-auto bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="p-5">
                <h5 class="mb-2 text-3xl font-bold tracking-tight text-red-700 dark:text-red-300">Plano Personalizado</h5>
                <p class="mb-3 font-bold text-gray-700 dark:text-gray-400">
                    Ideal para pequenas empresas ou startups que estão a começar no mundo digital.
                </p>
                <ul class="font-semibold list-disc list-inside mb-4 text-gray-700 dark:text-gray-400">
                    <li>Landing Pages</li>
                    <li>Gestão de Redes Sociais</li>
                    <li>Design Gráficos</li>
                    <li>Website Completo</li>
                    <li>Campanhas Publicitárias</li>
                </ul>
                <ul>
                    <li><strong>Objetivo:</strong> Fornecer a oprtunidade de criar o seu próprio plano.</li>
                    <li><strong>Preço:</strong> Personalizado</li>
                </ul>
            </div>
        </div>
        
        <!-- Formulário de Envio de E-mail -->
        <div class="max-w-2xl mx-auto mt-8 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="p-5">
                <h5 class="mb-4 text-2xl font-bold text-gray-700 dark:text-white">Envie-nos um e-mail</h5>
                <form action="{{ route('enviar.email') }}" method="POST" class="space-y-4">
                    @csrf
                    <input type="hidden" name="plano" value="personalizado"> <!-- Identifica o plano -->

                    <!-- Nome -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nome Cliente</label>
                        <input type="text" id="name" name="name" required class="w-full mt-1 px-3 py-2 border border-gray-300 rounded-lg dark:bg-gray-700 dark:text-white dark:border-gray-600 focus:outline-none focus:ring-2 focus:ring-red-500">
                    </div>
                
                    <!-- E-mail -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Seu E-mail</label>
                        <input type="email" id="email" name="email" required class="w-full mt-1 px-3 py-2 border border-gray-300 rounded-lg dark:bg-gray-700 dark:text-white dark:border-gray-600 focus:outline-none focus:ring-2 focus:ring-red-500">
                    </div>
                
                    <!-- Mensagem -->
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Pedido (Escreva o que deseja)</label>
                        <textarea id="message" name="message" rows="4" required class="w-full mt-1 px-3 py-2 border border-gray-300 rounded-lg dark:bg-gray-700 dark:text-white dark:border-gray-600 focus:outline-none focus:ring-2 focus:ring-red-500"></textarea>
                    </div>
                
                    <!-- Botão de Envio -->
                    <div>
                        <button type="submit" class="w-full py-2 px-4 text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                            Enviar E-mail
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layouts.app>




