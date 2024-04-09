<script setup>
    import { Link } from '@inertiajs/vue3';
    const props = defineProps({
        icon: String,

        classes: {
            type: Array,
            default: [],
        },

        url: String,

        size: {
            type: String,
            default: 'md',
        },
    });
</script>
<template>
    <Link :href="url">
        <i 
            class="fas"
            :class="[icon, ...classes]"></i>
    </Link>
</template>