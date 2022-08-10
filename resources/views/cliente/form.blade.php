<div class="form-group">
    <label for="nombres_cli">Nombres:</label>
    <input class="form-control" type="text" name="nombres_cli" value="{{ isset($cliente->nombres_cli)?$cliente->nombres_cli:'' }}" id="nombres_cli"><br>
</div>  

<div class="form-group">
    <label for="apellidos_cli">Apellidos:</label>
    <input class="form-control" type="text" name="apellidos_cli" value="{{ isset($cliente->apellidos_cli)?$cliente->apellidos_cli:'' }}" id="apellidos_cli"><br>
</div>    

<div class="form-group">
    <label for="cedula_cli">Cédula:</label>
    <input class="form-control" type="number" name="cedula_cli" value="{{ isset($cliente->cedula_cli)?$cliente->cedula_cli:'' }}" id="cedula_cli"><br>
</div>  

<div class="form-group">
    <label for="telefono_cli">Teléfono:</label>
    <input class="form-control" type="number" name="telefono_cli" value="{{ isset($cliente->telefono_cli)?$cliente->telefono_cli:'' }}" id="telefono_cli"><br>
</div>

<div class="form-group">
    <label for="correo_cli">Correo Electrónico:</label>
    <input class="form-control" type="email" name="correo_cli" value="{{ isset($cliente->correo_cli)?$cliente->correo_cli:'' }}" id="correo_cli"><br>
</div>

<div class="form-group">
    <label for="direccion_cli">Dirección:</label>
    <input class="form-control" type="text" name="direccion_cli" value="{{ isset($cliente->direccion_cli)?$cliente->direccion_cli:'' }}" id="direccion_cli"><br>
</div>    

<input class="btn btn-success" type="submit" value="Guardar Datos">

<a class="btn btn-danger" href="{{ url('cliente/') }}">Regresar</a>