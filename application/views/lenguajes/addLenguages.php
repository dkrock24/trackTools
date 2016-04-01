<script>
    $(document).ready(function () {

        $('.enlace2').click(function(){
          var enlace2 = $(this).attr("id");
          //alert(enlace2);
          $('.pages').load("../Clenguajes/"+enlace2);
        });

    });
    </script>




<div class="">

    <div class="clearfix"></div>

    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Lenguages <small>Add</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li>
                          <a class="enlace2" href="#" id="lenguajesView"><i class="glyphicon glyphicon-row"> </i>Back</a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  
                </div>
            </div>
        </div>

        <br />
        <br />
        <br />

    </div>
</div>
