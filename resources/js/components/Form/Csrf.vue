<template>
	<input
		type="hidden"
		name="_token"
		v-bind:value="csrf"
	>
</template>

<script>
export default {
	name: "Csrf",
	computed: {
		csrf() {
			return this.$store.getters.getCsrfToken;
		},
	},
};
</script>