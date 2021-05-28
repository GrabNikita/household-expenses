<template>
    <tr>
        <td>{{ receipt.id }}</td>
        <td>
            <router-link v-bind:to="'/receipts/' + receipt.id">{{ receipt.purchase_date }}</router-link>
        </td>
        <td>{{ receipt.market }}</td>
    </tr>
</template>

<script>
export default {
    name: "ReceiptListItem",
    props: ['receipt'],
}
</script>

<style scoped>

</style>
