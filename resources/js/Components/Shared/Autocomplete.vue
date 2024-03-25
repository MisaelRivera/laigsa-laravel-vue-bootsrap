<script setup>
    const props = defineProps({
        text: String,
        name: String,
    });
    
    const id = props.name.split('_').join('-');
    const input = ref(null),
          matchedItems = ref([]);

    const handleSearch = (ev) => {
        const value = ev.target.value;
        const regex = new RegExp(`.*${value}.*`);
        matchedItems.value = cities.filter(city => regex.test(city));
    };
</script>
<template>
    <label :for="id">{{ text }}</label>
    <input 
        type="text"
        :name="name"
        :id="id"
        ref="input"
        class="form-control"
        @input="handleSearch"
        :placeholder="text">
    <ul 
        v-if="matchedItems"
        class="options">
        <li 
            v-for="(item, index) in matchedItems"
            @click="(ev) => handleClick(ev, input)"
            :key="index">
            {{ item }}
        </li>
    </ul>
</template>