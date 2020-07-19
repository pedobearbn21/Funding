<template>
  <div>
      <!-- <div class="col-12">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="text" class="form-control" disabled placeholder="Project Name" aria-label="name" aria-describedby="basic-addon1">
        </div>
      </div> -->
       <div class="col-12">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="number" v-model="fundingcount" class="form-control" placeholder="Funding Count" aria-label="count" aria-describedby="basic-addon1">
        </div>
      </div>
       <!-- <div class="col-12">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="text" class="form-control" placeholder="Funding Count" aria-label="count" aria-describedby="basic-addon1">
        </div>
      </div>
      <div class="col-12">
          <button class="btn btn-block" @click="action">Click Funding</button>
      </div> -->

  </div>
</template>

<script>
export default {
    data() {
        return {
           fundingcount: 0 
        }
    },
    methods: {
        action(){
            this.axios.post('funding',this.fundingcount).then((res)=>{this.router.push('success')}).catch((err)=>{console.log(err)})
        },
    },
}
</script>

<style>

</style>