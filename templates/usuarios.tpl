{include 'templates/header.tpl'}

    <div class="container">

        <table class="table table-striped table-bordered">  
            <thead class="thead-dark">
                <tr>
                    <th class="text-center" scope="col">ID Usuario</th>
                    <th class="text-center" scope="col">Nombre Del Usuario</th>
                    <th class="text-center" scope="col">Administrador</th>
                    <th class="text-center" scope="col">Opciones</th>
                </tr>
            </thead>
            {foreach $usuarios as $usuario}
                <tr>
                    <td class="text-center">{$usuario->id_usuario}</td> 
                    <td class="text-center">{$usuario->username}</td> 
                    <td class="text-center">{$usuario->administ}</td>
                    <td class="text-center">
                        {if isset($isAdmin) && $isAdmin==1} 
                            <a href='eliminarUsuario/{$usuario->id_usuario}'><button type="button" class="btn btn-danger">Borrar Usuario</button></a>
                            <a href='editarUsuario/{$usuario->id_usuario}'><button type="button" class="btn btn-success">Hacer ADMIN</button></a>
                            
                        {/if}
                    </td>
                </tr>
            {/foreach}
        </table>
    
    </div>



{include 'templates/footer.tpl'}