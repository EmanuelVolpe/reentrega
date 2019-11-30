"use strict"
document.addEventListener("DOMContentLoaded", function () {

    let app = new Vue({
        el: '#seccionComentario',
        data: {
            loading: false,
            comentarios: [],
            promedio: 0
        }

    })

    document.querySelector("#enviaComentario").addEventListener("click", crearComentario);

    function crearComentario(e) {
        e.preventDefault();

        let comentarios = {
            comentario: document.querySelector("#comentario").value,
            puntaje:    document.querySelector("#puntaje").value,
            id_jugador: document.querySelector("#id_jugador").value,
            id_usuario: document.querySelector("#id_usuario").value
        }

        fetch('api/comentarios', {
                "method": 'POST',
                "headers": {
                    'Content-Type': 'application/json'
                },
                "body": JSON.stringify(comentarios)
            })
            .then(response => {
                if (response.status == 200) {
                    alert("COMENTARIO ENVIADO");
                    getComentarios();
                }
                else 
                    alert("error");
            })
    }

    // btn refresh
    //document.querySelector("#btn-refresh").addEventListener('click', getComentarios());

    function getComentarios() {
        // inicia la carga
        app.loading = true;
        let id_jugador = document.querySelector("#id_jugador").value;

        //por POST
        //fetch("api/comentarios/ + id_jugador)

        fetch("api/comentarios?idJugador=" + id_jugador)
            .then(response => response.json())
            .then(comentarios => {
                console.log(comentarios);
                app.comentarios = comentarios;
                app.loading = false;
                //app.promedio = promedio(comentarios);
            })
            .catch(error => console.log(error));
    }

    function promedio(comentarios) {
        let promedio = 0;
        let suma = 0;
        let contador = 0;

        for (let comentario of comentarios) {
            suma = suma + Number(comentario.puntaje);
            contador++;
        }
        promedio = suma / contador;
        return promedio;
    }

    getComentarios();

})