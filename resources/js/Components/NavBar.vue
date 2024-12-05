<script setup>
import { Link } from '@inertiajs/vue3';
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
    <nav v-if="canLogin" class="flex justify-between items-center p-4 bg-gray-200 navbar navbar-expand-lg navbar-light bg-light">
        <div class="text-lg">
            <Link class="text-dark" :href="route('home')">Lara11Vue3</Link>
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
                <Link v-if="$page.props.auth.user" :href="route('dashboard')"
                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                Dashboard
                </Link>

                <template v-else>
                    <Link :href="route('login')"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                    Log in
                    </Link>

                    <Link v-if="canRegister" :href="route('register')"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                    Register
                    </Link>
                </template>
            </ul>
        </div>
    </nav>
</template>