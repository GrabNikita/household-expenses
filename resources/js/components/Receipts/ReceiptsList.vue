<template>
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>id</th>
            <th>Purchase date</th>
            <th>market</th>
            <th>basket</th>
        </tr>
        </thead>
        <tbody>
            <tr
                is="receipt-list-item"
                v-for="receipt in getReceipts"
                v-bind:key="receipt.id"
                v-bind:receipt="receipt"
            ></tr>
        </tbody>
    </table>
</template>

<script>
import ReceiptListItem from './ReceiptListItem';
export default {
    name: "ReceiptsList",
    components: {ReceiptListItem},
    mounted() {
        this.$store.dispatch('loadReceipts');
    },
    computed: {
        getReceipts() {
            return this.$store.getters.getReceipts;
        }
    },
}
</script>

<style scoped>

</style>
