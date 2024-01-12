const buttonToRead = document.querySelector('button.to-read');
const buttonReading = document.querySelector('button.reading');
const buttonFinished = document.querySelector('button.finished');
const removeButton = document.querySelector('button.remove');

const urlBooksHandler = new URLSearchParams(window.location.search);
const bookId = urlBooksHandler.get('book');

async function updateUserBook(typeId) {
    if (typeId === 1) {
        const input = prompt('Rate this book! Enter number from 0 to 5:', '5.0');
        if (input === null || input === '') {
            alert('No rating provided, cannot be added to finished books.');
            return;
        }
        const parsedRating = parseFloat(input);
        if (isNaN(parsedRating) || parsedRating < 0 || parsedRating > 5) {
            alert('Invalid rating. It must be a number between 0 and 5.');
            return;
        }
        rating = parsedRating;
    } else {
        rating = 0;
    }

    if (!confirm('Are you sure you want to move this book?')) {
        return;
    }

    const data = {
        typeId: typeId,
        bookId: bookId,
        rating: rating,
    };

    try {
        const response = await fetch('/addUserBook', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(data),
        });
        window.location.reload();
    } catch (e) {
        console.error('Error:', e);
    }
}

async function removeUserBook() {
    if (!confirm('Are you sure you want to remove this book from you books?')) {
        return;
    }

    const data = {
        bookId: bookId,
    };

    try {
        const response = await fetch('/removeUserBook', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(data),
        });
        window.location.reload();
    } catch (e) {
        console.log(e);
    }
}

function validateUpdateBook() {}

buttonToRead ? buttonToRead.addEventListener('click', () => updateUserBook(3)) : '';
buttonReading ? buttonReading.addEventListener('click', () => updateUserBook(2)) : '';
buttonFinished ? buttonFinished.addEventListener('click', () => updateUserBook(1)) : '';

removeButton ? removeButton.addEventListener('click', () => removeUserBook()) : '';
