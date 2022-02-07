<template>
  <div class="flex flex-col items-center p-10">
       <div class="flex flex-col h-full w-1/4 space-y-7">
            <div class="w-full flex flex-col">
                <label for="comune" class="mb-2">Nome</label>
                <input id="comune" class="rounded px-3 w-full py-1 outline-none border-2 px-2 rounded-lg py-1" type="text" placeholder="Nome" v-model="inhabitant.nome">
            </div>
                
            <div class="w-full flex flex-col">
                <label for="foto" class="mb-2 mt-3">Foto</label>
                <input id="foto" class="rounded px-3 w-full py-1 outline-none border-2 px-2 rounded-lg py-1" type="text" placeholder="foto" v-model="inhabitant.foto">
            </div>

            <div class="w-full flex flex-col">
                <label for="dimensioni" class="mb-2 mt-3">Comune</label>
                <input id="dimensioni" class="rounded px-3 w-full py-1 outline-none border-2 px-2 rounded-lg py-1" type="text" placeholder="Comune" v-model="inhabitant.comune">
            </div>

            <div class="w-full flex flex-col">
                <label for="foglio" class="mb-2 mt-3">Provincia</label>
                <input id="foglio" class="rounded px-3 w-full py-1 outline-none border-2 px-2 rounded-lg py-1" type="string" placeholder="Provincia" v-model="inhabitant.provincia">
            </div>

            <div class="w-full flex flex-col">
                <label for="mappale" class="mb-2 mt-3">Indirizzo</label>
                <input id="mappale" class="rounded px-3 w-full pt-1 py-1 outline-none border-2 px-2 rounded-lg py-1" type="string" name="Indirizzo" placeholder="Indirizzo" v-model="inhabitant.indirizzo">
            </div>
            
            <div class="w-full flex flex-col">
                <label for="CAP" class="mb-2">CAP</label>
                <input id="CAP" class="rounded px-3 w-full pt-1 py-1 outline-none border-2 px-2 rounded-lg py-1" type="string" name="CAP" placeholder="CAP" v-model="inhabitant.CAP">
            </div>

            <div class="w-full flex flex-col">
                <label for="nApp" class="mb-2">nApp</label>
                <input id="nApp" class="rounded px-3 w-full pt-1 py-1 outline-none border-2 px-2 rounded-lg py-1" type="string" name="nApp" placeholder="numero appartamenti" v-model="inhabitant.nApp">
            </div>

            <div class="w-full flex flex-col">
                <label for="uc" class="mb-2">uc</label>
                <input id="uc" class="rounded px-3 w-full pt-1 py-1 outline-none border-2 px-2 rounded-lg py-1" type="string" name="nApp" placeholder="numero appartamenti" v-model="inhabitant.uc">
            </div>

            <div class="w-full flex flex-col">
                <input type="checkbox" name="remota" id="remota" v-model="inhabitant.remota">
                <label for="remota" class="mb-2">remota</label>
            </div>

            <div class="w-full flex flex-col">
                <label for="Contab" class="mb-2">Contab</label>
                <select name="" id="Contab" class="outline-none border-2 px-2 rounded-lg py-1 bg-white" v-model="inhabitant.contab">
                    <option value="Diretta">Diretta</option>
                    <option value="Indiretta">Indiretta</option>
                </select> 
            </div>

            <div class="w-full flex flex-col">
                <label for="Sonda" class="mb-2">Sonda</label>
                <select name="" id="Sonda" class="outline-none border-2 px-2 rounded-lg py-1 bg-white" v-model="inhabitant.sonda">
                    <option value="Compatta">Compatta</option>
                    <option value="Remota">Remota</option>
                </select> 
            </div>

            <div class="w-full flex flex-col">
                <label for="Dispositivi" class="mb-2">Dispositivi</label>
                <select name="" id="offeDispositivirta" class="outline-none border-2 px-2 rounded-lg py-1 bg-white" v-model="inhabitant.dispositivi">
                    <option value="vendita">Ripartitori di calore</option>
                    <option value="affitto">Totalizzatore di calore</option>
                    <option value="affido">Contatore di energia termica</option>
                </select> 
            </div>
            
        </div>
        <div class="flex flex-col">
            <button class="bg-green-400 px-4 py-2 rounded-lg text-white hover:bg-green-600 mt-7" @click="addinhabitant()">Crea</button>
        </div>
        {{ isEdit }}
    </div>
</template>

<script>
import axios from 'axios'

export default {
    name: "addinhabitant",
    data(){
        return{
            inhabitant: {},
            isEdit: false
        }
    },
    async mounted() {
        if(this.$route.name == 'edit'){
            this.isEdit = true
            this.inhabitant = (await axios.get('http://localhost:8000/api/inhabitants/' + this.$route.params.id)).data

        }
    },
    methods: {
        async addinhabitant() {
            if(!this.isEdit){
                await axios.post("http://localhost:8000/api/inhabitants", this.inhabitant)   
                    this.$router.push({
                    name: 'home'
            })
            
            }
            else {
                await axios.put("http://localhost:8000/api/inhabitants/" + this.$route.params.id, this.inhabitant)
                this.$router.push({
                    name: 'home'
                })
            }
        }
    }
}

</script>
