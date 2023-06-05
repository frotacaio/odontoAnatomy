<template>
    <NavComponentVue/>
    <div id="sobre" >
        <h1 class="text-5xl pt-12 text-center text-purple-900 font-bold">Odontologia - UFC</h1>
        <p class="text-violet-100 text-xl text-center font-bold"> Serious Game na Ondontologia de Sobral</p>
        <div class="flex ml-6 mr-6">
            <p class="text-teal-300 pt-4 px-4 mx-4 pb-2 rounded-lg text-lg text-justify font-bold bg-gray-600 w-1/3">
                Serious game, também conhecido como jogo sério, é um termo usado para descrever jogos digitais que são desenvolvidos com o propósito principal de transmitir informações educacionais, treinar habilidades ou simular situações do mundo real.
        </p>
        <p class="text-teal-300 pt-4 px-4 mx-4 pb-2 rounded-lg text-lg text-justify font-bold bg-violet-800 w-1/3">
            Eles podem abordar uma ampla variedade de tópicos, como treinamento médico, gestão de negócios, resolução de problemas, habilidades de comunicação, sustentabilidade ambiental, conscientização social e muito mais.
        </p>
        <p class="text-teal-300 pt-4 px-4 mx-4 pb-2 rounded-lg text-lg text-justify font-bold bg-gray-600 w-1/3">
            Os serious games têm se mostrado uma ferramenta eficaz para melhorar a aprendizagem, reter informações, desenvolver habilidades práticas e promover mudanças comportamentais.         </p>
        </div>

        <div class="flex pr-4 pb-12">
            <div class="w-3/5">
                <img src="../../img/im1.png" class="px-16 py-6 w-full h-72" alt="">
            </div>
            <div class="text-indigo-300 w-2/5 text-justify font-bold text-lg ml-8 pt-4 pb-2 bg-teal-800 px-4 rounded-md  bg-opacity-80">
                O curso de Odontologia é uma graduação voltada para a formação de profissionais capacitados a realizar o diagnóstico, tratamento e prevenção de doenças e condições relacionadas à saúde bucal.
                Nesse contexto, os serious games podem desempenhar um papel significativo na aprendizagem em Odontologia, como por exemplo: Prática e simulação, Feedback imediato, Tomada de decisão clínica, Acesso a recursos educacionais, Engajamento e motivação
            </div>

        </div>

    </div>


</template>


<script setup>
import NavComponentVue from "./NavComponent.vue";

</script>

<style scoped>
    #sobre{
        background-image: url("../../img/bg2.png");
    }
</style>