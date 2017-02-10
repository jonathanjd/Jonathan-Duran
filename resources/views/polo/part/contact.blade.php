<div class="row" id="vue-contacto">
    <div class="col-md-6">
        <h3 class="text-uppercase">Contáctanos!</h3>
        <p>¿Tienes alguna idea de negocio?, contáctanos y con gusto te asesoramos.</p>
        <div class="m-t-30">


          <div v-if="mensajeSuccess" role="alert" class="alert alert-success alert-dismissible">
            <button v-on:click="cerrarMensaje" type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span> </button>
            <strong>Excelente!</strong> Tu mensaje llego con éxito.
          </div>

            <form method="POST" @submit="onSubmitForm">
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="name">Nombre</label>
                        <input type="text" aria-required="true" name="nombre" v-model="enviarCorreo.nombre" class="form-control required name" placeholder="Ingrese Su Nombre">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="email">Correo</label>
                        <input type="email" aria-required="true" name="correo" v-model="enviarCorreo.correo" class="form-control required email"
                            placeholder="Ingrese su Correo">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-12">
                        <label for="subject">Asunto</label>
                        <input type="text" name="asunto" v-model="enviarCorreo.asunto" class="form-control required" placeholder="Asunto...">
                    </div>
                </div>
                <div class="form-group">
                    <label for="message">Mensaje</label>
                    <textarea type="text" name="mensaje" v-model="enviarCorreo.mensaje" rows="5" class="form-control required" placeholder="Ingrese su Mensaje"></textarea>
                </div>

                <div class="form-group">
                  <button v-if="mostrarSubmit" class="btn btn-primary" type="submit" id="form-submit"><i class="fa fa-paper-plane"></i>&nbsp;Enviar Mensaje</button>
                  <button v-else class="btn btn-primary" disabled="disabled" type="submit" id="form-submit"><i class="fa fa-paper-plane"></i>&nbsp;Enviar Mensaje</button>
                </div>


            </form>

        </div>
    </div>
    <div class="col-md-6">
        <h3 class="text-uppercase">Direeción y Mapa</h3>
        <div class="row">
            <div class="col-md-6">
                <address>
                    <strong>Blog Clon, Oficina.</strong><br> Calle Eulalia Buroz, Carrera 16<br> Barcelona, Edo. Anzoategui<br>
                    <abbr title="Teléfono">T:</abbr> (0281) 277-2643
                </address>
            </div>
            <div class="col-md-6">

            </div>
        </div>

        <!-- Google map sensor -->
        <div class="">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125691.18612768209!2d-64.73367311222145!3d10.11139720087256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2d723eff71306f%3A0x22feb43cef889e75!2sBarcelona%2C+Anzo%C3%A1tegui!5e0!3m2!1ses-419!2sve!4v1485956841380" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <!-- Google map sensor -->

    </div>
</div>
