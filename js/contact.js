const sr = ScrollReveal();

sr.reveal('.texte-contact', {
   origin: 'right',
   duration: 2000,
   distance: '50%',
   reset: true
});

sr.reveal('.info-contact', {
    origin: 'left',
    duration: 1500,
    distance: '30%',
    delay: 500,
    reset: true
});

sr.reveal('.formulaire', {
    duration: 2500,
    scale: 0.9,
    reset: true
});

sr.reveal('.titre-carte', {
    origin: 'right',
    duration: 1500,
    distance: '40%',
    reset: true
});

sr.reveal('.carte-google', {
    duration: 1500,
    distance: '50%',
    scale: 0.8,
    delay: 500,
    reset: true
})