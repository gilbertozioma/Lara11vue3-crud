<script setup>
import { Head, Link } from '@inertiajs/vue3';
import FrontendLayout from "@/Layouts/FrontendLayout.vue";

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    aboutUsPage: {
        type: Boolean,
    },
    contactUsPage: {
        type: Boolean,
    },
});
</script>
<template>
    <Head title="Home" />
    <FrontendLayout>

        <nav v-if="canLogin"
            class="flex justify-between items-center p-4 bg-gray-200 navbar navbar-expand-lg navbar-light bg-light">
            <div class="text-lg">
                <Link class="text-dark" href="/">Lara11Vue3</Link>
            </div>
            <div>
                <ul class="flex gap-x-4 me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <Link class="text-dark" href="/">Home</Link>
                    </li>
                    <li class="nav-item">
                        <Link class="text-dark" :href="route('about')">About Us</Link>
                    </li>
                    <li class="nav-item">
                        <Link class="text-dark" :href="route('contact')">Contact Us</Link>
                    </li>
                    <Link v-if="$page.props.auth.user" :href="route('dashboard')"
                        class="text-dark">
                        Dashboard
                    </Link>

                    <template v-else>
                        <Link :href="route('login')"
                            class="text-dark">
                            Log in
                        </Link>

                        <Link v-if="canRegister" :href="route('register')"
                            class="text-dark">
                            Register
                        </Link>
                    </template>
                </ul>
            </div>
        </nav>
    </FrontendLayout>
</template>