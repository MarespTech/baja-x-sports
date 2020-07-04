<?php include_once 'includes/navbar.php'; ?>
<div class="container">
    <div class="tittle">
        <h1 style="font-size: 51px">Solicita tu <span class="semi-highlight">cotización</span></h1>
        <p style="font-size: 20px">Rellene este formulario y nos pondremos en contacto con usted en breve</p>
    </div>
    <div class="cotizacion-form" style="text-transform: uppercase;">
        <p style="font-size: 18px">Se deben llenar todos los campos</p>
        <form action="">
            <div class="form-group">
                <select class="form-control" name="vehiculo">
                    <option value="" selected disabled >Vehiculo / Modelo</option>
                </select>
            </div>
            <div class="form-group row">
                <div class="col-sm-6">
                    <input class="form-control" name="name" type="text" placeholder="Nombre required">
                </div>
                <div class="col-sm-6">
                    <input class="form-control" name="apellidos" type="text" placeholder="Apellidos" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-6">
                    <input class="form-control" name="telefono" type="text" placeholder="Numero de Teléfono" required>
                </div>
                <div class="col-sm-6">
                    <input class="form-control" name="email" type="email" placeholder="Correo Electrónico" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-8">
                    <input class="form-control" name="domicilio" type="text" placeholder="Domicilio" required>
                </div>
                <div class="col-sm-4">
                    <input class="form-control" name="cPostal" type="text" placeholder="Codigo Postal" required>
                </div>
            </div>
            <div class="form-group" >
                <button type="submit" name="submit_cot" class="form-control btn-xl btn-yellow"><p>Solicitar tu cotización</p></button>
            </div>
        </form>
    </div>
</div>
<div class="jumboText cot-bkg">
    <div class="tittle">
        <p>Aventura, Desempeño y trabajo. Es aquí donde nos destacamos.</p>
        <p>Bajaxsports cuenta para ti con vehículos hechos para cada terreno</p>
        <h2><span class="semi-highlight">Cuidamos</span> de tu vehículo</h2>
        <p>Queremos que la unidad que compres co nosotros siempre este</p>
        <p>en optimas condiciones para que tengas siempre el 100%.</p>
    </div>
</div>
    <!--- Footer --->
<?php include_once 'includes/footer.php'; ?>