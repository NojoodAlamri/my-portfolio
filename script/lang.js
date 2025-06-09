// script/lang.js

const translations = {
    en: {
        greeting: "Hi there,",
        introName: "I'm Nojood",
        introAbout: "I craft experiences for the web and beyond.",
        introDesc: "I'm a software engineer crafting smooth and meaningful experiences for the web and mobile, driven by curiosity and a passion for learning.",
        viewProjects: "View Projects",
        downloadResume: "Download Resume",
        highlights: "Highlights",
        skills: "Skills",
        tools: "Tools & Tech",
        contact: "Contact Me",
        namePlaceholder: "Name",
        emailPlaceholder: "Email",
        msgPlaceholder: "Message",
        send: "Send",
        location: "Jeddah, Saudi Arabia"
    },
    ar: {
        greeting: "مرحباً،",
        introName: "أنا نجود",
        introAbout: "أصمم تجارب للمواقع وما هو أبعد من ذلك.",
        introDesc: "أنا مهندسة برمجيات أعمل على تطوير تجارب سلسة وهادفة للويب والجوال، بدافع من الفضول وحب التعلم.",
        viewProjects: "عرض المشاريع",
        downloadResume: "تحميل السيرة الذاتية",
        highlights: "أبرز المحطات",
        skills: "المهارات",
        tools: "الأدوات والتقنيات",
        contact: "تواصل معي",
        namePlaceholder: "الاسم",
        emailPlaceholder: "البريد الإلكتروني",
        msgPlaceholder: "الرسالة",
        send: "إرسال",
        location: "جدة، المملكة العربية السعودية"
    }
};

function updateTextContent(lang) {
    const t = translations[lang];
    if (!t) return;
    document.querySelector('#greeting').textContent = t.greeting;
    document.querySelector('#introName').textContent = t.introName;
    document.querySelector('.intro-about-me').textContent = t.introAbout;
    document.querySelector('.intro-description').textContent = t.introDesc;
    document.querySelector('.btn-gradient-filled').textContent = t.viewProjects;
    document.querySelector('.btn-gradient-outline').textContent = t.downloadResume;
    document.querySelector('#highlights .section-title').textContent = t.highlights;
    document.querySelector('#skills .section-title').textContent = t.skills;
    document.querySelector('#tools .section-title').textContent = t.tools;
    document.querySelector('#contact .section-title').textContent = t.contact;
    document.querySelector('input[name="name"]').placeholder = t.namePlaceholder;
    document.querySelector('input[name="email"]').placeholder = t.emailPlaceholder;
    document.querySelector('textarea[name="msg"]').placeholder = t.msgPlaceholder;
    document.querySelector('#contact button[type="submit"]').textContent = t.send;
    document.querySelector('#contact .small').textContent = t.location;
}
