<template>
    <main>
        <div class="circulo">
            <router-link :to="{name: 'Fisica'}">Física</router-link>
            <router-link :to="{name: 'Matematicas'}">Matemáticas</router-link>
        </div>
    </main>
</template>

<style lang="scss" scoped>
    $circle-radius: 25rem;

    main {
        flex: 1 1 auto;
        display: flex;
        flex-flow: column nowrap;
        justify-content: center;
        align-items: center;
    }
    .circulo {
        font-size: 3rem;
        background-color: grey;
        box-shadow: 0px 10px 20px 10px rgba(0,0,0,0.4);
        width: $circle-radius;
        height: $circle-radius;
        border-radius: 50%;
        text-align:center;
        position: relative;
    }

    .circulo > a {
        width: 25rem;
    }

    .circulo::after {
        content: "¡Bienvenido a Minerva!";
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate( -50%, -50% );
    }
</style>