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
        <script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=false"></script>
        <div class="map m-t-30" data-map-address="Melburne, Australia" data-map-zoom="10" data-map-icon="/template-polo/images/markers/marker2.png"
            data-map-type="ROADMAP"></div>
        <!-- Google map sensor -->

    </div>
</div>

<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('js/index.js')); ?>"></script>
<?php $__env->stopSection(); ?>
