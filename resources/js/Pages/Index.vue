<script setup>
    import CustomInput from '@/Components/Shared/CustomInput.vue';
    import Modal from '@/Components/Shared/Modal.vue';
    const props = defineProps({
        title: String
    });
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
</template>