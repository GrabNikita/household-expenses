<template>
    <div id="app">
        <slot></slot>
    </div>
</template>

<script>
export default {
    name: "TheApp"
}
</script>

<style lang="scss">
    #app {
        display: grid;
        grid-template-rows: 3rem auto 3rem;
        grid-template-columns: 1fr;
        grid-template-areas:
            "header"
            "content"
            "footer"
        ;
        grid-gap: 1rem;
    }

    main {
        grid-area: content;
    }
</style>
