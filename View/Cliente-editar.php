<h1 class="page-header">
    <?php echo $alm->idcliente != null ? $alm->nombres : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=cliente">clientes</a></li>
  <li class="active"><?php echo $alm->idcliente != null ? $alm->nombres : 'Nuevo Registro'; ?></li>
</ol>

<form action="?c=cliente&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="idcliente" value="<?php echo $alm->idcliente; ?>" />
    
    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="Nombres" value="<?php echo $alm->nombres; ?>" class="form-control" placeholder="Ingrese su nombre" data-validacion-tipo="requerido|nombres" />
    </div>
    
    <div class="form-group">
        <label>Apellido</label>
        <input type="text" name="ApellidoP" value="<?php echo $alm->apellidoP; ?>" class="form-control" placeholder="Ingrese su Apellido" data-validacion-tipo="requerido|apellidoP" />
    </div>
    
    <div class="form-group">
        <label>Fecha de Nacimiento</label>
        <input type="text" name="FechaNacimiento" value="<?php echo $alm->fecha_nmto; ?>" class="form-control" placeholder="Ingrese su fecha de nacimiento" data-validacion-tipo="requerido|fecha_nmto" />
    </div>
    
    <div class="form-group">
        <label>Dirección</label>
        <input type="text" name="Direccion" value="<?php echo $alm->direcc; ?>" class="form-control" placeholder="Ingrese su dirección" data-validacion-tipo="requerido|direcc" />
    </div>
    
    <div class="form-group">
        <label>Telefono</label>
        <input type="text" name="Telefono" value="<?php echo $alm->telefono; ?>" class="form-control" placeholder="Ingrese su numero de telefono" data-validacion-tipo="requerido|telefono" />
    </div>

    <div class="form-group">
        <label>Email</label>
        <input type="text" name="Email" value="<?php echo $alm->email; ?>" class="form-control" placeholder="Ingrese su correo electrónico" data-validacion-tipo="requerido|email" />
    </div>

    <div class="form-group">
        <label>Codigo Postal</label>
        <input type="text" name="C_postal" value="<?php echo $alm->c_postal; ?>" class="form-control" placeholder="Ingrese su codigo postal" data-validacion-tipo="requerido|c_postal" />
    </div>

    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-alumno").submit(function(){
            return $(this).validate();
        });
    })
</script>
