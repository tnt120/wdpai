async function updateUserBook(typeId, bookId) {
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

async function removeUserBook(bookId) {
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
