require('./bootstrap');
import {createApp} from 'vue';
import {store} from './store/store';

import Departments from './components/Departments.vue';
import Form from 'vform';

window.Form = Form;

const app = createApp({});

app.component('departments', Departments)


window.url='/laravel_vuejs/task_mis/'


app.use(store);
app.mount('#app');