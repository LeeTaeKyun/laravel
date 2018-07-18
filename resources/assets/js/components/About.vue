<template lang="html">
  <section class="section">
    <div class="container">
      <h1 class="title">Section</h1>
      <form ref= "form" @submit.prevent="onSubmit" method="post" enctype="multipart/form-data">

      <div class="field">
        <label class="label">Name</label>
        <div class="control">\
          <input class="input" type="text" placeholder="Name" v-model="list.name">
        </div>
      </div>
      <div class="field">
        <label class="label">Phone</label>
        <div class="control">
          <input class="input" type="text" placeholder="text" v-model="list.phone">
        </div>
      </div>
      <div class="field">
        <label class="label">Email</label>
        <div class="control">
          <input class="input" type="text" placeholder="email" v-model="list.email">
        </div>
      </div>
      <div class="file">
        <label class="file-label">
          <input class="file-input" type="file" @change="imageChanged">
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

    </form>
    </div>
  </section>
</template>

<script>
export default {
    methods:{
      onSubmit(){
        var vm = this;
        console.log(this);
        var formdata = new FormData(vm.$refs.form);
        axios.post('/api/upload', formdata).then(function(){
          console.log(response.data);
        })
      }
    }
}
</script>

<style lang="css">
</style>
