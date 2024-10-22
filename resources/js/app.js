import './bootstrap';

import { createApp } from "vue";

const app = createApp();

import LogoutForm from "./components/Layout/LogoutForm.vue";
import ApplicationLogo from "./components/Layout/ApplicationLogo.vue";
import DropdownLink from "./components/Layout/DropdownLink.vue";
import Navigation from "./components/Layout/Navigation.vue";

app.component('logout-form', LogoutForm);
app.component('application-logo', ApplicationLogo);
app.component('dropdown-link', DropdownLink);
app.component('navigation', Navigation);

app.config.devtools = true;
app.mount('#app');
