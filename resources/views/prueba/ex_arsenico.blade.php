<script>
    $(document).ready(function(){
        $('#FECHAMUESTRA').datepicker({
            uiLibrary: 'bootstrap4',
            weekStartDay: 1,
            locale: 'es-es',
             modal: true, 
             header: true, 
             footer: true,
             format: 'dd-mm-yyyy'
    
        });

        $('#FECHACONTRAMUESTRA').datepicker({
                uiLibrary: 'bootstrap4',
                weekStartDay: 1,
                locale: 'es-es',
                 modal: true, 
                 header: true, 
                 footer: true,
                 format: 'dd-mm-yyyy'
        
            });
    


    $('#FECHALAB1').datepicker({
        uiLibrary: 'bootstrap4',
        weekStartDay: 1,
        locale: 'es-es',
         modal: true, 
         header: true, 
         footer: true,
         format: 'dd-mm-yyyy'

    });

$('#FECHALAB2').datepicker({
    uiLibrary: 'bootstrap4',
    weekStartDay: 1,
    locale: 'es-es',
     modal: true, 
     header: true, 
     footer: true,
     format: 'dd-mm-yyyy'

});
});
    </script> 

<div class="col-12">
    <H1 style="text-align:center"> <img src="https://d1hbpr09pwz0sk.cloudfront.net/logo_url/codelco-ed1ca9ae" width="80px"  height="80PX" class="img-responsive" >EXAMEN ARSENICO </H1>
  

    <hr>
    
    
    <div class="container">
            <form action="/api/getExamenarsenico">
                <p>
                
                      
                    <a class="btn btn-primary"    data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
                      MUESTRA DE ARSENICO
                    </a>

                    <a class="btn btn-primary " data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
                      CONTRA MUESTRA DE ARSENICO
                    </a>
                  </p>

              

                  <div class="collapse" id="collapseExample1">
                           
                    <h5><svg class="bi bi-archive" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M2 5v7.5c0 .864.642 1.5 1.357 1.5h9.286c.715 0 1.357-.636 1.357-1.5V5h1v7.5c0 1.345-1.021 2.5-2.357 2.5H3.357C2.021 15 1 13.845 1 12.5V5h1z" clip-rule="evenodd"/>
                        <path fill-rule="evenodd" d="M5.5 7.5A.5.5 0 016 7h4a.5.5 0 010 1H6a.5.5 0 01-.5-.5zM15 2H1v2h14V2zM1 1a1 1 0 00-1 1v2a1 1 0 001 1h14a1 1 0 001-1V2a1 1 0 00-1-1H1z" clip-rule="evenodd"/>
                      </svg> MUESTRA </h5>     
                    <table class="table table-primary" style="font-size: 0.7rem;">
                        <thead>
                         <TH>FECHA LABORATORIO</TH>
                         <TH>FECHA MUESTRA</TH> 
                         <TH>UG/G</TH>              
                         <TH>ESTADO</TH>    
                         
                         <tr>
                              <td><input id="FECHALAB1" name="FECHALAB1" width="200px"   /></td>
                              <td><input id="FECHAMUESTRA" name="FECHAMUESTRA" width="200px"   /></td>        
                              <td><input class="form-control" type="text" name="as_UG_G"  ></td>                  
                              <td><input class="form-check-input" type="radio" name="as_estado" value="Alterado"  >Alterado <br>
                               <input class="form-check-input" type="radio" name="as_estado" value="Normal"  >Normal</td>
                       
                            </thead>
                            </table>
                       
                        </tr>
                    
                           

                     </div>

                  <div class="collapse" id="collapseExample2">
                    
                    <h5><svg class="bi bi-archive-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM6 7a.5.5 0 000 1h4a.5.5 0 000-1H6zM.8 1a.8.8 0 00-.8.8V3a.8.8 0 00.8.8h14.4A.8.8 0 0016 3V1.8a.8.8 0 00-.8-.8H.8z" clip-rule="evenodd"/>
                      </svg> CONTRA MUESTRA </h5>
                    <table class="table table-danger" style="font-size: 0.7rem;">
                        <thead>
                         <TH>FECHA LABORATORIO CONTRAMUESTRA</TH>
                         <TH>FECHA CONTRA MUESTRA</TH> 
                         <TH>UG/G CONTRA MUESTRA</TH>              
                         <TH>ESTADO CONTRA MUESTRA</TH>    
                         
                         <tr>
                              <td><input id="FECHALAB2" name="FECHALAB2" width="200px"   /></td>
                              <td><input id="FECHACONTRAMUESTRA" name="FECHA_CONTRAMUESTRA" width="200px"   /></td>        
                              <td><input class="form-control" type="text" name="as_UG_G_CONTRAMUESTRA"  ></td>                  
                              <td><input class="form-check-input" type="radio" name="as_estado1" value="Alterado"  >Alterado <br>
                               <input class="form-check-input" type="radio" name="as_estado1" value="Normal"  >Normal</td>
                       
                            </thead>
                            </table>
                       
                        </tr>
                    
                           

                     </div>
                    
                   
                    </div>


          

                
                
                    
                
                                
            <input class="btn btn-primary" type="submit" value="enviar">
        </form>
        </div>
    </div>