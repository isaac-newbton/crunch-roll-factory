let sliders = document.querySelectorAll('.slides');
if(sliders) {
    for(let slider of sliders) {
        let slides = slider.querySelectorAll('.slide');
        if(slides) {
            n = 0;
            for(let slide of slides) {
                if(n==0){
                    let video = slide.querySelector('video');
                    if(video) {
                        video.play();
                    }
                }
                n++;
            }
        }
    }

    let sliderPrevButtons = document.querySelectorAll('.slider_arrow_button.prev');
    let sliderNextButtons = document.querySelectorAll('.slider_arrow_button.next');
    let sliderNavButtons = document.querySelectorAll('.slider_nav_button');

    if(sliderPrevButtons){
        for(let i = 0; i < sliderPrevButtons.length; i++) {
            sliderPrevButtons[i].addEventListener('click', function(e){
                let slider = e.currentTarget.dataset.slider
                prevSlide(document.querySelector(`#${slider}`));
            });
        }
    }

    if(sliderNextButtons){
        for(let i = 0; i < sliderNextButtons.length; i++) {
            sliderNextButtons[i].addEventListener('click', function(e){
                let slider = e.currentTarget.dataset.slider
                nextSlide(document.querySelector(`#${slider}`));
            });
        }
    }

    if(sliderNavButtons){
        for(let i = 0; i < sliderNavButtons.length; i++) {
            sliderNavButtons[i].addEventListener('click', function(e){
                let slider = e.currentTarget.dataset.slider
                jumpToSlide(document.querySelector(`#${slider}`), parseInt(e.currentTarget.dataset.number));
            });
        }
    }

    function nextSlide(slider) {
        let n = parseInt(slider.dataset.active) + 1;
        let max = countSlides(slider);
        if(n > max) n = 1;
        if(n < 1) n = 1;
        jumpToSlide(slider, n);
    }

    function prevSlide(slider) {
        let n = parseInt(slider.dataset.active) - 1;
        if(n < 1) n = countSlides(slider);
        if(n < 1) n = 1;
        jumpToSlide(slider, n);
    }

    function jumpToSlide(slider, number) {
        let slides = slider.querySelectorAll('.slide');
        if(slides) {
            number = parseInt(number);
            if((number < 1) || (number > slides.length)) number = 1;
            let n = 1;
            for(let slide of slides) {
                slide.classList.remove('active');
                let video = slide.querySelector('video');
                if(video) {
                    video.pause();
                    video.currentTime = 0;
                }
                if(n==number) {
                    slide.classList.add('active');
                    if(video) video.play();
                }
                n++;
            }
            buttons = slider.querySelectorAll('.slider_nav_button');
            if(buttons) {
                let n = 1;
                for(let button of buttons) {
                    if(n==number){
                        button.classList.add('active');
                    }else{
                        button.classList.remove('active');
                    }
                    n++;
                }
            }
            slider.dataset.active = number;
        }
    }

    function countSlides(slider) {
        let slides = slider.querySelectorAll('.slide');
        if(!slides) return 0;
        return slides.length;
    }
}