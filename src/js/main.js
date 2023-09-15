// LENIS SMOOTH SCROLL
const lenis = new Lenis({
    duration: 1.2,
    easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
    direction: "vertical",
    gestureDirection: "vertical",
    smooth: !0,
    mouseMultiplier: 1,
    smoothTouch: !1,
    touchMultiplier: 2,
    infinite: !1,
});
function raf(t) {
    lenis.raf(t), requestAnimationFrame(raf);
}
lenis.on(
    "scroll",
    ({ scroll: t, limit: e, velocity: r, direction: o, progress: i }) => {
        console.log({
            scroll: t,
            limit: e,
            velocity: r,
            direction: o,
            progress: i,
        });
    }
),
    requestAnimationFrame(raf),
    document.querySelectorAll("a.anchor__form").forEach((t, e) => {
        t.addEventListener("click", () => {
            event.preventDefault(),
                gsap.to(window, {
                    duration: 1,
                    scrollTo: { y: ".form-container", offsetY: 70 },
                });
        });
    });
// END LENIS SMOOTH SCROLL
// END LENIS SMOOTH SCROLL

// GSAP HORIZONTAL PANEL SCROLL
// GSAP HORIZONTAL PANEL SCROLL
let sections = gsap.utils.toArray(".panel");

gsap.to(sections, {
    xPercent: -100 * (sections.length - 1),
    ease: "none",
    scrollTrigger: {
        trigger: ".container",
        pin: true,
        scrub: 1,
        snap: 1 / (sections.length - 1),
        // we snap each 1/X, X being the number of panels
        // base vertical scrolling on how wide the container is so it feels more natural.
        end: "+=3500",
    },
});

// END GSAP HORIZONTAL PANEL SCROLL
// END GSAP HORIZONTAL PANEL SCROLL

// GSAP HEADER REVEAL BASED ON SCROLL UP
// GSAP HEADER REVEAL BASED ON SCROLL UP
// GSAP HEADER REVEAL BASED ON SCROLL UP

const showAnim = gsap
    .from("nav", {
        yPercent: -100,
        paused: true,
        duration: 0.2,
    })
    .progress(1);

ScrollTrigger.create({
    start: "top top",
    end: 99999,
    onUpdate: (self) => {
        self.direction === -1 ? showAnim.play() : showAnim.reverse();
    },
});

// END GSAP HEADER REVEAL
// END GSAP HEADER REVEAL
// END GSAP HEADER REVEAL

// SWIPER
// SWIPER
// SWIPER
const swiper = new Swiper(".swiper", {
    // Optional parameters
    slidesPerView: 3,
    spaceBetween: 30,
    direction: "horizontal",
    // loop: true,

    // Navigation arrows
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
// END SWIPER
// END SWIPER
// END SWIPER
