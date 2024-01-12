const cover = document.querySelector('.main-cover');
const rmBtn = document.querySelector('.remove');
const finishedBtn = document.querySelector('.finished');
const readingBtn = document.querySelector('.reading');
const toReadBtn = document.querySelector('.to-read');

const urlDetails = new URLSearchParams(window.location.search);
const id = urlDetails.get('book');

async function fetchCover() {
    const data = { id: id };

    try {
        const response = await fetch('/getCover', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(data),
        });
        const url = await response.json();
        cover.style.backgroundImage = `url("/public/covers/${url}")`;
    } catch (e) {
        console.error('Error fetching cover:', e);
    }
}

async function checkBook() {
    const data = {
        bookId: id,
    };

    try {
        const response = await fetch('/getUserBook', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(data),
        });
        const book = await response.json();
        console.log(book);
        switch (book) {
            case 1:
                rmBtn.style.display = 'block';
                finishedBtn.style.display = 'none';
                break;
            case 2:
                rmBtn.style.display = 'block';
                readingBtn.style.display = 'none';
                break;
            case 3:
                rmBtn.style.display = 'block';
                toReadBtn.style.display = 'none';
                break;
        }
    } catch (e) {
        console.error('Error fetching user book:', e);
    }
}

checkBook();
fetchCover();
