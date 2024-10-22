import './bootstrap';

import { createApp } from "vue";
import Alpine from 'alpinejs';

const app = createApp();

window.Alpine = Alpine;

Alpine.start();
app.mount('#app');
