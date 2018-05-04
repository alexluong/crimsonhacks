import './bootstrap';
import router from './routes';

import TheNavbar from './components/TheNavbar';

new Vue({
    el: '#app',
    router,
    components: {
        'the-navbar': TheNavbar
    }
});