<template>

    <Head title="Products" />
    <FrontendLayout>
        <div class="mt-4 mx-4 flex justify-center">
            <div class="w-auto box-border p-4 border-2">
                <div class="flex justify-between">
                    <h5 class="text-white">Product Lists</h5>
                    <Link :href="route('products.create')"
                        class="float-end bg-blue-500 hover:bg-blue-700 text-white font-bold p-2 mb-4">
                    Create Product
                    </Link>
                </div>
                <table class="bg-slate-800 border border-gray-500 text-slate-400 rounded shadow">
                    <thead class="bg-slate-700 text-center">
                        <tr class="justify-center text-center">
                            <th class="py-2 px-4 text-left border">ID</th>
                            <th class="py-2 px-4 text-left border">Name</th>
                            <th class="py-2 px-4 text-left border">Price</th>
                            <th class="py-2 px-4 text-left border">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(product, index) in products" :key="index">
                            <td class="py-2 px-4 border">{{ product.id }}</td>
                            <td class="py-2 px-4 border">{{ product.name }}</td>
                            <td class="py-2 px-4 border">{{ product.price }}</td>
                            <td class="py-2 px-4 border">
                                <Link :href="route('products.show', product.id)"
                                    class="px-2.5 oy-1 py-1.5 p-2 mb-4 me-2 text-sm bg-blue-300 hover:bg-blue-500 text-slate-950 font-bold inline-block">
                                Show
                                </Link>
                                <Link :href="route('products.edit', product.id)"
                                    class="px-2.5 oy-1 py-1.5 p-2 mb-4 me-2 text-sm bg-green-500 hover:bg-green-700 text-slate-950 font-bold inline-block">
                                Edit
                                </Link>
                                <button type="submit"
                                    class="px-2.5 oy-1 py-1.5 p-2 mb-4 text-sm bg-red-500 hover:bg-red-700 text-slate-950 font-bold inline-block"
                                    @click="deleteProduct(product.id)">
                                    Delete
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </FrontendLayout>
</template>

<script setup>
import FrontendLayout from "@/Layouts/FrontendLayout.vue";
import { Head, Link, useForm } from '@inertiajs/vue3';

defineProps({
    products: Array,
});

const product = useForm({});
const deleteProduct = (id) => {
    if (confirm('Are you sure you want to delete this product?')) {
        product.delete(route('products.destroy', id));
    }
};

</script>
