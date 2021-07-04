<template>
<div >

    <nav class="navbar navbar-expand-lg navbar-dark  bg-dark ">
        <div class="container-fluid">
            <router-link class="navbar-brand" to="/">Shop</router-link>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" @click="togglerClick">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse" :class="{'collapse': toggler}" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item" v-for="(item, index) in links" :key="index">
                    <router-link class="nav-link" :to="item.href">{{item.title}}</router-link>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

</div>

</template>

<script>
export default {
    data() {
        return {
            links: [
                {
                    title: "Главная",
                    href: "/"
                },
                {
                    title: "Товары",
                    href: "/goods"
                },
                {
                    title: "Корзина",
                    href: "/basket"
                },
            ],
            toggler: true,
        }
    },
    methods: {
        togglerClick(){
            this.toggler = !this.toggler
        }
    }
}
</script>
<style lang="scss" scoped>
</style>
