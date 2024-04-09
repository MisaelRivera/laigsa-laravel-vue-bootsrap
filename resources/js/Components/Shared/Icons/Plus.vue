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

    .add {
        background: rgb(125, 207, 125);
        border-radius: 50%;
        color: white;
        font-weight: bold;
        text-align: center;
    }

    .md {
        font-size: 2rem;
        height: 2.1rem;
        width: 2.25rem;
    }

    .lg {
        font-size: 3rem;
        height: 3.25rem;
        width: 3.25rem;
    }
</style>