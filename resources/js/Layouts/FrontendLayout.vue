<template>
    <div>
        <NavBar />
        <div class="mt-4 mx-4 justify-center">
            <div v-if="$page.props.flash.message"
                class="alert alert-info p-5 rounded text-center font-bold bg-blue-200 text-blue-700">
                {{ $page.props.flash.message }}
            </div>
            <div v-if="$page.props.flash.success"
                class="alert alert-success p-5 rounded text-center font-bold bg-green-200 text-green-700">
                {{ $page.props.flash.success }}
            </div>
            <div v-if="$page.props.flash.error"
                class="alert alert-danger alert p-5 rounded text-center font-bold bg-red-200 text-red-700">
                {{ $page.props.flash.error }}
            </div>
        </div>
    </div>
    <slot />
</template>

<script setup>
    import NavBar from '@/Components/NavBar.vue';
</script>