document.addEventListener('DOMContentLoaded', function(){
    let splide = new Splide('.splide', {
        type: 'loop',
        width: '100%',
        height: '85vh',
        pagination: false,
        autoplay: false,
        cover: true,
        speed: 1,
        arrows: false,
        lazyLoad: 'nearby',
        preloadPages: 2,
        video: {
            autoplay: true,
            mute: true,
            disableOverlayUI: true,
            hideControls: true,
            playerOptions: {
                htmlVideo: {
                    preload: 'auto'
                }
            }
        },
    });

    splide.on('video:ended', function(p){
        p.Splide.go('+')
    });

    splide.on('active', function(p){
        let video = p.slide.querySelector('video');
        if(video){
            video.currentTime = 0;
            video.play();
        }
    });

    splide.on('mounted', function(p){
        console.log('splide mounted');
        if(AOS){
            AOS.refresh();
        }
    });

    splide.mount(window.splide.Extensions);
});