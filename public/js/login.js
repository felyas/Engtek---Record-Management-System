//show & hide password
const showPasswordBtn = document.getElementById("show-password-button");
const passwordInput = document.getElementById("password-input");
const showHideImg = document.getElementById("show-hide-img");

showPasswordBtn.addEventListener('click', () => {
    const isHidden = passwordInput.type === 'password';
    passwordInput.type = isHidden ? 'text' : 'password';
    showHideImg.src = isHidden ? '/images/show-black.svg' : '/images/hide-black.svg';
})