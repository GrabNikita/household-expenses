<template>
    <main class="container">
        <h1 v-if="pageHeader">{{ pageHeader }}</h1>
        <router-view></router-view>
    </main>
</template>

<script>
export default {
    name: "TheContent",
    props: ['pageHeader'],
}
</script>

<style scoped>
main {
    padding-top: 15px;
    padding-bottom: 15px;
}
</style>
