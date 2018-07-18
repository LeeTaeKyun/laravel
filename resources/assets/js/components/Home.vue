<template lang="html">
  <div>

  <nav class="panel column is-offset-2 is-8" >
  <p class="panel-heading">
    Vuejs Phonebook
    <button class="button is-primary is-outlined" @click="openAdd">
      Add New
    </button>
    <span class="is-pulled-right" v-if="loading">
      <i class="fa fa-refresh fa-spin fa-2x fa-fw"></i>
    </span>
  </p>
  <div class="panel-block">
    <p class="control has-icons-left">
      <input class="input is-small" type="text" placeholder="search" v-model="searchQuery">
      <span class="icon is-small is-left">
        <i class="fa fa-search"></i>
      </span>
    </p>
  </div>


  <a class="panel-block " v-for="item,key in temp">
    <span class="column is-9">
      {{ item.name }}
    </span>
    <span class="panel-icon column is-1">
      <i class="has-text-danger fa fa-trash" aria-hidden="true" @click="del(key,item.id)"></i>
    </span>
    <span class="panel-icon column is-1">
      <i class="has-text-info fa fa-edit" aria-hidden="true" @click="openUpdate(key)"></i>
    </span><span class="panel-icon column is-1">
      <i class="has-text-primary fa fa-eye" aria-hidden="true" @click="openShow(key)"></i>
    </span>
  </a>
</nav>
  <Add :openmodal='addActive' @closeRequest='close'></Add>
  </div>
</template>

<script>
let Add = require('./Add.vue');
export default {
  components:{Add},
  data(){
    return{
      addActive : ''
    }
  },
  methods:{
    openAdd(){
        this.addActive = "is-active";
    },
    close(){
      this.addActive = ''
    }
  }
}

</script>

<style lang="css">
</style>
