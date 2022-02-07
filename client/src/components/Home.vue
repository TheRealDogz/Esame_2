<template>
  <div class="flex flex-row p-10">
      <div class="grid grid-cols-4 gap-10 w-screen ">
        <div class="flex flex-col bg-green-300 rounded-md" v-for="inhabitant in inhabitants" :key="inhabitant.id" >
          <div @click="goToView(inhabitant.id)">
            <div class="flex flex-row p-2"> <img :src="inhabitant.foto" alt=""> </div>
            <div class="flex flex-row p-2"><p>{{inhabitants.nome}}</p></div>
            <br>
            <div class="flex col">
            <div class="flex flex-row p-2"><p>{{inhabitant.comune}}</p></div>
            <br>
            <div class="flex flex-row p-2"><p>{{inhabitant.provincia}}</p></div>
            <br>
            <div class="flex flex-row p-2"><p>{{inhabitant.indirizzo}}</p></div>
            <br>
            <div class="flex flex-row p-2"><p>{{inhabitant.CAP}}</p></div></div>
            <div class="flex col">
            <div class="flex flex-row p-2"><p>{{inhabitant.nApp}}</p></div>
            <br>
            <div class="flex flex-row p-2"><p>{{inhabitant.uc}}</p></div>
            <br>
            <div class="flex flex-row p-2"><p>{{inhabitant.remota}}</p></div>
            <br>
            <div class="flex flex-row p-2"><p>{{inhabitant.contab}}</p></div>
            <br>
            <div class="flex flex-row p-2"><p>{{inhabitant.sonda}}</p></div>
            <br>
            <div class="flex flex-row p-2"><p>{{inhabitant.dispositivi}}</p></div>
            </div>
            
           
          </div>
          <button class="mt-5 border-2 px-4 rounded-md bg-green-500 w-28" @click="goToEdit(inhabitant.id)">
            Edit
          </button>
        </div>
      </div>
  </div>
</template>

<script>
import axios from 'axios'

export default {
    name: 'Home',

    data(){
      return{    
          inhabitants: [],
      }
    },

    async mounted(){  
      this.inhabitants = (await axios.get('http://localhost:8000/api/inhabitants')).data
    },
    methods: {
        goToView(id) {
          this.$router.push('/detail/' + id)
        },
        goToEdit(id) {
          this.$router.push('/edit/' + id)
        }
    }
}
</script>
