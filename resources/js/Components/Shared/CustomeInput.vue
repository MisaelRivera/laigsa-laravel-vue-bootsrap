<script setup>
    const emit = defineEmits(['update:modelValue', 'custom-input']);
    const props = defineProps({
        modelValue: {
            required: true,
        },
        classes: {
            type: Array,
            default: () => []
        },
        
        disabled: {
            type: Boolean,
            default: false
        },
        
        min: {
            type: String,
            default: null,
        },

        max: {
            type: String,
            default: null,
        },

        name: String,

        step: {
            type: String,
            default: null,
        },

        text: String,

        type: {
            type: String,
            default: 'text',
        }

    });
    const id = props.name.split('_').join('-');
    const updateValue = (ev) => {
        emit('update:modelValue', ev.target.value);
        emit('custom-input');
    };
</script>
<template>
    <input 
        :type="type"
        :class="[...classes]"
        @input="updateValue"
        :name="name"
        :step="step"
        :min="min"
        :max="max"
        :id="id"
        :value="modelValue"
        :placeholder="text"
        :disabled="disabled">
</template>