"use strict"
document.addEventListener("DOMContentLoaded", function () {

    let app = new Vue({
        el: '#seccionComentario',
        data: {
            loading: false,
            comentarios: [],
            isAdmin:0,
            promedio: 0
        },
        methods:{
            eliminarComentario: function(event,id_comentario){
                fetch('api/comentarios/' + id_comentario,
                {
                    "method":"DELETE",
                })
                .then(response=>response.json())
                .then(json=>{
                    getComentarios();
                    alert("EL COMENTARIO FUE BORRADO CON EXITO")
                })
                .catch(error=>console.log(error));
            },
            crearComentario: function(event){
                event.preventDefault();
        
                let comentarios = {
                    comentario:    document.querySelector("#comentario").value,
                    puntaje:       document.querySelector("#puntaje").value,
                    id_jugador_fk: document.querySelector("#id_jugador").value,
                    id_usuario_fk: document.querySelector("#id_usuario").value,
                    isAdmin:       document.querySelector("#isAdmin").value
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
        }
    })

    function getComentarios() {
        // inicia la carga
        app.loading = true;
        let id_jugador = document.querySelector("#id_jugador").value;
        let orden = document.querySelector("#orden").value;
        let cadena = "api/comentarios?idJugador=" + id_jugador +"&order=" + orden;
        //por POST
        //fetch("api/comentarios/ + id_jugador)

        fetch(cadena)
            .then(response => response.json())
            .then(comentarios => {
                console.table(comentarios);
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

    let ordenar = document.querySelector("#btn-ordenar");
    ordenar.addEventListener("click", getComentarios)
    
    getComentarios();

})