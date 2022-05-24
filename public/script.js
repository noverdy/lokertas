const swup = new Swup({
    cache: false,
    containers: ["#app"],
    animateHistoryBrowsing: true,
    linkSelector: 'a[href^="' + window.location.origin + '"]:not([data-no-swup]):not([target="_blank"]), ' +
        'a[href^="/"]:not([data-no-swup]):not([target="_blank"]), ' +
        'a[href^="#"]:not([data-no-swup]):not([target="_blank"])'
});

swup.on('animationInStart', () => {
    window.scrollTo({
        top: 0
    })
})

const scrollToDiv = (id) => {
    const element = document.getElementById(id)
    const offset = document.querySelector('nav').offsetHeight
    const bodyRect = document.body.getBoundingClientRect().top
    const elementRect = element.getBoundingClientRect().top
    const elementPosition = elementRect - bodyRect
    const offsetPosition = elementPosition - offset

    window.scrollTo({
        top: offsetPosition,
    })
}

window.onload = () => {
    const r = document.querySelector(':root')
    r.style.setProperty('--nav-height', document.querySelector('nav').offsetHeight + 'px')
}
