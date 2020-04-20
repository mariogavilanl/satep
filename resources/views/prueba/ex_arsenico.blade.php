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
             
                                    

                  
                         
                      <h5><img src="https://img.icons8.com/color/35/000000/urine-collection.png"/> MUESTRA </h5>     
                      <table class="table table-primary" style="font-size: 0.7rem;">
                          <thead>
                          <TH><img src="https://img.icons8.com/ios/25/000000/lab-items.png"/> FECHA LABORATORIO </TH>
                          <TH><img src="https://img.icons8.com/ios-filled/25/000000/lab-items.png"/> FECHA MUESTRA </TH> 
                          <TH><img src="https://img.icons8.com/windows/25/000000/report-card.png"/> UG/G </TH>              
                          <TH><img src="https://img.icons8.com/windows/25/000000/test-partial-passed.png"/> ESTADO </TH>    
                          
                          <tr>
                                <td ><input id="FECHALAB1" name="FECHALAB1" width="200px"/></td>
                                <td><input id="FECHAMUESTRA" name="FECHAMUESTRA" width="200px"   /></td>        
                                <td><input class="form-control" type="text" name="as_UG_G"  ></td>                  
                                <td><input class="form-check-input" type="radio" name="as_estado" value="Alterado"  >Alterado <br>
                                <input class="form-check-input" type="radio" name="as_estado" value="Normal"  >Normal</td>
                              </tr>
                              </thead>
                              </table>
                        
                         
                      
                            

                 

                  
                      
                    
                      


                             
                                    
              <input class="btn btn-primary" type="submit" value="enviar">
            
          </form>
         
      </div>