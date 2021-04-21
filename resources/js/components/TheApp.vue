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
        grid-template-rows: [start] 3rem [after-header] auto [before-footer] 3rem [end];
        grid-template-columns: [start] 1fr [end];
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
