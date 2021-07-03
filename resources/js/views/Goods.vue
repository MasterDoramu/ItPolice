<template>
<div >
    <div class="row d-flex justify-content-around">
        <div class="card mt-5" style="width: 18rem;" v-for="(good, index) in allGoods" :key="index">
            <img :src="'/img/' + good.picture" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{good.title}}</h5>
                <p class="card-text">{{good.description}}</p>
                <button class="btn btn-primary">Добавить в корзину</button>
            </div>
        </div>
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

</style>
