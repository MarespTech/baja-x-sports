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
                    <input class="form-control" name="name" type="text" placeholder="Nombre">
                </div>
                <div class="col-sm-6">
                    <input class="form-control" name="apellidos" type="text" placeholder="Apellidos">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-6">
                    <input class="form-control" name="telefono" type="text" placeholder="Numero de Teléfono">
                </div>
                <div class="col-sm-6">
                    <input class="form-control" name="email" type="email" placeholder="Correo Electrónico">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-8">
                    <input class="form-control" name="domicilio" type="text" placeholder="Domicilio">
                </div>
                <div class="col-sm-4">
                    <input class="form-control" name="cPostal" type="text" placeholder="Codigo Postal">
                </div>
            </div>
            <div class="form-group" >
                <button "type="submit" name="submit" class="form-control btn-xl btn-yellow"><p>Solicitar tu cotización</p></button>
            </div>
        </form>
    </div>
    <div class="tittle">
        <h2 style="font-size: 38px;padding: 15px auto;">Contamos con <span class="semi-highlight">Financiamiento</span></h2>
    </div>
    <div class="pagos">
        <div class="div-pago">
            <img src="assets/img/pagos/FinBe.png" alt="FinBe">
        </div>
        <div class="div-pago">
            <img src="assets/img/pagos/BBVA.png" alt="BBVA">
        </div>
        <div class="div-pago">
            <img src="assets/img/pagos/banorte.png" alt="BANORTE">
        </div>
        <div class="div-pago">
            <img src="assets/img/pagos/banregio.png" alt="BANREGIO">
        </div>
    </div>
</div>
<div class="jumboText">
    <div class="tittle">
        <p>Aventura, Desempeño y trabajo. Es aquí donde nos destacamos.</p>
        <h2>únete a esta <span class="semi-highlight">Comunidad</span></h2>
        <p>Bajaxsports cuenta para ti con vehículos hechos para cada terreno</p>
        <p>ya sea para ir sobre los terrenos más difíciles, el trabajo más pesado</p>
        <p>carreteras o mares, tenemos lo que estas buscando.</p>
    </div>
</div>
    <!--- Footer --->
<?php include_once 'includes/footer.php'; ?>