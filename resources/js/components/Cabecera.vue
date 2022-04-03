<template>
    <header>
        <router-link :to="{name: 'Inicio'}">
            Inicio
        </router-link>

        <router-link :to="{name: 'Nosotros'}">
            Minerva
        </router-link>

        <router-link :to="{name: 'Examen'}">
            Crear examen
        </router-link>
    </header>
</template>

<style scoped>
    header  {
        min-width: 100%;
        background-color: rgba(255, 255, 255, 0.3);
        height: 2.5rem;
        display:flex;
        place-content: center space-around;
    }

    header > * {
        min-height: 100%;
        min-width:20rem;
        text-align: center;
        font-size: 1.5rem;
    }

    a:hover {
        background-color: #B1B1B1;
        color: #F9F9F9;
    }

    a:link {
        color: #F1F1F1;
        transition: all .2s lineal;
    }

    a:visited {
        color: #F9F9F9;
    }

    a:active {
        background-color: #F9F9F9;
        color: #D1D1D1;
    }
</style>