<script setup>
    import ModalBtn from '@/Components/Shared/ModalBtn.vue';
    import Modal from '@/Components/Shared/Modal.vue';
</script>
<template>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="/">
                Laboratorio de Analisis Industriales del Guadiana S. A. de C. V.
            </a>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/nosotros">
                        Nosotros
                    </a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Servicios
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item">
                            <ModalBtn 
                                btnText="Análisis de aguas" 
                                target="servicios-aguas"
                                :btn-style="false"/>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item">
                            <ModalBtn 
                                btnText="Análisis de alimentos" 
                                target="servicios-alimentos"
                                :btn-style="false"/>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item">
                            <ModalBtn 
                                btnText="Análisis de residuos" 
                                target="servicios-residuos"
                                :btn-style="false"/>
                        </a>
                    </li>
                </ul>
                </li>
                <li class="nav-item">
                    <a 
                        class="nav-link" 
                        aria-disabled="true"
                        href="/contacto">
                        Contacto
                    </a>
                </li>
                <li class="nav-item">
                    <a 
                        class="nav-link" 
                        aria-disabled="true"
                        href="/login">
                        Login
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <Modal 
        target="servicios-aguas"
        size="modal-lg">
        <template #header>
            <h4 class="modal-title">Análisis de aguas</h4>
        </template>
        <h4 class="modal-title mb-3">Mediciones directas y Fisicoquímicas</h4>
        <table class='servicesTable'>
            <thead>
                <tr>
                    <th>Prueba</th>
                    <th>Norma y/o Metodo de Referencia</th>
                </tr>
            </thead>
            <tr>
                <td>
                    Muestreo en aguas residuales.
                </td>
                <td>
                    NMX-AA-003-1980
                </td>
            </tr>
            <tr>
                <td>
                    Muestreo en agua potable.
                </td>
                <td>
                    NOM-230-SSA1-2002
                </td>
            </tr>
            <tr>
                <td>
                    Medición del pH en aguas naturales, residuales y residuales tratadas. - Método de prueba
                </td>
                <td>
                    NMX-AA-008-SCFI-2016
                </td>
            </tr>
            <tr>
                <td>
                    Análisis de agua - Medición de sólidos sedimentables en aguas naturales, residuales y residuales tratadas – Método de prueba.
                </td>
                <td>
                    NMX-AA-004-SCFI-2013
                </td>
            </tr>
            <tr>
                <td>
                    Análisis de agua - Medición de grasas y aceites recuperables en aguas naturales, residuales y residuales tratadas.
                </td>
                <td>
                    NMX-AA-005-SCFI-2013
                </td>
            </tr>
            <tr>
                <td>
                    Determinación de materia flotante en aguas residuales y residuales tratadas.
                </td>
                <td>
                    NMX-AA-006-SCFI-2010
                </td>
            </tr>
            <tr>
                <td>
                    Análisis de agua - Medición de la Temperatura en aguas naturales, residuales y residuales tratadas – Método de prueba.
                </td>
                <td>
                    NMX-AA-007-SCFI-2013
                </td>
            </tr>
            <tr>
                <td>
                    Determinación de oxígeno disuelto en aguas naturales, residuales y residuales tratadas.
                </td>
                <td>
                    NMX-AA-012-SCFI-2001
                </td>
            </tr>
            <tr>
                <td>
                    Medición de nitrógeno total Kjeldahl en aguas naturales, residuales y residuales tratadas (Nitrógeno total, amoniacal y orgánico Kjeldahl).
                </td>
                <td>
                    NMX-AA-026-SCFI-2010
                </td>
            </tr>
            <tr>
                <td>
                    Medición de la conductividad eléctrica en aguas naturales, residuales y residuales tratadas.
                </td>
                <td>
                    NMX-AA-093-SCFI-2018
                </td>
            </tr>
            <tr>
                <td>
                    Determinación de la demanda bioquímica de oxígeno en aguas naturales, residuales (DBO5) y residuales tratadas.
                </td>
                <td>
                    NMX-AA-028-SCFI-2001
                </td>
            </tr>
            <tr>
                <td>
                    Medición de sólidos y sales disueltas en aguas naturales, residuales y residuales tratadas. Método de prueba.
                </td>
                <td>
                    NMX-AA-034-SCFI-2015
                </td>
            </tr>
            <tr>
                <td>
                    Determinación de dureza total en aguas naturales, residuales y residuales tratadas
                </td>
                <td>
                    NMX-AA-072-SCFI-2001
                </td>
            </tr>
            <tr>
                <td>
                    Medición del ión sulfato en aguas naturales, residuales y residuales tratadas.
                </td>
                <td>
                    NMX-AA-074-SCFI-2014
                </td>
            </tr>
            <tr>
                <td>
                    Determinación de cloruros totales en aguas naturales, residuales y residuales tratadas
                </td>
                <td>
                    NMX-AA-073-SCFI-2001
                </td>
            </tr>
            <tr>
                <td>
                    Método para la determinación de Cloro Residual Libre.
                </td>
                <td>
                    NOM-201-SSA1-2015. Inciso A.3.10
                </td>
            </tr>
            <tr>
                <td>
                    Fluoruros Método potenciómetrico
                </td>
                <td>
                    NOM-201-SSA1-2015. Inciso A.3.13
                </td>
            </tr>
            <tr>
                <td>
                    Método para la determinación de color por comparación visual.
                </td>
                <td>
                    NOM-201-SSA1-2015. Inciso A.3.1
                </td>
            </tr>
            <tr>
                <td>
                    Método para la determinación de turbiedad.
                </td>
                <td>
                    NOM-201-SSA1-2015. Inciso A.3.2
                </td>
            </tr>
            <tr>
                <td>
                    Dureza de calcio.
                </td>
                <td>
                    SM 3500-CaB 1988
                </td>
            </tr>
            <tr>
                <td>
                    Dureza de magnesio.
                </td>
                <td>
                    SM 3500-CaB 1988
                </td>
            </tr>
            <tr>
                <td>
                    Determinación de acidez y alcalinidad en aguas naturales, residuales y residuales tratadas.
                </td>
                <td>
                    NMX-AA-036-SCFI-2001
                </td>
            </tr>
            <tr>
                <td>
                    Determinación de cloro total método Iodometrico.
                </td>
                <td>
                    NMX-AA-100-1987
                </td>
            </tr>
        </table>
        <h4 class="modal-title mb-3 mt-3">Espectrofotométricos UV/VIS/IR</h4>
        <table class='servicesTable'>
            <thead>
                <tr>
                    <th>Prueba</th>
                    <th>Norma y/o Metodo de Referencia</th>
                </tr>
            </thead>
            <tr>
                <td>
                    Color.
                </td>
                <td>
                    NMX-AA-017-SCFI-2021
                </td>
            </tr>
            <tr>
                <td>
                    Determinación de la demanda química de oxígeno en aguas naturales, residuales y residuales tratadas. Parte 2 - determinación del índice de la demanda química de oxígeno – método de tubo sellado a pequeña escala.
                </td>
                <td>
                    NMX-AA-030/2-SCFI-2011
                </td>
            </tr>
            <tr>
                <td>
                    Determinación de fluoruros en aguas naturales, residuales y residuales tratadas.
                </td>
                <td>
                    NMX-AA-077-SCFI-2001
                </td>
            </tr>
            <tr>
                <td>
                    Determinación de nitratos en aguas naturales, potables, residuales y residuales tratadas.
                </td>
                <td>
                    NMX-AA-079-SCFI-2001
                </td>
            </tr>
            <tr>
                <td>
                    Determinación de nitrógeno de nitritos en agua.
                </td>
                <td>
                    NMX-AA-099-SCFI-2006
                </td>
            </tr>
            <tr>
                <td>
                    Medición de cromo hexavalente en aguas naturales, salinas, residuales y residuales tratadas. Método de prueba.
                </td>
                <td>
                    NMX-AA-044-SCFI-2014
                </td>
            </tr>
            <tr>
                <td>
                    Determinación de fósforo total en aguas naturales, residuales y residuales tratadas.
                </td>
                <td>
                    NMX-AA-029-SCFI-2001
                </td>
            </tr>
            <tr>
                <td>
                    Cianuros.
                </td>
                <td>
                    NMX-AA-058-SCFI-2001
                </td>
            </tr>
            <tr>
                <td>
                    Determinación de sustancias activas al azul de metileno (SAAM) en aguas naturales, potables, residuales y residuales tratadas.
                </td>
                <td>
                    NMX-AA-039-SCFI-2001
                </td>
            </tr>
        </table>
        <h4 class="modal-title mb-3 mt-3">Espectrofotometría de Absorción atómica</h4>
        <table class='servicesTable'>
            <thead>
                <tr>
                    <th>Prueba</th>
                    <th>Norma y/o Metodo de Referencia</th>
                </tr>
            </thead>
            <tr>
                <td>
                    Medición de metales por absorción atómica en aguas naturales, potables, residuales y residuales tratadas. (As, Pb, Cd, Hg, Cu, Ni, Cr, Fe, Mn, Na, K, Zn, Ca, Mg, Ba, Al y Ag).
                </td>
                <td>
                    NMX-AA-051-SCFI-2016
                </td>
            </tr>
        </table>
        <h4 class="modal-title mb-3 mt-3">Microbiología</h4>
        <table class='servicesTable'>
            <thead>
                <tr>
                    <th>Prueba</th>
                    <th>Norma y/o Metodo de Referencia</th>
                </tr>
            </thead>
            <tr>
                <td>
                    Medición del número de huevos de helminto en aguas residuales y residuales tratadas por observación microscópica - método de prueba.
                </td>
                <td>
                    NMX-AA-113-SCFI-2012
                </td>
            </tr>
            <tr>
                <td>
                    Enumeración de organismos coliformes totales, organismos coliformes fecales (termotolerantes) y escherichia coli - Método del número más probable en tubos múltiples.
                </td>
                <td>
                    NMX-AA-042-SCFI-2015
                </td>
            </tr>
            <tr>
                <td>
                    Enumeración de organismos patógenos: enterococos fecales en aguas naturales, residuales, residuales tratadas, salinas y costeras
                </td>
                <td>
                    NMX-AA-167-SCFI-2017
                </td>
            </tr>
        </table>
        <h4 class="modal-title mb-3 mt-3">Organoleptico</h4>
        <table class='servicesTable'>
            <thead>
                <tr>
                    <th>Prueba</th>
                    <th>Norma y/o Metodo de Referencia</th>
                </tr>
            </thead>
            <tr>
                <td>
                    Olor.
                </td>
                <td>
                    Procedimiento Interno PA-44 (Organoléptico)
                </td>
            </tr>
            <tr>
                <td>
                    Sabor.
                </td>
                <td>
                    Procedimiento Interno PA-44 (Organoléptico)
                </td>
            </tr>
        </table>
</Modal>

<Modal
    target="servicios-alimentos"
    size="modal-lg">
    <template #header>
        <h4 class="modal-title">Análisis de alimentos</h4>
    </template>
    <h4 class="modal-title">Microbiología</h4>
    <table class='servicesTable'>
        <thead>
            <tr>
                <th>Prueba</th>
                <th>Norma y/o Metodo de Referencia</th>
            </tr>
        </thead>
        <tr>
            <td>
                Método para la cuenta de mohos y levaduras en alimentos y alimentos. Método microbiológico.
            </td>
            <td>
                NOM-111-SSA1-1994
            </td>
        </tr>
        <tr>
            <td>
                Método para la cuenta de bacterias aerobias en placa.
            </td>
            <td>
                NOM-092-SSA1-1994
            </td>
        </tr>
        <tr>
            <td>
                Determinación de organismos coliformes totales en placa.
            </td>
            <td>
                NOM-113-SSA1-1994
            </td>
        </tr>
        <tr>
            <td>
                Método de referencia para el aislamiento de Salmonella spp.
            </td>
            <td>
                NOM-210-SSA1-2014 Apéndice Normativo A
            </td>
        </tr>
        <tr>
            <td>
                Método aprobado para la estimación de la densidad de Coliformes Fecales y E. coli por la técnica del NMP presentes en muestras de alimentos para consumo humano y agua.
            </td>
            <td>
                NOM-210-SSA1-2014 Apéndice Normativo H
            </td>
        </tr>
        <tr>
            <td>
                Método para la determinación de Staphylococcus aureus en alimentos.
            </td>
            <td>
                NOM-115-SSA1-1994
            </td>
        </tr>
    </table>
</Modal>
<Modal
    target="servicios-residuos"
    size="modal-lg">
    <template #header>
        <h4 class="modal-title">Análisis de residuos</h4>
    </template>
    <h4 class="modal-title mb-3 mt-3">Muestreo</h4>
    <table class='servicesTable'>
        <thead>
            <tr>
                <th>Prueba</th>
                <th>Norma y/o Metodo de Referencia</th>
            </tr>
        </thead>
        <tr>
            <td>
                Método de muestreo de lodos y biosolidos.
            </td>
            <td>
                NOM-004-SEMARNAT-2002 Anexo I
            </td>
        </tr>
    </table>
    <h4 class="modal-title mb-3 mt-3">Microbiología</h4>
    <table class='servicesTable'>
        <thead>
            <tr>
                <th>Prueba</th>
                <th>Norma y/o Metodo de Referencia</th>
            </tr>
        </thead>
        <tr>
            <td>
                Metodo para la cuantificación de Coliformes fecales en lodos y biosolidos.
            </td>
            <td>
                NOM 004 SEMARNAT 2002 ANEXO III
            </td>
        </tr>
        <tr>
            <td>
                Metodo para la cuantificación de Salmonella s.p.p. en lodos y biosolidos.
            </td>
            <td>
                NOM 004 SEMARNAT 2002 ANEXO IV
            </td>
        </tr>
        <tr>
            <td>
                Metodo para la cuantificación de huevos de helminto en lodos y biosolidos.
            </td>
            <td>
                NOM 004 SEMARNAT 2002 ANEXO V
            </td>
        </tr>
    </table>
</Modal>
</template>
<style>
    .modal-title {
        color: #246791;
        line-height: 1.42857143;
    }

    .servicesTable {
        border-collapse: collapse;
    }

    .servicesTable td,
    .servicesTable th {
        border: 2px solid #f1f1f1;
        padding: 15px;
    }
</style>