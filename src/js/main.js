let openers = document.querySelectorAll('.opener');
console.log(openers);
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