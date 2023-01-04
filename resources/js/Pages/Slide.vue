<template>
    <div class="my-10 mx-10">
        <a-steps :current="current">
            <a-step v-for="item in steps" :key="item.title" :title="item.title" />
        </a-steps>
        <div class="steps-content">
            <img  :src="steps[current].content"/>
        </div>
        <div class="steps-action">
            <a-button v-if="current < steps.length - 1" type="primary" @click="next">Próxima</a-button>
            <a-button
                v-if="current == steps.length - 1"
                type="primary"
            >
                Feito
            </a-button>
            <a-button v-if="current > 0" style="margin-left: 8px" @click="prev">Anterior</a-button>
        </div>
  </div>
</template>
<script setup>
    import { ref } from 'vue';
    const current = ref(0);
    const next = () => {
      current.value++;
    };
    const prev = () => {
      current.value--;
    };
    const steps = [
        { title:'Imagem 1', content: 'Imagem 1'},
        { title:'Imagem 2', content: 'Imagem 2' },
        { title:'Imagem 3', content: '../../img/im1.png' },
        { title:'Imagem 4', content: 'Imagem-tres' },
        { title:'Imagem 5', content: 'Imagem-tres' },
        { title:'Imagem 6', content: 'Imagem-tres' },
        { title:'Imagem 7', content: 'Imagem-tres' },
        { title:'Imagem 8', content: 'Imagem-tres' },
        { title:'Imagem 9', content: 'Imagem-tres' },
        { title:'Imagem 10', content: 'Imagem-tres' },
        { title:'Imagem 11', content: 'Imagem-tres' },
        { title:'Imagem 12', content: 'Imagem-tres' },
        { title:'Imagem 13', content: 'Imagem-tres' },


    ]
    next()
    prev()
</script>


<style scoped>

.steps-content {
  margin-top: 16px;
  border: 1px dashed #e9e9e9;
  border-radius: 6px;
  background-color: #fafafa;
  min-height: 200px;
  text-align: center;
  padding-top: 80px;
}

.steps-action {
  margin-top: 24px;
}
</style>

