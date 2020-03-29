@extends('layouts.app')


@section('content')
<script src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
$(document).ready(function(){

var v_Agente = [];
var k_Agentes = [];

var config = {
			type: 'pie',
			data: {
				datasets: [{
					data: [],
					backgroundColor: [
                        "red", 
                        ""
						// window.chartColors.red,
						// window.chartColors.orange,
						// window.chartColors.yellow,
						// window.chartColors.green,
						// window.chartColors.blue,
					],
					label: 'Distibución Agentes'
				}],
				labels: []
			},
			options: {
				responsive: true
			}
		};
        $.ajax({
        url: "dashboard/getDataCarga",
        type : "get",
        async : false,
        contentType : "application/json",
        success : function(r){
            
            for (const propiedad in r) {
                config.data.datasets[0].data.push(r[propiedad]);
                config.data.labels.push(propiedad) 
            }

        },
        complete : function(){
            var ctx = document.getElementById('g_agentes').getContext('2d');
			window.myPie = new Chart(ctx, config);

            window.myPie.update();
        }
        });  


        // Programados vs realizados
        $.ajax({
        url: "dashboard/dataProgramadoRealizados",
        type : "get",
        async : false,
        contentType : "application/json",
        success : function(r){
            
            

        },
        complete : function(){
            
        }
        });  

        f_rendimientoPorGerencia();

});
</script>



  <script>
    google.charts.load('current', {packages: ['corechart']});
    google.charts.setOnLoadCallback(f_programadosVsRealizados);

    //  GRAFICO - PROGRAMADOS VS REALIZADOS
    function f_programadosVsRealizados() {            
        $.ajax({
        url: "dashboard/dataProgramadoRealizados",
        type : "get",
        async : false,
        contentType : "application/json",
        success : function(r){
            var data = new google.visualization.DataTable();
            var options = {
                     'width':600,
                     'height':400};
            data.addColumn('string', 'Element');
            data.addColumn('number', 'Percentage');
      
            // Instantiate and draw the chart.      
            data.addRows([
                ['Programados ('+r.programados+')', r.programados],
                ['Realizados', r.realizados]
            ]);

            var chart = new google.visualization.PieChart(document.getElementById('g_programadosVsRealizados'));
            $("#c_programadosVsRealizados").fadeOut(function(){
                chart.draw(data, options);
            });
        }
        });  

    }
    //  GRAFICO - RENDIMIENTO POR GERENCIA
    function f_rendimientoPorGerencia() {       
        var p_1 = 0.1;

        $.ajax({
        url: "dashboard/dataPorGerencia",
        type : "get",
        async : false,
        contentType : "application/json",
        success : function(r){
            for (const propiedad in r) {
                $("#g_cumplimientoPorGerencia tbody").append(
                    "<tr>"+
                        "<td>"+propiedad+"</td>"+
                        "<td>"+r[propiedad].total+"</td>"+
                        "<td>"+Math.round( r[propiedad].total * 0.9) +"</td>"+
                        "<td>"+r[propiedad].realizado+"</td>"+
                        "<td><span class='"+(apruebaRendimientoGerencia(r[propiedad].total, r[propiedad].realizado) ? "fa fa-2x fa-check text-success" : "fa fa-2x fa-times text-danger")+"'></span></td>"+
                    "</tr>"

                );
            }
        },
        complete : function(){
            $("#c_cumplimientoPorGerencia").fadeOut(function(){
                $("#g_cumplimientoPorGerencia").fadeIn();
            })
        }
        });  
    }

    function apruebaRendimientoGerencia(programados, realizados){

        var p_1 = 0.9;
        var p_programado = programados * p_1;
        if (realizados >= p_programado) {
            return true;
        } else {
            return false;

        }
    }

  </script>



<div class="container-fluid">
    <div class="row" style="min-height: 400px">
        <div class="col-sm-6">
            <h6>Cumplimiento por Gerencia</h6>

            <table id="g_cumplimientoPorGerencia" style="display:none;" class="table table-striped">
                <thead> 
                    <th>Gerencia</th>
                    <th>Programado</th>
                    <th>Mìnimo a Realizar (90%)</th>
                    <th>Realizado</th>
                    <th>Cumplimiento</th>
                </thead>

                <tbody> 
                    
                </tbody>
            </table>
            <div id="c_cumplimientoPorGerencia">
                <span class="fa fa-gear fa-spin fa-5x"></span>
                <span>cargando...</span>
            </div>
        </div>

        <div class="col-sm-6" style="text-align: center">
            <h6>Prgramados vs Realizados</h6>
            <div id="g_programadosVsRealizados">
                
            </div>
            <div id="c_programadosVsRealizados">
                <span class="fa fa-gear fa-spin fa-5x"></span>
                <span>cargando...</span>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
           
            <div id="">
                
            </div>
        </div>
    </div>
</div>


@endsection