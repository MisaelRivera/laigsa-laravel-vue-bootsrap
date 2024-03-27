<script setup>
    import CustomInput from '@/Components/Shared/CustomInput.vue';
    import GuestLayout from '@/Layouts/GuestLayout.vue';
    import Modal from '@/Components/Shared/Modal.vue';
    import EmittingButton from '@/Components/EmittingButton.vue';
    import Autocomplete from '@/Components/Shared/Autocomplete.vue';
    import { ref } from 'vue';
    const props = defineProps({
        title: String
    });

    const cities = [
        'Denver',
        'Dakota',
        'Durango',
        'Chicago',
        'Chihuahua',
        'Texas',
        'Tamaulipas',
        'Tlaxcala',
        'Miami',
        'Michoacan',
        'Minesota',
        'Michigan',
        'Minieapolis',
        'Tamazula'
    ];
    const input = ref(null);
    const cityName = ref('');
    const myAction = (needle) => {
        console.log(needle);    
        cityName.value = 'Tama';
    }
</script>
<template>
    <GuestLayout>

    </GuestLayout>
    <h1>{{ title }}</h1>
    <div class="row">
        <CustomInput 
            name="name"
            text="Name"
            offset="offset-md-2"/>
        <div class="col-md-3">
            <Modal
                title="My title"
                btn-text="Show"
                target="test">
                <table class="table table-bordered">
                    <tr>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Gender</th>
                    </tr>
                    <tr>
                        <td>Misael</td>
                        <td>30</td>
                        <td>Male</td>
                    </tr>
                </table>
            </Modal>
        </div>
    </div>
    <div class="row">
        <div class="col-6 offset-3">
            <div class="mb-4">
                <Autocomplete 
                    text="City"
                    name="city"
                    url="/clients"
                    v-model="cityName"/>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-4 offset-4">
            <div class="mb-4">
                <EmittingButton @text-has-needle="(needle) => myAction(needle)" text="My text"
                    :element="input"/>
            </div>
        </div>
        <div class="col-2">
            <input 
                type="text"
                ref="input"
                class="form-control">
        </div>
        <div class="col-2">
            <p>{{ cityName }}</p>
        </div>
    </div>
</template>
