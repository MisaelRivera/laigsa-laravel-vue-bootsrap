<script setup>
    import Dropdown from '@/Components/Shared/Dropdown.vue';
</script>
<template>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="/">
                Laboratorio de Analisis Industriales del Guadiana S. A. de C. V.
            </a>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <Dropdown
                    btn-text="Ordenes">
                    <li>
                        <a 
                            href="/orders"
                            class="dropdown-item">Ver ordenes</a>
                    </li>
                    <li>
                        <a 
                            href="/orders/new"
                            class="dropdown-item">Crear orden</a>
                    </li>
                    <li>
                        <a 
                            href="/orders-info"
                            class="dropdown-item">Ordenes info</a>
                    </li>
                </Dropdown>
                <Dropdown btn-text="Clientes">
                    <li>
                        <a 
                            href="/clients"
                            class="dropdown-item">Ver clientes</a>
                    </li>
                    <li>
                        <a 
                            href="/clients/new"
                            class="dropdown-item">Crear cliente</a>
                    </li>
                </Dropdown>
                <li class="nav-item">
                    <a 
                        class="nav-link" 
                        aria-disabled="true"
                        href="/contacto">
                        Encuestas
                    </a>
                </li>
                <li class="nav-item">
                    <a 
                        class="nav-link" 
                        aria-disabled="true"
                        href="/login">
                        Cesavedac
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</template>