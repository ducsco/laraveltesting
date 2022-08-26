
// CreatePost.vue

<template>
  <div>
    <h1>Create A Post</h1>
    <form @submit.prevent="addPost">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Post Title:</label>
            <input type="text" class="form-control" v-model="title">
          </div>
        </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Post Body:</label>
              <textarea class="form-control" v-model="body" rows="5"></textarea>
            </div>
          </div>
        </div><br />
        <div class="form-group">
          <button class="btn btn-primary" @click="addPost">Create</button>
        </div>
    </form>
  </div>
</template>

<script>
    import axios from 'axios';
    export default {
        data(){
        return {
          post:{}
        }
    },
    methods: {
      addPost(event){
        // console.log("run here =>>>>>>>>>>>>>.", this.title);
        //get du lieu tu title & body
        let title = this.title;
        let body = this.body
        // thuc hien call api
        axios.post('/api/post/create', {
            title,
            body
        })
        .then(response => {
            console.log("response =>>>>>>>>>>.", response);
        })
        .catch(err => {
            console.log("err =>>>>>>>>>>.", err);
        })
        // console.log(this.post);
      }
    }
  }
</script>
