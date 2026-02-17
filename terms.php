<?php

$fullDomain = strtolower($_SERVER['HTTP_HOST'] ?? '');
$fullDomain = explode(':', $fullDomain)[0];

$parts = explode('.', $fullDomain);
$domainSlug = count($parts) >= 2
        ? $parts[count($parts) - 2]
        : $fullDomain;

$domainTitle = ucwords(str_replace('-', ' ', $domainSlug));

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $domainTitle ?> | Экспертный консалтинг</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&family=Syne:wght@700;800&display=swap" rel="stylesheet">
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><rect x='25' y='25' width='50' height='50' fill='none' stroke='white' stroke-width='8' transform='rotate(45 50 50)'/><circle cx='50' cy='50' r='8' fill='white'/></svg>">
    <script src="https://unpkg.com/lucide@latest"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">    
    <link rel="stylesheet" href="style.css">
</head>
<body class="body">

    <header class="header" id="header">
        <div class="container header__container">
            <a href="./#hero" class="logo">
                <span class="logo__dot"></span>
                <?= $domainTitle ?>
            </a>
            
            <nav class="nav">
                <ul class="nav__list">
                    <li><a href="./#hero" class="nav__link">Главная</a></li>
                    <li><a href="./#strategy" class="nav__link">Стратегия</a></li>
                    <li><a href="./#services" class="nav__link">Услуги</a></li>
                    <li><a href="./#reviews" class="nav__link">Отзывы</a></li>
                    <li><a href="./#faq" class="nav__link">FAQ</a></li>
                </ul>
            </nav>

            <a href="./#contact" class="btn btn--header">
                <span>Связаться</span>
                <i data-lucide="arrow-up-right"></i>
            </a>

            <button class="burger" id="burger" aria-label="Menu">
                <span></span>
                <span></span>
            </button>
        </div>
    </header>
    <main class="legal-page">
    <section class="pages">
        <div class="container">
            <span class="section-subtitle" data-aos="fade-right">Terms & Conditions</span>
            <h1 data-aos="fade-up">Условия использования</h1>

            <div class="legal-content">
                <div class="policy-hero-card" data-aos="fade-up" data-aos-delay="100">
                    <p>
                        Добро пожаловать на сайт <strong><?= $domainTitle ?></strong>! Настоящие Условия использования
                        представляют собой юридически обязывающий договор между вами (далее — «Пользователь») и <strong><?= $domainTitle ?></strong>.
                        Используя наш сайт, вы подтверждаете свое полное согласие с данными Условиями.
                    </p>
                </div>

                <div class="legal-block" data-aos="fade-up">
                    <h2>1. Предмет Соглашения</h2>
                    <p>
                        Компания предоставляет Пользователю доступ к использованию сайта
                        <strong><?= $fullDomain ?></strong> и его функционала, включая: доступ к
                        инновационным материалам, статьям в блоге, карьерным консультациям и другим инструментам 
                        развития. Настоящее Соглашение регулирует все аспекты взаимодействия Пользователя с платформой.
                    </p>
                </div>

                <div class="legal-block" data-aos="fade-up">
                    <h2>2. Обязанности и права Пользователя</h2>
                    <p>При использовании платформы <strong><?= $domainTitle ?></strong> запрещается:</p>
                    <ul class="legal-check-list">
                        <li>Публиковать или передавать любую незаконную, вредоносную или клеветническую информацию.</li>
                        <li>Предпринимать действия, которые могут нарушить работу цифровой инфраструктуры <strong><?= $domainTitle ?></strong>.</li>
                        <li>Использовать автоматизированные скрипты (боты) для сбора информации без разрешения.</li>
                        <li>Предоставлять недостоверную информацию при регистрации на консультацию.</li>
                    </ul>
                </div>

                <div class="legal-block" data-aos="fade-up">
                    <h2>3. Интеллектуальная собственность</h2>
                    <div class="property-block">
                        <div class="property-block__icon">
                            <i data-lucide="copyright"></i>
                        </div>
                        <div class="property-block__text">
                            <p>
                                Весь контент на <strong><?= $fullDomain ?></strong> (тексты, код, графика, логотипы) является собственностью Компании. 
                                Вам предоставляется ограниченная лицензия для личного использования в целях построения карьеры. Копирование материалов без письменного разрешения строго запрещено.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="legal-block" data-aos="fade-up">
                    <h2>4. Ограничение ответственности</h2>
                    <div class="legal-block--warning">
                        <div class="warning-flex">
                            <i data-lucide="info"></i>
                            <p>
                                Услуги предоставляются по принципу <strong>«как есть» (as is)</strong>. Компания не несет ответственности за любые убытки, 
                                возникшие в результате использования или невозможности использования платформы <strong><?= $domainTitle ?></strong>.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="legal-block" data-aos="fade-up">
                    <h2>5. Изменения и разрешение споров</h2>
                    <p>
                        Мы оставляем за собой право изменять Условия в любое время. Все споры стороны будут стремиться разрешить путем конструктивных переговоров. 
                        В случае недостижения согласия, спор подлежит рассмотрению по месту регистрации Компании в Германии.
                    </p>
                </div>

                <div class="legal-contact-box" data-aos="zoom-in">
                    <div class="legal-contact-box__header">
                        <i data-lucide="help-circle"></i>
                        <h2>Контактная информация</h2>
                    </div>
                    <p>Если у вас возникли вопросы, связанные с настоящими Условиями, пожалуйста, свяжитесь с нами:</p>
                    <div class="legal-contact-grid">
                        <div class="l-contact-item">
                            <span>Email:</span>
                            <a href="mailto:hello@<?= $fullDomain ?>" class="contact-link">hello@<?= $fullDomain ?></a>
                        </div>
                        <div class="l-contact-item">
                            <span>Регион:</span>
                            <address>Düsseldorf, Germany</address>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


    <footer class="footer">
        <div class="container footer__container">
            <div class="footer__col">
                <a href="./#hero" class="logo logo--footer">
                    <span class="logo__dot"></span>
                    <?= $domainTitle ?>
                </a>
                <p class="footer__description">
                    Решения, которые меняют правила игры. Переосмыслите подход к развитию вашего бизнеса с нашими экспертными практиками.
                </p>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Навигация</h4>
                <ul class="footer__menu">
                    <li><a href="./#hero">Главная</a></li>
                    <li><a href="./#strategy">Стратегия</a></li>
                    <li><a href="./#services">Услуги</a></li>
                    <li><a href="./#reviews">Отзывы</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Документы</h4>
                <ul class="footer__menu">
                    <li><a href="./privacy.php">Privacy Policy</a></li>
                    <li><a href="./cookies.php">Cookie Policy</a></li>
                    <li><a href="./terms.php">Terms of Service</a></li>
                    <li><a href="./return.php">Return Policy</a></li>
                    <li><a href="./disclaimer.php">Disclaimer</a></li>
                    <li><a href="./contact.php">Contact Us</a></li>
                    <li><a href="./personal-data-policy.php">Data Policy</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Контакты</h4>
                <ul class="footer__contacts">
                    <li>
                        <i data-lucide="phone"></i>
                        <a href="tel:+390694128862">+390694128862</a>
                    </li>
                    <li>
                        <i data-lucide="mail"></i>
                        <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a>
                    </li>
                    <li>
                        <i data-lucide="map-pin"></i>
                        <span>Königsallee 60, 40212 <br>Düsseldorf, Germany</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer__bottom">
            <div class="container">
                <p>&copy; 2026 <?= $domainTitle ?>. Все права защищены. Предложение активно только в странах ЕС.</p>
            </div>
        </div>
    </footer>
    <div class="mobile-menu" id="mobile-menu">
        <div class="mobile-menu__header">
            <a href="./#hero" class="logo">
                <span class="logo__dot"></span>
                <?= $domainTitle ?>
            </a>
            <button class="burger burger--active" id="burger-close">
                <span></span>
                <span></span>
            </button>
        </div>
        <nav class="mobile-nav">
            <ul class="mobile-nav__list">
                <li><a href="./#hero" class="mobile-nav__link">Главная</a></li>
                <li><a href="./#strategy" class="mobile-nav__link">Стратегия</a></li>
                <li><a href="./#services" class="mobile-nav__link">Услуги</a></li>
                <li><a href="./#reviews" class="mobile-nav__link">Отзывы</a></li>
                <li><a href="./#faq" class="mobile-nav__link">FAQ</a></li>
                <li><a href="./#contact" class="mobile-nav__link mobile-nav__link--cta">Начать сейчас</a></li>
            </ul>
        </nav>
        <div class="mobile-menu__footer">
            <a href="tel:+390694128862" class="mobile-contact">+39 069 412 8862</a>
            <a href="mailto:hello@<?= $fullDomain ?>" class="mobile-contact">hello@<?= $fullDomain ?></a>
        </div>
    </div>
    
    <div class="cookie-popup" id="cookie-popup">
        <div class="cookie-popup__content">
            <p class="cookie-popup__text">
                Этот сайт использует cookies для улучшения работы. Подробнее — в нашей 
                <a href="./cookies.php">Cookie политике</a>.
            </p>
            <button class="btn btn--primary btn--sm" id="cookie-accept">Принять</button>
        </div>
    </div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <script src="script.js"></script>
</body>
</html>