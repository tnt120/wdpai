const cover = document.querySelector('.main-cover');

const url = new URLSearchParams(window.location.search);
const id = url.get('book');

const data = {
    id: id,
};

fetch('/getCover', {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json',
    },
    body: JSON.stringify(data),
})
    .then(response => response.json())
    .then(url => {
        cover.style.backgroundImage = `url("/public/covers/${url}")`;
    });
