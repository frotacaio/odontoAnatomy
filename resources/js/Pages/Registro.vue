<template>
	<div class="h-screen md:flex">
		<div class="relative overflow-hidden md:flex w-1/2 bg-gradient-to-tr from-sky-900 to-purple-800 i justify-around items-center hidden">
			<div>
				<div>
					<img src="../../img/odontologonobg.png" class="w-full" alt="">
				</div>

				<div class="flex justify-center">
					<h1 class="text-white font-bold text-4xl font-sans"></h1>
					<p class="text-white mt-1"></p>
					<button type="submit" class="block w-28 bg-white text-indigo-800 mt-4 py-2 rounded-2xl font-bold mb-2 hover:bg-gray-300">Leia mais</button>
				</div>
			</div>
			<div class="absolute -bottom-32 -left-40 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
			<div class="absolute -bottom-40 -left-20 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
			<div class="absolute -top-40 -right-0 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
			<div class="absolute -top-20 -right-20 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
		</div>
		<div class="flex md:w-1/2 justify-center py-10 items-center bg-white">
			<form class="bg-white"  @submit.prevent="submitForm">
				<h1 class="text-gray-800 font-bold text-2xl mb-1">Olá novamente!</h1>
				<p class="text-sm font-normal text-gray-600 mb-7">Bem vindo de volta!</p>
				<div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
						<path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
					</svg>
					<input v-model="form.nome_completo" class="pl-2 outline-none border-none" type="text" name="" id="" placeholder="Nome completo" />
				</div>
				<p v-if="form.errors.nome_completo" class="text-xs text-red-500 pb-3">{{form.errors.nome_completo}}</p>
				<div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
					<svg class="h-5 w-5 text-gray-400" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M9 5H7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2V7a2 2 0 0 0 -2 -2h-2" />  <rect x="9" y="3" width="6" height="4" rx="2" />  <path d="M9 14l2 2l4 -4" /></svg>
					<input v-model="form.matricula" class="pl-2 outline-none border-none" type="text" name="" id="" placeholder="Matrícula" />
				</div>
				<p v-if="form.errors.matricula" class="text-xs text-red-500 pb-3">{{form.errors.matricula}}</p>
				<div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
					</svg>
					<input v-model="form.email" class="pl-2 outline-none border-none" type="text" name="" id="" placeholder="Endereço de e-mail" />
				</div>
				<p v-if="form.errors.email" class="text-xs text-red-500 pb-3">{{form.errors.email}}</p>
				<div class="flex items-center border-2 py-2 px-3 rounded-2xl">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
						<path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
					</svg>
					<input v-model="form.senha" class="pl-2 outline-none border-none" type="password" name="" id="" placeholder="Senha" />
				</div>
				<p v-if="form.errors.senha" class="text-xs text-red-500 pb-3">{{form.errors.senha}}</p>
				<button type="submit" class="block w-full bg-indigo-600 mt-4 py-2 rounded-2xl text-white font-semibold mb-2">Registrar</button>
				<Link href="/" class="text-sm ml-2 text-teal-500 hover:text-teal-700 cursor-pointer flex justify-center">Voltar para Login</Link>
			</form>
		</div>
	</div>
    
</template>

<script setup>
import { useForm } from '@inertiajs/inertia-vue3';
import { Inertia } from '@inertiajs/inertia'

const form = useForm({
	nome_completo:null, 
	email: null,
	matricula:null,
	senha:null
})

const submitForm = () => {
    form.transform((data) => ({
        ...data,
    }));
form.post('/RegistroPost')
}

</script>