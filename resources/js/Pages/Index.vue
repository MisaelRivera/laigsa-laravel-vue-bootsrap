<script setup>
    import CustomInput from '@/Components/Shared/CustomInput.vue';
    import Modal from '@/Components/Shared/Modal.vue';
    import EmittingButton from '../Components/EmittingButton.vue';
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

    const matchedCities = ref([]);
    const cityInput = ref(null);
    const input = ref(null);
    const handleSearch = (ev) => {
        const value = ev.target.value;
        const regex = new RegExp('^' + value);
        matchedCities.value = cities.filter(city => regex.test(city));
    }

    const handleClick = (ev, element) => {
        const target = ev.target;
        element.value = target.innerText;
        matchedCities.value = [];
    };

    const myAction = (needle) => {
        console.log(needle);    
    }
</script>
<template>
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
                <label for="city">City</label>
                <input 
                    type="text"
                    name="city"
                    id="city"
                    ref="cityInput"
                    class="form-control"
                    @input="handleSearch">
                <ul 
                    v-if="matchedCities"
                    class="options">
                    <li 
                        v-for="(city, index) in matchedCities"
                        @click="(ev) => handleClick(ev, cityInput)"
                        :key="index">
                        {{ city }}
                    </li>
                </ul>
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
        <div class="col-3">
            <input 
                type="text"
                ref="input"
                class="form-control">
        </div>
    </div>
</template>
<style>
    .options {
        list-style: none;
        padding-left: 0;
    }

    .options li {
        padding: 0.25rem 0.5rem;
        border: 1px solid #f1f1f1;
    }
</style>