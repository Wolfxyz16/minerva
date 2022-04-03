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

    #stars1 {
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

    .fade-enter-active,
    .fade-leave-active {
        transition: opacity 0.3s ease;
    }

    .fade-enter-from,
    .fade-leave-to {
    opacity: 0;
    }
</style>