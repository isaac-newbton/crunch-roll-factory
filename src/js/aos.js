if(AOS){

    let aosElements = document.querySelectorAll('.gb-headline-text, .entry_content > p, .product .content_text, .single_product .description, .single_product .ingredients, .single_product .heating_instructions header, .single_product .heating_instructions li, .more_products > h2, .product_links_nav li .button, .products > li img, .products > li .title_container, .products > li .button_container .button, .heating_instructions_container button, .social_feed li, .more_products li');

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