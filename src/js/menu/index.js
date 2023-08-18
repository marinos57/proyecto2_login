const formLogin = document.querySelector('form');

const closeSessionRequest = async e => {
    e.preventDefault();


    try {
        const url = "/proyecto2_login/API/closeSession"; 
     
        const headers = new Headers();
        headers.append("X-Requested-With", "fetch");

        const config = {
            method: 'GET',
            headers
        };
        
        const respuesta = await fetch(url,config);
        
        
        window.location.href = '/proyecto2_login/';

      
    } catch (error) {
        console.log(error);
    }
}

formLogin.addEventListener('submit', closeSessionRequest);