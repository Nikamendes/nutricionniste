const connexion = document.getElementById('connexion');


const getMessage = () => {

    alert('Vous êtes connecté');

}


const setColorGreen = () => {

    connexion.style.background = 'green'

}


const setColorRed = () => {

    connexion.style.background = 'red'

}


connexion.addEventListener('click', getMessage);

connexion.addEventListener('mouseenter', setColorRed);

connexion.addEventListener('mouseleave', setColorGreen);