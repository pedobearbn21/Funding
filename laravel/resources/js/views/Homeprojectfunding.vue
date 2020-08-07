<template>
  <div class=" row justify-content-around text-center">
      <div class="col mx-auto" v-for="project in projects" :key="project.id" >
          <div class="card" style="width: 18rem;">
            <img src="" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ project.title }}</h5>
                <p class="card-text">{{ project.description }}</p>
                <router-link type="button" class="btn btn-primary" :to="{ name: 'detail',params: { id: project.id } }">Go somewhere</router-link>
            </div>
        </div>
      </div>
      <div class="col mx-auto">
          <div class="card" style="width: 18rem;">
            <img src="" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <router-link type="button" class="btn btn-primary" :to="{ name: 'detail',params: { id: 1 } }">Go somewhere</router-link>
            </div>
        </div>
      </div>
      <div class="col mx-auto">
          <div class="card" style="width: 18rem;">
            <img src="" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <router-link type="button" class="btn btn-primary" :to="{ name: 'detail',params: { id: 1 } }">Go somewhere</router-link>
            </div>
        </div>
      </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      projects: []
    }
  },
  methods: {
    getAllProjects()
    {
      this.axios.get('api/projects')
        .then((res)=> {console.log(res);this.projects = res.data})
        .catch((err)=>console.log(err));
    }
  },
  created() {
    this.getAllProjects()
  },
}
</script>

<style>

</style>