<script setup>
    import { reactive } from 'vue';
    import { router } from '@inertiajs/vue3';
    import GuestLayout from '@/Layouts/GuestLayout.vue';
    import CustomInput from '@/Components/Shared/CustomInput.vue';

    defineProps({errors: Object});

    const form = reactive({
        email: null,
        password: null,
    });

    function login () {
        router.post('/login', form);
    }
</script>
<template>
    <GuestLayout>
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <h2 class="text-center">Login</h2>
                    <h3 class="text-center subtitle">Introduce tu usuario y contraseña para acceder.</h3>
                    <form @submit.prevent="login">
                        <CustomInput 
                            size="col-md-12"
                            text="Correo"
                            v-model="form.email"
                            name="email"
                            type="email"/>
                        <CustomInput 
                            size="col-md-12"
                            text="Password"
                            v-model="form.password"
                            name="password"
                            type="password"/>
                        <button class="btn btn-success">
                            Ingresar
                        </button>
                        <div 
                            class="py-2 px-4 rounded-md bg-red-200 text-red-400 mt-1"
                            v-if="errors.email">{{ errors.email }}</div>
                    </form>
                </div>
            </div>
        </div>
    </GuestLayout>
</template>
<style>
    .subtitle {
        font-size: 1.125rem;
    }
</style>