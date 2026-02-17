document.addEventListener('DOMContentLoaded', () => {
    // 1. Инициализация AOS
    AOS.init({
        duration: 1000,
        once: true,
        offset: 100,
        easing: 'ease-out-cubic'
    });

    // 2. Three.js Background (Частицы)
    const initHeroScene = () => {
        const container = document.getElementById('hero-canvas');
        if (!container) return;

        const scene = new THREE.Scene();
        const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
        const renderer = new THREE.WebGLRenderer({ alpha: true, antialias: true });
        
        renderer.setSize(window.innerWidth, window.innerHeight);
        container.appendChild(renderer.domElement);

        // Создание частиц
        const particlesGeometry = new THREE.BufferGeometry();
        const particlesCount = 2000;
        const posArray = new Float32Array(particlesCount * 3);

        for(let i = 0; i < particlesCount * 3; i++) {
            posArray[i] = (Math.random() - 0.5) * 10;
        }

        particlesGeometry.setAttribute('position', new THREE.BufferAttribute(posArray, 3));

        const material = new THREE.PointsMaterial({
            size: 0.005,
            color: 0xffffff,
            transparent: true,
            opacity: 0.5
        });

        const particlesMesh = new THREE.Points(particlesGeometry, material);
        scene.add(particlesMesh);

        camera.position.z = 3;

        // Взаимодействие с мышью
        let mouseX = 0;
        let mouseY = 0;

        document.addEventListener('mousemove', (e) => {
            mouseX = e.clientX;
            mouseY = e.clientY;
        });

        const animate = () => {
            requestAnimationFrame(animate);
            particlesMesh.rotation.y += 0.001;
            
            if (mouseX > 0) {
                particlesMesh.rotation.x += (mouseY * 0.00005);
                particlesMesh.rotation.y += (mouseX * 0.00005);
            }
            
            renderer.render(scene, camera);
        };

        animate();

        window.addEventListener('resize', () => {
            camera.aspect = window.innerWidth / window.innerHeight;
            camera.updateProjectionMatrix();
            renderer.setSize(window.innerWidth, window.innerHeight);
        });
    };

    initHeroScene();
});
// FAQ Accordion
const faqItems = document.querySelectorAll('.faq__item');

faqItems.forEach(item => {
    const trigger = item.querySelector('.faq__trigger');
    trigger.addEventListener('click', () => {
        const isActive = item.classList.contains('active');
        
        // Закрываем все открытые вкладки (опционально)
        faqItems.forEach(i => i.classList.remove('active'));
        
        // Если была не активна — открываем
        if (!isActive) {
            item.classList.add('active');
        }
    });
});
// --- CONTACT FORM LOGIC ---

// 1. Math Captcha
const captchaQuestion = document.getElementById('captcha-question');
let correctAnswer = 0;

const generateCaptcha = () => {
    const num1 = Math.floor(Math.random() * 10) + 1;
    const num2 = Math.floor(Math.random() * 10) + 1;
    correctAnswer = num1 + num2;
    captchaQuestion.textContent = `${num1} + ${num2}`;
};

// 2. Phone Validation (only digits)
const phoneInput = document.getElementById('phone-input');
phoneInput.addEventListener('input', (e) => {
    e.target.value = e.target.value.replace(/\D/g, '');
});

// 3. Form Submission
const contactForm = document.getElementById('contact-form');
const formSuccess = document.getElementById('form-success');
const closeSuccess = document.getElementById('close-success');

contactForm.addEventListener('submit', function(e) {
    e.preventDefault();

    const userAnswer = parseInt(document.getElementById('captcha-answer').value);

    // Валидация капчи
    if (userAnswer !== correctAnswer) {
        alert('Ошибка в капче! Попробуйте еще раз.');
        generateCaptcha();
        document.getElementById('captcha-answer').value = '';
        return;
    }

    // Имитация AJAX
    const submitBtn = this.querySelector('.btn--submit');
    const originalBtnText = submitBtn.innerHTML;
    
    submitBtn.innerHTML = '<span>Отправка...</span>';
    submitBtn.disabled = true;

    setTimeout(() => {
        formSuccess.classList.add('active');
        this.reset();
        generateCaptcha();
        submitBtn.innerHTML = originalBtnText;
        submitBtn.disabled = false;
        lucide.createIcons(); // Переинициализация иконок в сообщении
    }, 1500);
});

closeSuccess.addEventListener('click', () => {
    formSuccess.classList.remove('active');
});

// Инициализация капчи при загрузке
generateCaptcha();
// --- MOBILE MENU LOGIC ---
const burger = document.getElementById('burger');
const burgerClose = document.getElementById('burger-close');
const mobileMenu = document.getElementById('mobile-menu');
const mobileLinks = document.querySelectorAll('.mobile-nav__link');

const toggleMenu = () => {
    mobileMenu.classList.toggle('active');
    document.body.style.overflow = mobileMenu.classList.contains('active') ? 'hidden' : '';
};

burger.addEventListener('click', toggleMenu);
burgerClose.addEventListener('click', toggleMenu);

// Закрытие при клике по ссылке
mobileLinks.forEach(link => {
    link.addEventListener('click', () => {
        mobileMenu.classList.remove('active');
        document.body.style.overflow = '';
    });
});

// --- COOKIE POPUP LOGIC ---
const cookiePopup = document.getElementById('cookie-popup');
const cookieAccept = document.getElementById('cookie-accept');

const checkCookies = () => {
    const isAccepted = localStorage.getItem('cookiesAccepted');
    if (!isAccepted) {
        // Показываем плашку через 2 секунды после загрузки
        setTimeout(() => {
            cookiePopup.classList.add('show');
        }, 2000);
    }
};

cookieAccept.addEventListener('click', () => {
    localStorage.setItem('cookiesAccepted', 'true');
    cookiePopup.classList.remove('show');
});

// Инициализация
checkCookies();