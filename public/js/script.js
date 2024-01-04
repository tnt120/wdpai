const form = document.querySelector('form');
const emailInput = form.querySelector('input[name=email]');
const passwordInput = form.querySelector('input[name=password]');
const confirmPasswordInput = form.querySelector('input[name=passwordConfirmation]');

function isPasswordValid(password) {
  return /^(?=.*\d)[A-Za-z\d]{8,}$/.test(password);
}

function isEmail(email) {
  return /\S+@\S+\.\S+/.test(email);
}

function arePasswordsSame(password, confirmedPassword) {
  return password === confirmedPassword;
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

emailInput.addEventListener('blur', () => {
  markValidation(emailInput, isEmail(emailInput.value), 'Invalid email address.');
});

passwordInput.addEventListener('blur', () => {
  markValidation(passwordInput, isPasswordValid(passwordInput.value), 'Password must be at least 8 characters long and include a number.');
});

confirmPasswordInput.addEventListener('blur', () => {
  const isValid = arePasswordsSame(passwordInput.value, confirmPasswordInput.value);
  markValidation(confirmPasswordInput, isValid, 'Passwords do not match.');
});

form.addEventListener('submit', e => {
  if (isPasswordValid(passwordInput.value) && arePasswordsSame(passwordInput.value, confirmPasswordInput.value) && isEmail(emailInput.value)) return;

  markValidation(confirmPasswordInput.nextElementSibling, false, 'You have to provide correctly all fields');

  e.preventDefault();
});
