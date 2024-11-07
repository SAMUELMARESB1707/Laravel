<form action="{{url('/empleado')}}" method="post" enctype="multipart/form-data">
    @csrf
    <p>Formulario de creación de empleado</p>
    <div class="mb-3">
        <label for="Nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" name="Nombre" id="Nombre" aria-describedby="helpId" placeholder="Nombre" required><br>

        <label for="ApellidoPaterno" class="form-label">Apellido Paterno</label>
        <input type="text" class="form-control" name="ApellidoPaterno" id="ApellidoPaterno" aria-describedby="helpId" placeholder="Apellido Paterno" required><br>

        <label for="ApellidoMaterno" class="form-label">Apellido Materno</label>
        <input type="text" class="form-control" name="ApellidoMaterno" id="ApellidoMaterno" aria-describedby="helpId" placeholder="Apellido Materno" required><br>

        <label for="Correo" class="form-label">Email</label>
        <input type="email" class="form-control" name="Correo" id="Correo" aria-describedby="helpId" placeholder="Email" required><br>

        <label for="foto">Foto</label>
        <input type="file" id="foto" name="foto" accept="image/*" required><br>

        <button type="submit">Enviar</button>
    </div>
</form>