<template lang="html">
<form ref= "form" @submit.prevent="onSubmit" method="post" enctype="multipart/form-data">

<div class="field">
  <label class="label">Name</label>
  <div class="control">
    <input class="input" type="text" placeholder="Name" name="name">
  </div>
</div>


<div class="file">
  <label class="file-label">
    <input class="file-input" type="file"  multiple>
    <span class="file-cta">
      <span class="file-icon">
        <i class="fas fa-upload"></i>
      </span>
      <span class="file-label">
        Choose a file…
      </span>
    </span>
    <span class="file-name">

      </span>
  </label>
</div>
      <input type="submit" value="upload"/>
</form>
</template>
<script>
export default {

  data(){
    return{
      list:{
        name : '',
        phone : '',
        email : '',
        image : '',
      }
    }
  },
    methods:{
      onSubmit(){
        var vm = this;
        console.log(this);
        var formdata = new FormData(vm.$refs.form);
        axios.post('/api/upload', formdata).then(function(response){
          console.log(response.data);
        })
      }
    }
}
</script>
<style lang="css">
</style>
