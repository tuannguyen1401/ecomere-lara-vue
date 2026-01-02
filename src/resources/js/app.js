import { createApp } from 'vue';
import WelcomePage from './pages/Welcome.vue';

/**
 * BEST PRACTICE:
 * 1. Khởi tạo Vue App
 * 2. Đăng ký các component toàn cục (nếu cần)
 * 3. Gắn vào DOM (#app)
 */
const app = createApp({});

// Đăng ký Page Components (Dùng để gọi trong Blade)
app.component('welcome-page', WelcomePage);

app.mount('#app');
