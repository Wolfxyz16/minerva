require('./bootstrap');

import { createApp } from 'vue';
import App from './Main';
import router from './router';

const app = createApp({});

app.use(router);

app.component('App', App);

window.onload = () => app.mount('#app');