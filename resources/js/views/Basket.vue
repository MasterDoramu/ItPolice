<template>
<div>
    <h1 class="row d-flex justify-content-center mt-5">Корзина</h1>
    <div class="row d-flex justify-content-center mt-5">
        <button type="button" class="btn btn-primary" @click="sendTelegram()" v-if="!checkTelegram">Отправить заказ в телеграм</button>
    </div>
    <div class="alert alert-success mt-5" role="alert" v-if="checkTelegram">
        Ваш заказ успешно отправлен
    </div>
    <div class="row d-flex justify-content-around">

        <div class="card mt-5" style="width: 18rem;" v-for="(good, index) in allBasket" :key="index">
            <img :src="'/img/' + good.picture" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{good.title}}</h5>
                <p class="card-text">{{good.description}}</p>
                <p class="card-text">Стоимость: {{good.price}}р</p>
                <button class="btn btn-primary bg-danger" @click="deleteBasket(index)">Удалить из корзины</button>
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
        this.axiosBasket()
    },
    computed: {
        ...mapGetters(["allBasket", "checkTelegram"]),
    },
    methods: {
        ...mapActions(['axiosBasket', 'deleteBasket', 'sendTelegram']),
    }
}
</script>
<style lang="scss" scoped>

</style>
