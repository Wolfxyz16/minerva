<template>
    <router-link :to="{name: 'Inicio'}">
        Home
    </router-link>

    <router-link :to="{name: 'Nosotros'}">
        About
    </router-link>

    <router-view></router-view>
</template>