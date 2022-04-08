<template>
    <main>
    
        <aside>
            <li><a href="#app">Gravitación</a></li>
            <li><a href="#app">Electrostática</a></li>
            <li><a href="#app">Magnetismo e inducción</a></li>
            <li><a href="#app">Ondas</a></li>
            <li><a href="#app">Óptica</a></li>
            <li><a href="#app">Luz y ondas electromágneticas</a></li>
            <li><a href="#app">Física cuántica y nuclear</a></li>
        </aside>
    
    </main>
</template>

<style lang="scss" scoped>
    main {
        min-height: 100%;
        display: flex;
        flex-flow: column nowrap;
        aside {
            min-width: 33%;
            list-style: none;
            padding: 0;
            flex: 1 1 auto;
            display: flex;
            flex-flow: column nowrap;
            justify-content: space-around;
    
            h2 {
                min-width: 100%;
                text-align: center;
            }
    
            li {
                min-width: 100%;
                padding: 1rem 0;
                text-align: center;
                font-size: 2rem;
                transition: all .2s linear;
                a {
                    color: white;
                    min-width: 100%;
                    transition: all .1s linear;
                    border-radius: .5rem;
                }
                &:hover {
                    background-color: rgba(25,25,25,0.3);
                }
                &:focus-within a {
                    outline: 5px solid #F1F1F1;
                    outline-offset: 1rem;
                }
                &:active a{
                    color: #B1B1B1;
                }
            }
        }
    }
</style>