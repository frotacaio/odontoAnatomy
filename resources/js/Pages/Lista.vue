<template>
    <NavComponent/>
    <div class="relative overflow-x-auto px-8 pt-12">
        <table class="w-full text-sm text-left text-teal-700">
            <thead class="text-xs text-teal-900 uppercase bg-purple-300 border border-gray-400">
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
                    <th>Data da Tentativa</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(listas, index) in lista" :key="index" class="bg-purple-100 border border-gray-400">
                    <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                        {{ listas.nome_completo }}
                    </th>
                    <td class="px-6 py-4">
                        {{ listas.matricula }}
                    </td>
                    <td class="px-8 py-4">
                        {{ listas.acertos}}
                    </td>
                    <td class="px-8 py-4">
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
import NavComponent from './NavComponent.vue';

const props = defineProps({
    lista: Object
})

</script>