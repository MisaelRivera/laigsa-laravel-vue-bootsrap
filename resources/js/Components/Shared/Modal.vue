<script setup>
    const props = defineProps({
        btnText: String,

        hasActionButon: {
            type: Boolean,
            default: false,
        },

        closeButtonText: {
            type: String,
            default: 'Cerrar',
        },

        closeButtonColor: {
            type: String,
            default: 'btn-secondary',
        },

        actionButtonText: {
            type: String,
            default: '',
        },

        actionButtonColor: {
            type: String,
            default: 'btn-primary',
        },

        actionButtonFunction: {
            type: Function,
            default: () => function () {}
        },

        target: String,

        title: String,

    });
</script>
<template>
    <!-- Button trigger modal -->
    <button 
        type="button" 
        class="btn btn-primary" 
        data-bs-toggle="modal" 
        :data-bs-target="`#${target}`">
        {{ btnText }}
    </button>

    <!-- Modal -->
    <div 
        class="modal fade" 
        :id="target" 
        tabindex="-1" 
        aria-labelledby="exampleModalLabel" 
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 
                        class="modal-title fs-5" 
                        id="exampleModalLabel">
                        {{ title }}
                    </h1>
                    <button 
                        type="button" 
                        class="btn-close" 
                        data-bs-dismiss="modal" 
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <slot></slot>
                </div>
                <div class="modal-footer">
                    <button 
                        type="button" 
                        :class="['btn', closeButtonColor]" 
                        data-bs-dismiss="modal">
                        {{ closeButtonText }}
                    </button>
                    <button 
                        v-if="hasActionButon"
                        type="button" 
                        :class="['btn', actionButtonColor]">
                        {{ actionButtonText }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>