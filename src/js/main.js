let openers = document.querySelectorAll('.opener');
if(0 < openers.length) {
    for(let opener of openers) {
        opener.addEventListener('click', function(e){
            e.preventDefault();
            let target = document.querySelector(`#${e.target.dataset.target}`);
            let scroll = false;
            if(e.target.dataset.scroll){
                scroll = document.querySelector(`#${e.target.dataset.scroll}`);
            }
            target.classList.toggle('active');
            closeButton = target.querySelector('.opener_close_button');
            if(closeButton) {
                closeButton.focus();
            }
            if(target.classList.contains('active')){
                if(scroll){
                    scroll.scrollIntoView();
                }else{
                    target.scrollIntoView();
                }
            }
        });
    }
}

let openerCloseButtons = document.querySelectorAll('.opener_close_button');
if(0< openerCloseButtons.length) {
    for(let button of openerCloseButtons) {
        button.addEventListener('click', function(e){
            e.preventDefault();
            e.target.parentElement.classList.remove('active');
        });
    }
}

let packageImageButtons = document.querySelectorAll('.package_image_button');
if(0 < packageImageButtons.length) {
    for(let button of packageImageButtons) {
        button.addEventListener('click', function(e){
            e.preventDefault();
            let target = document.querySelector(`#${e.target.dataset.target}`);
            let buttons = e.target.parentElement.parentElement.querySelectorAll('.package_image_button');
            for(let b of buttons){
                document.querySelector(`#${b.dataset.target}`).classList.remove('active');
                b.classList.remove('active');
            }
            e.target.classList.add('active');
            target.classList.add('active');
        })
    }
}