@extends('layouts.app')


@section('content')
    
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

});
</script>

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <canvas id="g_agentes"></canvas>
        </div>
    </div>
</div>


@endsection