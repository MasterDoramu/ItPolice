<template>
<div >

    <div class="my-3 row justify-content-md-center">
        <h1 >Наша продукция</h1>
    </div>

    <div class="accordion" id="accordionExample">
        <div class="card" v-for="(good, index) in allGoods" :key="index">
            <div class="card-header" :id="'heading' + good.id">
                <h2 class="mb-0 ">
                    <button class=" btn btn-link btn-block text-left" type="button" data-toggle="collapse" :data-target="'#num' + good.id" aria-expanded="false" :aria-controls="'num' + good.id">
                        {{good.title}}
                    </button>
                </h2>
            </div>
            <div :id="'num' + good.id" class="collapse" :class="{'show': index == 0}" :aria-labelledby="'heading' + good.id" data-parent="#accordionExample">
                <div class="card-body">
                    {{good.description}}
                </div>
            </div>
        </div>
    </div>

<div class="row">
    <div class="col"></div>
    <div class="mt-5 col-6">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item" v-for="(good, index) in allGoods" :key="index" :class="{'active': index == 0}">
                    <img :src="'/img/' + good.picture" class="d-block w-100" :alt="good.title">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon text-dark" aria-hidden="true"></span>
                <span class="sr-only">Предыдущий</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon text-dark" aria-hidden="true"></span>
                <span class="sr-only">Следующий</span>
            </a>
        </div>
    </div>
    <div class="col"></div>
</div>




</div>
</template>

<script>
import {mapGetters, mapActions} from 'vuex'
export default
{
    mounted() {
        this.axiosGoods()
    },
    computed: {
        ...mapGetters(["allGoods"])
    },
    methods: {
        ...mapActions(['axiosGoods'])
    }
}

</script>
<style lang="scss" scoped>
.carousel-control-prev-icon,
.carousel-control-next-icon {

  background-image: none;
}

.carousel-control-next-icon:after
{
  content: '>';
  font-size: 45px;
  color: black;
}

.carousel-control-prev-icon:after {
  content: '<';
  font-size: 45px;
  color: black;
}
</style>
