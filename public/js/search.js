const searchButton = document.querySelector('button[type="button"]');
const searchTitle = document.querySelector('input[name="title"]');
const searchAuthor = document.querySelector('select[name="author"]');
const searchGenre = document.querySelector('select[name="genre"]');
const bookContainer = document.querySelector('section');

searchButton.addEventListener('click', () => {
    const data = {
        title: searchTitle.value,
        author: searchAuthor.value,
        genre: searchGenre.value,
    };

    fetch('/search', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(data),
    })
        .then(response => response.json())
        .then(books => {
            bookContainer.innerHTML = '';
            loadBooks(books);
        });
});

function loadBooks(books) {
    books.forEach(book => {
        createBook(book);
    });
}

function createBook(book) {
    const template = document.querySelector('#book-template');

    const clone = template.content.cloneNode(true);
    const image = clone.querySelector('img');
    image.src = `/public/covers/${book.url}`;
    const title = clone.querySelector('.content-item-title');
    title.innerHTML = book.title;
    const author = clone.querySelector('.content-item-author');
    author.innerHTML = `${book.name} ${book.surname}`;
    const rating = clone.querySelector('.content-item-rating');
    rating.innerHTML = `Rating: ${book.rating}`;
    // const searchBtn = clone.querySelector('.search-btn');
    const searchBtn = clone.querySelector('.search-btn');
    searchBtn.onclick = function () {
        redirectDetails(book.book_id);
    };

    bookContainer.appendChild(clone);
}
