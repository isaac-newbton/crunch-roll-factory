if(AOS){

    let aosElements = document.querySelectorAll('.gb-headline-text, .entry_content > p');

    if(0 < aosElements.length){
        
        for(let e of aosElements){
            e.setAttribute('data-aos-duration', '1200');
            e.setAttribute('data-aos', 'fade-up');
        }

    }

    AOS.init({
        once: false
    });
}