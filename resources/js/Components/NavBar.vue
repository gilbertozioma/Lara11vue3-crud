<template>
    <nav class="flex justify-between items-center p-4 bg-gray-200 navbar navbar-expand-lg navbar-light bg-light">
        <div class="text-lg">
            Navbar
        </div>
        <div>
            <ul class="flex gap-x-4 me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <Link class="text-dark" :href="route('home')">Home</Link>
                </li>
                <li class="nav-item">
                    <Link class="text-dark" :href="route('about')">About Us</Link>
                </li>
                <li class="nav-item">
                    <Link class="text-dark" :href="route('contact')">Contact Us</Link>
                </li>
            </ul>
        </div>
    </nav>
</template>

<script setup>
    import { Link } from '@inertiajs/vue3';

    defineProps({
        href: {
            type: String,
            required: true,
        },
    });
</script>