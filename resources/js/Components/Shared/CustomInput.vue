<script setup>
    const props = defineProps({
        labelAlignment: {
            type: String,
            default: 'text-left'
        },

        classes: {
            type: Array,
            default: () => []
        },
        
        disabled: {
            type: Boolean,
            default: false
        },
        
        name: String,

        offset: {
            type: String,
            default: '',
        },

        size: {
            type: String,
            default: 'col-md-4',
        },

        text: String,

        type: {
            type: String,
            default: 'text',
        }

    });
    const id = props.name.split('_').join('-');
</script>
<template>
    <div :class="[...classes, size, offset]">
        <div :class="['mb-4', labelAlignment]">
            <label :for="id">
                {{ text }}
            </label>
            <input 
                :type="type"
                class="form-control"
                :name="name"
                :id="id"
                :placeholder="text"
                :disabled="disabled">
        </div>
    </div>
</template>