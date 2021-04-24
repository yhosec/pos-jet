<template>
    <app-layout>
        <template #header>
            <h2 class="text-2xl font-extrabold text-gray-800 leading-tight">
                POS
            </h2>
        </template>

        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-7 col-sm-12">
                    <Items :items="items" :item-chart="itemChart"></Items>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-12 border-start">
                    <Chart :items="items" :item-chart="itemChart"></Chart>
                </div>
            </div>

        </div>
    </app-layout>
</template>

<script>
import JetButton from '@/Jetstream/Button';
import Button from "@/Jetstream/Button";
import Items from "@/Pages/Pos/Items"
import Chart from "@/Pages/Pos/Chart"
export default {
    components: {
        Button,
        JetButton,
        Items,
        Chart
    },
    props: [
        'items'
    ],
    data() {
        return {
            itemChart: []
        };
    },
    name: "Index"
}
</script>

<style scoped>

</style>
