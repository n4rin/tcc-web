const wrarpper = document.querySelector('.wrapper');
const registroLink = document.querySelector('.registro-link');
const loginLink = document.querySelector('.login-link');
const btnUser = document.querySelector('.btn-user');
const iconClose = document.querySelector('.icon-close');

registroLink.onclick = () => {
    wrarpper.classList.add('active');
}

loginLink.onclick = () => {
    wrarpper.classList.remove('active');
}

btnUser.onclick = () => {
    wrarpper.classList.add('active-user');
}

iconClose.onclick = () => {
    wrarpper.classList.remove('active-user');
}