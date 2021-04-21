<template>
    <main class="container">
        <h1 v-if="pageHeader">{{ pageHeader }}</h1>
        <slot></slot>
    </main>
</template>

<script>
export default {
    name: "TheContent",
    props: ['pageHeader'],
}
</script>
