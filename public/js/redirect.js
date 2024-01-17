function redirectDetails(id) {
    window.location.href = `/details?book=${id}`;
}

function redirectHome() {
    window.location.href = '/home';
}

function redirectEdit(id) {
    console.log('xd');
    window.location.href = `/edit?book=${id}`;
}
