<template>
<div >
    <div class="my-3 row justify-content-md-center">
        <h1 >Our production</h1>
    </div>

    <div class="accordion" id="accordionExample">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h2 class="mb-0 ">
                    <button class=" btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Сворачиваемый групповой элемент #1
                    </button>
                </h2>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    Некоторый заполнитель для первой панели аккордеона. Эта панель отображается по умолчанию благодаря классу <code>.show</code>.
                </div>
            </div>
        </div>


  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Сворачиваемый групповой элемент #2
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        Некоторый заполнитель для второй панели аккордеона. По умолчанию эта панель скрыта.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Сворачиваемый групповой элемент #3
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        И, наконец, заполнитель для третьей и последней панели аккордеона. По умолчанию эта панель скрыта.
      </div>
    </div>
  </div>
</div>

<div class="row">
    <div class="col"></div>
    <div class="mt-5 col-6">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img :src="'/img/photo.png'" class="d-block w-100" alt="photo">
            </div>
            <div class="carousel-item">
            <img :src="'/img/s1.jpg'" class="d-block w-100" alt="s1">
            </div>
            <div class="carousel-item">
            <img :src="'/img/s2.jpg'" class="d-block w-100" alt="s2">
            </div>
        </div>
        </div>
    </div>
    <div class="col"></div>
</div>




</div>
</template>

<script>

export default {

}
</script>
<style lang="scss" scoped>

</style>
