const form = document.querySelector('form');
const authorSelect = document.querySelector('select[name=author]');
const genreSelect = document.querySelector('select[name=genre]');
const coverInput = document.querySelector('input[name=file]');

function isSelectValid(value) {
    return value !== 'none';
}

function createMessageElement() {
    const messageElement = document.createElement('div');
    messageElement.classList.add('error-message');
    return messageElement;
}

function displayMessage(input, message) {
    let messageElement = input.nextElementSibling;
    if (!messageElement || !messageElement.classList.contains('error-message')) {
        messageElement = createMessageElement();
        input.parentNode.insertBefore(messageElement, input.nextSibling);
    }

    messageElement.textContent = message;
    messageElement.style.display = message ? 'block' : 'none';
}

function markValidation(input, isValid, message) {
    if (isValid) {
        input.classList.remove('no-valid');
        displayMessage(input, '');
    } else {
        input.classList.add('no-valid');
        displayMessage(input, message);
    }
}

authorSelect.addEventListener('blur', () => {
    markValidation(authorSelect, isSelectValid(authorSelect.value), 'You must select the author.');
});

genreSelect.addEventListener('blur', () => {
    markValidation(genreSelect, isSelectValid(genreSelect.value), 'You must select the genre.');
});

form.addEventListener('submit', e => {
    if (isSelectValid(authorSelect.value) && isSelectValid(genreSelect.value)) return;
    console.log(e);
    markValidation(coverInput.nextElementSibling, false, 'You must complete all fields');

    e.preventDefault();
});
