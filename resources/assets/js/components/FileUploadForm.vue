<template lang="html">
  <div>

  <div class="field">
    <img :src="avatar" alt="Image" />
  </div>
  <div class="field">

    <label class="label">Name</label>
    <div class="control">
      <input class="input" type="text" placeholder="Name" >
    </div>
  </div>
  <div class="file">
  <label class="file-label">
    <input class="file-input" type="file" name="image" @change="GetImage">
    <span class="file-cta">
      <span class="file-icon">
        <i class="fas fa-upload"></i>
      </span>
      <span class="file-label">
        Choose a file…
      </span>
    </span>
  </label>
</div>
<a class="button is-primary" @click.prevent="FileUpload">submit</a>
  </div>
</template>

<script>
export default {
    props:['user'],
    data(){
      return{
        avatar : null
      }
    },
    methods:{
      GetImage(e){
        let image = e.target.files[0];
        let reader = new FileReader();
        reader.readAsDataURL(image);
        reader.onload = e => {
            this.avatar = e.target.result;
        }
      },

      FileUpload(){
        axios.post('/fileUpload', {'image' : this.avatar})
      }
    }
}
</script>

<style lang="css">
</style>
