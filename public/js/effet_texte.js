// Wrap every letter in a span
var textWrapper = document.querySelector('.ml9 .letters');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

//loop pour la boucle
anime.timeline({loop: true})
    .add({
        targets: '.ml9 .letter',
        scale: [0, 1],
        duration: 5500,
        elasticity: 600,
        delay: (el, i) => 45 * (i+1)
    }).add({
    targets: '.ml9',
    opacity: 0,
    duration: 1500,
    easing: "easeOutExpo",
    delay: 1000
});