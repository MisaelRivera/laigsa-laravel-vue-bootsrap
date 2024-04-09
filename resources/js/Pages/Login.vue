<script setup>
    import { useForm } from '@inertiajs/vue3';
    import GuestLayout from '@/Layouts/GuestLayout.vue';
    import Input from '@/Components/Shared/Input.vue';

    defineProps({errors: Object});

    const form = useForm({
        email: null,
        password: null,
    });

    function login () {
        console.log('Here')
        form.post('/login');
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
                        <Input 
                            size="col-md-12"
                            text="Correo"
                            v-model="form.email"
                            name="email"
                            label-text="Email"
                            :error="form.errors.email"/>
                        <Input 
                            size="col-md-12"
                            text="Password"
                            v-model="form.password"
                            name="password"
                            type="password"
                            label-text="Password"
                            :error="form.errors.password"/>
                        <button 
                            class="btn btn-success">
                            Ingresar
                        </button>
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