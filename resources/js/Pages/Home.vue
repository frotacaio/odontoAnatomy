<template>    

    <NavComponent/>

    <!-- End Navbar -->
    <h3 class="block py-2 text-teal-500 rounded text-lg text-center">Bem vindo, {{aluno.nome_completo}} - sua pontuação atual é {{ cont }}</h3>
    <div class="my-6 mx-8" >
        <a-steps :current="current">
            <a-step v-for="item in steps" :key="item.title" :title="item.title" />
        </a-steps>
        
        <div id="altura" class="mt-4rounded-md border-dashed bg-no-repeat border-1 bg-local block  border-gray-100 border-l-2 ml-8 mr-8">
            <img class="ml-auto mr-auto h-full w-10/12"  :src="steps[current].content"/>
            <!-------------------- IMAGEM 01 --------------->
            <div class="flex" id="translate" v-if="steps[current].img==1" >
                <div class="w-1/5">
                    <a-popover title="Resposta" trigger="hover" placement="bottom" class="ml-28 mt-8" >
                        <template #content>
                            <a-input-group compact>
                                <a-input v-model="respostaUm" @input="um" name="respostaUm" id="respostaUm"/>
                            </a-input-group>
                        </template>
                        <a-button class="text-sm">1 - Responda</a-button>
                    </a-popover>
                    <div v-if="resp1Comp == 'resp1Correto'">
                      <p class="text-xs text-green-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ valUm }}</p>
                      <p class="text-xs text-blue-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ props.resultado[0].resultado }}</p>
                    </div>

                    <div v-if="resp1Comp == 'resp1Errado'">
                      <p class="text-xs text-red-600 font-bold  bg-gray-300 rounded-lg mx-1 my-1">{{ valUm }}</p>
                      <p class="text-xs text-blue-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ props.resultado[0].resultado }}</p>
                    </div>
                </div>
            
                <div class="w-1/5">
                    <a-popover title="Resposta" trigger="hover" placement="bottom" class="ml-20 mt-96" >
                        <template #content>
                            <a-input-group compact>
                                <a-input v-model="respostaDois" @input="dois" name="respostaDois" id="respostaDois"/>
                            </a-input-group>
                        </template>
                        <a-button>2 - Responda</a-button>
                    </a-popover>
                    <div v-if="resp2Comp == 'resp2Correto'">
                      <p class="text-xs text-green-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ valDois }}</p>
                      <p class="text-xs text-blue-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ props.resultado[1].resultado }}</p>
                    </div>

                    <div v-if="resp2Comp == 'resp2Errado'">
                      <p class="text-xs text-red-600 font-bold  bg-gray-300 rounded-lg mx-1 my-1">{{ valDois }}</p>
                      <p class="text-xs text-blue-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ props.resultado[1].resultado }}</p>
                    </div>
                </div>
                <div class="w-1/5">
                </div>
                <div class="w-1/5">
                    <a-popover title="Resposta" trigger="hover" placement="bottom" class="mt-24" >
                        <template #content>
                            <a-input-group compact>
                                <a-input v-model="respostaTres" @input="tres" name="respostaTres" id="respostaTres"/>
                            </a-input-group>
                        </template>
                        <a-button>3 - Responda</a-button>
                    </a-popover>
                    <div v-if="resp3Comp == 'resp3Correto'">
                      <p class="text-xs text-green-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ valTres }}</p>
                      <p class="text-xs text-blue-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ props.resultado[2].resultado }}</p>
                    </div>

                    <div v-if="resp3Comp == 'resp3Errado'">
                      <p class="text-xs text-red-600 font-bold  bg-gray-300 rounded-lg mx-1 my-1">{{ valTres }}</p>
                      <p class="text-xs text-blue-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ props.resultado[2].resultado }}</p>
                    </div>
                </div>
                <div class="w-1/5">
                    <div class="h-1/6">
                        <a-popover title="Resposta" trigger="hover" placement="bottom" class="ml-3" >
                            <template #content>
                                <a-input-group compact>
                                    <a-input v-model="respostaQuatro" @input="quatro" name="respostaQuatro" id="respostaQuatro"/>
                                </a-input-group>
                            </template>
                            <a-button>4 - Responda</a-button>
                        </a-popover>
                        <div v-if="resp4Comp == 'resp4Correto'">
                            <p class="text-xs text-green-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ valQuatro }}</p>
                            <p class="text-xs text-blue-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ props.resultado[3].resultado }}</p>
                        </div>

                        <div v-if="resp4Comp == 'resp4Errado'">
                            <p class="text-xs text-red-600 font-bold  bg-gray-300 rounded-lg mx-1 my-1">{{ valQuatro }}</p>
                            <p class="text-xs text-blue-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ props.resultado[3].resultado }}</p>
                        </div>
                    </div>
                    <div class="h-5/6">
                        <a-popover title="Resposta" trigger="hover" placement="bottom" class="mt-4" >
                            <template #content>
                                <a-input-group compact>
                                    <a-input v-model="respostaCinco" @input="cinco" name="respostaCinco" id="respostaCinco"/>
                                </a-input-group>
                            </template>
                            <a-button>5 - Responda</a-button>
                        </a-popover>
                        <div v-if="resp5Comp == 'resp5Correto'">
                            <p class="text-xs text-green-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ valCinco }}</p>
                            <p class="text-xs text-blue-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ props.resultado[4].resultado }}</p>
                        </div>

                        <div v-if="resp5Comp == 'resp5Errado'">
                            <p class="text-xs text-red-600 font-bold  bg-gray-300 rounded-lg mx-1 my-1">{{ valCinco}}</p>
                            <p class="text-xs text-blue-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ props.resultado[4].resultado }}</p>
                        </div>
                    </div>
                </div>
      
            </div>
                <!-------------------- IMAGEM 02 --------------->
            <div class="flex" id="translate" v-if="steps[current].img==2">
                <div class="w-1/5">
                    <a-popover title="Resposta" trigger="hover" placement="bottom" class="ml-28 mt-8" >
                        <template #content>
                            <a-input-group compact>
                                <a-input v-model="respostaSeis" @input="seis" name="respostaSeis" id="respostaSeis"/>
                            </a-input-group>
                        </template>
                        <a-button class="text-sm">6 - Responda</a-button>
                    </a-popover>
                    <div v-if="resp6Comp == 'resp6Correto'">
                        <p class="text-xs text-green-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ valSeis }}</p>
                        <p class="text-xs text-blue-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ props.resultado[5].resultado }}</p>
                    </div>

                    <div v-if="resp6Comp == 'resp6Errado'">
                        <p class="text-xs text-red-600 font-bold  bg-gray-300 rounded-lg mx-1 my-1">{{ valSeis}}</p>
                        <p class="text-xs text-blue-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ props.resultado[5].resultado }}</p>
                    </div>
                </div>
            
                <div class="w-1/5">
                    <a-popover title="Resposta" trigger="hover" placement="bottom" class="ml-20 mt-96" >
                        <template #content>
                            <a-input-group compact>
                                <a-input v-model="respostaSete" @input="sete" name="respostaSete" id="respostaSete"/>
                            </a-input-group>
                        </template>
                        <a-button>7 - Responda</a-button>
                    </a-popover>
                    <div v-if="resp7Comp == 'resp7Correto'">
                        <p class="text-xs text-green-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ valSete }}</p>
                        <p class="text-xs text-blue-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ props.resultado[6].resultado }}</p>
                    </div>

                    <div v-if="resp7Comp == 'resp7Errado'">
                        <p class="text-xs text-red-600 font-bold  bg-gray-300 rounded-lg mx-1 my-1">{{ valSete}}</p>
                        <p class="text-xs text-blue-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ props.resultado[6].resultado }}</p>
                    </div>
                </div>
                <div class="w-1/5">
                    <a-popover title="Resposta" trigger="hover" placement="bottom" class="mt-24 ml-20" >
                        <template #content>
                            <a-input-group compact>
                                <a-input v-model="respostaOito" @input="oito" name="respostaOito" id="respostaOito"/>
                            </a-input-group>
                        </template>
                        <a-button>8 - Responda</a-button>
                    </a-popover>
                    <div v-if="resp8Comp == 'resp8Correto'">
                        <p class="text-xs text-green-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ valOito }}</p>
                        <p class="text-xs text-blue-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ props.resultado[7].resultado }}</p>
                    </div>

                    <div v-if="resp8Comp == 'resp8Errado'">
                        <p class="text-xs text-red-600 font-bold  bg-gray-300 rounded-lg mx-1 my-1">{{ valOito}}</p>
                        <p class="text-xs text-blue-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ props.resultado[7].resultado }}</p>
                    </div>
                </div>
                <div class="w-1/5">
                    <a-popover title="Resposta" trigger="hover" placement="bottom" class="mt-24 ml-28" >
                        <template #content>
                            <a-input-group compact>
                                <a-input v-model="respostaNove" @input="nove" name="respostaNove" id="respostaNove"/>
                            </a-input-group>
                        </template>
                        <a-button>9 - Responda</a-button>
                    </a-popover>
                    <div v-if="resp9Comp == 'resp9Correto'">
                        <p class="text-xs text-green-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ valNove }}</p>
                        <p class="text-xs text-blue-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ props.resultado[8].resultado }}</p>
                    </div>

                    <div v-if="resp9Comp == 'resp9Errado'">
                        <p class="text-xs text-red-600 font-bold  bg-gray-300 rounded-lg mx-1 my-1">{{ valNove}}</p>
                        <p class="text-xs text-blue-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ props.resultado[8].resultado }}</p>
                    </div>
                </div>
            </div>
            <!-------------------- IMAGEM 03 --------------->
            <div class="flex" id="translate" v-if="steps[current].img==3">
                <div class="w-2/7">
                    <div class="h-1/6">
                        <a-popover title="Resposta" trigger="hover" placement="bottom" class="ml-28 mt-80" >
                            <template #content>
                                <a-input-group compact>
                                    <a-input v-model="respostaDez" @input="dez" name="respostaDez" id="respostaDez"/>
                                </a-input-group>
                            </template>
                            <a-button class="text-sm">10 - Responda</a-button>
                        </a-popover>
                        <div v-if="resp10Comp == 'resp10Correto'">
                            <p class="text-xs text-green-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ valDez }}</p>
                            <p class="text-xs text-blue-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ props.resultado[9].resultado }}</p>
                        </div>

                        <div v-if="resp10Comp == 'resp10Errado'">
                            <p class="text-xs text-red-600 font-bold  bg-gray-300 rounded-lg mx-1 my-1">{{ valDez}}</p>
                            <p class="text-xs text-blue-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ props.resultado[9].resultado }}</p>
                        </div>
                    </div>
                    <div class="h-5/6">
                        <div v-if="resp11Comp == 'resp11Correto'">
                            <p class="text-xs text-green-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ valOnze }}</p>
                            <p class="text-xs text-blue-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ props.resultado[10].resultado }}</p>
                        </div>

                        <div v-if="resp11Comp == 'resp11Errado'">
                            <p class="text-xs text-red-600 font-bold  bg-gray-300 rounded-lg mx-1 my-1">{{ valOnze }}</p>
                            <p class="text-xs text-blue-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ props.resultado[10].resultado }}</p>
                        </div>
                        <a-popover title="Resposta" trigger="hover" placement="top" class="ml-28 mb-72" >
                            <template #content>
                                <a-input-group compact>
                                    <a-input v-model="respostaOnze" @input="onze" name="respostaOnze" id="respostaOnze"/>
                                </a-input-group>
                            </template>
                            <a-button>11 - Responda</a-button>
                        </a-popover>

                    </div>
                </div>
                <div class="w-1/7">
                </div>
                <div class="w-1/7">
                    <a-popover title="Resposta" trigger="hover" placement="bottom" class="mt-36 ml-36" >
                        <template #content>
                            <a-input-group compact>
                                <a-input v-model="respostaDoze" @input="doze" name="respostaDoze" id="respostaDoze"/>
                            </a-input-group>
                        </template>
                        <a-button>12 - Responda</a-button>
                    </a-popover>
                    <div v-if="resp12Comp == 'resp12Correto'">
                        <p class="text-xs text-green-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ valDoze }}</p>
                        <p class="text-xs text-blue-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ props.resultado[11].resultado }}</p>
                    </div>

                    <div v-if="resp12Comp == 'resp12Errado'">
                        <p class="text-xs text-red-600 font-bold  bg-gray-300 rounded-lg mx-1 my-1">{{ valDoze}}</p>
                        <p class="text-xs text-blue-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ props.resultado[11].resultado }}</p>
                    </div>
                </div>
                <div class="w-1/7">
                    <a-popover title="Resposta" trigger="hover" placement="bottom" class="mt-0 ml-14" >
                        <template #content>
                            <a-input-group compact>
                                <a-input v-model="respostaTreze" @input="treze" name="respostaTreza" id="respostaTreza"/>
                            </a-input-group>
                        </template>
                        <a-button>13 - Responda</a-button>
                    </a-popover>
                    <div v-if="resp13Comp == 'resp13Correto'">
                        <p class="text-xs text-green-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ valTreze }}</p>
                        <p class="text-xs text-blue-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ props.resultado[12].resultado }}</p>
                    </div>

                    <div v-if="resp13Comp == 'resp13Errado'">
                        <p class="text-xs text-red-600 font-bold  bg-gray-300 rounded-lg mx-1 my-1">{{ valTreze }}</p>
                        <p class="text-xs text-blue-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ props.resultado[12].resultado }}</p>
                    </div>
                </div>
                <div class="w-1/7">
                    <a-popover title="Resposta" trigger="hover" placement="bottom" class="mt-16" >
                        <template #content>
                            <a-input-group compact>
                                <a-input v-model="respostaQuatorze" @input="quatorze" name="respostaQuatorze" id="respostaQuatorze"/>
                            </a-input-group>
                        </template>
                        <a-button>14 - Responda</a-button>
                    </a-popover>
                    <div v-if="resp14Comp == 'resp14Correto'">
                        <p class="text-xs text-green-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ valQuatorze }}</p>
                        <p class="text-xs text-blue-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ props.resultado[13].resultado }}</p>
                    </div>

                    <div v-if="resp14Comp == 'resp14Errado'">
                        <p class="text-xs text-red-600 font-bold  bg-gray-300 rounded-lg mx-1 my-1">{{ valQuatorze}}</p>
                        <p class="text-xs text-blue-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ props.resultado[13].resultado }}</p>
                    </div>
                </div>
                <div class="w-1/7">
                    <a-popover title="Resposta" trigger="hover" placement="bottom" class="mt-40 ml-28" >
                        <template #content>
                            <a-input-group compact>
                                <a-input v-model="respostaQuinze" @input="quinze" name="respostaQuinze" id="respostaQuinze"/>
                            </a-input-group>
                        </template>
                        <a-button>15 - Responda</a-button>
                    </a-popover>
                    <div v-if="resp15Comp == 'resp15Correto'">
                        <p class="text-xs text-green-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ valQuinze }}</p>
                        <p class="text-xs text-blue-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ props.resultado[14].resultado }}</p>
                    </div>

                    <div v-if="resp15Comp == 'resp15Errado'">
                        <p class="text-xs text-red-600 font-bold  bg-gray-300 rounded-lg mx-1 my-1">{{ valQuinze}}</p>
                        <p class="text-xs text-blue-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ props.resultado[14].resultado }}</p>
                    </div>
                </div>
            </div>
            <!-------------------- IMAGEM 04 --------------->
            <div class="flex" id="translate" v-if="steps[current].img==4">
                <div class="w-1/5">
                </div>
                <div class="w-1/5">
                </div>
                <div class="w-1/5">
                    <a-popover title="Resposta" trigger="hover" placement="top" class="mt-96 ml-0" >
                        <template #content>
                            <a-input-group compact>
                                <a-input v-model="respostaDezesseis" @input="dezesseis" name="respostaDezesseis" id="respostaQuinze"/>
                            </a-input-group>
                        </template>
                        <a-button>16 - Responda</a-button>
                    </a-popover>
                    <div v-if="resp16Comp == 'resp16Correto'">
                        <p class="text-xs text-green-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ valDezesseis }}</p>
                        <p class="text-xs text-blue-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ props.resultado[15].resultado }}</p>
                    </div>

                    <div v-if="resp16Comp == 'resp16Errado'">
                        <p class="text-xs text-red-600 font-bold  bg-gray-300 rounded-lg mx-1 my-1">{{ valDezesseis}}</p>
                        <p class="text-xs text-blue-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ props.resultado[15].resultado }}</p>
                    </div>
                </div>
                <div class="w-1/5">
                    <a-popover title="Resposta" trigger="hover" placement="top" class="mt-96 ml-36" >
                        <template #content>
                            <a-input-group compact>
                                <a-input v-model="respostaDezessete" @input="dezessete" name="respostaDezessete" id="respostaDezessete"/>
                            </a-input-group>
                        </template>
                        <a-button>17 - Responda</a-button>
                    </a-popover>
                    <div v-if="resp17Comp == 'resp17Correto'">
                        <p class="text-xs text-green-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ valDezessete }}</p>
                        <p class="text-xs text-blue-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ props.resultado[16].resultado }}</p>
                    </div>

                    <div v-if="resp17Comp == 'resp17Errado'">
                        <p class="text-xs text-red-600 font-bold  bg-gray-300 rounded-lg mx-1 my-1">{{ valDezessete}}</p>
                        <p class="text-xs text-blue-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ props.resultado[16].resultado }}</p>
                    </div>
                </div>
                <div class="w-1/5">
                    <a-popover title="Resposta" trigger="hover" placement="bottom" class="mt-6 ml-10" >
                        <template #content>
                            <a-input-group compact>
                                <a-input v-model="respostaDezoito" @input="dezoito" name="respostaDezoito" id="respostaDezoito"/>
                            </a-input-group>
                        </template>
                        <a-button>18 - Responda</a-button>
                    </a-popover>
                    <div v-if="resp18Comp == 'resp18Correto'">
                        <p class="text-xs text-green-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ valDezoito }}</p>
                        <p class="text-xs text-blue-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ props.resultado[17].resultado }}</p>
                    </div>

                    <div v-if="resp18Comp == 'resp18Errado'">
                        <p class="text-xs text-red-600 font-bold  bg-gray-300 rounded-lg mx-1 my-1">{{ valDezoito}}</p>
                        <p class="text-xs text-blue-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ props.resultado[17].resultado }}</p>
                    </div>
                </div>
            </div>
            <!-------------------- IMAGEM 05 --------------->
            <div class="flex" id="translate" v-if="steps[current].img==5">
                <div class="w-1/5">
                </div>
                <div class="w-1/5">
                </div>
                <div class="w-1/5">
                </div>
                <div class="w-1/5">
                    <a-popover title="Resposta" trigger="hover" placement="bottom" class="mt-0 ml-24" >
                        <template #content>
                            <a-input-group compact>
                                <a-input v-model="respostaDezenove" @input="dezenove" name="respostaDezenove" id="respostaDezenove"/>
                            </a-input-group>
                        </template>
                        <a-button>19 - Responda</a-button>
                    </a-popover>
                    <div v-if="resp19Comp == 'resp19Correto'">
                        <p class="text-xs text-green-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ valDezenove }}</p>
                        <p class="text-xs text-blue-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ props.resultado[18].resultado }}</p>
                    </div>

                    <div v-if="resp19Comp == 'resp19Errado'">
                        <p class="text-xs text-red-600 font-bold  bg-gray-300 rounded-lg mx-1 my-1">{{ valDezenove}}</p>
                        <p class="text-xs text-blue-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ props.resultado[18].resultado }}</p>
                    </div>
                </div>
                <div class="w-1/5">
                </div>
            </div>
            <!-------------------- IMAGEM 06 --------------->
            <div class="flex" id="translate" v-if="steps[current].img==6">
                <div class="w-1/5">
                </div>
                <div class="w-1/5">
                    <a-popover title="Resposta" trigger="hover" placement="bottom" class="mt-48 ml-24" >
                        <template #content>
                            <a-input-group compact>
                                <a-input v-model="respostaVinte" @input="vinte" name="respostaVinte" id="respostaVinte"/>
                            </a-input-group>
                        </template>
                        <a-button>20 - Responda</a-button>
                    </a-popover>
                    <div v-if="resp20Comp == 'resp20Correto'">
                        <p class="text-xs text-green-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ valVinte }}</p>
                        <p class="text-xs text-blue-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ props.resultado[19].resultado }}</p>
                    </div>

                    <div v-if="resp20Comp == 'resp20Errado'">
                        <p class="text-xs text-red-600 font-bold  bg-gray-300 rounded-lg mx-1 my-1">{{ valVinte}}</p>
                        <p class="text-xs text-blue-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ props.resultado[19].resultado }}</p>
                    </div>
                </div>
                <div class="w-1/5">
                </div>
                <div class="w-1/5">
                    <a-popover title="Resposta" trigger="hover" placement="bottom" class="mt-44 ml-0" >
                        <template #content>
                            <a-input-group compact>
                                <a-input v-model="respostaVinte1" @input="vinte1" name="respostaVinte1" id="respostaDezenove"/>
                            </a-input-group>
                        </template>
                        <a-button>21 - Responda</a-button>
                    </a-popover>
                    <div v-if="resp21Comp == 'resp21Correto'">
                        <p class="text-xs text-green-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ valVinte1 }}</p>
                        <p class="text-xs text-blue-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ props.resultado[20].resultado }}</p>
                    </div>

                    <div v-if="resp21Comp == 'resp21Errado'">
                        <p class="text-xs text-red-600 font-bold  bg-gray-300 rounded-lg mx-1 my-1">{{ valVinte1}}</p>
                        <p class="text-xs text-blue-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ props.resultado[20].resultado }}</p>
                    </div>
                </div>
                <div class="w-1/5">
                </div>
            </div>
            <!-------------------- IMAGEM 07 --------------->
            <div class="flex" id="translate" v-if="steps[current].img==7">
                <div class="w-1/5">
                    <a-popover title="Resposta" trigger="hover" placement="bottom" class="mt-20 ml-40" >
                        <template #content>
                            <a-input-group compact>
                                <a-input v-model="respostaVinte2" @input="vinte2" name="respostaVinte2" id="respostaVinte2"/>
                            </a-input-group>
                        </template>
                        <a-button>22 - Responda</a-button>
                    </a-popover>
                    <div v-if="resp22Comp == 'resp22Correto'">
                        <p class="text-xs text-green-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ valVinte2 }}</p>
                        <p class="text-xs text-blue-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ props.resultado[21].resultado }}</p>
                    </div>

                    <div v-if="resp22Comp == 'resp22Errado'">
                        <p class="text-xs text-red-600 font-bold  bg-gray-300 rounded-lg mx-1 my-1">{{ valVinte2}}</p>
                        <p class="text-xs text-blue-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ props.resultado[21].resultado }}</p>
                    </div>
                </div>
                <div class="w-1/5">
                </div>
                <div class="w-1/5">
                </div>
                <div class="w-1/5">
                    <a-popover title="Resposta" trigger="hover" placement="bottom" class="mt-8" >
                        <template #content>
                            <a-input-group compact>
                                <a-input v-model="respostaVinte3" @input="vinte3" name="respostaVinte3" id="respostaVinte3"/>
                            </a-input-group>
                        </template>
                        <a-button>23 - Responda</a-button>
                    </a-popover>
                    <div v-if="resp23Comp == 'resp23Correto'">
                        <p class="text-xs text-green-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ valVinte3 }}</p>
                        <p class="text-xs text-blue-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ props.resultado[22].resultado }}</p>
                    </div>

                    <div v-if="resp23Comp == 'resp23Errado'">
                        <p class="text-xs text-red-600 font-bold  bg-gray-300 rounded-lg mx-1 my-1">{{ valVinte3}}</p>
                        <p class="text-xs text-blue-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ props.resultado[22].resultado }}</p>
                    </div>
                </div>
                <div class="w-1/5">
                    <a-popover title="Resposta" trigger="hover" placement="bottom" class="mt-52" >
                        <template #content>
                            <a-input-group compact>
                                <a-input v-model="respostaVinte4" @input="vinte4" name="respostaVinte4" id="respostaVinte4"/>
                            </a-input-group>
                        </template>
                        <a-button>24 - Responda</a-button>
                    </a-popover>
                    <div v-if="resp24Comp == 'resp24Correto'">
                        <p class="text-xs text-green-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ valVinte4 }}</p>
                        <p class="text-xs text-blue-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ props.resultado[23].resultado }}</p>
                    </div>

                    <div v-if="resp24Comp == 'resp24Errado'">
                        <p class="text-xs text-red-600 font-bold  bg-gray-300 rounded-lg mx-1 my-1">{{ valVinte4}}</p>
                        <p class="text-xs text-blue-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ props.resultado[23].resultado }}</p>
                    </div>
                </div>
            </div>
                        <!-------------------- IMAGEM 08 --------------->
            <div class="flex" id="translate" v-if="steps[current].img==8">
                <div class="w-1/5">
                </div>
                <div class="w-1/5">
                    <a-popover title="Resposta" trigger="hover" placement="bottom" class="mt-0 ml-64" >
                        <template #content>
                            <a-input-group compact>
                                <a-input v-model="respostaVinte5" @input="vinte5" name="respostaVinte5" id="respostaVinte5"/>
                            </a-input-group>
                        </template>
                        <a-button>25 - Responda</a-button>
                    </a-popover>

                    <a-popover title="Resposta" trigger="hover" placement="bottom" class="mt-4 ml-24" >
                        <template #content>
                            <a-input-group compact>
                                <a-input v-model="respostaVinte6" @input="vinte6" name="respostaVinte6" id="respostaVinte6"/>
                            </a-input-group>
                        </template>
                        <a-button>26 - Responda</a-button>
                    </a-popover>
                    <div v-if="resp26Comp == 'resp26Correto'">
                        <p class="text-xs text-green-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ valVinte6 }}</p>
                        <p class="text-xs text-blue-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ props.resultado[25].resultado }}</p>
                    </div>

                    <div v-if="resp26Comp == 'resp26Errado'">
                        <p class="text-xs text-red-600 font-bold  bg-gray-300 rounded-lg mx-1 my-1">{{ valVinte6}}</p>
                        <p class="text-xs text-blue-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ props.resultado[25].resultado }}</p>
                    </div>
                </div>
                <div class="w-1/5">
                </div>
                <div class="w-1/5">
                    <div v-if="resp25Comp == 'resp25Correto'">
                        <p class="text-xs text-green-600 font-bold bg-gray-300 rounded-lg mx-1 my-1 ml-8 mt-8">{{ valVinte5 }}</p>
                        <p class="text-xs text-blue-600 font-bold bg-gray-300 rounded-lg mx-1 my-1 ml-8">{{ props.resultado[24].resultado }}</p>
                    </div>

                    <div v-if="resp25Comp == 'resp25Errado'">
                        <p class="text-xs text-red-600 font-bold  bg-gray-300 rounded-lg mx-1 my-1 ml-8 mt-8">{{ valVinte5}}</p>
                        <p class="text-xs text-blue-600 font-bold bg-gray-300 rounded-lg mx-1 my-1 ml-8">{{ props.resultado[24].resultado }}</p>
                    </div>
                </div>
                <div class="w-1/5">
                </div>
            </div>
                <!-------------------- IMAGEM 09 --------------->
            <div class="flex" id="translate" v-if="steps[current].img==9">
                <div class="w-1/5">
                </div>
                <div class="w-1/5">
                </div>
                <div class="w-1/5">
                    <a-popover title="Resposta" trigger="hover" placement="bottom" class="mt-44 ml-60" >
                        <template #content>
                            <a-input-group compact>
                                <a-input v-model="respostaVinte7" @input="vinte7" name="respostaVinte7" id="respostaVinte7"/>
                            </a-input-group>
                        </template>
                        <a-button>27 - Responda</a-button>
                    </a-popover>
                </div>
                <div class="w-1/5">
                </div>
                <div class="w-1/5">
                    <div v-if="resp27Comp == 'resp27Correto'">
                        <p class="text-xs text-green-600 font-bold bg-gray-300 rounded-lg mx-1 my-1 mt-32">{{ valVinte7 }}</p>
                        <p class="text-xs text-blue-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ props.resultado[26].resultado }}</p>
                    </div>

                    <div v-if="resp27Comp == 'resp27Errado'">
                        <p class="text-xs text-red-600 font-bold  bg-gray-300 rounded-lg mx-1 my-1 mt-32">{{ valVinte7}}</p>
                        <p class="text-xs text-blue-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ props.resultado[26].resultado }}</p>
                    </div>
                </div>
            </div>
                        <!-------------------- IMAGEM 10 --------------->
            <div class="flex" id="translate" v-if="steps[current].img==10">
                <div class="w-1/5">
                </div>
                <div class="w-1/5">
                </div>
                <div class="w-1/5">
                    <a-popover title="Resposta" trigger="hover" placement="bottom" class="mt-28 ml-20" >
                        <template #content>
                            <a-input-group compact>
                                <a-input v-model="respostaVinte8" @input="vinte8" name="respostaVinte8" id="respostaVinte8"/>
                            </a-input-group>
                        </template>
                        <a-button>28 - Responda</a-button>
                    </a-popover>
                    <div v-if="resp28Comp == 'resp28Correto'">
                        <p class="text-xs text-green-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ valVinte8 }}</p>
                        <p class="text-xs text-blue-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ props.resultado[27].resultado }}</p>
                    </div>

                    <div v-if="resp28Comp == 'resp28Errado'">
                        <p class="text-xs text-red-600 font-bold  bg-gray-300 rounded-lg mx-1 my-1">{{ valVinte8}}</p>
                        <p class="text-xs text-blue-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ props.resultado[27].resultado }}</p>
                    </div>
                </div>
                <div class="w-1/5">
                </div>
                <div class="w-1/5">
                </div>
            </div>
                    <!-------------------- IMAGEM 11 --------------->
            <div class="flex" id="translate" v-if="steps[current].img==11">
                <div class="w-1/5">
                </div>
                <div class="w-1/5">
                    <a-popover title="Resposta" trigger="hover" placement="bottom" class="mt-32 ml-20" >
                        <template #content>
                            <a-input-group compact>
                                <a-input v-model="respostaVinte9" @input="vinte9" name="respostaVinte9" id="respostaVinte9"/>
                            </a-input-group>
                        </template>
                        <a-button>29 - Responda</a-button>
                    </a-popover>
                    <div v-if="resp29Comp == 'resp29Correto'">
                        <p class="text-xs text-green-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ valVinte9 }}</p>
                        <p class="text-xs text-blue-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ props.resultado[28].resultado }}</p>
                    </div>

                    <div v-if="resp29Comp == 'resp29Errado'">
                        <p class="text-xs text-red-600 font-bold  bg-gray-300 rounded-lg mx-1 my-1">{{ valVinte9}}</p>
                        <p class="text-xs text-blue-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ props.resultado[28].resultado }}</p>
                    </div>
                </div>
                <div class="w-1/5">
                    <a-popover title="Resposta" trigger="hover" placement="top" class="mt-24 ml-14" >
                        <template #content>
                            <a-input-group compact>
                                <a-input v-model="respostaTrinta" @input="trinta" name="respostaTrinta" id="respostaTrinta"/>
                            </a-input-group>
                        </template>
                        <a-button>30 - Responda</a-button>
                    </a-popover>
                    <div v-if="resp30Comp == 'resp30Correto'">
                        <p class="text-xs text-green-600 font-bold bg-gray-300 rounded-lg mx-1 my-1 ml-8">{{ valTrinta }}</p>
                        <p class="text-xs text-blue-600 font-bold bg-gray-300 rounded-lg mx-1 my-1 ml-8">{{ props.resultado[29].resultado }}</p>
                    </div>

                    <div v-if="resp30Comp == 'resp30Errado'">
                        <p class="text-xs text-red-600 font-bold  bg-gray-300 rounded-lg mx-1 my-1 ml-8">{{ valTrinta}}</p>
                        <p class="text-xs text-blue-600 font-bold bg-gray-300 rounded-lg mx-1 my-1 ml-8">{{ props.resultado[29].resultado }}</p>
                    </div>
                </div>
                <div class="w-1/5">
                </div>
                <div class="w-1/5">
                    <a-popover title="Resposta" trigger="hover" placement="bottom" class="mt-44 ml-4" >
                        <template #content>
                            <a-input-group compact>
                                <a-input v-model="respostaTrinta1" @input="trinta1" name="respostaTrinta1" id="respostaTrinta1"/>
                            </a-input-group>
                        </template>
                        <a-button>31 - Responda</a-button>
                    </a-popover>
                    <div v-if="resp31Comp == 'resp31Correto'">
                        <p class="text-xs text-green-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ valTrinta1 }}</p>
                        <p class="text-xs text-blue-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ props.resultado[30].resultado }}</p>
                    </div>

                    <div v-if="resp31Comp == 'resp31Errado'">
                        <p class="text-xs text-red-600 font-bold  bg-gray-300 rounded-lg mx-1 my-1">{{ valTrinta1}}</p>
                        <p class="text-xs text-blue-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ props.resultado[30].resultado }}</p>
                    </div>
                </div>
            </div>
                <!-------------------- IMAGEM 12 --------------->
            <div class="flex" id="translate" v-if="steps[current].img==12">
                <div class="w-1/5">
                </div>
                <div class="w-1/5">
                </div>
                <div class="w-1/5">
                </div>
                <div class="w-1/5">
                    <a-popover title="Resposta" trigger="hover" placement="top" class="mt-40 ml-32" >
                        <template #content>
                            <a-input-group compact>
                                <a-input v-model="respostaTrinta2" @input="trinta2" name="respostaTrinta2" id="respostaTrinta2"/>
                            </a-input-group>
                        </template>
                        <a-button>32 - Responda</a-button>
                    </a-popover>
                    <div v-if="resp32Comp == 'resp32Correto'">
                        <p class="text-xs text-green-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ valTrinta2 }}</p>
                        <p class="text-xs text-blue-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ props.resultado[31].resultado }}</p>
                    </div>

                    <div v-if="resp32Comp == 'resp32Errado'">
                        <p class="text-xs text-red-600 font-bold  bg-gray-300 rounded-lg mx-1 my-1">{{ valTrinta2}}</p>
                        <p class="text-xs text-blue-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ props.resultado[31].resultado }}</p>
                    </div>
                    
                </div>
                <div class="w-1/5">
                </div>
            </div>
                    <!-------------------- IMAGEM 13 --------------->
            <div class="flex" id="translate" v-if="steps[current].img==13">
                <div class="w-1/5">
                </div>
                <div class="w-1/5">
                    <a-popover title="Resposta" trigger="hover" placement="top" class="mt-40 ml-14" >
                        <template #content>
                            <a-input-group compact>
                                <a-input v-model="respostaTrinta3" @input="trinta3" name="respostaTrinta3" id="respostaTrinta3"/>
                            </a-input-group>
                        </template>
                        <a-button>32 - Responda</a-button>
                    </a-popover>
                    <div v-if="resp33Comp == 'resp33Correto'">
                        <p class="text-xs text-green-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ valTrinta3 }}</p>
                        <p class="text-xs text-blue-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ props.resultado[32].resultado }}</p>
                    </div>

                    <div v-if="resp33Comp == 'resp33Errado'">
                        <p class="text-xs text-red-600 font-bold  bg-gray-300 rounded-lg mx-1 my-1">{{ valTrinta3}}</p>
                        <p class="text-xs text-blue-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ props.resultado[32].resultado }}</p>
                    </div>
                </div>
                <div class="w-1/5">
                </div>
                <div class="w-1/5">
                    <a-popover title="Resposta" trigger="hover" placement="top" class="mt-96 ml-32" >
                        <template #content>
                            <a-input-group compact>
                                <a-input v-model="respostaTrinta4" @input="trinta4" name="respostaTrinta4" id="respostaTrinta4"/>
                            </a-input-group>
                        </template>
                        <a-button>33 - Responda</a-button>
                    </a-popover>
                    <div v-if="resp34Comp == 'resp34Correto'">
                        <p class="text-xs text-green-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ valTrinta4 }}</p>
                        <p class="text-xs text-blue-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ props.resultado[33].resultado }}</p>
                    </div>

                    <div v-if="resp34Comp == 'resp34Errado'">
                        <p class="text-xs text-red-600 font-bold  bg-gray-300 rounded-lg mx-1 my-1">{{ valTrinta4}}</p>
                        <p class="text-xs text-blue-600 font-bold bg-gray-300 rounded-lg mx-1 my-1">{{ props.resultado[33].resultado }}</p>
                    </div>
                </div>
                <div class="w-1/5">
                </div>
            </div>
            

        </div>
        <div class="mt-4 grid grid-cols-2 gap-2 place-content-between">
            <div> 
                <div v-if="button === 'disabled'">
                    <a-button v-if="current < steps.length - 1" type="primary" @click="next" disabled>Próxima</a-button>       
                    <a-button v-if="current == steps.length - 1" type="primary" disabled> Feito </a-button >
                </div>
                <div v-if="button === ''">
                    <a-button v-if="current < steps.length - 1" type="primary" @click="next" >Próxima</a-button> 
                    <form  @submit.prevent="submitForm">
                        <button v-if="current == steps.length - 1" type="submit" className="bg-teal-400 px-4 py-1 rounded-md text-white"> Feito </button>
                    </form>
                </div>   

            </div>
            <div>
                <div class="flex justify-end" v-if="able === true"> 
                    <a-button v-if="steps[current].img==1"   @click="compImgUm"      type="primary" class="mt-2">Enviar</a-button>
                    <a-button v-if="steps[current].img==2"   @click="compImgDois"    type="primary" class="mt-2">Enviar</a-button>
                    <a-button v-if="steps[current].img==3"   @click="compImgTres"    type="primary" class="mt-2">Enviar</a-button>
                    <a-button v-if="steps[current].img==4"   @click="compImgQuatro"  type="primary" class="mt-2">Enviar</a-button>
                    <a-button v-if="steps[current].img==5"   @click="compImgCinco"   type="primary" class="mt-2">Enviar</a-button>
                    <a-button v-if="steps[current].img==6"   @click="compImgSeis"    type="primary" class="mt-2">Enviar</a-button>
                    <a-button v-if="steps[current].img==7"   @click="compImgSete"    type="primary" class="mt-2">Enviar</a-button>
                    <a-button v-if="steps[current].img==8"   @click="compImgOito"    type="primary" class="mt-2">Enviar</a-button>
                    <a-button v-if="steps[current].img==9"   @click="compImgNove"    type="primary" class="mt-2">Enviar</a-button>
                    <a-button v-if="steps[current].img==10"  @click="compImgDez"     type="primary" class="mt-2">Enviar</a-button>
                    <a-button v-if="steps[current].img==11"  @click="compImgOnze"    type="primary" class="mt-2">Enviar</a-button>
                    <a-button v-if="steps[current].img==12"  @click="compImgDoze"    type="primary" class="mt-2">Enviar</a-button>
                    <a-button v-if="steps[current].img==13"  @click="compImgTreze"   type="primary" class="mt-2">Enviar</a-button>
                </div>
                <div class="flex justify-end" v-else> 
                    <a-button v-if="steps[current].img==1"   @click="compImgUm"      type="primary" class="mt-2" disabled>Enviar</a-button>
                    <a-button v-if="steps[current].img==2"   @click="compImgDois"    type="primary" class="mt-2" disabled>Enviar</a-button>
                    <a-button v-if="steps[current].img==3"   @click="compImgTres"    type="primary" class="mt-2" disabled>Enviar</a-button>
                    <a-button v-if="steps[current].img==4"   @click="compImgQuatro"  type="primary" class="mt-2" disabled>Enviar</a-button>
                    <a-button v-if="steps[current].img==5"   @click="compImgCinco"   type="primary" class="mt-2" disabled>Enviar</a-button>
                    <a-button v-if="steps[current].img==6"   @click="compImgSeis"    type="primary" class="mt-2" disabled>Enviar</a-button>
                    <a-button v-if="steps[current].img==7"   @click="compImgSete"    type="primary" class="mt-2" disabled>Enviar</a-button>
                    <a-button v-if="steps[current].img==8"   @click="compImgOito"    type="primary" class="mt-2" disabled>Enviar</a-button>
                    <a-button v-if="steps[current].img==9"   @click="compImgNove"    type="primary" class="mt-2" disabled>Enviar</a-button>
                    <a-button v-if="steps[current].img==10"  @click="compImgDez"     type="primary" class="mt-2" disabled>Enviar</a-button>
                    <a-button v-if="steps[current].img==11"  @click="compImgOnze"    type="primary" class="mt-2" disabled>Enviar</a-button>
                    <a-button v-if="steps[current].img==12"  @click="compImgDoze"    type="primary" class="mt-2" disabled>Enviar</a-button>
                    <a-button v-if="steps[current].img==13"  @click="compImgTreze"   type="primary" class="mt-2" disabled>Enviar</a-button>
                </div>      
            </div>                                                                                                                                                                                                                                                                                                                              
        </div>
  </div>
</template>
<script setup>
  
import { ref } from 'vue';
import { useForm } from '@inertiajs/inertia-vue3';
import NavComponent from './NavComponent.vue';

var button = ref('disabled')
  const props = defineProps({
    aluno: Object,
    resultado: Object
})

    const current = ref(0);
    const able = ref(true);
    const next = () => {
      current.value++;
      button.value = 'disabled'
      able.value = true
    };
    const prev = () => {
      current.value--;
      button.value = 'disabled'
    };
    const steps = [
        { content: 'https://lh3.googleusercontent.com/q24tCGrFvHdk4FeTQo0r8CycN_6bsWTpmv8q5pxWLB67OIUODey5fdzWbgtmYzIwlsvnfmenxDRKXn4GJKaHtHDlwIdg8vPvTELdYfdGp4PKX4o6AMSxaec2XEPJwRLR_rk2HfKecc7bXjZJEgmQM0YGOlVrzqMvTWxsYaSTvg1luHnJUkF0ZDLE9SSJCSKwz14sPPIS7xViJ6ZOZ691ey9HEbeIdPNvpMLzaGFob9sUdnqfmweIPyyouK6weIa4vtopWVkjMzr7Py51jMY1VdZnOOWGmC4oEHwzbcRHXWHgZ_uHKvHkUN2_MAoAPg_QOks5spu5esC4lcmywRhRVIEPT097-cxE4ogSiZISau19TR2UOgtFt34YPC6S8Ae1FGKocn6gfa8i9myqd9eM8ohP12qSaECOpokAycmqVxHOkd9EPrVcijNvVTaYF9bF4rX_rM4nZVYkq3gvvT47C6jDcFcJK3I9x9H8MrPjzaaAJo9D_VpaUCyjfo-TEzhHz2QJpLsgFG6fpfNMf0cXAaZNans_o548HhVe-jYDyZqqGKAs4eH3td7BsqbQ6Q8Ov2PLAte8gklVEWJGTcN4mNfbelsIJzCWpE05YSHN6AluSasnv_Phmscq8Hjwtjet-9lU46bSIGGxTHllqiiGN4JzFFXllTZyTXp33HNgFTJbo25esDPvkYxGCwE3PYujGRstlBzFfF0ZgKn97qA9ChIZUeo14JxcI5mA6BJ8VJZ25gJClcNyxxBU7RNMM9lLmTZy-iVjOFCjJc9UR7m6TjK0xXnIIy2HkP5PwryS9C-n5M6fcYFkG9MAIffi9e1hjG7FLjQ02FRodgV6YHjgqm0U6dgUVbEQDu0dPfJDrAVN1m1moiT-5W9KYsECGI0GEQX-RyS46SKiW_WxuKZ9jQrxp_HjoIHcDer6Kg_1YhklTSdBhSJqnX5mF72sUT6z8JmRAcgze5bumOVpUI0=w1000-h562-no?authuser=0', img:1},
        { content: 'https://lh3.googleusercontent.com/-SvrYImsI6v1jKvP2PFe4uYQkXFeZr_FVxtHnQO1s2pGYGk5jjU6BNCJteCq-HxewX5AKeMu9gDhDtTUnEyBLUYg9QsS1635J5uTsyt-hl9n6rffkr0J0cepPjE_Yi1vpt9y5IgG1ryYUr4_na3SiqSpA82YNNJQrCuW6_FvRgighZA--AlCMHvkqPE9PDw4idcSJ9CCRFCygKPzM0-PsB6vZ0s335C6IUIMljL-e-sAQF2spdCkJOouWPUCD02S3z2aLkRlxI-4V1SyXjtZZzv6xJvQJDvkcrFBsXxYqTuqmoM3ToLVY-RDxSPya86EYbc-fGGsZ7p5SiNc4dALNqkca6HGDviJHCE1n76lT58X3CrafioD4VdPS5Rdp2eAwujf5PgHox-qkrzwbYs3EwKxzb7xOmm9mcWed8bghSM4-kfEZu6DwmjgdEJ0WU-OBnvYWp1vvbhaoL_Ybj2gb5mJd0khMqR2K8eyKV-kv0RggEMfF92Lkec3opUkR9adEwSilEmw67ZRolp1wq3sUiSqAS_dAgdQOsBArexanFg3i5z8bYY7Cr_0Rrke8MZk178yS-JhrowwaXgRQiKd3J4nrSvBZluHc0XcKZx7keDlWoJB0BW8hAP65RK36e1anTfewoDkDyuUiz2oHF3b-Yj6XF-D4VFv-dCF-73xHDrhdmLV3UjH9CUTj_NchQYJ2W2Who3SJUZUGNJxLVtKBTje7LHIy3DZ-tRT2pmIvD8R_2gla7-qJgcARObibc_eyLLfv-1uRabCT2aPkoYA_RfQlrj7XyWvP-HHDA6dgJbwUKiOmkUzQd12qe9p1h-LYlB51l8wEYj55UxHEBTU_Cy2fzsdzsoNUwokKyejs03VmgyTIdYtCplTBHsoYsI_N3e9fMGn9d3qvgz7kopKGGiABJPkVh6qLG_cDZU349MJh7AT23MrDkAlfHJDPK6t7gZWMJbpGnaK4jGjuOKV98B7NFLRJBOUGCsxz74twg1PMusZQ6mDQQ=w1134-h637-no?authuser=0', img:2},
        { content: 'https://lh3.googleusercontent.com/JO4OPlVGd1DhpSOg3XNpAwzmXAQdPweZy_ogSPAQ_oNpK5GsafXmvesy3bIUi-AG-U6ksDe8-tefqJhjvar5Y2ahOYn4GRm0Z-VR5zrY2e6Ax3cxDa2EC2tRN5CInhjcgEZWDp26uL406eCWBPP-vv7Sa1BHVyyNhb2cRigO97h5qG8pDum4rmsPzoPgKVdN7l2J1RtSUEDE0yy42JGFIDGau-QDZcG0gMlwc1iGzP7O4O3_aawMxR0-NDlSgdbAZ_25MrPOySsEt-WQ62S5xhhZAekW1BueioPr2sD-wqrkq0dPoPIrIsIUq6xz-V8NE3gCjz_I9IE4T5x4juvV1zjdEVp_jK9yvHvq8f9zXP8ciNdY_zUXTh8eSAOKuh9uDrgCh1utr-WhXEcuiNIg2xyprMuHliFO14IWiU6vlOhSKou82PnvQbnmcvjwnnHqZhjJxwNuoC3JBc9dQgwqnV_NyJbybVUv7K5x1UAXydCiDkqoF6Wrp6sQ3KjID32DsApXAVFL36mp7r1HP87k-SzSQ6sSRkDFrpxLbui8TQcUz7LY8emVEzg0ylCS_HFtD81Sv5vj46YA0ZGhWWBjZ2IDMQN2zraknzUch-Ru5vyGuVx2bu9E_fDiVFvdFkcQlVrjSse-D9qn_q7O5nbNWWlmbowgq8f1piVRrr2kg4kV38S67cgXzqbBAY9ft3uwZQ3CT4tlvSHPpOkCZadEk_3QymLdrmK9mKCQPGunvdVybGhBMJKfmKXBfAtNfpBeK035iI3QP2M-2u3tBJaNBACEsQoy1a7odGMKaBS2SIkTe_JEFKY8TSy-DkFAkBI823YUPLwM2tVKaYYoDHCxIcB1xmj7OjcYpmWGwg7E1deiw8GP5_jFduCYYXi6tp6hY0Xm3NcwhbBc_WNq9HpNhXFSeSy0vpbnnbAg6t8FboSaxZNCd1DCvKXU-uJyVY9ysKF705GW8iiMzrY_Md6tA1NMV8JVFoPPsk9rZ5uq1NU5iQcxxhiIhw=w1134-h637-no?authuser=0',img:3},
        { content: 'https://lh3.googleusercontent.com/hUMc_RIMX7rNKfZeyFTYOnM98DgOY2X6ZrjbQ999wz_d6sK0myBwCp4GmIp5dKAgZBO9lxHQtiXUsDupxMzTS0H1Nv7wDCQ55ZIDNPKguQD9zUdZdkhNPFaXLoVycGMO5kygi2QUA19v4JpfzXwfHiOniw82Mls9NxGo1nZazPeuA35PMptatfCfMwBPvrMyE9Lx0ow0Pl2lLa4MlDJU0Uc2fAnvqJljTrW1alroQe4g2qWpqaVRMkq0VoI6nk-7VdPExfje2p57t3Jd4Ch5q_h3NhE_UXVMq2zm4k3xOgLCkv4I60rFJ29OUv9AGunnwTU9PyVy-Y26WqyurGqDbunWXanMx_RIeMttTk9jtDPkwQIb8QvvOK-6i4pBYxMMRJYCp5r36241BbVPL78UVS9MvcbxfOR6e7O7QDEVF8-0mBNfrDk75KqdodCbRcEeT7mBZiAptOKPWG_15vWR6UjsJXKVEEUJP3zLPgGg50yy6C8A-yg1koJPLmbcsg7sPmSNMkQk5PYfHmaHeS7gGzztPQu93thhjOpvsOrs14AGJECIX7wJPxDFQhgtTrLvZ5gOuObLES-uVKNzMZV8hF0bj-GzVfjrF5yTjFedg7-iiVlOVJ-w7Ly07zt_uQ-XmYnF62i-zD6a55HdHiFB8eGHlvVOkR-uFC53jdr0Y5rJEhtCqTn4k-hDLU_tqERjsrwKHCUnk9LRrgjURVy3oF6JlNQUpXJFuUeNrXk1K7rKCTLttiTJSnJbIOtCf4-vPIy9Vzm0emmgk2aY5Q79HW2BQt1dm7sn9Rw6x4yHTzTHcQpXVRumZMUgUVNhWyORwW-UZ85FrpsTP_7HYb9WziUjY-CmnNZURjkXLCKGsPHtlvd0X6Hc5kGIYk24VNu6WOt2m1PGymz496UIwJpyYHESHWXurV2ThtALdVpK73tJufPfPeg70kH--3U0yli9uK-67FQJM6zgN5p0Uj14de0_1vZnCLFqx08nrNJJpnhsBeVXGr8URA=w1134-h637-no?authuser=0',img:4},
        { content: 'https://lh3.googleusercontent.com/MSLW7doa5JISbIpKgh_2c6YfgREgsY1QxqdVh4zQn4Fo6gzcK6HHYpetc8tbE639J-9v4g07jWXDGWAh0rO7O-x4hzCxzWmD1SRvGQMzPEhNjjL2zFPHE7cp7cTnqD2-pESdUF4-zTQTVEK-4yT5FHX8APpFEl8zjOkTKK1ki7dNYsDLXTZ3cQOb3cxkiszy6iGd20aeqn2KUrJ89xbXe1uU5eYZUKjqOMyjNJCrwoGJ09uew89pHbIkDCLjDhHl834RGm-YNx8c0njW9nQHfkHf3oQn7c6O_BhVivq9F8WoZZ9VcRgYcvgZI-qdkNOm-9zP_aLsk8ZUyJn-aznL_YiXIgpYw6mERuUVXGJNCdXb6N10JEW5u3mLLnlkG5HsHtbb9yEyr0XhSAfyzJQMu3oyvBShGhBAW3q8T85dD5AFLvo4jDgHwzu12SmhnVfAcoD5KAfnU6DKxuX3XI5lFvwZW269qbIa6m9b8axygSXiHNz36lv2BC77maHa-35C-vyujMaM4TeCFy1D4SysY4m3GPMEf0Bj6Oc5obmg7zwvdPcIXSfXd3D-iUXdrCQiajtY2JkZ0_bX704gRSb0tf9fl1SKRjoKt14Sz2QiQqjdSIExzh3SCcflfeShmYewrSi0fX6FUr-LhiDoqfZHO_QHMEUSFXtGSMM9j8mvbMxiuTP0wf2A27b6KERkfAVwTf1e7JUq5WkanZzvBafiGs88KSsG_VV-6YoApQ-lqMB3qOm4lJGIKAd9NJMoQ3rCo4XOi_napmefYk6_RT4UBlzGsIou9Uh4Gz2lOUTRyPS7qHH8kD30_-sOw4UH_o7NP6zkW0JRMnDt4XEpXi6I-K_hm57lKM2iEQaAtv-6p3frSzvQJmpBMPDma9rhj2PVKc0KSbaxhX7vyerydnpt_aKCLWFddVUwzJ8gaKcn4SIOUF2xr-sqm35MeRVbjfBmtRLPjArUU-thTNzFPSI=w970-h482-s-no?authuser=0',img:5},
        { content: 'https://lh3.googleusercontent.com/fXTwMIVPiAxO3_-TFOlB7g5HBLY8DK3jcANMuRNDsJ9dgh3veeWnPefu7sPPrWpvtAj1xa0cswCnxhtdnVyYM9qJK5TG-k9Wz68WfYbQPg0984jeHoWpPUsYrHa76pZ4w1eI9RErnEphxxHRIe0O-RXxV9dck0CJzlJekDinfc8dqVKYFPGS67-DPRArlnAOwGPQVhkFJna_CN_hAQNCOf4ic3bMXjBBv0jV21rsZFeJmCXMtAyKkQqCpznFTVqgkG_Cl2lDRhX3CohThrrsiqbneh7bMI-4QYJBbzSxFHiRJc5k87R9x4YinC79qxjRBsX2r_u0bhXENlMGp8lncRQRDjydzAL4EaetrUNkA4e6Nz4LUUMBE0YFy5zXusRKw78FqzgLTYtQu3JYE3-7hSVyEjBaJ5G9py8JIqVvH4ZO1sYG5mE9O9tZJSJF3FbKqvoO8fJB6Hzwe348iDFG7ZJxOzetAm2bcjntL5egxEkDizt0-TGW3SR4o3dCzuKdcypMW_SEF8k3ZdoFbfHRA_EBHckHmzQBRHEo7qQcDyrDfDY6wshPmzfIEGhmgQmkArB_saTilC0yin2E2TsIUytssBHdYadB7FkdnnlNxkYpQL2BL0DDdEqj94V2_o3SfE-MHA3qObAGz4cUcr4KTY4sp-qskgMX44LpAsqnM5zgrrhgb10gECCuYkP2wTPR8434wPTP7GGxHVxz6jlfNqzSnVqRlk58PM_H8YyA_GXncEbLDlq__bhZ8xFqDE2wEJi7vcq8KvtFGVS7ecCN5PeIVr1JNGKScLREQRDN35m2CL-2CwCXFAcwWZH-RLzIv1BiJz-2TyDe9Ulvy44VTEZySqkD0edruJ3fj1w6Szyyw1xM_VDRytT3MohML1AbuI761Oi5a1THonkVhPn10lfJIac-rvwquGarAa0-HACEKQ_wj45PWbs77Hrhz0RwaEvs6GxqJddkoWkivHdzKnpeUJqT5ivRxlX7xkWZow5flq158agQ1w=w1291-h637-no?authuser=0',img:6},
        { content: 'https://lh3.googleusercontent.com/MX4HrjPTFZ1rPe5hWTlx6nUOXYDATIt_sd6ZAec2wVcztV1ZWyNfIWIFovVVCzMXX2y520LXuh9jbGTl9SYdAnYadgtti-U4NaUftEdLXFh94Sfe8cbaDV6rEBGNlxDENs2KdXv2AjipcCFZx5OF263zQeqRidA1y_btDwrVoBx2p9Kv7IhnW77NyBGr3GU9tcbZyXDL72D1WyPEj5YlDik2PUeQS4l9z3xH_HDSVSJ8SU1qzWw8GJHXvuKY3VvOZIw1bhEAmljY4woSB16w66QLoGp09Q76sTg5LESk0QUDLxYbqEenEDO5H6f5VHUKpPnnI5UdNlrJRYiBa49j19lkL1rjAyXN9cOhAxKj1sFXd23CG9chFH46NxqfUwJ78_zhLdQo_QixXem1qtLlYR6Dk5nSpPnIapnIi_Gb3Y4RmFy-LxfxcJ8Yo9Bz3iI3mun7BmBoPH5p2w9xzW3qRdlCKc900bMLwzeHPyHvo4D7LleV7wQ_kqBXHUDLTKe3Y19yLkzWWPnK0wG8wyiML5uuL_7vTF4GPcxK8ZKHGWBJwxH4XgA_llNiQCpGUGDeCIf8EZ161lCBm3B3Sjf6om6JlQNHhn5eEKsr_L7-CIe3LcdlKat-Yc7ruPtuMMMh4qV6fQc_gmu3s7EPIxKgy6Z5wP3Hwq331cUSF5JIiSj3s4VZSi2MOu1r2JDlAuHPs58oO_EyIYw8jmWizthPUCcODksKEDSdoAbfiqaJN_r4iIVnVKCXMEa6l-6CnOL5hjmU6j8O84qBdFe3FxJ14VgRc8-ww8I0ZwjdSi4gO32pbeeuC2Rp0aVqXCoumQzH8A3vdjj_RlsnjvOYGWCeiG00twPhFhHFSyV8o2k5nDoJOtURnNSn4c8akRCjB5kP9IMIQnau7gaoJT7A46GhCEjaG41QpGMBV_T1rRP5CoAZTpDfSMK5d3_YcVflR9GNl3yVZKosJa_iNuSdzMWLp9GCOMcLDl7JBJWTMNdTRPC6m4KB_0bk4A=w1283-h637-no?authuser=0',img:7},
        { content: 'https://lh3.googleusercontent.com/E3HZDBiKwpG-9J5sdi4OVWhLInRHdHkE5t1L8_4gE4Gxrxoo6e9RLi_5fghnN1izUmJrl26EqpK6DurXUgxsC9KDMTEXjmqlRltJXq3u-pQJjWU2eCMZAZ3o6z6uKNFt2fa5e0-nIcxmRJaJ8ILJzndRSner4qHkuejwoNqtoBIEZcWcnaPbh_hMamuVxoD3sA10xtkv9lEKLTk2xaE6-kzxYd0YefEs2bZgvfqEWlnD7Xfy09RVUNaBoAWYV4tbHi7_LAv67qo6LGmrAA-U6c-4cMUjlGjTN4SrQzARTWBn6R0LzqScf9rQtRSw5s7ilp-06z2YOiK4aQ4RJJeGn8Wtg9iR91coc6tQSmV62AY_smZCx2mPpTwoAwnbY725LWkGVcd9Fv3f9CWRmnPZ-rkZ8jPYeZe6ftB_r1MCpRL4bduverz5hc8mwxkKAgSZZ7ZYN0N-ZCKMhOD-WMqsH9-VLhN1cZdrQqtj-nosNawxlsoF1eyKuxGcLukScdtmSjy4FmGFE6ClNI6555qjDQ7BeXyD89_hJ0Cm_-RpDutmzRUqFk0bp1_TkxACWXvSiqRrf4T9JiX22FP8Ddlec-Xc3VLOItlVKpT8PN3khhVZ8SLKS0rS9TKbhbfdFKfyZIrhMiW4AG0VoY6TWDGItpYQAnqKTP59MwdjCPtnyPbvnay0UdSuwc9CmXHvC8BCiLquhXgW_YcW0c6pt38dN9mQKD12OM72nyKeOYV5_OZoa3vieTKpyd8AmM_c2_uyD1fs6HyhvzfTQDF4ed_9eDzno6WWhRQqdNvX4gI6bg9DD0Rodt3oHGpnm-8v4IGYwv6nuf9ITIeWNAGKiCbxbGfeAPeNllOLjZQr5_XNrhuXNZm9P62neIO2alUxlXDnFwxtSDn8ME_cVm7MYkNbHeca4rMCZLKB54KiBMC4hJDM_VBiDWw6Yw0YMx2WdIzu1ipp2dTj-ozv_YGQ-VmMHOqaZ2DkFBzLBHWwfb2GU6qpDhObn2cCVQ=w1025-h637-s-no?authuser=0',img:8},
        { content: 'https://lh3.googleusercontent.com/UbWbrnguVvd74_B3eAkg3nZc4l9dYRjToKrhNdVO04iukEujtwoNjmeGrGg4xHQPLdWhx7tvoazO9nLdrf2T36IwjiEQIhqZaBGnVWFuCENHJYREBdriW1y2ndv_oI8-Y_fBVEpJ3s_Sn9m9aK3ToHRS4OD-dNYrm8ja7seZUyn5gLGN7FijXl6VSEHFvSRrnN8Qqyy4dFxUi_liA4I0-eXjZd5K3Ok1FGuWxZskY4Xt2YjFIZEzBPD7Dy5LlG2-Y4rn4CdT7n48MY_JgKhIly0nEaSV9qkmDlRJ4Phe_hJZ5mpPfgds786md9laYrCZhh9pn0q-pJWR9pTh9ZOO-EJ9ax3KTp1m0S44oRtne-F__ksZUvfiODwBw3UkL7p1DetSN0VfIr6JiGp-DH3uMqfEEODm1RkygV0suM9vlwoOtp85J5_z6RpFEqUp-cLZ_R9CUC_lc43M2bBHf04zWFbqqNiKd1qWvtaYPMypUNq8e-SJoYcoD8wOHZJJovtlyDzAqtMFpZXNjq67Er0DNRlhhpvsD0ZueMPnLt8ansuziApQeByfqPHr_4sw8uO_v6cNj0_W0sLWoLAddsM2URnsNoEud0POa2UnLHq-ACX_YpeAYWCdFI5jnLljOjr6DnMKe6zLYM1gb5toDsDC-LMTyI9jKQkmlxOFd0u0HLnaRicp93EX9xoyMJgr_2ThSfP4kmxupkw3tlS9nVKqbYggK4LpRRiDzdJsoHUVDm6i4TcpNa7PsU1EB9aR37aocjMqCKnPJpNFQpS2JzvRsiMGcERziSBmrTaT4ZTALig1rlyozhxYbrv94oERKieJSgp5a9kGTh3R49YHM3CyvIcIKSH6koIw7mQ7R6Dyah351sd7nbNXpA1j62QT-bPCaTLnPKgh3K_dImJLwlcE1ppXZCu2jwIAjhHGKSp5Y1T4ZEJq8M9Qyl5qwjdwa615ZvSronYQaxqPtjmb6SvNvo7EXxYeJgKEMC507PTS47GqRQKfstestw=w1284-h637-no?authuser=0',img:9},
        { content: 'https://lh3.googleusercontent.com/v3pvuC2J4p9PsPyaZfyqnYcSsy_xAmDSWyPa7AeJ8Vd7kML6rovl1EMWHDsK7ZqjeKuHo418bUoknx2nJPFuHKw2krINwBJen5vIz99Yvc57kGAaBtBt8VtipGlfiSjWjakL2hP21b2YeYptgKnvLIDq8JT9F9kt8TgMdfTtkFQrYvLLPXkXqyRiAq9buIcNksD2aITqf5J7c6FiCHDfRMLO8BKFqg6kpVi5CHTDmh9RyDuAyDrGrvk3LZu2S13FtCSJGJMHhuIX_BFQwp0m_pRq1Tp1KbljeUrH5Sm3rUhsYGaMqaYdU_UUm2gunkZJUIQuj8Ms6gli_NPE00hjS4GFN5HlT5_wKV1N6ce4VhiwchYvfbnVRy4EY4YiwnVv_VBnO6quASfVMc6p6O1eyfnUpj8cd1pvW-9YwL6dsaUFvA5UVrVN-LB5xB-wY9VEazlIHTg5LqUDNbob9Z4xCFHPwzjaZZXW3_vkzk42fme5Vlc2gAXUjtqaJNENwsM3B1nuaAUjhSSqbnY0KT1EKKakUvh8YVpSuVDkauHeeDCU17kE0QiFBjOjR1YIP3kCn97fmrnHuujvGJ-lq15agIBzFD7y8kJRwD1W0xhmGAd02-C6gUVQ4w2I-uB4r3Edc2uORrrpQ9MA97v3SMBpqiEDoWjMM23l2zK9MI4I_15iQKLtXtGjK0kV-l0DpEpu6W57IuvCvdzQlorShVmCyeY24B90c8fGfhhwKIYanjg1W5gJYx_1ftTSTbi5lFOxrbyZi3bNxdyMebDvgRdVjh7ednSSXf62-mBaQ41Ccc46jNcJ1UMGEa6nK0_4H8SR0DCfdWtgcZblurJfPQA3yvpAH9HvDXfY45rrHOeH7JZ8k7Wpe8suS1dxQa2OFuJcoi1ud73OmNS5Bg84RhgxjZ1Xg2NJFSsxdMZo1GOTrhYodRn7bpqUJ_PtlIYxYCi2ah74XhGNAVq2cGBuefA4ZKQtIeOEdog7s32DhXo384D3bJnrUKRvHw=w1285-h637-no?authuser=0',img:10},
        { content: 'https://lh3.googleusercontent.com/PluVv_IcwovT3iBnbBBs02JgNHVladOaBziB9eq-mzUDHJlGwifOHpEXFA3vXiYCWQf-neZvMFbGoz_YrMOJaq2rANKuBxLWn9m2s6X_tFv_Ywh2kSNfm3kDFs9dc_kyoMNcfEYAlOqC3m5FZUFqDn-fvHmk2Ad3v1Gjm5Hp_kQIQXBnQdX5I_n-TwNOYM5KbC6Cb74nRb9Sl0NDX61aaFgdI4j7nq_8HhzF_nYMdzeEGg5Ut5ih3WFm3CqA6G-fKUwudHIbG9vmdcrw5NSgOqGW1NkORgr9HeCQ-gCM-j2XJ6zGYx2bdb_L42oQ22Ve23xcrR-WQrMllFSW8oCvBh039vp9hdrsQBG1AmybOHxJJV8KdiffMM9gq0KzsJSIDMCV4U2fKHpNLd2gRIldY09jMOKbiTRx41UVz3Z68Mx3cT87hXCjDGgjJfntfZb9fcXc7FR1qmg2VpLS1HygvtLWJzih2A3ELf4yj27hWGTlRnV_IyoAiHF12i4j6-4Yvx50sqGSaZpJs2vMbkBiFubpYW1BiqWB4S8uvS_hPutB7gH1DLBnAVg1Xx9zcxNNJJf124tlzvMDYBp4HlNWFc16ZbNEVkh2iKAZzDy8ZwNX1aIffhs6RlxcelH2wRGdJf2Jijf6JmBtZ0YtkvnGrYvJF3biSkbjMBJJjEroEx1MmaOJiIhb6SFV8SwEWM8Q3ZO9oAiEcF6Qg8uSBMAmmppZCv6VKN3hMm5ZseYsx_pZ2rIEhXFh4b0tn7stiJmfPPRi-X8qw6qAPgNEhLo1mYqoj9v369hOlloQMDWH0-zHlclUZO_lKK1Rdu6PNBXroSt6B7taU5IkG4csmeUb9KiCnpebRYZn0Sk0ipD3CRu4PYKZGyRl1RNojuRfN3BT2OReSBPnbQJuEBGN4lGRCb3YYGGGeAhQdnd9lQ_0BTL6ZQjNfTDd0sZuPAWXtKTEAIjW6QMxlJTRD8WQ2jq3wlbhP3D_e25jj0zjWqqYGtoj7giecO6X-Q=w1280-h637-no?authuser=0',img:11},
        { content: 'https://lh3.googleusercontent.com/SH0ZC0b9DEz_sg8ySqlPPZz3rqrcdhDSA_mv6vRoGNcpft9MDjxA6BzN-2fbmhXtzvwSAv3d3Zn47uzxGGG435zepqps7goP_Gq5hn9uNR_lRUGOmLc8I2zORj-E49HXRCdXqIXDJ8j0U-t1o37tQ8eWf5dboLXh6aQ_v8nt4XoMFJicHe6MLYYqjqFu4vmJl-rB2oCGqq6u7AQkw8MskLCwfqLf5H4qc0BNL12OsD4pzHEm8vPSRD9xV68si0ls3owYCswz8taFVdsi9-gVbdQGQOLtWwfmdeGXIHxyjls8chCH4fUPNPkWNoplZ-9NX40q3ksidUpu842S2hvMhE3U9m4vbD1Ay_YAHon_2hKKxpMu-K3DsWt6SMvnJx3WbAmOFCSRqP-mrp8Fu4U5PRp1F8WzuoIw1ROJuLJbbdzF_TFcoeMkeG6D1r_mjD6U9oGdp8RgUXWpfjGxGufvcFAlZLlN9lwdHQR7Nox8OO1CrM8BMJRSAbRpXTlMgv5IphpbRKcbWq-6KA2b5xcDCYdE0dc8FC7ksxE83Qb2t4qfXBh1hy9MpAB9hwpGrPHy1_2k07XMvYccW9SDLQv_dE8deqTD6Y7DqyY_BOQxXx4SLvALKgvlcVSJz3shPY1uN9yPC_CpiNXj2DpCBFpkdiHuRTcbX67NTYOy_hmAz_jR9MfD_asq_8yXEOPD0etAXsZ9suyJO0OVL2FmqrZEfORNM4955gMLHaWyUZ7Dkxxj1qwMZpGj4RpmV8a5hhHdJvJpwwmrVBEYEAiOTrh1eGG56r4vD9QMmPTF_DWg6jplfl-jAVDg8JUhwIBITAk3bGHi1toKYawYXls-v_YNf8vqLMa_XZwI0Rgoq_rRtslzzNYeNbBwnpVkGBXwA97HL3_xMmRaUoVjFCV3x62HB6CaxMeHh_wsWtiEDcbmuCFOLsjAkF05rgRyZdILy7rwcuzYrr-rfyoR5arAPS6xSqeD5WbrpKeKyzrcu01ZERJL5ou0PwfKGQ=w1271-h630-no?authuser=0',img:12},
        { content: 'https://lh3.googleusercontent.com/PHy0olSZ7nCXLVuyxSWXlPZvaAQI40k01XwIdQLb3maXcBJWotEaOjJnq8Cjg4X3CjI6z95evWYC7KudsbWoHwow4pYDYEIdxGv157l5FRw2sM-zY7jw6O-oQTEY4O0X9wAnxYXaAxAeiasOIpa9ljBey0n3-4MBa-vB6Pei4bZn92kIoNFnWlXcoTvjMbO5D_iI3LCc1iXLSGECftUEqY6c-I5ToRB8UkqaPxmwm0sBTh-P03A-exVIbsaZv9ESfiZst-HyPRW7qDrvyz787vNERZXw57A7mkwUdiwJwJnxIduLjCmnpzN9F7LSNaVKdLdvTURoocNN-MIHXcxeLo-vErm75K7LsuOXCI6UUj3GyjIXwc3jvZF5hm1lhOAtPVc-AA-IKmyTLa11Pk92WxgvNC7g05Hh5XhpIfbTaQsLANvov7jTajddU6EfL1qhNsDuYI3GFjlxOn6epA6IOhxSlMv6TFnXsGckJheWX7htV-lUWa5pxgTZhDX7L2HPKqEodoYWzEGtgVxv2oqoYI5JbQ5k85CjmYR3XE8bbcXHHhBvmscI9auOGL9xrBG3hbS3932e3855hNaHjiPzvZj4Di_fXhEXd_ZdUSNEEsbR-BJ0gydAQYphkQaASjck1_YW_ra59gmxQ2nBVlWW9oMTvr1Wn3VSzGV1Vqi3xJICSWBHWKDbvorsa9MPmvKEClmiH-8aKlxLJyCUguudesRhA_dZlAkOujNVBgX0FqZJjNbExO9zJwLLenUHmEocCKLcDfa_itHikDo07BowwCVcebj_vlHdG1IDnet1jqrsINswRF2XtbtnJ5l0scGB-wMdsM9VfxmWPxOElPqjeIBJTml_nmyNpAsqlmQNiVaP3CXRASgisdN_crt8GhSMSTGrfu7zoJcy-lrrkT87vnFHiHnBcCRVu7eTQHL4k7lN2H5kBON4zRoEMcNwNk-XO9J5CJgg4N0SDwM3jj77gJVwAy0hcOHK972tDB1Mq9YZIBEtbmvlxQ=w1282-h637-no?authuser=0',img:13},
    ]
    next()
    prev()

const respostaUm = ''

// Contador de acertos
var cont = ref(0)

var acertos = ref(0)
var erros = ref(0)

// Valores para comparação
var valUm = ref('')
var valDois = ref('')
var valTres = ref('')
var valQuatro = ref('')
var valCinco = ref('')


// Comparação que mostra os valores do input com os valores do banco se está certo ou errado
var resp1Comp = ref('')
var resp2Comp = ref('')
var resp3Comp = ref('')
var resp4Comp = ref('')
var resp5Comp = ref('')

// Botando os valores do input em caixa alta
const um = (event) => {
  valUm.value = event.target.value.toUpperCase();
}

const dois = (event) => {
    valDois.value = event.target.value.toUpperCase();
}

const tres = (event) => {
    valTres.value = event.target.value.toUpperCase();
}

const quatro = (event) => {
    valQuatro.value = event.target.value.toUpperCase();
}

const cinco = (event) => {
    valCinco.value = event.target.value.toUpperCase();
}


// Função que compara o valor do input com o valor do banco na imagem 1
const compImgUm = () => {
    button.value = ''
    able.value = false
  if(valUm.value === props.resultado[0].resultado){
    resp1Comp.value = 'resp1Correto'
    cont.value = cont.value + 1
  } else {
    resp1Comp.value = 'resp1Errado'
  }

  if(valDois.value == props.resultado[1].resultado){
    resp2Comp.value = 'resp2Correto'
    cont.value = cont.value + 1

  } else {
    resp2Comp.value = 'resp2Errado'
  }

  if(valTres.value == props.resultado[2].resultado){
    resp3Comp.value = 'resp3Correto'
    cont.value = cont.value + 1
  } else {
    resp3Comp.value = 'resp3Errado'
  }

  if(valQuatro.value == props.resultado[3].resultado){
    resp4Comp.value = 'resp4Correto'
    cont.value = cont.value + 1
  } else {
    resp4Comp.value = 'resp4Errado'
  }

  if(valCinco.value == props.resultado[4].resultado){
    resp5Comp.value = 'resp5Correto'
    cont.value = cont.value + 1
  } else {
    resp5Comp.value = 'resp5Errado'
  }
}


// Valores da Imagem 2
var valSeis = ref('')
var valSete = ref('')
var valOito = ref('')
var valNove = ref('')

var resp6Comp = ref('')
var resp7Comp = ref('')
var resp8Comp = ref('')
var resp9Comp = ref('')

const seis = (event) => {
    valSeis.value = event.target.value.toUpperCase();
}

const sete = (event) => {
    valSete.value = event.target.value.toUpperCase();
}

const oito = (event) => {
    valOito.value = event.target.value.toUpperCase();
}

const nove = (event) => {
    valNove.value = event.target.value.toUpperCase();
}

// Função que compara o valor do input com o valor do banco na imagem 2
const compImgDois = () => {
    button.value = '' 
    able.value = false
  if(valSeis.value === props.resultado[5].resultado){
    resp6Comp.value = 'resp6Correto'
    cont.value = cont.value + 1
  } else {
    resp6Comp.value = 'resp6Errado'
  }

  if(valSete.value === props.resultado[6].resultado){
    resp7Comp.value = 'resp7Correto'
    cont.value = cont.value + 1
  } else {
    resp7Comp.value = 'resp7Errado'
  }

  if(valOito.value === props.resultado[7].resultado){
    resp8Comp.value = 'resp8Correto'
    cont.value = cont.value + 1
  } else {
    resp8Comp.value = 'resp8Errado'
  }

  if(valNove.value === props.resultado[8].resultado){
    resp9Comp.value = 'resp9Correto'
    cont.value = cont.value + 1
  } else {
    resp9Comp.value = 'resp9Errado'
  }
}

// Valores imagem 3

var valDez = ref('')
var valOnze = ref('')
var valDoze = ref('')
var valTreze = ref('')
var valQuatorze = ref('')
var valQuinze = ref('')

var resp10Comp = ref('')
var resp11Comp = ref('')
var resp12Comp = ref('')
var resp13Comp = ref('')
var resp14Comp = ref('')
var resp15Comp = ref('')

const dez = (event) => {
    valDez.value = event.target.value.toUpperCase();
}

const onze = (event) => {
    valOnze.value = event.target.value.toUpperCase();
}

const doze = (event) => {
    valDoze.value = event.target.value.toUpperCase();
}

const treze = (event) => {
    valTreze.value = event.target.value.toUpperCase();
}

const quatorze = (event) => {
    valQuatorze.value = event.target.value.toUpperCase();
}

const quinze = (event) => {
    valQuinze.value = event.target.value.toUpperCase();
}

// Função que compara o valor do input com o valor do banco na imagem 2
const compImgTres = () => {
    button.value = '' 
    able.value = false
  if(valDez.value === props.resultado[9].resultado){
    resp10Comp.value = 'resp10Correto'
    cont.value = cont.value + 1
  } else {
    resp10Comp.value = 'resp10Errado'
  }

  if(valOnze.value === props.resultado[10].resultado){
    resp11Comp.value = 'resp11Correto'
    cont.value = cont.value + 1
  } else {
    resp11Comp.value = 'resp11Errado'
  }

  if(valDoze.value === props.resultado[11].resultado){
    resp12Comp.value = 'resp12Correto'
    cont.value = cont.value + 1
  } else {
    resp12Comp.value = 'resp12Errado'
  }

  if(valTreze.value === props.resultado[12].resultado){
    resp13Comp.value = 'resp13Correto'
    cont.value = cont.value + 1
  } else {
    resp13Comp.value = 'resp13Errado'
  }

  if(valQuatorze.value === props.resultado[13].resultado){
    resp14Comp.value = 'resp14Correto'
    cont.value = cont.value + 1
  } else {
    resp14Comp.value = 'resp14Errado'
  }

  if(valQuinze.value === props.resultado[14].resultado){
    resp15Comp.value = 'resp15Correto'
    cont.value = cont.value + 1
  } else {
    resp15Comp.value = 'resp15Errado'
  }
}

// valores imagens 4

var valDezesseis = ref('')
var valDezessete = ref('')
var valDezoito = ref('')

var resp16Comp = ref('')
var resp17Comp = ref('')
var resp18Comp = ref('')


const dezesseis = (event) => {
    valDezesseis.value = event.target.value.toUpperCase();
}

const dezessete = (event) => {
    valDezessete.value = event.target.value.toUpperCase();
}

const dezoito = (event) => {
    valDezoito.value = event.target.value.toUpperCase();
}

// Função que compara o valor do input com o valor do banco na imagem 4
const compImgQuatro = () => {
    button.value = '' 
    able.value = false
  if(valDezesseis.value === props.resultado[15].resultado){
    resp16Comp.value = 'resp16Correto'
    cont.value = cont.value + 1
  } else {
    resp16Comp.value = 'resp16Errado'
  }

  if(valDezessete.value === props.resultado[16].resultado){
    resp17Comp.value = 'resp17Correto'
    cont.value = cont.value + 1
  } else {
    resp17Comp.value = 'resp17Errado'
  }

  if(valDezoito.value === props.resultado[17].resultado){
    resp18Comp.value = 'resp18Correto'
    cont.value = cont.value + 1
  } else {
    resp18Comp.value = 'resp18Errado'
  }
}

// Valores imagem 5

var valDezenove = ref('')

var resp19Comp = ref('')

const dezenove = (event) => {
    valDezenove.value = event.target.value.toUpperCase();
}

const compImgCinco = () => {
    button.value = '' 
    able.value = false
  if(valDezenove.value === props.resultado[18].resultado){
    resp19Comp.value = 'resp19Correto'
    cont.value = cont.value + 1
  } else {
    resp19Comp.value = 'resp19Errado'
  }
}


// Valores imagem 6

var valVinte = ref('')
var valVinte1 = ref('')

var resp20Comp = ref('')
var resp21Comp = ref('')

const vinte = (event) => {
    valVinte.value = event.target.value.toUpperCase();
}

const vinte1 = (event) => {
    valVinte1.value = event.target.value.toUpperCase();
}

const compImgSeis = () => {
    button.value = '' 
    able.value = false
  if(valVinte.value === props.resultado[19].resultado){
    resp20Comp.value = 'resp20Correto'
    cont.value = cont.value + 1
  } else {
    resp20Comp.value = 'resp20Errado'
  }

  if(valVinte1.value === props.resultado[20].resultado){
    resp21Comp.value = 'resp21Correto'
    cont.value = cont.value + 1
  } else {
    resp21Comp.value = 'resp21Errado'
  }
}

// Valores imagem 7

var valVinte2= ref('')
var valVinte3= ref('')
var valVinte4= ref('')

var resp22Comp = ref('')
var resp23Comp = ref('')
var resp24Comp = ref('')

const vinte2 = (event) => {
    valVinte2.value = event.target.value.toUpperCase();
}
const vinte3 = (event) => {
    valVinte3.value = event.target.value.toUpperCase();
}
const vinte4 = (event) => {
    valVinte4.value = event.target.value.toUpperCase();
}

const compImgSete = () => {
    button.value = '' 
    able.value = false
  if(valVinte2.value === props.resultado[21].resultado){
    resp22Comp.value = 'resp22Correto'
    cont.value = cont.value + 1
  } else {
    resp22Comp.value = 'resp22Errado'
  }

  if(valVinte3.value === props.resultado[22].resultado){
    resp23Comp.value = 'resp23Correto'
    cont.value = cont.value + 1
  } else {
    resp23Comp.value = 'resp23Errado'
  }

  if(valVinte4.value === props.resultado[23].resultado){
    resp24Comp.value = 'resp24Correto'
    cont.value = cont.value + 1
  } else {
    resp24Comp.value = 'resp24Errado'
  }
}

// Valores imagem 8

var valVinte5 = ref('')
var valVinte6 = ref('')

var resp25Comp = ref('')
var resp26Comp = ref('')

const vinte5 = (event) => {
    valVinte5.value = event.target.value.toUpperCase();
}
const vinte6 = (event) => {
    valVinte6.value = event.target.value.toUpperCase();
}


const compImgOito = () => {
    button.value = '' 
    able.value = false
  if(valVinte5.value === props.resultado[24].resultado){
    resp25Comp.value = 'resp25Correto'
    cont.value = cont.value + 1
  } else {
    resp25Comp.value = 'resp25Errado'
  }

  if(valVinte6.value === props.resultado[25].resultado){
    resp26Comp.value = 'resp26Correto'
    cont.value = cont.value + 1
  } else {
    resp26Comp.value = 'resp26Errado'
  }
}


// Valores imagem 9

var valVinte7= ref('')

var resp27Comp = ref('')

const vinte7 = (event) => {
    valVinte7.value = event.target.value.toUpperCase();
}

const compImgNove = () => {
    button.value = '' 
    able.value = false
  if(valVinte7.value === props.resultado[26].resultado){
    resp27Comp.value = 'resp27Correto'
    cont.value = cont.value + 1
  } else {
    resp27Comp.value = 'resp27Errado'
  }
}

// Valores imagem 10

var valVinte8= ref('')

var resp28Comp = ref('')

const vinte8 = (event) => {
    valVinte8.value = event.target.value.toUpperCase();
}

const compImgDez = () => {
    button.value = '' 
    able.value = false
  if(valVinte8.value === props.resultado[27].resultado){
    resp28Comp.value = 'resp28Correto'
    cont.value = cont.value + 1
  } else {
    resp28Comp.value = 'resp28Errado'
  }
}

// Valores imagem 11

var valVinte9= ref('')
var valTrinta = ref('')
var valTrinta1 = ref('')

var resp29Comp = ref('')
var resp30Comp = ref('')
var resp31Comp = ref('')


const vinte9 = (event) => {
    valVinte9.value = event.target.value.toUpperCase();
}

const trinta = (event) => {
    valTrinta.value = event.target.value.toUpperCase();
}

const trinta1 = (event) => {
    valTrinta1.value = event.target.value.toUpperCase();
}


const compImgOnze = () => {
    button.value = '' 
    able.value = false
  if(valVinte9.value === props.resultado[28].resultado){
    resp29Comp.value = 'resp29Correto'
    cont.value = cont.value + 1
  } else {
    resp29Comp.value = 'resp29Errado'
  }

  if(valTrinta.value === props.resultado[29].resultado){
    resp30Comp.value = 'resp30Correto'
    cont.value = cont.value + 1
  } else {
    resp30Comp.value = 'resp30Errado'
  }

  if(valTrinta1.value === props.resultado[30].resultado){
    resp31Comp.value = 'resp31Correto'
    cont.value = cont.value + 1
  } else {
    resp31Comp.value = 'resp31Errado'
  }
}

// Valores imagem 12

var valTrinta2= ref('')

var resp32Comp = ref('')

const trinta2 = (event) => {
    valTrinta2.value = event.target.value.toUpperCase();
}

const compImgDoze= () => {
    button.value = '' 
    able.value = false
  if(valTrinta2.value === props.resultado[31].resultado){
    resp32Comp.value = 'resp32Correto'
    cont.value = cont.value + 1
  } else {
    resp32Comp.value = 'resp32Errado'
  }
}

// Valores imagem 13

var valTrinta3= ref('')
var valTrinta4= ref('')

var resp33Comp = ref('')
var resp34Comp = ref('')

const trinta3 = (event) => {
    valTrinta3.value = event.target.value.toUpperCase();
}

const trinta4 = (event) => {
    valTrinta4.value = event.target.value.toUpperCase();
}

var a = 0

const compImgTreze= () => {
    button.value = '' 
    able.value = false
  if(valTrinta3.value === props.resultado[32].resultado){
    resp33Comp.value = 'resp33Correto'
    cont.value = cont.value + 1
  } else {
    resp33Comp.value = 'resp33Errado'
  }

  if(valTrinta4.value === props.resultado[33].resultado){
    resp34Comp.value = 'resp34Correto'
    cont.value = cont.value + 1
  } else {
    resp34Comp.value = 'resp34Errado'
  }
    acertos.value = cont.value 
    erros.value = 35 - acertos.value
}


const form = useForm ({
    nome_completo: props.aluno.nome_completo,
    matricula: props.aluno.matricula,
    acertos: acertos,
    erros: erros
})

const submitForm = () => {
    form.transform((data) => ({
        ...data
    }));
form.post('/ListaPost')
}


</script>

<style scoped>
#components-popover-demo-triggerType .ant-btn {
  margin-right: 8px;
}

#altura {
  height:550px;
}

#translate {
    transform: translate(0px, -480px);
}
</style>
  

  