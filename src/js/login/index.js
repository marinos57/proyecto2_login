import { validarFormulario, Toast} from "../funciones";

const formLogin = document.querySelector('form')

const login = async e => {
    e.preventDefault();

    if(!validarFormulario(formLogin)){
        Toast.fire({
            icon: 'info',
            title:'Rellene todos los campos'
        })
        return;
    }
    
}