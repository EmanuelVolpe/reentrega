{include 'templates/header.tpl'}

    <div class="container">

        <h1 class="text-white font-weight-bold">{$titulo}</h1>

        <br>

        <table class="table table-striped table-bordered font-weight-bold">  
            <thead class="thead-dark">
                <tr>
                    <th class="text-center" scope="col">ID Usuario</th>
                    <th class="text-center" scope="col">Nombre Del Usuario</th>
                    <th class="text-center" scope="col">Administrador</th>
                    <th class="text-center" scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                {foreach $usuarios as $usuario}
                    <tr>
                        <td class="text-center">{$usuario->id_usuario}</td> 
                        <td class="text-center">{$usuario->username}</td> 
                        <td class="text-center">{$usuario->administ}</td>
                        <td class="text-center">
                            {if isset($isAdmin) && ($isAdmin==1)} 
                                <a href='eliminarUsuario/{$usuario->id_usuario}'><button type="button" class="btn btn-danger">Borrar Usuario</button></a>
                                <a href='editarUsuario/{$usuario->id_usuario}'><button type="button" class="btn btn-success">Cambiar Permisos de Adm</button></a>          
                            {/if}
                        </td>
                    </tr>
                {/foreach}
            </tbody>
        </table>
    
    </div>



{include 'templates/footer.tpl'}