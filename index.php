<!DOCTYPE html>
<html lang="zh-HK">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>柏傲莊 The Pavilia Farm - 匠心築造地標豪宅</title>
    <meta name="description" content="柏傲莊 III｜550間 馬年賀歲登場。匠心築造地標豪宅，融合現代建築美學與自然生活哲學，打造香港頂級住宅新標準。">
    <meta property="og:image" content="./images/logo.png" />
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans+SC:wght@300;400;500;600;700&family=Noto+Serif+SC:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css">


    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-17987421038"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'AW-17987421038');
    </script>
    <!-- Event snippet for 網頁瀏覽 conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
    <script>
        function gtag_report_conversion(url) {
            var callback = function () {
                if (typeof (url) != 'undefined') {
                    window.location = url;
                }
            };
            gtag('event', 'conversion', {
                'send_to': 'AW-17987421038/0VwHCJaTiYIcEO6GiYFD',
                'value': 1.0,
                'currency': 'HKD',
                'event_callback': callback
            });
            return false;
        }
    </script>
</head>

<body>
    <!-- Fixed Contact Buttons -->
    <div class="fixed-contact">
        <a href="tel:94085969" class="contact-btn phone-btn">
            <i class="fas fa-phone"></i>
            <span>9408 5969</span>
        </a>
        <a class="contact-btn whatsapp-btn" onclick="openWhatsApp()">
            <i class="fab fa-whatsapp"></i>
            <span>WhatsApp</span>
        </a>
    </div>

    <!-- Header -->
    <header class="header" id="header">
        <div class="container">
            <div class="nav-brand">
                <h1 class="brand-title">The Pavilia Farm</h1>
                <p class="brand-subtitle">柏傲莊</p>
            </div>

            <nav class="nav-menu" id="navMenu">
                <a href="#hero" class="nav-link">首頁</a>
                <a href="#gallery" class="nav-link">項目展示</a>
                <a href="#brochure" class="nav-link">售樓說明書</a>
                <a href="#pricelist" class="nav-link">價單</a>


                <a href="#contact" class="nav-link">聯繫我們</a>
            </nav>

            <div class="nav-actions">
                <button class="mobile-menu-toggle" id="mobileMenuToggle">
                    <!--- <i class="fas fa-bars"></i>-->
                </button>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main>


        <!-- Hero Section -->
        <section id="hero" class="hero">
            <div class="hero-background">
                <img src="images/hero-bg.png" alt="柏傲莊室內設計" class="hero-image">
                <div class="hero-overlay"></div>
            </div>

            <div class="container hero-content">
                <div class="hero-text">
                    <h1 class="hero-title">The Pavilia Farm</h1>
                    <h2 class="hero-chinese">柏傲莊</h2>
                    <p class="hero-subtitle">The Pavilia Farm III • 柏傲莊 III</p>
                    <p class="hero-description">柏傲莊 III｜550間 馬年賀歲登場 <br><br>匠心築造地標豪宅，融合現代建築美學與自然生活哲學，打造香港頂級住宅新標準。</p>

                    <div class="hero-actions">

                        <button class="btn btn-large btn-primary" onclick="openWhatsApp()">

                            查詢詳情
                        </button>



                        <button class="btn btn-large btn-outline" onclick="openWhatsApp()">

                            預約參觀


                        </button>

                    </div>
                </div>
            </div>

            <button class="scroll-indicator" onclick="scrollToSection('brochure')">
                <i class="fas fa-chevron-down"></i>
            </button>
        </section>
        <!-- Gallery Section -->

        <section id="brochure" class="brochure">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title"></h2>
                    <p class="section-subtitle"></p>
                </div>

                <div class="brochure-content">
                    <div class="brochure-card">

                        <div class="brochure-info">
                            <h3 class="brochure-title"></h3>
                            <p class="brochure-description">柏傲莊 位於新界
                                大圍車公廟路18號，於2022年9月開始落成，屋苑分為2期，由10座樓宇組成，共有2,198個單位。屋苑內設有會所、泳池、兒童設施、運動設施、娛樂設施、餐飲設施、美容/保健、休閒區、基座商場，交通便利，步行至港鐵時間約1分鐘。附近設有翠田街室外停車場；周邊民生設施完善，1分鐘到達圍方；5分鐘到達大圍遊樂場；區內亦設有Tesla
                                汽車充電站及聯邦動物診所。另外，小學校網在88區，中學校區在沙田。</p>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="gallery" class="gallery">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title">項目展示</h2>
                    <p class="section-subtitle"></p>
                </div>

                <div class="gallery-grid">
                    <div class="gallery-item">
                        <img src="images/1.jpg" alt="無邊際泳池" class="gallery-image">
                        <div class="gallery-overlay">
                            <h3 class="gallery-title"></h3>
                            <p class="gallery-description"></p>
                        </div>
                    </div>

                    <div class="gallery-item">
                        <img src="images/2.png" alt="建築外觀" class="gallery-image">
                        <div class="gallery-overlay">
                            <h3 class="gallery-title"></h3>
                            <p class="gallery-description"></p>
                        </div>
                    </div>

                    <div class="gallery-item">
                        <img src="images/3.jpg" alt="泳池設施" class="gallery-image">
                        <div class="gallery-overlay">
                            <h3 class="gallery-title"></h3>
                            <p class="gallery-description"></p>
                        </div>
                    </div>

                    <div class="gallery-item">
                        <img src="images/4.jpg" alt="戶外泳池" class="gallery-image">
                        <div class="gallery-overlay">
                            <h3 class="gallery-title"></h3>
                            <p class="gallery-description"></p>
                        </div>
                    </div>

                    <div class="gallery-item">
                        <img src="images/5.jpg" alt="泳池景觀" class="gallery-image">
                        <div class="gallery-overlay">
                            <h3 class="gallery-title"></h3>
                            <p class="gallery-description"></p>
                        </div>
                    </div>

                    <div class="gallery-item">
                        <img src="images/6.png" alt="健身中心" class="gallery-image">
                        <div class="gallery-overlay">
                            <h3 class="gallery-title"></h3>
                            <p class="gallery-description"></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Brochure Section -->
        <section id="brochure" class="brochure">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title"></h2>
                    <p class="section-subtitle"></p>
                </div>

                <div class="brochure-content">
                    <div class="brochure-card">

                        <div class="brochure-info">
                            <h3 class="brochure-title">柏傲莊售樓說明書</h3>
                            <p class="brochure-description"></p>

                            <a target="_blank" href="./book.pdf">
                                <button class="btn btn-large btn-primary">

                                    <i class="fas fa-download"></i>
                                    下載售樓說明書


                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Price List Section -->
        <section id="pricelist" class="pricelist">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title"></h2>
                    <p class="section-subtitle"></p>
                </div>

                <div class="pricelist-content">
                    <div class="pricelist-card">

                        <div class="pricelist-info">
                            <h3 class="pricelist-title">最新價單</h3>
                            <p class="pricelist-description">包含所有可售單位價格、面積、樓層分佈及多種付款計劃選擇</p>
                            <a target="_blank" href="./price.pdf">
                                <button class="btn btn-large btn-primary">

                                    <i class="fas fa-eye"></i>
                                    查看最新價單

                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <!-- Contact Section -->
        <section id="contact" class="contact">
            <div class="container">
                <div class="contact-card">
                    <div class="section-header">
                        <h2 class="section-title">聯繫我們</h2>
                        <p class="section-subtitle">歡迎預約參觀或查詢詳情</p>
                    </div>

                    <div class="contact-whatsapp">
                        <button class="btn btn-whatsapp-large" onclick="openWhatsApp()">
                            <i class="fab fa-whatsapp"></i>
                            WhatsApp 聯繫我們
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-brand">
                    <h3 class="footer-title">The Pavilia Farm</h3>
                    <p class="footer-chinese">柏傲莊</p>
                    <p class="footer-tagline">匠心築造 · 品味生活</p>
                </div>

                <div class="footer-contact">

                    <div class="footer-contact-item" style="justify-content: center;" onclick="openWhatsApp()">
                        <i class="fab fa-whatsapp"></i>

                        <span>WhatsApp 查詢</span></a>
                    </div>
                </div>

                <p class="footer-copyright"> </p>
            </div>
        </div>
    </footer>

    <!-- Custom JavaScript -->
    <script src="script.js"></script>
</body>

</html>