"use strict"
document.addEventListener("DOMContentLoaded", function () {

    let app = new Vue({
        el: '#seccionComentario',
        data: {
            titulo: "Comentario",
            loading: false,
            comentarios: [],
            promedio: 0
        },
        methods: {
            
        }
    })

    document.querySelector("#formComentario").addEventListener('submit', crearComentario);

    function crearComentario(e) {
        e.preventDefault();

        let data = {
            comentario:  document.querySelector("#comentario").value,
            puntaje:     document.querySelector("#puntaje").value,
            id_jugador:  document.querySelector("#id_jugador").value,
            id_usuario:  document.querySelector("#id_usuario").value
        }


        fetch('api/comentarios', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data)
            })
            .then(response => {
                alert("se Agrego Exitosamente");
                getComentarios();
            })
            .catch(error => console.log(error));
    }



    // btn refresh
    document.querySelector("#btn-refresh").addEventListener('click', getComentarios());

    function getComentarios() {
        // inicia la carga
        app.loading = true;

        let id_jugador= document.querySelector("#id_jugador").value;

        fetch("api/comentarios?idJugador=r"+ id_jugador)
            .then(response => response.json())
            .then(comentarios => {
                console.log(comentarios);
                app.comentarios = comentarios;
                app.loading = false;
                app.promedio = promedio(comentarios);
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








})