<script setup>
    const emit = defineEmits(['update:modelValue', 'custom-input']);
    const props = defineProps({
        
        classes: {
            type: Array,
            default: () => []
        },
        
        disabled: {
            type: Boolean,
            default: false
        },

        error: {
            type: String,
            default: '',
        },
        
        required: {
            type: Boolean,
            default: false,
        },
        
        labelText: {
            type: String,
        },

        labelAlignment: {
            type: String,
            default: 'text-left'
        },

        
        max: {
            type: String,
            default: null,
        },
        
        min: {
            type: String,
            default: null,
        },
        
        modelValue: {
            required: true,
        },

        name: String,

        offset: {
            type: String,
            default: '',
        },

        placeholder: {
            type: String,
            default: null,
        },

        size: {
            type: String,
            default: 'col-md-4',
        },

        step: {
            type: String,
            default: null,
        },

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
    <div :class="[...classes, size, offset]">
        <div :class="['mb-4', labelAlignment]">
            <label :for="id">
                {{ text }}
            </label>
            <input 
                :type="type"
                class="form-control"
                @input="updateValue"
                :name="name"
                :step="step"
                :min="min"
                :max="max"
                :id="id"
                :value="modelValue"
                :placeholder="text"
                :disabled="disabled"
                :required="required">
            <p v-if="error" class="text-danger">{{ error }}</p>
        </div>
    </div>
</template>