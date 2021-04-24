<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Master Data / Items / Create
            </h2>
        </template>

        <jet-validation-errors class="mb-4" />

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <form @submit.prevent="submit">
                        <div class="mt-4">
                            <jet-label for="code" value="Code" />
                            <jet-input id="code" type="text" v-model="form.code" required autofocus autocomplete="name" />
                        </div>

                        <div class="mt-4">
                            <jet-label for="name" value="Name" />
                            <jet-input id="name" type="text" v-model="form.name" required autofocus autocomplete="name" />
                        </div>

                        <div class="mt-4">
                            <jet-label for="qty" value="Quantity" />
                            <jet-input id="qty" type="number" v-model="form.qty" required />
                        </div>

                        <div class="mt-4">
                            <jet-label for="price" value="Price" />
                            <jet-input id="price" type="number" v-model="form.price" required />
                        </div>

                        <div class="mt-4">
                            <button class="btn btn-block btn-primary" :disabled="form.processing">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import JetInput from "@/Jetstream/Input";
import JetLabel from "@/Jetstream/Label";
import JetValidationErrors from "@/Jetstream/ValidationErrors";
export default {
    name: "Create",
    components: {
        JetInput,
        JetLabel,
        JetValidationErrors
    },
    data() {
        return {
            form: this.$inertia.form({
                code: '',
                name: '',
                qty: 0,
                price: 0
            })
        }
    },

    methods: {
        submit() {
            this.form.post(this.route('master.items.do-add'), {
                onFinish: () => this.form.reset('code', 'name', 'qty', 'price'),
            })
        }
    }
}
</script>

<style scoped>

</style>
