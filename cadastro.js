
class MobileNavbar {
    constructor(mobileMenu, navList, navLinks) {
        this.mobileMenu = document.querySelector(mobileMenu);
        this.navList = document.querySelector(navList);
        this.navLinks = document.querySelectorAll(navLinks);
        this.activeClass = "active";

        this.handleClick = this.handleClick.bind(this);
    }

    animateLinks() {
        this.navLinks.forEach((link, index) => {
            link.style.animation
                ? (link.style.animation = "")
                : (link.style.animation = `navLinkFade 0.5s ease forwards ${
                    index / 7 + 0.3
                }s`);
        });
    }

    handleClick() {
        this.navList.classList.toggle(this.activeClass);
        this.mobileMenu.classList.toggle(this.activeClass);
        this.animateLinks();
    }

    addClickEvent() {
        this.mobileMenu.addEventListener("click", this.handleClick);
    }

    init() {
        if (this.mobileMenu) {
            this.addClickEvent();
        }
        return this;
    }
}

const mobileNavbar = new MobileNavbar(
    ".mobile-menu",
    ".nav-list",
    ".nav-list li",
);
mobileNavbar.init();

var email = document.getElementById('email');
var text = document.getElementById('usuario');
var password = document.getElementById('senha');

email.addEventListener('focus', ()=>{
    email.style.borderColor = "darckblue";
});
email.addEventListener('blur', ()=>{
    email.style.borderColor = "#ccc";
});

text.addEventListener('focus', ()=>{
    text.style.borderColor = "darckblue";
});
text.addEventListener('blur', ()=>{
    text.style.borderColor = "#ccc";
});

password.addEventListener('focus', ()=>{
    password.style.borderColor = "darckblue";
});
password.addEventListener('blur', ()=>{
    password.style.borderColor = "#ccc";
});