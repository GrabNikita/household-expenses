<template>
    <li class="nav-item">
        <a v-bind:href="url" class="nav-link">{{title}}</a>
    </li>
</template>

<script>
export default {
    name: "TopPanelMainMenuItem",
    props: ['url', 'title'],
}
</script>

