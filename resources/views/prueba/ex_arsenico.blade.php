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
                  
                    <div class="text-center">   
                      <a class="btn btn-primary"    data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
                        MUESTRA DE ARSENICO
                      </a>

                      <a class="btn btn-primary " data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
                        CONTRA MUESTRA DE ARSENICO
                      </a>
                    </p>
                  </div>
                

                    <div class="collapse" id="collapseExample1">
                         
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
                        
                              </thead>
                              </table>
                        
                          </tr>
                      
                            

                      </div>

                    <div class="collapse" id="collapseExample2">
                
                      <h5><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                        width="35" height="35"
                        viewBox="0 0 172 172"
                        style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g><path d="M146.91667,46.58333v-21.5c0,-1.98158 -1.60175,-3.58333 -3.58333,-3.58333h-114.66667c-1.98158,0 -3.58333,1.60175 -3.58333,3.58333v21.5z" fill="#cccccc"></path><path d="M129,150.5h-86l-10.75,-103.91667h107.5z" fill="#cccccc"></path><path d="M121.83333,118.25c0,1.98158 -1.60175,3.58333 -3.58333,3.58333h-64.5c-1.98158,0 -3.58333,-1.60175 -3.58333,-3.58333v-46.58333c0,-1.98158 1.60175,-3.58333 3.58333,-3.58333h64.5c1.98158,0 3.58333,1.60175 3.58333,3.58333z" fill="#ffffff"></path><path d="M71.66667,43c0,-5.934 -4.81242,-10.75 -10.75,-10.75v0c-5.93758,0 -10.75,4.816 -10.75,10.75v25.08333c0,5.934 4.81242,7.16667 10.75,7.16667v0c5.93758,0 10.75,-1.23267 10.75,-7.16667z" fill="#ffffff"></path><g fill="#b0bec5"><path d="M60.91667,82.41667h50.16667v7.16667h-50.16667zM60.91667,100.33333h50.16667v7.16667h-50.16667z"></path></g></g><g fill="#ff3d00"><g id="IOS_copy"><path d="M172,120.04167l-12.54167,-12.54167l-19.70833,19.70833l-19.70833,-19.70833l-12.54167,12.54167l19.70833,19.70833l-19.70833,19.70833l12.54167,12.54167l19.70833,-19.70833l19.70833,19.70833l12.54167,-12.54167l-19.70833,-19.70833z"></path></g></g></g></svg><img src="https://img.icons8.com/color/35/000000/urine-collection.png"/> CONTRA MUESTRA </h5>
                          <table class="table table-danger" style="font-size: 0.7rem;">
                          <thead>
                          <TH><img src="https://img.icons8.com/ios/25/000000/lab-items.png"/> FECHA LABORATORIO CONTRAMUESTRA </TH>
                          <TH><img src="https://img.icons8.com/ios-filled/25/000000/lab-items.png"/> FECHA CONTRA MUESTRA </TH> 
                          <TH> <img src="https://img.icons8.com/windows/25/000000/report-card.png"/> UG/G CONTRA MUESTRA</TH>              
                          <TH> <img src="https://img.icons8.com/windows/25/000000/test-partial-passed.png"/>ESTADO CONTRA MUESTRA </TH>    
                          
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


                             
                      <div class="text-center">                 
              <input class="btn btn-primary" type="submit" value="enviar">
            </div>
          </form>
         
      </div>