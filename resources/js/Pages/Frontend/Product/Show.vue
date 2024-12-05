<template>

    <Head title="Product Details" />
    <FrontendLayout>
        <div class="mt-4 mx-4 flex justify-center">
            <div class="max-w-md">
                <div class="flex justify-between mb-10">
                    <h5>Product Details</h5>
                    <Link :href="route('home')"
                        class="bg-red-600 hover:bg-red-800 text-white font-bold inline-block py-2 px-4 mb-4 p-3 rounded">
                    Back
                    </Link>
                </div>
                <div class="grid grid-cols-12 gap-6 ">
                    <div class="col-span-12">
                        <div class="mb-3">
                            <label>Product Name:</label>
                            <span class="font-bold float-end">{{ product.name }}</span>
                        </div>
                        <div class="mb-3">
                            <label>Product Price:</label>
                            <span class="font-bold float-end">{{ product.price }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </FrontendLayout>
</template>

<script setup>
import FrontendLayout from "@/Layouts/FrontendLayout.vue";
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    product: Object,
});
</script>
