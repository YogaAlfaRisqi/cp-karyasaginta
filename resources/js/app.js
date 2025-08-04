
import Alpine from 'alpinejs';
import AOS from 'aos';
import 'aos/dist/aos.css';

AOS.init({
    once: true,
}); 

window.Alpine = Alpine;
Alpine.start();
