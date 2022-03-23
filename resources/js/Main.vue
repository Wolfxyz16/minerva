<template>
    <router-link :to="{name: 'Home'}">
        Home
    </router-link>

    <router-link :to="{name: 'About'}">
        About
    </router-link>

    <router-view></router-view>
</template>