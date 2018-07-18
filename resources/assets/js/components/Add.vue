<template lang="html">
  <div class="modal" :class='openmodal'>
    <div class="modal-background"></div>
    <div class="modal-card">
      <header class="modal-card-head">
        <p class="modal-card-title">Modal title</p>
        <button class="delete" aria-label="close" @click='close'></button>
      </header>
      <section class="modal-card-body">

        <div class="field">
          <label class="label">Name</label>
          <div class="control">
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
      </section>
      <footer class="modal-card-foot">
        <button class="button is-success" @click='save'>Save changes</button>
        <button class="button" @click='close'>Cancel</button>
      </footer>
    </div>
  </div>

</template>

<script>
export default {
  props:['openmodal'],
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
    imageChanged(e){
      console.log(e.target.files[0]);
      var fileReader = new FileReader();
      fileReader.readAsDataURL(e.target.files[0]);
      fileReader.onload = (e) => {
        this.list.image = e.target.result;
      }
    },
    close(){
      this.$emit('closeRequest')
    },

    save(){
      axios.post('/laravel', this.$data.list)
        .then( (response) => this.close())
        .catch( (error) => console.log(error));
    }
  }
}
</script>

<style lang="css">
</style>
