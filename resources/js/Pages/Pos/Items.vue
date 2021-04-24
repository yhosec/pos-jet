<template>
    <div class="row">
        <div v-for="item in items" class="col-lg-3 col-md-4 col-sm-6">
            <div class="card mb-2" :title="item.name" @click="add(item)">
                <img src="/images/item.png" class="card-img-top mx-auto pt-2 d-block" style="width: 100px;">
                <div class="card-body">
                    <p class="card-text text-uppercase fs-6 text-center text-truncate">{{ item.name }}</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: [
        'items',
        'itemChart'
    ],
    methods: {
        add: function (item) {
            delete this.itemChart.push(item);
        }
    },
    name: "Items"
}
</script>

<style scoped>

</style>
