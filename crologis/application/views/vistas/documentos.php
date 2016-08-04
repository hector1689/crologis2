 <!-- First Featurette -->
        <div class="featurette" id="about">
        <img class="featurette-image  img-responsive pull-right imagen_foto" src="<?=base_url()?>asset/imagenes/foto.png" >
            <div id="slides">
      <img src="<?=base_url()?>asset/imagenes/example-slide-1.jpg" alt="Photo by: Missy S Link: http://www.flickr.com/photos/listenmissy/5087404401/">
      <img src="<?=base_url()?>asset/imagenes/example-slide-2.jpg" alt="Photo by: Daniel Parks Link: http://www.flickr.com/photos/parksdh/5227623068/">
      <img src="<?=base_url()?>asset/imagenes/example-slide-3.jpg" alt="Photo by: Mike Ranweiler Link: http://www.flickr.com/photos/27874907@N04/4833059991/">
      <img src="<?=base_url()?>asset/imagenes/example-slide-4.jpg" alt="Photo by: Stuart SeegerLink: http://www.flickr.com/photos/stuseeger/97577796/">
    </div>


        </div>

      
         <hr class="featurette-divider">

         <div class="featurette" id="about">
            <img class="featurette-image  img-responsive pull-right imagenes_iconos" src="<?=base_url()?>asset/imagenes/documentos.png" >
            <h2 class="featurette-heading">
                <span class="text-muted">DOCUMENTOS</span>
            </h2>

                <button type="button" class="btn btn-primary btn" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-file" aria-hidden="true"></span> Presentacion de Calidad</button>
                     <br><br>
                <button type="button" class="btn btn-primary btn" data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-file" aria-hidden="true"></span> Presentacion de Logistica</button>
        </div>
        <hr class="featurette-divider">
         </div>
        </div>

         <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                 <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-blackboard" aria-hidden="true"></span> Presentacion de Calidad</h4>
                    </div>
                    <div class="modal-body">
                        <div class="panel panel-default">
                         <div class="panel-body">
                        <iframe src="http://crologis.com/PRE_CALIDAD.pdf" class="ventana" frameborder=1 scrolling=auto></iframe>
                        </div>
                        </div>


                        
                        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Cerrar</button>
      </div>
    </div>
  </div>
</div>

<!-- modal2-->

            <!-- Modal -->
                <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                 <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-blackboard" aria-hidden="true"></span> Presentacion de Logistica</h4>
                    </div>
                    <div class="modal-body">
                         <iframe src="http://crologis.com/PRE_LOGISTICA.pdf" class="ventana" frameborder="1" scrolling="auto"></iframe>
                        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Cerrar</button>
      </div>
    </div>
  </div>
</div>



    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
  <!-- End SlidesJS Required -->

  <!-- SlidesJS Required: Link to jquery.slides.js -->
  <script src="<?=base_url()?>asset/js/jquery.slides.min.js"></script>
  <!-- End SlidesJS Required -->

  <!-- SlidesJS Required: Initialize SlidesJS with a jQuery doc ready -->
  <script>
    $(function() {
      $('#slides').slidesjs({
        width: 940,
        height: 528,
        play: {
          active: true,
          auto: true,
          interval: 4000,
          swap: true
        }
      });
    });
  </script>