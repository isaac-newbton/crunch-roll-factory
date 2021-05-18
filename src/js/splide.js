document.addEventListener('DOMContentLoaded', function(){
    new Splide('.splide', {
        type: 'loop',
        width: '100%',
        heightRatio: '0.67',
        pagination: false,
        autoplay: true,
        interval: 8000,
        cover: true,
        video: {
            autoplay: true,
            mute: true,
            disableOverlayUI: true,
            hideControls: true,
        },
    }).mount(window.splide.Extensions);
});