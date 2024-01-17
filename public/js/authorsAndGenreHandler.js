async function removeAuthor() {
    const selectAuthor = document.querySelector('.author-select');
    const id = selectAuthor.value;
    const author = selectAuthor.options[selectAuthor.selectedIndex].text;

    if (id === 'null') return;

    if (!confirm(`Are you sure you want to remove "${author}" author?`)) {
        return;
    }

    const data = {
        authorId: id,
    };

    try {
        const response = await fetch('/removeAuthor', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(data),
        });
        const responseData = await response.json();
        if (responseData === 204) {
            alert('Unable to delete author. Try again later');
            return;
        }
        if (responseData === 500) {
            alert("You can't remove this author because he has some books. First, remove his books");
            return;
        }
        window.location.reload();
    } catch (e) {
        console.log(e);
    }
}

async function removeGenre() {
    const selectGenre = document.querySelector('.genre-select');
    const id = selectGenre.value;
    const genre = selectGenre.options[selectGenre.selectedIndex].text;

    console.log(id, genre);

    if (id === 'null') return;

    if (!confirm(`Are you sure you want to remove "${genre}" genre?`)) {
        return;
    }

    const data = {
        genreId: id,
    };

    try {
        const response = await fetch('/removeGenre', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(data),
        });
        const responseData = await response.json();
        if (responseData === 204) {
            alert('Unable to delete genre. Try again later');
            return;
        }
        if (responseData === 500) {
            alert("You can't remove this genre because there are some books of this genre. First, books of this genre");
            return;
        }
        window.location.reload();
    } catch (e) {
        console.log(e);
    }
}
