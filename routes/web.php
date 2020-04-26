<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/lista', 'PruebasController@pico')->name('prueba');
Route::get('/reevaluaciones', 'PruebasController@Reevaluaciones')->name('reevaluaciones');
Route::get('/reevaluar', 'PruebasController@Reevaluar')->name('reevaluar');

Route::get('/pruebas/examen_vigilante_privado', 'PruebasController@examen_vigilante_privado')->name('examen_vigilante_privado');
Route::get('/pruebas/examen_aa', 'PruebasController@examen_aa')->name('examen_aa');
Route::get('/pruebas/examen_af', 'PruebasController@examen_af')->name('examen_af');
Route::get('/pruebas/examen_ag', 'PruebasController@examen_ag')->name('examen_ag');
Route::get('/pruebas/examen_arsenico', 'PruebasController@examen_arsenico')->name('examen_arsenico');
Route::get('/pruebas/examen_citoestaticos', 'PruebasController@examen_citoestaticos')->name('examen_citoestaticos');
Route::get('/pruebas/examen_formald', 'PruebasController@examen_formald')->name('examen_formald');
Route::get('/pruebas/examen_oe', 'PruebasController@examen_oe')->name('examen_oe');
Route::get('/pruebas/examen_oel', 'PruebasController@examen_oel')->name('examen_oel');
Route::get('/pruebas/examen_oep', 'PruebasController@examen_oep')->name('examen_oep');
Route::get('/pruebas/examen_osc', 'PruebasController@examen_osc')->name('examen_osc');
Route::get('/pruebas/examen_plomo', 'PruebasController@examen_plomo')->name('examen_plomo');
Route::get('/pruebas/examen_rad1', 'PruebasController@examen_rad1')->name('examen_rad1');
Route::get('/pruebas/examen_rad2y3', 'PruebasController@examen_rad2y3')->name('examen_rad2y3');
Route::get('/pruebas/examen_ruido', 'PruebasController@examen_ruido')->name('examen_ruido');
Route::get('/pruebas/examen_silice', 'PruebasController@examen_silice')->name('examen_silice');
Route::get('/pruebas/examen_so2', 'PruebasController@examen_so2')->name('examen_so2');

Route::get('/api/getStatusCarga', 'ApiController@getStatusCarga')->name('api1');
Route::get('/realiza-examen', 'PruebasController@realizaExamenes')->name('realizaExamenes');
Route::get('/realiza-examen-co', 'PruebasController@realizaExamenesCO')->name('realizaExamenesCO');

//DR

Route::get('/medico', 'DoctorController@index')->name('drlista'); //lista de examenes realizados
Route::get('/medico-lista', 'DoctorController@getDrExamenes')->name('listaExamenes');
Route::get('/medico-getData', 'DoctorController@getExamenesTerminados')->name('getExamenesTerminados');
Route::get('/medico/resultados', 'DoctorController@verResultados')->name('verResultados');
Route::get('/medico/apruebaExamen', 'DoctorController@apruebaExamen')->name('apruebaExamen');
Route::get('/medico/rechazaExamen', 'DoctorController@rechazaExamen')->name('rechazaExamen');
Route::get('/medico/buscar-resultados', 'DoctorController@buscarResultados')->name('buscarResultados');
Route::get('/medico/ver-resultados-fecha', 'DoctorController@verResultadosFechas')->name('verresultadosfecha');
Route::get('/medico/ver-resultado-examen', 'DoctorController@verResultadosExamen')->name('verresultadosexamen');
Route::get('/medico/generar-pdf-resultado-examen', 'DoctorController@generarPdfExamen')->name('generarPdfExamen');

//expuestos
Route::get('/expuestos/login', 'ExpuestosController@verResultadosExamenLogin')->name('verResultadosExamenLogin');
Route::get('/expuestos/ver-resultados-examen-expuestos', 'ExpuestosController@verResultadosExamenExpuesto')->name('verResultadosExamenExpuesto');
//Route::get('/expuestos/ver-resultados-Fechas', 'ExpuestosController@verResultadosFechas')->name('verresultadosfecha1');


// examenes 
Route::get('/api/getExamenVigilantePrivado', 'ApiController@getExamenVigilantePrivado')->name('getExamenVigilantePrivado');
Route::get('/api/setExamenCO', 'ApiController@setExamenCO')->name('setExamenCO');
Route::get('api/getExamenaa', 'ApiController@getExamenaa')->name('getExamenaa');
Route::get('api/getExamenaf', 'ApiController@getExamenaf')->name('getExamenaf');
Route::get('api/getExamenag', 'ApiController@getExamenag')->name('getExamenag');
Route::get('api/getExamenarsenico', 'ApiController@getExamenarsenico')->name('getExamenarsenico');
Route::get('api/getExamencitoestaticos', 'ApiController@getExamencitoestaticos')->name('getExamencitoestaticos');
Route::get('api/getExamenformald', 'ApiController@getExamenformald')->name('getExamenformald');
Route::get('api/getExamenoe', 'ApiController@getExamenoe')->name('getExamenoe');
Route::get('api/getExamenoel', 'ApiController@getExamenoel')->name('getExamenoel');
Route::get('api/getExamenep', 'ApiController@getExamenep')->name('getExamenoep');
Route::get('api/getExamenosc', 'ApiController@getExamenosc')->name('getExamenosc');
Route::get('api/getExamenplomo', 'ApiController@getExamenplomo')->name('getExamenplomo');
Route::get('api/getExamenrad1', 'ApiController@getExamenrad1')->name('getExamenrad1');
Route::get('api/getExamenra2y3', 'ApiController@getExamenrad2y3')->name('getExamenrad2y3');
Route::get('api/getExamenruido', 'ApiController@getExamenruido')->name('getExamenruido');
Route::get('api/getExamensilice', 'ApiController@getExamensilice')->name('getExamensilice');
Route::get('api/getExamenso2', 'ApiController@getExamenso2')->name('getExamenso2');

Route::get('api/getEncuesta', 'ApiController@getEncuesta')->name('getEncuesta');
Route::get('api/getEncuestaResult', 'ApiController@getEncuestaResult')->name('getEncuestaResult');
Route::get('api/reevaluacion-examen', 'ApiController@ReevaluacionExamen')->name('ReevaluacionExamen');


Route::get('encuesta', 'EncuestaController@index')->name('encuesta');


// dashboard
Route::get("dashboard", "InformesController@Index")->name("dashboard");
    //getData ajax
Route::get("dashboard/getDataCarga", "InformesController@dataCarga")->name("dataCarga");
Route::get("dashboard/dataProgramadoRealizados", "InformesController@dataProgramadoRealizados")->name("dataProgramadoRealizados");
Route::get("dashboard/dataPorGerencia", "InformesController@dataPorGerencia")->name("dataPorGerencia");
Route::get("dashboard/getArsenicoAlterados", "InformesController@getArsenicoAlterados")->name("getArsenicoAlterados");



