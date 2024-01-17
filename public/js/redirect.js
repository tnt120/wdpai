function redirectDetails(id) {
    window.location.href = `/details?book=${id}`;
}

function redirectHome() {
    window.location.href = '/home';
}

function redirectEdit(id) {
    window.location.href = `/edit?book=${id}`;
}

function redirectAuthorsGenres() {
    window.location.href = '/addAuthorsGenres';
}
