<section id="contact">
    <div class="container">



        <h2>Contactanos</h2>
        <hr class="sep">
        <p>Envíanos un correo con respecto a cualquier pregunta en general y si deseas un presupuesto para
        la creación de sitio web por favor enviarnos información detallada de lo que desea.</p>
        <div class="col-md-6 col-md-offset-3 wow fadeInUp" data-wow-delay=".3s">

            <form method="POST" @submit="onSubmitForm">

              <div class="form-group">
                  <input name="nombre" v-model="enviarCorreo.nombre" type="text" class="form-control" id="Name" placeholder="Nombre" data-toggle="tooltip" data-placement="bottom" title="Ingrese su Nombre" required>
              </div>
              <div class="form-group">
                  <input name="correo" v-model="enviarCorreo.correo" type="email" class="form-control" id="Email" placeholder="Correo" data-toggle="tooltip" data-placement="bottom" title="Ingrese su Correo" required>
              </div>
              <div class="form-group">
                  <textarea name="mensaje" v-model="enviarCorreo.mensaje" class="form-control" rows="3" placeholder="Mensaje" data-toggle="tooltip" data-placement="bottom" title="Ingrese su Mensaje" required></textarea>
              </div>
              <div class="Form-group">

                <button v-if="mostrarSubmit" type="submit" class="btn-block">Enviar</button>
                <button v-else type="button" type="button" class="btn btn-block" disabled="disabled">Enviar</button>

              </div>

            </form>

            <div v-if="mensajeSuccess" class="alert alert-success alert-dismissible" role="alert">
            <button v-on:click="cerrarMensaje" type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Bien!!</strong> Tu mensaje llego con éxito.
            </div>

        </div>
    </div>
</section>
