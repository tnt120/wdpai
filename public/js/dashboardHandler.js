async function removeBook(id, name, bookImg) {
    if (!confirm(`Are you sure you want to remove "${name}" book?`)) {
        return;
    }

    const data = {
        bookId: id,
        bookUrl: bookImg,
    };

    try {
        const response = await fetch('/removeBook', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(data),
        });
        const responseData = await response.json();
        if (responseData === 204) {
            alert('Unable to delete book. Try again later');
        }
        window.location.reload();
    } catch (e) {
        console.log(e);
    }
}
