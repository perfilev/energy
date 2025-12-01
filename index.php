<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Energy — Форум-группа для предпринимателей</title>
    <meta name="description" content="Закрытая форум-группа про личное состояние, жизненную стратегию и рост бизнеса. 8 участников, 10 встреч в год, глубокая работа с модератором.">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/images/logo.png">
    <link rel="apple-touch-icon" href="/images/logo.png">

    <!-- Tailwind CSS v4 -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        accent: '#FF2157',
                        'accent-dark': '#E01E4D',
                    },
                    fontFamily: {
                        'display': ['Unbounded', 'sans-serif'],
                        'body': ['Onest', 'sans-serif'],
                    },
                }
            }
        }
    </script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Onest:wght@300;400;500;600;700&family=Unbounded:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <style>
        body {
            font-family: 'Onest', sans-serif;
        }

        h1,
        h2,
        h3,
        .font-display {
            font-family: 'Unbounded', sans-serif;
        }

        .gradient-text {
            background: linear-gradient(135deg, #FF2157 0%, #FF6B8A 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero-gradient {
            background: linear-gradient(180deg, rgba(255, 33, 87, 0.03) 0%, rgba(255, 255, 255, 0) 100%);
        }

        .card-hover {
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
        }

        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.6s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease, padding 0.3s ease;
        }

        .faq-item.open .faq-answer {
            max-height: 500px;
        }

        .faq-item.open .faq-icon {
            transform: rotate(180deg);
        }

        .faq-icon {
            transition: transform 0.3s ease;
        }

        .image-cover {
            object-fit: cover;
            object-position: center;
        }

        .accent-line {
            width: 60px;
            height: 4px;
            background: #FF2157;
            border-radius: 2px;
        }

        .stat-card {
            background: linear-gradient(135deg, #FAFAFA 0%, #FFFFFF 100%);
            border: 1px solid rgba(0, 0, 0, 0.05);
        }

        .timeline-dot {
            width: 12px;
            height: 12px;
            background: #FF2157;
            border-radius: 50%;
            position: relative;
        }

        .timeline-dot::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 24px;
            height: 24px;
            background: rgba(255, 33, 87, 0.15);
            border-radius: 50%;
        }

        .video-container {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
            border-radius: 16px;
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        .float-animation {
            animation: float 6s ease-in-out infinite;
        }
    </style>

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function(m, e, t, r, i, k, a) {
            m[i] = m[i] || function() {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            for (var j = 0; j < document.scripts.length; j++) {
                if (document.scripts[j].src === r) {
                    return;
                }
            }
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })(window, document, 'script', 'https://mc.yandex.ru/metrika/tag.js?id=105595352', 'ym');
        ym(105595352, 'init', {
            ssr: true,
            webvisor: true,
            clickmap: true,
            ecommerce: "dataLayer",
            accurateTrackBounce: true,
            trackLinks: true
        });
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/105595352" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->
</head>

<body class="bg-white text-gray-900 antialiased">

    <!-- Navigation -->
    <nav class="fixed top-0 left-0 right-0 z-50 bg-white/90 backdrop-blur-md border-b border-gray-100">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <a href="#" class="font-display font-bold text-xl tracking-tight flex items-center gap-2">
                    <img src="/images/logo.png" alt="Energy" class="h-8 w-auto">
                    <span class="text-accent">Energy</span>
                </a>
                <div class="hidden md:flex items-center space-x-8 text-sm font-medium">
                    <a href="#about" class="text-gray-600 hover:text-gray-900 transition-colors">О группе</a>
                    <a href="#format" class="text-gray-600 hover:text-gray-900 transition-colors">Формат</a>
                    <a href="#moderator" class="text-gray-600 hover:text-gray-900 transition-colors">Модератор</a>
                    <a href="#faq" class="text-gray-600 hover:text-gray-900 transition-colors">FAQ</a>
                </div>
                <a href="#join" class="bg-accent hover:bg-accent-dark text-white px-5 py-2.5 rounded-full text-sm font-semibold transition-colors">
                    Вступить
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="pt-24 pb-16 md:pt-32 md:pb-24 hero-gradient">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="fade-in">
                    <div class="inline-flex items-center gap-2 bg-accent/10 text-accent px-4 py-2 rounded-full text-sm font-medium mb-6">
                        <i data-lucide="users" class="w-4 h-4"></i>
                        Форум-группа для предпринимателей
                    </div>
                    <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">
                        Закрытый круг <span class="gradient-text">Energy</span>
                    </h1>
                    <p class="text-lg md:text-xl text-gray-600 leading-relaxed mb-8 max-w-xl">
                        Форум-группа про личное состояние, жизненную стратегию и&nbsp;рост бизнеса. 8&nbsp;участников, глубокая работа, честный разговор.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#join" class="inline-flex items-center justify-center gap-2 bg-accent hover:bg-accent-dark text-white px-8 py-4 rounded-full text-base font-semibold transition-all hover:scale-105">
                            <span>Узнать о вступлении</span>
                            <i data-lucide="arrow-right" class="w-5 h-5"></i>
                        </a>
                        <a href="#about" class="inline-flex items-center justify-center gap-2 bg-gray-100 hover:bg-gray-200 text-gray-900 px-8 py-4 rounded-full text-base font-semibold transition-colors">
                            Подробнее о группе
                        </a>
                    </div>
                </div>
                <div class="fade-in relative">
                    <div class="relative rounded-3xl overflow-hidden shadow-2xl">
                        <img src="/images/1.jpg" alt="Форум-группа Energy" class="w-full h-auto object-contain">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
                    </div>
                    <div class="absolute -bottom-6 -left-6 bg-white rounded-2xl p-4 shadow-xl float-animation">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 bg-accent/10 rounded-full flex items-center justify-center">
                                <i data-lucide="calendar" class="w-6 h-6 text-accent"></i>
                            </div>
                            <div>
                                <div class="font-semibold">2 года</div>
                                <div class="text-sm text-gray-500">группе вместе</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-12 border-y border-gray-100">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-8">
                <div class="text-center fade-in">
                    <div class="font-display text-3xl md:text-4xl font-bold text-accent mb-1">8</div>
                    <div class="text-sm text-gray-600">участников</div>
                </div>
                <div class="text-center fade-in">
                    <div class="font-display text-3xl md:text-4xl font-bold text-accent mb-1">10</div>
                    <div class="text-sm text-gray-600">встреч в год</div>
                </div>
                <div class="text-center fade-in">
                    <div class="font-display text-3xl md:text-4xl font-bold text-accent mb-1">8</div>
                    <div class="text-sm text-gray-600">часов встреча</div>
                </div>
                <div class="text-center fade-in">
                    <div class="font-display text-3xl md:text-4xl font-bold text-accent mb-1">200+</div>
                    <div class="text-sm text-gray-600">млн ₽ выручка</div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 md:py-28">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="fade-in order-2 lg:order-1">
                    <div class="rounded-3xl overflow-hidden">
                        <img src="/images/7.jpg" alt="Встреча Energy" class="w-full h-[400px] image-cover">
                    </div>
                </div>
                <div class="fade-in order-1 lg:order-2">
                    <div class="accent-line mb-6"></div>
                    <h2 class="font-display text-3xl md:text-4xl font-bold mb-6">
                        Что такое Energy
                    </h2>
                    <p class="text-lg text-gray-600 leading-relaxed mb-6">
                        Постоянный закрытый круг из 8&nbsp;участников — 7&nbsp;мужчин и&nbsp;1&nbsp;девушка. Группе уже 2&nbsp;года, около 10&nbsp;встреч в&nbsp;год.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-accent/10 rounded-xl flex items-center justify-center flex-shrink-0">
                                <i data-lucide="clock" class="w-5 h-5 text-accent"></i>
                            </div>
                            <div>
                                <div class="font-semibold mb-1">Расширенный формат</div>
                                <div class="text-gray-600">Встречи идут 8 часов вместо стандартных 4</div>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-accent/10 rounded-xl flex items-center justify-center flex-shrink-0">
                                <i data-lucide="user-check" class="w-5 h-5 text-accent"></i>
                            </div>
                            <div>
                                <div class="font-semibold mb-1">Профессиональный модератор</div>
                                <div class="text-gray-600">Доплата за опытного модератора-коуча</div>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-accent/10 rounded-xl flex items-center justify-center flex-shrink-0">
                                <i data-lucide="mountain" class="w-5 h-5 text-accent"></i>
                            </div>
                            <div>
                                <div class="font-semibold mb-1">Выездные ретриты</div>
                                <div class="text-gray-600">Раз в год ретрит на 2–3 дня вне Москвы</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- For Whom Section -->
    <section class="py-20 md:py-28 bg-gray-50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in">
                <div class="accent-line mx-auto mb-6"></div>
                <h2 class="font-display text-3xl md:text-4xl font-bold mb-4">
                    Для кого Energy
                </h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Участники группы — предприниматели со схожими ценностями и&nbsp;готовностью работать над собой
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white rounded-2xl p-6 card-hover fade-in">
                    <div class="w-12 h-12 bg-accent/10 rounded-xl flex items-center justify-center mb-4">
                        <i data-lucide="briefcase" class="w-6 h-6 text-accent"></i>
                    </div>
                    <h3 class="font-semibold text-lg mb-2">Бизнес от 200 млн ₽</h3>
                    <p class="text-gray-600">Участники с выручкой от 200 млн рублей в год, с опытом управления и масштабирования</p>
                </div>

                <div class="bg-white rounded-2xl p-6 card-hover fade-in">
                    <div class="w-12 h-12 bg-accent/10 rounded-xl flex items-center justify-center mb-4">
                        <i data-lucide="heart" class="w-6 h-6 text-accent"></i>
                    </div>
                    <h3 class="font-semibold text-lg mb-2">Семья и дети</h3>
                    <p class="text-gray-600">Средний возраст около 40 лет. Как правило, есть семья и дети — это важный контекст</p>
                </div>

                <div class="bg-white rounded-2xl p-6 card-hover fade-in">
                    <div class="w-12 h-12 bg-accent/10 rounded-xl flex items-center justify-center mb-4">
                        <i data-lucide="compass" class="w-6 h-6 text-accent"></i>
                    </div>
                    <h3 class="font-semibold text-lg mb-2">Нужна ясность</h3>
                    <p class="text-gray-600">Ощущение, что бизнес мог бы расти быстрее, но не хватает ясности и энергии</p>
                </div>

                <div class="bg-white rounded-2xl p-6 card-hover fade-in">
                    <div class="w-12 h-12 bg-accent/10 rounded-xl flex items-center justify-center mb-4">
                        <i data-lucide="target" class="w-6 h-6 text-accent"></i>
                    </div>
                    <h3 class="font-semibold text-lg mb-2">Фокус и цели</h3>
                    <p class="text-gray-600">Нужны коллективные целеполагания и помощь в удержании фокуса на важном</p>
                </div>

                <div class="bg-white rounded-2xl p-6 card-hover fade-in">
                    <div class="w-12 h-12 bg-accent/10 rounded-xl flex items-center justify-center mb-4">
                        <i data-lucide="handshake" class="w-6 h-6 text-accent"></i>
                    </div>
                    <h3 class="font-semibold text-lg mb-2">Готов вкладываться</h3>
                    <p class="text-gray-600">Желание не только брать, но и помогать другим участникам своим опытом</p>
                </div>

                <div class="bg-white rounded-2xl p-6 card-hover fade-in">
                    <div class="w-12 h-12 bg-accent/10 rounded-xl flex items-center justify-center mb-4">
                        <i data-lucide="check-circle" class="w-6 h-6 text-accent"></i>
                    </div>
                    <h3 class="font-semibold text-lg mb-2">Ответственность</h3>
                    <p class="text-gray-600">Соблюдение договорённостей и готовность доводить начатое до конца</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Meeting Format Section -->
    <section id="format" class="py-20 md:py-28">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-start">
                <div class="fade-in">
                    <div class="accent-line mb-6"></div>
                    <h2 class="font-display text-3xl md:text-4xl font-bold mb-6">
                        Как устроена встреча
                    </h2>
                    <p class="text-lg text-gray-600 leading-relaxed mb-8">
                        Каждая встреча длится 8&nbsp;часов. Это даёт глубину и&nbsp;время на&nbsp;проработку запросов и&nbsp;развивающей темы.
                    </p>

                    <div class="space-y-6">
                        <div class="flex gap-4">
                            <div class="flex flex-col items-center">
                                <div class="timeline-dot"></div>
                                <div class="w-0.5 h-full bg-gray-200 mt-2"></div>
                            </div>
                            <div class="pb-6">
                                <div class="font-semibold mb-1">Чек-ин и обмен состоянием</div>
                                <div class="text-gray-600 text-sm">Короткая обратная связь, кто «как дошёл»</div>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="flex flex-col items-center">
                                <div class="timeline-dot"></div>
                                <div class="w-0.5 h-full bg-gray-200 mt-2"></div>
                            </div>
                            <div class="pb-6">
                                <div class="font-semibold mb-1">Сбор запросов участников</div>
                                <div class="text-gray-600 text-sm">Каждый формирует, что для него важно сейчас</div>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="flex flex-col items-center">
                                <div class="timeline-dot"></div>
                                <div class="w-0.5 h-full bg-gray-200 mt-2"></div>
                            </div>
                            <div class="pb-6">
                                <div class="font-semibold mb-1">Глубокая работа с запросами</div>
                                <div class="text-gray-600 text-sm">Модератор работает с выбранными темами</div>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="flex flex-col items-center">
                                <div class="timeline-dot"></div>
                                <div class="w-0.5 h-full bg-gray-200 mt-2"></div>
                            </div>
                            <div class="pb-6">
                                <div class="font-semibold mb-1">Развивающая тема</div>
                                <div class="text-gray-600 text-sm">Жизненная стратегия, принципы, цели, мотивация</div>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="flex flex-col items-center">
                                <div class="timeline-dot"></div>
                            </div>
                            <div>
                                <div class="font-semibold mb-1">Завершение</div>
                                <div class="text-gray-600 text-sm">Выводы, договорённости, «домашнее задание»</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="fade-in space-y-6">
                    <div class="rounded-3xl overflow-hidden">
                        <img src="/images/4.jpg" alt="Упражнение на встрече Energy" class="w-full h-[300px] image-cover">
                    </div>

                    <div class="bg-gray-50 rounded-2xl p-6">
                        <h4 class="font-semibold mb-4 flex items-center gap-2">
                            <i data-lucide="message-circle" class="w-5 h-5 text-accent"></i>
                            О чём говорят на встречах
                        </h4>
                        <div class="space-y-3">
                            <div class="flex items-center gap-3">
                                <div class="w-1.5 h-1.5 bg-accent rounded-full"></div>
                                <span class="text-gray-700">Бизнес-задачи, отделы, решения</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="w-1.5 h-1.5 bg-accent rounded-full"></div>
                                <span class="text-gray-700">Личное состояние, мотивация, здоровье</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="w-1.5 h-1.5 bg-accent rounded-full"></div>
                                <span class="text-gray-700">Семья и отношения</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="w-1.5 h-1.5 bg-accent rounded-full"></div>
                                <span class="text-gray-700">Жизненная стратегия</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Moderator Section -->
    <section id="moderator" class="py-20 md:py-28 bg-gray-50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="fade-in">
                    <div class="rounded-3xl overflow-hidden shadow-xl">
                        <img src="/images/5.jpg" alt="Модератор Максим Голубь" class="w-full h-[400px] image-cover">
                    </div>
                </div>

                <div class="fade-in">
                    <div class="accent-line mb-6"></div>
                    <h2 class="font-display text-3xl md:text-4xl font-bold mb-2">
                        Максим Голубь
                    </h2>
                    <p class="text-lg text-accent font-medium mb-6">Модератор группы</p>

                    <p class="text-lg text-gray-600 leading-relaxed mb-6">
                        Предприниматель и&nbsp;психолог. Опытный модератор групп развития. Сочетает большой бизнес-опыт и&nbsp;психологию развития.
                    </p>

                    <div class="grid grid-cols-2 gap-4 mb-8">
                        <div class="stat-card rounded-xl p-4 text-center">
                            <div class="font-display text-2xl font-bold text-accent">400+</div>
                            <div class="text-sm text-gray-600">встреч провёл</div>
                        </div>
                        <div class="stat-card rounded-xl p-4 text-center">
                            <div class="font-display text-2xl font-bold text-accent">50+</div>
                            <div class="text-sm text-gray-600">ретритов</div>
                        </div>
                    </div>

                    <div class="flex items-center gap-3 text-gray-600">
                        <i data-lucide="award" class="w-5 h-5 text-accent"></i>
                        <span>Резидент бизнес-клуба «Атланты» с момента основания</span>
                    </div>
                </div>
            </div>

            <!-- Video -->
            <div class="mt-16 fade-in">
                <div class="text-center mb-8">
                    <h3 class="font-display text-2xl font-bold mb-2">Видео о модераторе</h3>
                    <p class="text-gray-600">Узнайте больше о подходе Максима к работе с группами</p>
                </div>
                <a href="https://www.youtube.com/watch?v=H6sRg-mqwVY" target="_blank" rel="noopener noreferrer" class="block max-w-4xl mx-auto relative group rounded-2xl overflow-hidden shadow-2xl">
                    <img src="/images/max.jpg" alt="Видео о Максиме Голубе" class="w-full aspect-video object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-black/30 group-hover:bg-black/40 transition-colors"></div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="w-20 h-20 md:w-24 md:h-24 bg-accent rounded-full flex items-center justify-center shadow-xl transition-transform duration-300 group-hover:scale-110">
                            <svg class="w-8 h-8 md:w-10 md:h-10 text-white ml-1" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M8 5v14l11-7z" />
                            </svg>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Retreats Section -->
    <section class="py-20 md:py-28">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in">
                <div class="accent-line mx-auto mb-6"></div>
                <h2 class="font-display text-3xl md:text-4xl font-bold mb-4">
                    Ретриты Energy
                </h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Раз в&nbsp;год выездной ретрит на&nbsp;2–3&nbsp;дня вне Москвы. Вырваться из&nbsp;рутины, перезагрузиться и&nbsp;спланировать следующий год.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-6">
                <div class="fade-in">
                    <div class="rounded-3xl overflow-hidden relative group">
                        <img src="/images/3.jpg" alt="Ретрит в Нижнем Новгороде" class="w-full h-[350px] image-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <div class="absolute bottom-6 left-6 right-6">
                            <div class="text-white/80 text-sm mb-1">Нижний Новгород</div>
                            <div class="text-white font-semibold text-lg">Оксана показывает свой цех</div>
                        </div>
                    </div>
                </div>

                <div class="fade-in">
                    <div class="rounded-3xl overflow-hidden relative group">
                        <img src="/images/6.jpg" alt="Ретрит Energy" class="w-full h-[350px] image-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <div class="absolute bottom-6 left-6 right-6">
                            <div class="text-white/80 text-sm mb-1">Выездной формат</div>
                            <div class="text-white font-semibold text-lg">Отдых + расширенная встреча</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-12 grid md:grid-cols-3 gap-6 fade-in">
                <div class="text-center p-6">
                    <div class="w-14 h-14 bg-accent/10 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <i data-lucide="plane" class="w-7 h-7 text-accent"></i>
                    </div>
                    <h4 class="font-semibold mb-2">Вырваться из контекста</h4>
                    <p class="text-gray-600 text-sm">Отойти от московской рутины и привычного окружения</p>
                </div>

                <div class="text-center p-6">
                    <div class="w-14 h-14 bg-accent/10 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <i data-lucide="battery-charging" class="w-7 h-7 text-accent"></i>
                    </div>
                    <h4 class="font-semibold mb-2">Перезагрузиться</h4>
                    <p class="text-gray-600 text-sm">Получить новую энергию и свежий взгляд на ситуацию</p>
                </div>

                <div class="text-center p-6">
                    <div class="w-14 h-14 bg-accent/10 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <i data-lucide="calendar-check" class="w-7 h-7 text-accent"></i>
                    </div>
                    <h4 class="font-semibold mb-2">Спланировать год</h4>
                    <p class="text-gray-600 text-sm">Собрать всё, что произошло, и наметить следующий этап</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Results Section -->
    <section class="py-20 md:py-28 bg-gray-900 text-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in">
                <div class="w-16 h-1 bg-accent mx-auto mb-6 rounded"></div>
                <h2 class="font-display text-3xl md:text-4xl font-bold mb-4">
                    Что даёт Energy за год
                </h2>
                <p class="text-lg text-gray-400 max-w-2xl mx-auto">
                    Если ты год стабильно в&nbsp;группе, с&nbsp;большой вероятностью получишь:
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-6">
                <div class="bg-white/5 backdrop-blur rounded-2xl p-6 border border-white/10 card-hover fade-in">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-accent rounded-xl flex items-center justify-center flex-shrink-0">
                            <i data-lucide="users" class="w-5 h-5 text-white"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-lg mb-2">Близкий круг</h4>
                            <p class="text-gray-400">Люди, с кем можно говорить обо всём, что происходит в жизни. Ощущение «второй семьи» из предпринимателей</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white/5 backdrop-blur rounded-2xl p-6 border border-white/10 card-hover fade-in">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-accent rounded-xl flex items-center justify-center flex-shrink-0">
                            <i data-lucide="lightbulb" class="w-5 h-5 text-white"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-lg mb-2">Ясность и мотивация</h4>
                            <p class="text-gray-400">Больше ясности, мотивации и вдохновения после каждой встречи</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white/5 backdrop-blur rounded-2xl p-6 border border-white/10 card-hover fade-in">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-accent rounded-xl flex items-center justify-center flex-shrink-0">
                            <i data-lucide="helping-hand" class="w-5 h-5 text-white"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-lg mb-2">Реальная помощь</h4>
                            <p class="text-gray-400">Совет, опыт, связи, участие в решении задач — например, помощь в построении отдела продаж</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white/5 backdrop-blur rounded-2xl p-6 border border-white/10 card-hover fade-in">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-accent rounded-xl flex items-center justify-center flex-shrink-0">
                            <i data-lucide="scale" class="w-5 h-5 text-white"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-lg mb-2">Принципы жизни</h4>
                            <p class="text-gray-400">Принятие решений через призму своих жизненных принципов, а не хаотично</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white/5 backdrop-blur rounded-2xl p-6 border border-white/10 card-hover fade-in md:col-span-2">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-accent rounded-xl flex items-center justify-center flex-shrink-0">
                            <i data-lucide="trending-up" class="w-5 h-5 text-white"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-lg mb-2">Поддержка в изменениях</h4>
                            <p class="text-gray-400">Здоровье (анализы, питание, спорт, личный тренер), финансы (консультант, разбор цифр), бизнес (отдел продаж, стратегия)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Atmosphere Section -->
    <section class="py-20 md:py-28">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="fade-in">
                    <div class="accent-line mb-6"></div>
                    <h2 class="font-display text-3xl md:text-4xl font-bold mb-6">
                        Атмосфера Energy
                    </h2>

                    <div class="flex flex-wrap gap-3 mb-8">
                        <span class="px-4 py-2 bg-accent/10 text-accent rounded-full text-sm font-medium">Честная</span>
                        <span class="px-4 py-2 bg-accent/10 text-accent rounded-full text-sm font-medium">Тёплая</span>
                        <span class="px-4 py-2 bg-accent/10 text-accent rounded-full text-sm font-medium">Поддерживающая</span>
                        <span class="px-4 py-2 bg-accent/10 text-accent rounded-full text-sm font-medium">Глубокая</span>
                        <span class="px-4 py-2 bg-accent/10 text-accent rounded-full text-sm font-medium">Структурная</span>
                    </div>

                    <blockquote class="border-l-4 border-accent pl-6 py-2 mb-8">
                        <p class="text-lg text-gray-700 italic leading-relaxed">
                            «Это как сеанс с&nbsp;психологом или разговор с&nbsp;очень близким человеком, только в&nbsp;кругу предпринимателей, которые понимают твой контекст»
                        </p>
                    </blockquote>

                    <div class="space-y-4">
                        <p class="text-gray-600">После встреч участники обычно отмечают:</p>
                        <div class="flex flex-wrap gap-4">
                            <div class="flex items-center gap-2">
                                <i data-lucide="sparkles" class="w-5 h-5 text-accent"></i>
                                <span class="font-medium">Ясность</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <i data-lucide="zap" class="w-5 h-5 text-accent"></i>
                                <span class="font-medium">Мотивация</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <i data-lucide="star" class="w-5 h-5 text-accent"></i>
                                <span class="font-medium">Вдохновение</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="fade-in">
                    <div class="rounded-3xl overflow-hidden shadow-xl">
                        <img src="/images/2.jpg" alt="Атмосфера Energy" class="w-full h-[450px] image-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Selection Process Section -->
    <section class="py-20 md:py-28 bg-gray-50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in">
                <div class="accent-line mx-auto mb-6"></div>
                <h2 class="font-display text-3xl md:text-4xl font-bold mb-4">
                    Как проходит отбор
                </h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Отбор обоюдный и&nbsp;щепетильный. Важно совпадение по&nbsp;ценностям и&nbsp;готовность вкладываться в&nbsp;других.
                </p>
            </div>

            <div class="max-w-3xl mx-auto">
                <div class="relative">
                    <!-- Timeline line -->
                    <div class="absolute left-8 top-0 bottom-0 w-0.5 bg-gray-200 hidden md:block"></div>

                    <div class="space-y-8">
                        <div class="flex gap-6 fade-in">
                            <div class="w-16 h-16 bg-accent rounded-2xl flex items-center justify-center flex-shrink-0 text-white font-display font-bold text-xl relative z-10">
                                1
                            </div>
                            <div class="bg-white rounded-2xl p-6 flex-1 shadow-sm">
                                <h4 class="font-semibold text-lg mb-2">Заявка через Telegram</h4>
                                <p class="text-gray-600">Напишите коммьюнити-менеджеру Анастасии. Она запросит информацию о вас и ответит на вопросы о группе.</p>
                            </div>
                        </div>

                        <div class="flex gap-6 fade-in">
                            <div class="w-16 h-16 bg-accent rounded-2xl flex items-center justify-center flex-shrink-0 text-white font-display font-bold text-xl relative z-10">
                                2
                            </div>
                            <div class="bg-white rounded-2xl p-6 flex-1 shadow-sm">
                                <h4 class="font-semibold text-lg mb-2">Групповой онлайн-созвон</h4>
                                <p class="text-gray-600">30 минут с участием всех членов группы. Знакомство, представление, вопросы с обеих сторон.</p>
                            </div>
                        </div>

                        <div class="flex gap-6 fade-in">
                            <div class="w-16 h-16 bg-accent rounded-2xl flex items-center justify-center flex-shrink-0 text-white font-display font-bold text-xl relative z-10">
                                3
                            </div>
                            <div class="bg-white rounded-2xl p-6 flex-1 shadow-sm">
                                <h4 class="font-semibold text-lg mb-2">Обоюдное решение</h4>
                                <p class="text-gray-600">Каждая сторона принимает решение, продолжать ли путь вместе. Важно, чтобы человек был приятен всем.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-12 bg-white rounded-2xl p-6 fade-in">
                    <h4 class="font-semibold mb-4 flex items-center gap-2">
                        <i data-lucide="check-square" class="w-5 h-5 text-accent"></i>
                        Критерии отбора
                    </h4>
                    <div class="grid md:grid-cols-3 gap-4">
                        <div class="flex items-center gap-3">
                            <div class="w-2 h-2 bg-accent rounded-full"></div>
                            <span class="text-gray-700">Совпадение по ценностям</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-2 h-2 bg-accent rounded-full"></div>
                            <span class="text-gray-700">Бизнес не пересекается</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-2 h-2 bg-accent rounded-full"></div>
                            <span class="text-gray-700">Готовность вкладываться</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="py-20 md:py-28">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in">
                <div class="accent-line mx-auto mb-6"></div>
                <h2 class="font-display text-3xl md:text-4xl font-bold mb-4">
                    Частые вопросы
                </h2>
            </div>

            <div class="space-y-4">
                <div class="faq-item bg-gray-50 rounded-2xl overflow-hidden fade-in">
                    <button class="faq-toggle w-full px-6 py-5 flex items-center justify-between text-left">
                        <span class="font-semibold pr-4">Чем отличается от обычной форум-группы?</span>
                        <i data-lucide="chevron-down" class="w-5 h-5 text-gray-400 faq-icon flex-shrink-0"></i>
                    </button>
                    <div class="faq-answer px-6 pb-5">
                        <p class="text-gray-600">Мы работаем в расширенном формате: встречи идут 8 часов вместо стандартных 4, и мы доплачиваем за профессионального модератора. Это даёт глубину и время на проработку как запросов, так и общей развивающей темы.</p>
                    </div>
                </div>

                <div class="faq-item bg-gray-50 rounded-2xl overflow-hidden fade-in">
                    <button class="faq-toggle w-full px-6 py-5 flex items-center justify-between text-left">
                        <span class="font-semibold pr-4">Это больше про бизнес или личное?</span>
                        <i data-lucide="chevron-down" class="w-5 h-5 text-gray-400 faq-icon flex-shrink-0"></i>
                    </button>
                    <div class="faq-answer px-6 pb-5">
                        <p class="text-gray-600">Запрос формирует каждый участник. На разбор выносится всё, что сейчас важно в жизни: бизнес, личное, семья, здоровье, мотивация, стратегия.</p>
                    </div>
                </div>

                <div class="faq-item bg-gray-50 rounded-2xl overflow-hidden fade-in">
                    <button class="faq-toggle w-full px-6 py-5 flex items-center justify-between text-left">
                        <span class="font-semibold pr-4">Где проходят встречи?</span>
                        <i data-lucide="chevron-down" class="w-5 h-5 text-gray-400 faq-icon flex-shrink-0"></i>
                    </button>
                    <div class="faq-answer px-6 pb-5">
                        <p class="text-gray-600">Обычно в Доме Атлантов или поблизости. Дата встречи выбирается голосованием участников.</p>
                    </div>
                </div>

                <div class="faq-item bg-gray-50 rounded-2xl overflow-hidden fade-in">
                    <button class="faq-toggle w-full px-6 py-5 flex items-center justify-between text-left">
                        <span class="font-semibold pr-4">Зачем встреча 8 часов?</span>
                        <i data-lucide="chevron-down" class="w-5 h-5 text-gray-400 faq-icon flex-shrink-0"></i>
                    </button>
                    <div class="faq-answer px-6 pb-5">
                        <p class="text-gray-600">Чтобы собрать обратную связь и запросы, подробно их разобрать, и чтобы модератор успел дать общую тему, которая интересна большинству: жизненная стратегия, принципы, цели, способы общения и т.д.</p>
                    </div>
                </div>

                <div class="faq-item bg-gray-50 rounded-2xl overflow-hidden fade-in">
                    <button class="faq-toggle w-full px-6 py-5 flex items-center justify-between text-left">
                        <span class="font-semibold pr-4">Не слишком ли это расширенный формат?</span>
                        <i data-lucide="chevron-down" class="w-5 h-5 text-gray-400 faq-icon flex-shrink-0"></i>
                    </button>
                    <div class="faq-answer px-6 pb-5">
                        <p class="text-gray-600">8 часов — действительно более глубокий формат, чем стандартные 4. По опыту тех, кто проходил разные группы и форматы, такой день окупается глубиной и эффектом: успеваешь не только проговорить, но и реально переосмыслить и перезапланировать.</p>
                    </div>
                </div>

                <div class="faq-item bg-gray-50 rounded-2xl overflow-hidden fade-in">
                    <button class="faq-toggle w-full px-6 py-5 flex items-center justify-between text-left">
                        <span class="font-semibold pr-4">Я не хочу всё рассказывать о себе</span>
                        <i data-lucide="chevron-down" class="w-5 h-5 text-gray-400 faq-icon flex-shrink-0"></i>
                    </button>
                    <div class="faq-answer px-6 pb-5">
                        <p class="text-gray-600">Каждый сам выбирает уровень откровенности. Никто не давит и не вытягивает информацию насильно — группа создаёт безопасное пространство, а не принуждение.</p>
                    </div>
                </div>

                <div class="faq-item bg-gray-50 rounded-2xl overflow-hidden fade-in">
                    <button class="faq-toggle w-full px-6 py-5 flex items-center justify-between text-left">
                        <span class="font-semibold pr-4">Я не дотягиваю до других участников</span>
                        <i data-lucide="chevron-down" class="w-5 h-5 text-gray-400 faq-icon flex-shrink-0"></i>
                    </button>
                    <div class="faq-answer px-6 pb-5">
                        <p class="text-gray-600">В группе участники с разным уровнем дохода и стадией бизнеса. По обратной связи, если человек совпадает по ценностям и готов включаться, чувства «я не на своём месте» не возникает.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="join" class="py-20 md:py-28 bg-gray-900 text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="fade-in">
                <h2 class="font-display text-3xl md:text-4xl lg:text-5xl font-bold mb-6">
                    Хотите вступить в&nbsp;<span class="text-accent">Energy</span>?
                </h2>
                <p class="text-xl text-gray-400 mb-10 max-w-2xl mx-auto">
                    Напишите нашему коммьюнити-менеджеру Анастасии в&nbsp;Telegram. Она расскажет подробнее и&nbsp;ответит на&nbsp;все вопросы.
                </p>

                <a href="https://t.me/NastyaGraba_atlanty" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-3 bg-accent hover:bg-accent-dark text-white px-10 py-5 rounded-full text-lg font-semibold transition-all hover:scale-105 mb-8">
                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z" />
                    </svg>
                    <span>Написать @NastyaGraba_atlanty</span>
                </a>

                <p class="text-gray-500 text-sm">
                    Анастасия запросит необходимую информацию и&nbsp;организует знакомство с&nbsp;группой
                </p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-8 border-t border-gray-100">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center justify-between gap-4">
                <div class="font-display font-bold text-xl flex items-center gap-2">
                    <img src="/images/logo.png" alt="Energy" class="h-8 w-auto">
                    <span class="text-accent">Energy</span>
                </div>
                <div class="text-gray-500 text-sm">
                    Форум-группа бизнес-клуба «Атланты»
                </div>
                <div class="text-gray-400 text-xs">
                    работает на технологии NITROSITE
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        // Initialize Lucide icons
        lucide.createIcons();

        // Fade in animation on scroll
        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.fade-in').forEach(el => {
            observer.observe(el);
        });

        // FAQ accordion
        document.querySelectorAll('.faq-toggle').forEach(button => {
            button.addEventListener('click', () => {
                const faqItem = button.closest('.faq-item');
                const isOpen = faqItem.classList.contains('open');

                // Close all other FAQ items
                document.querySelectorAll('.faq-item').forEach(item => {
                    item.classList.remove('open');
                });

                // Toggle current item
                if (!isOpen) {
                    faqItem.classList.add('open');
                }
            });
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const headerOffset = 80;
                    const elementPosition = target.getBoundingClientRect().top;
                    const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
</body>

</html>