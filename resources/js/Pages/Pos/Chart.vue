<template>
    <div class="row">
        <div class="col-lg-4">Date</div>
        <div class="col-lg-8" v-text="date"></div>
    </div>
    <div class="row">
        <div class="col-lg-4">Cashier</div>
        <div class="col-lg-8">Yhose</div>
    </div>
    <h3 class="text-center mt-3">Items</h3>
    <form>
        <template v-for="(item, index) in itemChart" :key="index">
            <ChartItem
                v-if="item !== undefined"
                :index="index"
                :item="item"
                :itemChart="itemChart"
                :form="form"
            />
        </template>
        <div class="row mb-2">
            <div class="col-6">
                <div class="d-grid">
                    <button class="btn btn-block btn-danger">Reset</button>
                </div>
            </div>
            <div class="col-6">
                <div class="d-grid">
                    <button class="btn btn-block btn-primary">Pay</button>
                </div>
            </div>
        </div>
    </form>
</template>

<script>

import ChartItem from "@/Pages/Pos/ChartItem";
import Button from "@/Jetstream/Button";

export default {
    components: {
        Button,
        ChartItem
    },
    props: [
        'itemChart'
    ],
    mounted() {
        setInterval(() => {
            this.date = new Date();
        }, 1000);
    },
    data() {
        return {
            date: new Date(),
            form: this.$inertia.form({
                qty: []
            })
        };
    },
    name: "Chart"
}
</script>

<style scoped>

</style>
