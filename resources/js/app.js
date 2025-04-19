/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import { createApp } from 'vue';
import { createRouter, createWebHistory } from 'vue-router';
import PrimeVue from 'primevue/config';

// Import PrimeVue styles
import 'primevue/resources/themes/lara-light-blue/theme.css';
import 'primevue/resources/primevue.min.css';
import 'primeicons/primeicons.css';

// Import Font Awesome
import '@fortawesome/fontawesome-free/css/all.min.css';

// Add global styles
import './assets/main.css';

// Import PrimeVue components
import Card from 'primevue/card';
import Button from 'primevue/button';
import Chip from 'primevue/chip';

// Import layout and components
import DefaultLayout from './layouts/DefaultLayout.vue';
import Home from './components/Home.vue';
import About from './components/About.vue';
import Projects from './components/Projects.vue';

/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */

// Create router instance
const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: '/',
            component: DefaultLayout,
            children: [
                { path: '', component: Home, name: 'home' },
                { path: 'about', component: About, name: 'about' },
                { path: 'projects', component: Projects, name: 'projects' },
            ]
        }
    ]
});

const app = createApp({});

// Use PrimeVue with custom theme
app.use(PrimeVue, {
    ripple: true,
    inputStyle: 'filled',
    unstyled: false,
    pt: {
        button: {
            root: { class: 'font-semibold' }
        }
    }
});

// Register PrimeVue components globally
app.component('Card', Card);
app.component('Button', Button);
app.component('Chip', Chip);

// Register layout component
app.component('DefaultLayout', DefaultLayout);

// Register all components automatically
Object.entries(import.meta.glob('./components/*.vue', { eager: true })).forEach(([path, definition]) => {
    const componentName = path.split('/').pop().replace(/\.\w+$/, '').toLowerCase();
    app.component(componentName, definition.default);
});

app.use(router);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// Object.entries(import.meta.glob('./**/*.vue', { eager: true })).forEach(([path, definition]) => {
//     app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);
// });

/**
 * Finally, we will attach the application instance to a HTML element with
 * an "id" attribute of "app". This element is included with the "auth"
 * scaffolding. Otherwise, you will need to add an element yourself.
 */

app.mount('#app');
