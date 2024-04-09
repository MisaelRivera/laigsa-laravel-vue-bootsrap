<script setup>
    const props = defineProps({
        btnText: {
            type: String,
            required: true
        },

        btnColor: {
            type: String,
            default: 'btn-secondary',
        },

        inNav: {
            type: Boolean,
            default: true,
        }
    });
</script>
<template>
    <div class="dropdown" v-if="!inNav">
        <button 
            class="btn dropdown-toggle"
            :class="[btnColor]"
            type="button"
            data-bs-toggle="dropdown"
            aria-expanded="false">
            {{ btnText }}
        </button>
        <ul class="dropdown-menu">
            <slot></slot>
        </ul>
    </div>
    <li class="nav-item dropdown" v-else>
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{ btnText }}
        </a>
        <ul class="dropdown-menu">
            <slot></slot>
        </ul>
    </li>
</template>