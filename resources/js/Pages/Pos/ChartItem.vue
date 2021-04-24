<template>
    <div class="row border-bottom mb-2">
        <div class="col-lg-3 col-md-3 col-sm-12 text-center" :title="item.name">
            <div class="text-end"
                 style="width: 3rem;
                    height: 3rem;
                    background-image: url('/images/item.png');
                    background-position: center;
                    background-repeat: no-repeat;
                    background-size: contain;">
                <i class="fa fa-trash-alt text-danger"
                   title="Delete"
                   @click="remove(index)"
                ></i>
            </div>
            <span style="font-size: 0.5rem;">Rp. {{ item.price * qty[index] }}</span>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <input type="text" class="form-control form-control-sm"
                   placeholder="Qty"
                   v-model="form.qty[index]">
        </div>
        <div class="col-lg-5 col-md-5 col-sm-12">
            Rp. 12.000,-
        </div>
    </div>
</template>

<script>
export default {
    props: [
        'item',
        'index',
        'itemChart',
        'form'
    ],
    methods: {
        remove: function (index) {
            delete this.itemChart[index];
        }
    },
    name: "ChartItem"
}
</script>

<style scoped>

</style>
