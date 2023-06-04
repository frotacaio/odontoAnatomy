<template>
    <nav class=" border-gray-200 px-2 sm:px-4 py-2.5 bg-purple-800">
        <div class="container flex flex-wrap items-center justify-between mx-auto">
            <a href="https://flowbite.com/" class="flex items-center">
                <img src="../../img/odontologonobg.png" class="h-6 mr-3 sm:h-12" alt="Flowbite Logo" />
            </a>
            <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-purple-800">
                <li>
                <a href="#" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-teal-500 md:p-0" aria-current="page">Início</a>
                </li>
                <li>
                <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 ">Formulário</a>
                </li>
                <li>
                <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 ">Services</a>
                </li>
                <li>
                <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 ">Pricing</a>
                </li>
                <li>
                <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 ">Contact</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <div class="relative overflow-x-auto px-8 pt-12">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-300 border border-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nome
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Matrícula
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Acertos
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Erros
                    </th>
                    <th>Tentativa</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(listas, index) in lista" :key="index" class="bg-gray-100 border border-gray-400">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        {{ listas.nome_completo }}
                    </th>
                    <td class="px-6 py-4">
                        {{ listas.matricula }}
                    </td>
                    <td class="px-6 py-4">
                        {{ listas.acertos}}
                    </td>
                    <td class="px-6 py-4">
                        {{ listas.erros }}
                    </td>
                    <td class="px-6 py-4">
                        {{ listas.created_at }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>


<script setup>

const props = defineProps({
    lista: Object
})

</script>