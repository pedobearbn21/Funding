<template>
      <div class="row">
          <div class="col-sm-12 col-md-6 text-center mb-2 mb-sm-2 h-100">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img class="d-block w-100 img-fluid" src="https://neizod.github.io/polar/images/800x400.png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100 img-fluid" src="https://neizod.github.io/polar/images/800x400.png" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100 img-fluid" src="https://neizod.github.io/polar/images/800x400.png" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
          </div>
          <div class="col-sm-12 col-md-6 mb-0 pb-0" >
              <h2>Header Funding Name</h2>
              <p>Founder : {{ projects.title }}</p>
              <p>Description : {{ projects.description }}</p>
              <p>Funding Count[People] : {{ projects.count }}</p>
              <progress :value="projects.counting_funding" :max='projects.goal'/>
              <p></p>
              <router-link type="button" class="btn btn-primary" :to="{ name: 'projectfunding' }">Go somewhere</router-link>
          </div>
      </div>
</template>

<script>
export default {
    data() {
        return {
            projects: {

            }
        }
    },
    methods: {
        getDetail()
        {
            console.log(this.$route.params.id)
            this.axios.get('api/projects/'+this.$route.params.id)
                .then((res)=>{
                    console.log(res)
                    this.projects = res
                })
                .catch((err)=>console.log(err))
        },
        goFunding()
        {
            this.$router.push('projectfunding')
        }
    },
    mounted() {
        this.getDetail()
    },
}
</script>

<style>


</style>