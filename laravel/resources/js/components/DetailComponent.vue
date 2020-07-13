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
              <p>Founder : </p>
              <p>Description With ....</p>
              <p>Funding Count[People]</p>
              <progress value="20" max='100'/>
              <p></p>
              <button type="button" class="btn btn-primary"  >Block level button</button>
          </div>
      </div>
</template>

<script>
export default {

}
</script>

<style>


</style>