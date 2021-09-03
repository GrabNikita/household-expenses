<template>
    <li class="nav-item">
        <router-link v-bind:to="url" class="nav-link">{{title}}</router-link>
    </li>
</template>

<script>
export default {
    name: "TheHeaderMainMenuItem",
    props: ['url', 'title'],
}
</script>
