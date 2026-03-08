// 全局变量
const contactInfo = {
    phone: '94085969',
    whatsapp: '+85294085969'
};

// DOM 加载完成后初始化
document.addEventListener('DOMContentLoaded', function() {
    initializeApp();
});

// 初始化应用
function initializeApp() {
    setupMobileMenu();
    setupScrollAnimations();
    setupSmoothScrolling();
    setupHeaderScroll();
    addScrollAnimationClasses();
}

// 移动端菜单设置
function setupMobileMenu() {
    const mobileMenuToggle = document.getElementById('mobileMenuToggle');
    const navMenu = document.getElementById('navMenu');
    
    if (mobileMenuToggle && navMenu) {
        mobileMenuToggle.addEventListener('click', function() {
            navMenu.classList.toggle('active');
            
            // 切换图标
            const icon = this.querySelector('i');
            if (navMenu.classList.contains('active')) {
                icon.className = 'fas fa-times';
            } else {
                icon.className = 'fas fa-bars';
            }
        });

        // 点击菜单项时关闭移动端菜单
        const navLinks = navMenu.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                navMenu.classList.remove('active');
                mobileMenuToggle.querySelector('i').className = 'fas fa-bars';
            });
        });
    }
}

// 滚动动画设置
function setupScrollAnimations() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, observerOptions);

    // 观察所有需要动画的元素
    const animatedElements = document.querySelectorAll('.fade-in, .slide-in-left, .slide-in-right');
    animatedElements.forEach(el => observer.observe(el));
}

// 为元素添加滚动动画类
function addScrollAnimationClasses() {
    // 售楼说明书卡片
    const brochureCard = document.querySelector('.brochure-card');
    if (brochureCard) {
        brochureCard.classList.add('fade-in');
    }

    // 价单卡片
    const pricelistCard = document.querySelector('.pricelist-card');
    if (pricelistCard) {
        pricelistCard.classList.add('fade-in');
    }

    // 位置优势项目
    const advantageItems = document.querySelectorAll('.advantage-item');
    advantageItems.forEach((item, index) => {
        item.classList.add('slide-in-right');
        item.style.transitionDelay = `${index * 0.1}s`;
    });

    // 图片展示项目
    const galleryItems = document.querySelectorAll('.gallery-item');
    galleryItems.forEach((item, index) => {
        item.classList.add('fade-in');
        item.style.transitionDelay = `${index * 0.1}s`;
    });

    // 联系卡片
    const contactCard = document.querySelector('.contact-card');
    if (contactCard) {
        contactCard.classList.add('fade-in');
    }

    // 位置图片
    const locationImage = document.querySelector('.location-image');
    if (locationImage) {
        locationImage.classList.add('slide-in-left');
    }
}

// 平滑滚动设置
function setupSmoothScrolling() {
    // 导航链接平滑滚动
    const navLinks = document.querySelectorAll('a[href^="#"]');
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href').substring(1);
            scrollToSection(targetId);
        });
    });
}

// 滚动到指定部分
function scrollToSection(sectionId) {
    const targetElement = document.getElementById(sectionId);
    if (targetElement) {
        const headerHeight = document.querySelector('.header').offsetHeight;
        const targetPosition = targetElement.offsetTop - headerHeight;
        
        window.scrollTo({
            top: targetPosition,
            behavior: 'smooth'
        });
    }
}

// 头部滚动效果
function setupHeaderScroll() {
    const header = document.getElementById('header');

    window.addEventListener('scroll', function() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
        // 添加/移除滚动样式
        if (scrollTop > 100) {
            header.style.background = 'rgba(248, 246, 240, 0.98)';
            header.style.boxShadow = '0 2px 20px rgba(139, 115, 85, 0.1)';
        } else {
            header.style.background = 'rgba(248, 246, 240, 0.95)';
            header.style.boxShadow = 'none';
        }
    });
}

// 拨打电话
function makeCall() {
    window.open(`tel:${contactInfo.phone}`, '_self');
}

// 打开 WhatsApp
function openWhatsApp() {
    const whatsappNumber = contactInfo.whatsapp.replace(/[^0-9]/g, '');
    const message = encodeURIComponent('您好，我對柏傲莊項目感興趣，希望了解更多詳情。');
    window.open(`https://wa.me/${whatsappNumber}?text=${message}`, '_blank');
}

 

 
// 初始化所有功能
document.addEventListener('DOMContentLoaded', function() {
    initializeApp();
    
    // 延迟加载非关键功能
    setTimeout(() => {
        setupLazyLoading();
    }, 1000);
});

// 图片懒加载
function setupLazyLoading() {
    const images = document.querySelectorAll('img[data-src]');
    
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.classList.remove('lazy');
                imageObserver.unobserve(img);
            }
        });
    });

    images.forEach(img => imageObserver.observe(img));
}

// 错误处理
window.addEventListener('error', function(e) {
    console.error('页面错误:', e.error);
});

// 添加键盘导航支持
function addKeyboardNavigation() {
    document.addEventListener('keydown', function(e) {
        // ESC 键关闭移动端菜单
        if (e.key === 'Escape') {
            const navMenu = document.getElementById('navMenu');
            const mobileMenuToggle = document.getElementById('mobileMenuToggle');
            
            if (navMenu && navMenu.classList.contains('active')) {
                navMenu.classList.remove('active');
                mobileMenuToggle.querySelector('i').className = 'fas fa-bars';
            }
        }
    });
}

// 页面可见性 API - 优化性能
document.addEventListener('visibilitychange', function() {
    if (document.hidden) {
        // 页面不可见时暂停动画
        document.body.style.animationPlayState = 'paused';
    } else {
        // 页面可见时恢复动画
        document.body.style.animationPlayState = 'running';
    }
});



const navActions = document.getElementById('navActions');

navActions.addEventListener('click', function (event) {
 const navMenu = document.querySelector('#navMenu');
 

const currentDisplay = window.getComputedStyle(navMenu).display;

if (currentDisplay === 'none') {
  navMenu.style.display = 'flex';
}else{
    navMenu.style.display = 'none';
}
});