<h1 class="page-header">clientes</h1>


<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=cliente&a=Crud">Agregar cliente</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th >ID</th>
            <th >Nombres</th>
            <th>Apellido</th>
            <th>Fecha de Nacimiento</th>
            <th >Direccion</th>
            <th >Telefono</th>
            <th >Email</th>
            <th >Codigo Postal</th>
            <th ></th>
            <th ></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->idcliente; ?></td>
            <td><?php echo $r->nombres; ?></td>
            <td><?php echo $r->apellidoP; ?></td>
            <td><?php echo $r->fecha_nmto; ?></td>
            <td><?php echo $r->direcc; ?></td>
            <td><?php echo $r->telefono; ?></td>
            <td><?php echo $r->email; ?></td>
            <td><?php echo $r->c_postal; ?></td>

            <td>
                <i class="glyphicon glyphicon-edit"><a href="?c=cliente&a=Crud&idcliente=<?php echo $r->idcliente; ?>"> Editar</a></i>
            </td>
            <td>
                <i class="glyphicon glyphicon-remove"><a href="?c=cliente&a=Eliminar&idcliente=<?php echo $r->idcliente; ?>"> Eliminar</a></i>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 
