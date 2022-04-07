<template>
    <div id="stars" aria-hidden="true"></div>
    <div id="stars2" aria-hidden="true"></div>
    <div id="stars3" aria-hidden="true"></div>
    <Cabecera>

    </Cabecera>
    
    <router-view v-slot="{ Component }">
        <transition name="fade" mode="out-in">
            <component :is="Component" />
        </transition>
    </router-view>

    <router-link :to="{name: 'Inicio Sesion'}" class="login-container">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
        </svg>
    </router-link>
</template>

<script setup>
    import Cabecera from './components/Cabecera';
</script>

<style lang="scss">
    @function multiple-box-shadow ($n) {
        $value: '#{random(2000)}px #{random(2000)}px #FFF';
        @for $i from 2 through $n {
            $value: '#{$value} , #{random(2000)}px #{random(2000)}px #FFF';
        }
        @return unquote($value)
    }

    $shadows-small:  multiple-box-shadow(700);
    $shadows-medium: multiple-box-shadow(200);
    $shadows-big:    multiple-box-shadow(100);

    #stars {
        position: absolute;
        width: 1px;
        height: 1px;
        background: transparent;
        box-shadow: $shadows-small;
        animation			: animStar 50s linear infinite;
    
        &:after {
            content: " ";
            position: absolute;
            top: 2000px;
            width: 1px;
            height: 1px;
            background: transparent;
            box-shadow: $shadows-small;
            }
    }

    #stars2 {
        position: absolute;
        width: 2px;
        height: 2px;
        background: transparent;
        box-shadow: $shadows-medium;
        animation			: animStar 50s linear infinite;
    
        &:after {
            content: " ";
            position: absolute;
            top: 2000px;
            width: 1px;
            height: 1px;
            background: transparent;
            box-shadow: $shadows-medium;
            }
    }

    #stars3 {
        position: absolute;
        width: 3px;
        height: 3px;
        background: transparent;
        box-shadow: $shadows-big;
        animation			: animStar 50s linear infinite;
    
        &:after {
            content: " ";
            position: absolute;
            top: 2000px;
            width: 1px;
            height: 1px;
            background: transparent;
            box-shadow: $shadows-big;
        }
    }
    
    @keyframes animStar {
        from {
            transform: translateY(0px)
        }
        to {
            transform: translateY(-2000px)
        }
    }

    .login-container {
        width: 4rem;
        height: 4rem;
        margin: 1rem;
        border: solid gray 1rem;
        color: black;
        border-radius: 50%;
        position: absolute;
        right: 0;
        bottom: 0;
        background-color: gray;
        svg {
            transition: all .2s linear;
            width: 100%;
            height: 100%;
            &:active {
                color: blue;
            }
        }
    }

    .fade-enter-active,
    .fade-leave-active {
        transition: opacity 0.1s ease;
    }

    .fade-enter-from,
    .fade-leave-to {
    opacity: 0;
    }
</style>