import axios from 'axios';
import Alpine from 'alpinejs'

window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

Alpine.start()

// If you want Alpine's instance to be available everywhere.
window.Alpine = Alpine