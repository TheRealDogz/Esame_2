<template>
    <div class="flex items-center justify-around h-16 bg-black">
      <div class="text-white">
          TREEBU
      </div>
      <div>
           <router-link active-class="text-green-500" to="/create" class="text-white">Nuovo</router-link>
      </div>

      <div v-for="link in navLinks" :key="link.code" @click="goToLink(link)"
        :class="{
            'text-white' : link.code != currentRoute,
            'text-green-400' : link.code === currentRoute
        }">
          {{link.label}}
      </div>
    </div>
</template>

<script>
export default {
    name: 'Navbar',
    data() {
        return {
            navLinks:[
                {
                    code: "home",
                    label: "Home"
                }
            ]
        }
    }
}
</script>
