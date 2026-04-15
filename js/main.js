 
AOS.init({
    duration: 800,        // animation duration
    easing: 'ease-out-cubic',
    once: true,           // animate only once
    offset: 100           // trigger point
}); 

// Back to Top 
const backToTop = document.getElementById("backToTop");

window.addEventListener("scroll", () => {
    if (window.scrollY > 500) {
        backToTop.classList.add("show");
    } else {
        backToTop.classList.remove("show");
    }
});

backToTop.addEventListener("click", () => {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
});
// Back to Top 