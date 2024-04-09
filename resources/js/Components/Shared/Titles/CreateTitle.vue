<script setup>
    import { Link } from '@inertiajs/vue3';
    defineProps({
        title: String,

        defaultUrl: String,

        createtUrl: String,

        classes: {
            type: Array,
            default: [],
        },
    });
</script>
<template>
    <h2 :class="[...classes]">
        <Link :href="defaultUrl">
            {{ title }} 
        </Link>
        <Plus 
            :url="createtUrl"
            :classes="['ml-2']"/>
    </h2>
</template>