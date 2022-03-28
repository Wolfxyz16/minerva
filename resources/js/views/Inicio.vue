<template>
    <main>
        <div class="circulo">
            <router-link :to="{name: 'Fisica'}">Física</router-link>
            <router-link :to="{name: 'Matematicas'}">Matemáticas</router-link>
        </div>

        <router-view>

        </router-view>
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
        background-color: gray;
        width: $circle-radius;
        height: $circle-radius;
        border-radius: 50%;
        text-align:center;
        position: relative;
    }

    .circulo > a {
        width: 25rem;
        height: 25rem;
        position: absolute;
        left: 0;
        top: 0;
        border-start-start-radius: 50%;
    }

    .circulo::after {
        content: "¡Bienvenido a Minerva!";
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate( -50%, -50% );
    }
</style>