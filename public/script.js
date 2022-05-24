const swup = new Swup({
    containers: ["#app"],
    animateHistoryBrowsing: true,
});

window.onload = () => {
    const r = document.querySelector(':root')
    r.style.setProperty('--nav-height', document.querySelector('nav').offsetHeight + 'px')
}

const scrollToDiv = (id) => {
    const element = document.getElementById(id)
    const offset = document.querySelector('nav').offsetHeight
    const bodyRect = document.body.getBoundingClientRect().top
    const elementRect = element.getBoundingClientRect().top
    const elementPosition = elementRect - bodyRect
    const offsetPosition = elementPosition - offset

    window.scrollTo({
        top: offsetPosition,
        behavior: 'smooth',
    })
}

const scrollToTop = () => {
    scrollToDiv('app')
}
