const modalWrapper = document.querySelector('.modal');
const modalOverlay = document.querySelector('.modal--overlay');
const modalContent = document.querySelector('.modal--content section.content');


let modal = {
    open: () => {
        modalWrapper.style.display = 'block';

        //modalOverlay.classList.add('animated','fadeIn');
        modalContent.classList.add('animated','fadeInUpSmall');

        modalContent.addEventListener('animationend', function () {
            //modalOverlay.classList.remove('animated','fadeIn');
            modalContent.classList.remove('animated','fadeInUpSmall');

            modalWrapper.style.display = 'block';
        });
    },

    close: () => {
        modalOverlay.classList.add('animated','fadeOut');
        modalContent.classList.add('animated','fadeOutDownSmall');

        modalContent.addEventListener('animationend', function () {
            modalOverlay.classList.remove('animated','fadeOut');
            modalContent.classList.remove('animated','fadeOutDownSmall');

            modalWrapper.style.display = 'none';
        });
    }
}

export { modal };