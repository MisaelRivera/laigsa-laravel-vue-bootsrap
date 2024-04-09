<script setup>
    import { Link } from '@inertiajs/vue3';
    const props = defineProps({
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
    <Link :href="url" class="link">
        <i 
            class="fas fa-plus"
            :class="[size, ...classes]"></i>
    </Link>
</template>
<style>
    .link {
        text-decoration: none;
    }

    .edit-btn {
        background-color: rgb(51, 122, 183);
        border-radius: 50%;
        color: white;
        text-align: center;
        padding-top: 0.225rem;
    }

    .sm {
        font-size: 0.75rem;
        height: 1.25rem;
        width: 1.25rem;
    }

    .md {
        font-size: 1.5rem;
        height: 2.175rem;
        width: 2.175rem;
    }
</style>