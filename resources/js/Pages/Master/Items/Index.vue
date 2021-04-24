<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Master Data / Items
            </h2>
        </template>

        <div class="container">
            <div class="col-12">
                <inertia-link :href="route('master.items.form-add')">Add Item</inertia-link>
            </div>
            <div class="col-12">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <td>Name</td>
                            <td>Qty</td>
                            <td>Price</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="item in items">
                            <td v-text="item.name"></td>
                            <td v-text="item.qty"></td>
                            <td v-text="item.price"></td>
                            <td>
                                <inertia-link :href="route('master.items.form-edit', [item.id])">Edit Item</inertia-link>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </app-layout>
</template>

<script>
import JetButton from '@/Jetstream/Button';
export default {
    components: {
        JetButton
    },
    props: [
        'items'
    ],
    name: "Index"
}
</script>

<style scoped>

</style>
