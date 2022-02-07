<template>
    <div class="flex flex-row p-10 h-full h-screen">
        <div class="flex flex-col w-60 w-full h-auto bg-green-500 text-center">
            <div>
              {{inhabitant.nome}}
            </div>
            <div class="flex item-center"><img :src="inhabitant.foto" alt=""></div>
            <div>{{inhabitant.comune}}</div>
            <div>{{inhabitant.provincia}}</div>
            <div>{{inhabitant.indirizzo}}</div>
            <div>{{inhabitant.CAP}}</div>
            <div>{{inhabitant.nApp}}</div>
            <div>{{inhabitant.uc}}</div>
            <div>{{inhabitant.remota}}</div>
            <div>{{inhabitant.contab}}</div>
            <div>{{inhabitant.sonda}}</div>
            <div>{{inhabitant.dispositivi}}</div>
        </div>

    </div>
</template>

<script>
import axios from 'axios';
export default {
    name: "detail",
    data() {
        return{
            inhabitant: {}
        }
    },
    async mounted() {
        let InhabitantId = this.$route.params.id;
        console.log(InhabitantId);
        let response = await axios.get('http://localhost:8000/api/inhabitants/' + InhabitantId);
        this.inhabitant = response.data;
    }
}
</script>

<style>

</style>