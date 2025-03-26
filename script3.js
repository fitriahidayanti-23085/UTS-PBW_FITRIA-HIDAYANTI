document.addEventListener("DOMContentLoaded", function () {
    const navLinks = document.querySelectorAll("nav ul li a");

    navLinks.forEach(link => {
        link.addEventListener("mouseenter", function () {
            this.style.backgroundColor = "#ffcccc";
        });

        link.addEventListener("mouseleave", function () {
            this.style.backgroundColor = "transparent";
        });

        link.addEventListener("click", function () {
            console.log(`Anda mengklik menu: ${this.textContent}`);
        });
    });
    const aboutTitle = document.querySelector("#about h1");
    aboutTitle.style.opacity = "0";
    aboutTitle.style.transform = "translateY(-20px)";

    setTimeout(() => {
        aboutTitle.style.transition = "opacity 1s, transform 1s";
        aboutTitle.style.opacity = "1";
        aboutTitle.style.transform = "translateY(0)";
    }, 500);
});
