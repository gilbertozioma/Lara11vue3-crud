<template>

    <Head title="Create Products" />
    <FrontendLayout>
        <div class="mt-4 mx-4 flex justify-center">
            <div class="max-w-md">
                <div class="flex justify-between">
                    <h5>Create Products</h5>
                    <Link :href="route('home')"
                        class="float-end bg-red-600 hover:bg-red-800 text-white font-bold inline-block mb-4 p-2 rounded">
                        Back
                    </Link>
                </div>
                <form @submit.prevent="saveProduct()">
                    <div class="grid grid-cols-12 gap-4">
                        <div class="col-span-12">
                            <div class="mb-3">
                                <label>Product Name</label>
                                <input type="text" v-model="form.name" class="py-1 w-full">
                                <div v-if="errors.name" class="text-red-500">{{ errors.name }}</div>
                            </div>
                            <div class="mb-3">
                                <label>Product Price</label>
                                <input type="text" v-model="form.price" class="py-1 w-full">
                                <div v-if="errors.price" class="text-red-500">{{ errors.price }}</div>
                            </div>
                            <div class="mb-3">
                                <button type="submit" :disabled="form.processing"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold inline-block me-2 py-2 px-4 mb-4 p-3 rounded">
                                    <span v-if="form.processing">Saving...</span>
                                    <span v-else>Save</span>
                                </button>
                                <Link :href="route('products.index')"
                                    class="bg-gray-500 hover:bg-gray-700 text-white font-bold inline-block py-2 px-4 mb-4 p-3 rounded">
                                Cancle
                                </Link>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </FrontendLayout>
</template>

<script setup>
import FrontendLayout from "@/Layouts/FrontendLayout.vue";
import { Head, Link, useForm} from '@inertiajs/vue3';
defineProps({
    errors: Object,
    
});

const form = useForm({
    name: '',
    price: '',
});

const saveProduct = () => {
    const response = form.post(route('products.store'));
    if (response) {
        form.reset();
    }

};

</script>