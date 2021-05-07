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