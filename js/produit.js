const sr = ScrollReveal();

sr.reveal('.image-produit', {
    origin: 'top',
    duration: 1500,
    distance: '40%',
    scale: 0.6
}, 200);

sr.reveal('.info-caracte', {
    duration: 2000,
    distance: '60%',
    scale:0.5,
    delay: 600
});

sr.reveal('.texte-descriptif', {
    origin: 'right',
    duration: 1500,
    distance: '40%'
});