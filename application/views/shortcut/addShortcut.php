<script>
    $(document).ready(function () {
        $('#alert').hide();

        $('.enlace2').click(function(){
          var enlace2 = $(this).attr("id");
          //alert(enlace2);
          $('.pages').load("../Cshortcut/"+enlace2);
        });
        var enlace2 = $("#enlace2").attr("id");
        var redirect = "../Cshortcut/"+enlace2;


       $("#btn_enviar").click(function(){

           var url  = "<?php echo base_url(); ?>" + 'Cshortcut/shortcutNew';
            //var form = $(form).serialize();
            //var data = {nombre:form};
            var data = {
                nameShortCut:           $("#nameShortCut").val(),
                iconShortCut:           $("#iconShortCut").val(),
                urlShortCut:            $("#urlShortCut").val(),
                generoShortCut:         $("#generoShortCut").val(),
                descripctionShortCut:   $("#descripctionShortCut").val(),
                orderShortCut:          $("#orderShortCut").val(),
                stateShortCut:          $("#stateShortCut").val()
            };


            
            $.ajax({                
                type: "POST",
                url: url,
                data:data,  
                dataType:'html',
                                               
                success: function(data)
                {                    
                    //alert("si");
                    $('#alert').fadeIn(); 
                    alertSuccess(redirect);
                } ,
                error: function(data)   {
                    alert("error");
                }
            });
            
            return false; 
       });

        

    });
</script>

<style>
    label{
        text-align:right;
        float: right;
        padding-right: 2px;
        margin: 5px;        
    }
    input{
        margin: 5px;
    }
</style>

<?php
$input_nameShortCut = array(
    'name'=>'nameShortCut',
    'id'=>'nameShortCut',    
    'maxlength'=>'100',
    'class'=>'form-control'
    );
$input_iconShortCut = array(
    'name'=>'iconShortCut',
    'id'=>'iconShortCut',    
    'maxlength'=>'100',
    'class'=>'form-control'
    );
$input_urlShortCut = array(
    'name'=>'urlShortCut',
    'id'=>'urlShortCut',    
    'maxlength'=>'100',
    'class'=>'form-control'
    );
$input_generoShortCut = array(
    'name'=>'generoShortCut',
    'id'=>'generoShortCut',    
    'maxlength'=>'100',
    'class'=>'form-control'
    );
$input_descripctionShortCut = array(
    'name'=>'descripctionShortCut',
    'id'=>'descripctionShortCut',    
    'maxlength'=>'100',
    'class'=>'form-control'
    );
$input_orderShortCut = array(
    'name'=>'orderShortCut',
    'id'=>'orderShortCut',    
    'maxlength'=>'100',
    'class'=>'form-control'
    );
$input_stateShortCut = array(
    'name'=>'stateShortCut',
    'id'=>'stateShortCut',    
    'maxlength'=>'100',
    'class'=>'form-control'
    );
$input_btnEnviar = array(
    'name'=>'btn_enviar',
    'id'=>'btn_enviar',        
    'class'=>'btn btn-success'
    );
$opciones = array(
    '0' => 'Inactivo',
    '1' => 'Activo'
    );

$input_stateShortCut = array(
    'name'=>'stateShortCut',
    'id'=>'stateShortCut',        
    'class'=>'form-control'
    );

$attributes = array('class' => 'shortcuts', 'id' => 'shortcuts24','action'=>'Cshortcut/shortcutNew');
?>


<div class="">

    <div class="clearfix"></div>

    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Shortcuts <small>Add</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li>
                          <a class="enlace2" href="#" id="shortcutView"><i class="glyphicon glyphicon-row"> </i>Back</a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                <div class="alert alert-success" role="alert" id='alert'>
                    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                    <span class="sr-only">Success:</span>
                    Se insertaron los datos
                </div>

                <?php echo form_open('',$attributes);?>
                    <table border=0 width=100%>
                        <tr>
                            <td><?php echo form_label('Name').''; ?></td>
                            <td><?php echo form_input($input_nameShortCut); ?></td>
 
                            <td><?php echo form_label('Icon').''; ?></td>
                            <td><?php echo form_input($input_iconShortCut); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo form_label('URL').'<br>'; ?></td>
                            <td><?php echo form_input($input_urlShortCut); ?></td>
              
                            <td><?php echo form_label('Gender').'<br>'; ?></td>
                            <td><?php echo form_input($input_generoShortCut); ?></td>
                        </tr>
                         <tr>
                            <td><?php echo form_label('Description').'<br>'; ?></td>
                            <td><?php echo form_input($input_descripctionShortCut); ?></td>
                  
                            <td><?php echo form_label('Order').'<br>'; ?></td>
                            <td><?php echo form_input($input_orderShortCut); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo form_label('state').'<br>'; ?></td>
                            <td><?php echo form_dropdown($input_stateShortCut,$opciones); ?></td>
                       
                            <td></td>
                            <td><?php echo form_submit($input_btnEnviar,'Save'); ?></td>
                        </tr>
                        <?php echo form_close(); ?>
                    </table>
                
                    

                </div>
            </div>
        </div>

        <br />
        <br />
        <br />

    </div>
</div>
