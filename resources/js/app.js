require('./bootstrap');

import { createApp } from 'vue';

const app = createApp({});

import App from './components/App';

app.component('App', App);

window.onload = () => app.mount('#app');