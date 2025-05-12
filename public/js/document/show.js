console.log('documents');


const buttons = document.querySelectorAll('.see-more-btn');

buttons.forEach(button => {
    button.addEventListener('click', () => {
        const currentRow = button.closest('tr');
        const nextRow = currentRow.nextElementSibling;
        let caret = button.querySelector('.caret-img');

        if (nextRow && nextRow.classList.contains('hidden')) {
            nextRow.classList.remove('hidden');
            caret.src = '/images/caret-up-solid.svg';
        } else if (nextRow) {
            nextRow.classList.add('hidden');
            caret.src = 'images/caret-down-solid.svg';
        }
    });
});