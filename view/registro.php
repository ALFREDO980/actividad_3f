<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="display-4 text-center">
            <h1>REGISTRO</h1>
            </div>
        </div>
    </div>
    <div class="row justify-content-around py-4">
        <div class="col-sm-5 mt-1">
            <div style="font-size:3rem;" class="lead">
            Datos Personales:
            </div>
            <hr>
            <form id="formulario_registro_a">
                <div class="form-group">
                    <label for="nombre" class="lead">Nombre(s):</label>
                    <input 
                        type="text" 
                        class="form-control form-control-sm"
                        id="nombre"
                        name="nombre"
                    >
                </div>
                <div class="form-group">
                    <label for="paterno" class="lead">Apellido Paterno:</label>
                    <input 
                        type="text" 
                        class="form-control form-control-sm"
                        id="paterno"
                        name="paterno"
                    >
                </div>
                <div class="form-group">
                    <label for="materno" class="lead">Apellido Materno:</label>
                    <input 
                        type="text" 
                        class="form-control form-control-sm"
                        id="materno"
                        name="materno"
                    >
                </div>
                <div class="form-group">
                    <label for="estatura" class="lead">Estatura:</label>
                    <input 
                        type="number" 
                        class="form-control form-control-sm"
                        id="estatura"
                        name="estatura"
                    >
                </div>
                <div class="form-group">
                    <label for="edad" class="lead">Edad:</label>
                    <input 
                        type="number" 
                        class="form-control form-control-sm"
                        id="edad"
                        name="edad"
                    >
                </div>
                <div class="form-group">
                    <label for="peso" class="lead">Peso:</label>
                    <input 
                        type="number" 
                        class="form-control form-control-sm"
                        id="peso"
                        name="peso"
                    >
                </div>
                <div class="form-grorp">
                   <span class="btn btn-success btn-block" id="btn_registro">
                        <span class="lead">Registrarse:</span>
                   </span>
                </div>
            </form>
        </div>
    </div>  
</div>
<script src="manager/manager_registro.js"></script>