const passwordSection = document.querySelectorAll(".password-section");
passwordSection.forEach((section) => {
    const showPasswordBtn = section.querySelector(".show-password");
    const passwordInput = section.querySelector(".password-input");
    const img = section.querySelector(".show-password-img");

    showPasswordBtn.addEventListener('click', () => {
        const isHidden = passwordInput.type === 'password';
        passwordInput.type = isHidden ? 'text' : 'password';
        img.src = isHidden ? '/images/hide-black.svg' : '/images/show-black.svg';
    });
})