<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->unsignedBigInteger("users_id");
            $table->foreign('users_id')->references('id')->on('users');

            $table->unsignedBigInteger("pacientes_id");
            $table->foreign('pacientes_id')->references('id')->on('pacientes');

            $table->unsignedBigInteger("agentes_id");
            $table->foreign('agentes_id')->references('id')->on('agentes');

            $table->boolean("realizadoEncuenta")->nullable();
            $table->boolean("realizadoAntecedente")->nullable();

            $table->integer("cargas_id");
            


            //doctor
            $table->text('observacionDoctor')->nullable();
            $table->integer('idDoctor')->nullable();

            // observacion
            $table->text('observacionExamen')->nullable();

            //VIGILANTE PRIVADO
            $table->text('oido_derecho_1')->nullable();
            $table->text('oido_derecho_2')->nullable();
            $table->text('oido_derecho_3')->nullable();
            $table->text('oido_derecho_4')->nullable();
            $table->text('oido_derecho_6')->nullable();
            $table->text('oido_derecho_8')->nullable();

            $table->text('oido_derecho_prom_1_6')->nullable();
            $table->text('oido_derecho_dano_aud')->nullable();

            $table->text('oido_izquierdo_1')->nullable();
            $table->text('oido_izquierdo_2')->nullable();
            $table->text('oido_izquierdo_3')->nullable();
            $table->text('oido_izquierdo_4')->nullable();
            $table->text('oido_izquierdo_6')->nullable();
            $table->text('oido_izquierdo_8')->nullable();

            $table->text('espirometria_basal')->nullable();;
            $table->text('oido_izquierdo_prom_1_6')->nullable();
            $table->text('oido_izquierdo_dano_aud')->nullable();
            $table->text('inc')->nullable();
            $table->text('vig_observacion1')->nullable();
            $table->text('prueba_esfuerzo_pulso_2')->nullable();
            $table->text('prueba_esfuerzo_pulso_3')->nullable();
            $table->text('vig_ir')->nullable();
            $table->boolean('vig_vigente')->default(1);
            $table->dateTime('vig_fechaExamen')->nullable();
  
            // CO
            $table->text('co_declaracion_salud')->nullable();
            $table->text('co_orientado_a_riesgos')->nullable();
            $table->text('co_evaluar_equilibrio')->nullable();
            $table->text('co_presion_arterial')->nullable();
            $table->text('co_pulso')->nullable();
            $table->text('co_peso')->nullable();
            $table->text('co_talla')->nullable();
            $table->text('co_imc')->nullable();
            $table->text('co_glicemia_ayunas')->nullable();
            $table->text('co_ecg_reposo_mayor_40')->nullable();
            $table->text('co_examen_visual')->nullable();
            $table->text('co_pruebas_hepaticas')->nullable();
            $table->text('co_rcv_framingham')->nullable();
            $table->dateTime('co_fecha_evaluacion')->default('CURRENT_TIMESTAMP')->nullable()->change();
            $table->boolean('co_vigente')->default(1);
            $table->dateTime('co_fechaExamen')->nullable();
            // $table->timestamp('co_fecha_evaluacion', 0);

            // examen AA AEROSOLES ACIDOS


                        
            $table->dateTime('aa_FECHAFLUJO1')->nullable();
            $table->text('aa_PEF_OBS1')->nullable();
            $table->text('aa_PEF_TEORICO1')->nullable();
            $table->text('aa_PORCETAJE_FLUJO1')->nullable();
            $table->text('aa_ESTADO')->nullable();
            //fecha 2
            $table->dateTime('aa_FECHAFLUJO2')->nullable();
            $table->text('aa_PEF_OBS2')->nullable();
            $table->text('aa_PEF_TEORICO2')->nullable();
            $table->text('aa_RESULTADO')->nullable();
            $table->text('aa_ESTADO_2')->nullable();
            $table->text('aa_VARIABILIDAD')->nullable();
            $table->text('aa_CONCLUSION_FLUJO')->nullable();
            $table->dateTime('aa_FECHAENCUESTA')->nullable();
            $table->text('aa_CONCLUSION_ENCUESTA')->nullable();
            $table->text('aa_CONCLUSION_FINAL')->nullable();


           // AF
           $table->dateTime('af_FECHA_EVALUACION')->nullable();
           $table->text('af_OPTOMETRIA')->nullable();
           $table->text('af_EX_NEU_EQUI')->nullable();
           $table->text('af_CONCLUSION')->nullable();
           $table->text('af_INDICACION_MEDICA')->nullable();
           $table->dateTime('af_FECHA_REEVALUACION')->nullable();
           $table->text('af_CONCLUSION_REEVALUACION')->nullable();     

           // AG
           $table->dateTime('ag_FECHA_EVALUACION')->nullable();
           $table->text('ag_RX_TORAX_PA')->nullable();
           $table->text('ag_CREATINEMIA')->nullable();
           $table->text('ag_CONCLUSION')->nullable();
           $table->text('ag_OBSERVACION')->nullable();   
           
           // AS - Aresenico
           $table->dateTime('as_FECHA_MUESTRA')->nullable();
           $table->text('as_UG_G')->nullable();
           $table->text('as_estado')->nullable();
            $table->dateTime('as_FECHA_CONTRAMUESTRA')->nullable();
           $table->text('as_UG_G_CONTRAMUESTRA')->nullable();  
           $table->text('as_estado1')->nullable(); 

           // CI - CITOSTATICOS 
           $table->dateTime('ci_FECHA_EVALUACION_HEMOGRAMA')->nullable();
           $table->text('ci_RESULTADO_HEMOGRAMA')->nullable();
           $table->text('ci_OBSERVACION_HEMOGRAMA')->nullable();
           $table->dateTime('ci_FECHA_EVALUACION_BIOQUIMICO')->nullable();
           $table->text('ci_RESULTADO_BIOQUIMICO')->nullable();  
           $table->text('ci_OBSERVACION_BIOQUIMICO')->nullable();
           $table->dateTime('ci_FECHA_EVALUACION_TORAX')->nullable();
           $table->text('ci_RESULTADO_TORAX')->nullable();
           $table->text('ci_OBSERVACION_TORAX')->nullable();
           $table->dateTime('ci_FECHA_EVALUACION_CLINICA')->nullable();
           $table->text('ci_RESULTADO_EVALUACION_CLINICA')->nullable();
           $table->text('ci_OBSERVACION_EVALUACION_CLINICA')->nullable();
           $table->dateTime('ci_FECHA_EVALUACION_ORINA')->nullable();
           $table->text('ci_RESULTADO_ORINA')->nullable();
           $table->text('ci_OBSERVACION_ORINA')->nullable();
           $table->text('ci_CONCLUSION')->nullable();
           
           // Fo formOOOOOOOL
           $table->dateTime('fo_FECHA_EVALUACION_HEMOGRAMA')->nullable();
           $table->text('fo_RESULTADO_HEMOGRAMA')->nullable();
           $table->text('fo_OBSERVACION_HEMOGRAMA')->nullable();
           $table->dateTime('fo_FECHA_EVALUACION_BIOQUIMICO')->nullable();
           $table->text('fo_RESULTADO_BIOQUIMICO')->nullable();  
           $table->text('fo_OBSERVACION_BIOQUIMICO')->nullable();
           $table->dateTime('fo_FECHA_EVALUACION_TORAX')->nullable();
           $table->text('fo_RESULTADO_TORAX')->nullable();
           $table->text('fo_OBSERVACION_TORAX')->nullable();
           $table->dateTime('fo_FECHA_EVALUACION_CLINICA')->nullable();
           $table->text('fo_RESULTADO_EVALUACION_CLINICA')->nullable();
           $table->text('fo_OBSERVACION_EVALUACION_CLINICA')->nullable();
           $table->dateTime('fo_FECHA_EVALUACION_ORINA')->nullable();
           $table->text('fo_RESULTADO_ORINA')->nullable();
           $table->text('fo_OBSERVACION_ORINA')->nullable();
           $table->text('fo_CONCLUSION')->nullable();

           // OE!!!
            $table->dateTime('FECHA_EVALUACION_HEMOGRAMA')->nullable();
            $table->text('RESULTADO_HEMOGRAMA')->nullable();
            $table->text('OBSERVACION_HEMOGRAMA')->nullable();
            $table->dateTime('FECHA_EVALUACION_BIOQUIMICO')->nullable();
            $table->text('RESULTADO_BIOQUIMICO')->nullable();
            $table->dateTime('FECHA_EVALUACION_TORAX')->nullable();  
            $table->text('RESULTADO_TORAX')->nullable();
            $table->text('OBSERVACION_TORAX')->nullable();
            $table->dateTime('FECHA_EVALUACION_CLINICA')->nullable();
            $table->text('RESULTADO_EVALUACION_CLINICA')->nullable();
            $table->text('OBSERVACION_EVALUACION_CLINICA')->nullable();
            $table->dateTime('FECHA_EVALUACION_ORINA')->nullable();
            $table->text('RESULTADO_ORINA')->nullable();
            $table->text('OBSERVACION_ORINA')->nullable();
            $table->text('CONCLUSION')->nullable();

        
           

            // ENCUETA 4 formol


            $table->text("ENC_FO_R_PC")->nullable();
            $table->text("ENC_FO_R_LP")->nullable();
            $table->text("ENC_FO_R_TS")->nullable();
            $table->text("ENC_FO_R_ADM")->nullable();
            $table->text("ENC_FO_R_LC")->nullable();
            $table->text("ENC_FO_R_DR")->nullable();
            $table->text("ENC_FO_R_CP")->nullable();
            $table->text("ENC_FO_PREG1")->nullable();
            $table->text("ENC_FO_PREG2")->nullable();
            $table->text("ENC_FO_PREG3")->nullable();
            $table->text("ENC_FO_PREG4")->nullable();
            $table->text("ENC_FO_PREG5")->nullable();
            $table->text("ENC_FO_PREG6")->nullable();
            $table->text("ENC_FO_PREG7")->nullable();
            $table->text("ENC_FO_PREG8")->nullable();
            $table->text("ENC_FO_PREG9")->nullable();
            $table->text("ENC_FO_PREG10")->nullable();
            $table->text("ENC_FO_PREG11")->nullable();
            $table->text("ENC_FO_PREG12")->nullable();
            $table->text("ENC_FO_PREG13")->nullable();
            $table->text("ENC_FO_PREG14")->nullable();
            $table->text("ENC_FO_PREG15")->nullable();
            $table->text("ENC_FO_PREG16")->nullable();
            $table->text("ENC_FO_PREG17")->nullable();
            $table->text("ENC_FO_PREG18")->nullable();
            $table->text("ENC_FO_PREG19")->nullable();
            $table->text("ENC_FO_PREG20")->nullable();
            $table->text("ENC_FO_PREG21")->nullable();
            $table->text("ENC_FO_PREG22")->nullable();
            $table->text("ENC_FO_PREG23")->nullable();
            $table->text("ENC_FO_PREG24")->nullable();
            $table->text("ENC_FO_PREG25")->nullable();
            $table->text("ENC_FO_PREG26")->nullable();
            $table->text("ENC_FO_PREG27")->nullable();
            $table->text("ENC_FO_PREG28")->nullable();
            $table->text("ENC_FO_PREG29")->nullable();
            $table->text("ENC_FO_PREG30")->nullable();
            $table->text("ENC_FO_R_D")->nullable();
            $table->text("ENC_FO_PREG31")->nullable();
            $table->text("ENC_FO_PREG32")->nullable();
            $table->text("ENC_FO_R_C")->nullable();
            $table->text("ENC_FO_PREG33")->nullable();
            $table->text("ENC_FO_PREG34")->nullable();
            $table->text("ENC_FO_R_MD")->nullable();
            $table->text("ENC_FO_PREG35")->nullable();
            $table->text("ENC_FO_PREG36")->nullable();
            $table->text("ENC_FO_R_GL")->nullable();
            $table->text("ENC_FO_C_CP")->nullable();
            $table->text("ENC_FO_C_SP")->nullable();
            $table->text("ENC_FO_R_GN")->nullable();
            $table->text("ENC_FO_PREG37")->nullable();
            $table->text("ENC_FO_PREG38")->nullable();
            $table->text("ENC_FO_PREG39")->nullable();
            $table->text("ENC_FO_R_GNE")->nullable();
            $table->text("ENC_FO_PREG40")->nullable();
            $table->text("ENC_FO_PREG41")->nullable();
            $table->text("ENC_FO_R_GMU")->nullable();
            $table->text("ENC_FO_PREG42")->nullable();
            $table->text("ENC_FO_PREG43")->nullable();
            $table->text("ENC_FO_R_GPVC")->nullable();
            $table->text("ENC_FO_PREG44")->nullable();
            $table->text("ENC_FO_PREG45")->nullable();
            $table->text("ENC_FO_R_GP")->nullable();
            $table->text("ENC_FO_PREG46")->nullable();
            $table->text("ENC_FO_PREG47")->nullable();
            $table->text("ENC_FO_R_PP")->nullable();
            $table->text("ENC_FO_PREG48")->nullable();
            $table->text("ENC_FO_PREG49")->nullable();
            $table->text("ENC_FO_R_CD")->nullable();
            $table->text("ENC_FO_PREG50")->nullable();
            $table->text("ENC_FO_R_BG")->nullable();
            $table->text("ENC_FO_PREG51")->nullable();
            $table->text("ENC_FO_PREG52")->nullable();
            $table->text("ENC_FO_PREG53")->nullable();
            $table->text("ENC_FO_R_OTROS")->nullable();
            $table->text("ENC_FO_PREG54")->nullable();
            $table->text("ENC_FO_PREG55")->nullable();

// ENCUETA 5 CITO


            $table->text("ENC_CI_R_PC")->nullable();
            $table->text("ENC_CI_R_LP")->nullable();
            $table->text("ENC_CI_R_TS")->nullable();
            $table->text("ENC_CI_R_ADM")->nullable();
            $table->text("ENC_CI_R_LC")->nullable();
            $table->text("ENC_CI_R_DR")->nullable();
            $table->text("ENC_CI_R_CP")->nullable();
            $table->text("ENC_CI_PREG1")->nullable();
            $table->text("ENC_CI_PREG2")->nullable();
            $table->text("ENC_CI_PREG3")->nullable();
            $table->text("ENC_CI_PREG4")->nullable();
            $table->text("ENC_CI_PREG5")->nullable();
            $table->text("ENC_CI_PREG6")->nullable();
            $table->text("ENC_CI_PREG7")->nullable();
            $table->text("ENC_CI_PREG8")->nullable();
            $table->text("ENC_CI_PREG9")->nullable();
            $table->text("ENC_CI_PREG10")->nullable();
            $table->text("ENC_CI_PREG11")->nullable();
            $table->text("ENC_CI_PREG12")->nullable();
            $table->text("ENC_CI_PREG13")->nullable();
            $table->text("ENC_CI_PREG14")->nullable();
            $table->text("ENC_CI_PREG15")->nullable();
            $table->text("ENC_CI_PREG16")->nullable();
            $table->text("ENC_CI_PREG17")->nullable();
            $table->text("ENC_CI_PREG18")->nullable();
            $table->text("ENC_CI_PREG19")->nullable();
            $table->text("ENC_CI_PREG20")->nullable();
            $table->text("ENC_CI_PREG21")->nullable();
            $table->text("ENC_CI_PREG22")->nullable();
            $table->text("ENC_CI_PREG23")->nullable();
            $table->text("ENC_CI_PREG24")->nullable();
            $table->text("ENC_CI_PREG25")->nullable();
            $table->text("ENC_CI_PREG26")->nullable();
            $table->text("ENC_CI_PREG27")->nullable();
            $table->text("ENC_CI_PREG28")->nullable();
            $table->text("ENC_CI_PREG29")->nullable();
            $table->text("ENC_CI_PREG30")->nullable();
            $table->text("ENC_CI_R_D")->nullable();
            $table->text("ENC_CI_PREG31")->nullable();
            $table->text("ENC_CI_PREG32")->nullable();
            $table->text("ENC_CI_R_C")->nullable();
            $table->text("ENC_CI_PREG33")->nullable();
            $table->text("ENC_CI_PREG34")->nullable();
            $table->text("ENC_CI_R_MD")->nullable();
            $table->text("ENC_CI_PREG35")->nullable();
            $table->text("ENC_CI_PREG36")->nullable();
            $table->text("ENC_CI_R_GL")->nullable();
            $table->text("ENC_CI_C_CP")->nullable();
            $table->text("ENC_CI_C_SP")->nullable();
            $table->text("ENC_CI_R_GN")->nullable();
            $table->text("ENC_CI_PREG37")->nullable();
            $table->text("ENC_CI_PREG38")->nullable();
            $table->text("ENC_CI_PREG39")->nullable();
            $table->text("ENC_CI_R_GNE")->nullable();
            $table->text("ENC_CI_PREG40")->nullable();
            $table->text("ENC_CI_PREG41")->nullable();
            $table->text("ENC_CI_R_GMU")->nullable();
            $table->text("ENC_CI_PREG42")->nullable();
            $table->text("ENC_CI_PREG43")->nullable();
            $table->text("ENC_CI_R_GPVC")->nullable();
            $table->text("ENC_CI_PREG44")->nullable();
            $table->text("ENC_CI_PREG45")->nullable();
            $table->text("ENC_CI_R_GP")->nullable();
            $table->text("ENC_CI_PREG46")->nullable();
            $table->text("ENC_CI_PREG47")->nullable();
            $table->text("ENC_CI_R_PP")->nullable();
            $table->text("ENC_CI_PREG48")->nullable();
            $table->text("ENC_CI_PREG49")->nullable();
            $table->text("ENC_CI_R_CD")->nullable();
            $table->text("ENC_CI_PREG50")->nullable();
            $table->text("ENC_CI_R_BG")->nullable();
            $table->text("ENC_CI_PREG51")->nullable();
            $table->text("ENC_CI_PREG52")->nullable();
            $table->text("ENC_CI_PREG53")->nullable();
            $table->text("ENC_CI_R_OTROS")->nullable();
            $table->text("ENC_CI_PREG54")->nullable();
            $table->text("ENC_CI_PREG55")->nullable();

            //ENCUESTA 18 arsenico


                $table->text("ENC_AS_R_HA")->nullable();                               
                $table->text("ENC_AS_R_DM")->nullable();  
                $table->text("ENC_AS_R_ER" )->nullable(); 
                $table->text("ENC_AS_H")->nullable();
                $table->text("ENC_AS_PREG")->nullable();  
                $table->text("ENC_AS_RESULT_EMPRESA")->nullable();  
                $table->text("ENC_AS_RESULT_PUESTOTRABAJO")->nullable(); 
                $table->text("ENC_AS_RESULT_ORG")->nullable();
                $table->dateTime("ENC_AS_FECHA_INI1")->nullable();
                $table->dateTime("ENC_AS_FECHA_INI2")->nullable();
                $table->text("ENC_AS_RESULT_MEDIDA")->nullable();  
                $table->text("ENC_AS_RESULT_1")->nullable(); 
                $table->text("ENC_AS_RESULT_2")->nullable(); 
                $table->text("ENC_AS_RESULT_3")->nullable(); 
                $table->dateTime("ENC_AS_FECHA_INI3")->nullable();  
                $table->dateTime("ENC_AS_FECHA_INI4")->nullable();  
                $table->text("ENC_AS_RESULT_4")->nullable();  
                $table->text("ENC_AS_RESULT_5")->nullable();  
                $table->text("ENC_AS_RESULT_6")->nullable();  
                $table->text("ENC_AS_RESULT_7")->nullable();  
                $table->dateTime("ENC_AS_FECHA_INI5")->nullable();  
                $table->dateTime("ENC_AS_FECHA_INI6")->nullable();  
                $table->text("ENC_AS_RESULT_8")->nullable();  
                $table->text("ENC_AS_RESULT_9")->nullable();  
                $table->text("ENC_AS_RESULT_10")->nullable();  
                $table->text("ENC_AS_RESULT_11")->nullable(); 
                $table->dateTime("ENC_AS_FECHA_INI7")->nullable(); 
                $table->dateTime("ENC_AS_FECHA_INI8")->nullable();
                $table->text("ENC_AS_RESULT_12")->nullable(); 
                $table->text("ENC_AS_RESULT_13")->nullable();
                $table->text("ENC_AS_RESULT_14")->nullable();
                $table->text("ENC_AS_MES")->nullable();
                $table->text("ENC_AS_C_MC_ING")->nullable();  
                $table->text("ENC_AS_C_MC_ADM")->nullable();  
                $table->text("ENC_AS_C_MC_EPP")->nullable();  
                $table->text("ENC_AS_R_PREG2_PROTECCION")->nullable();  
                $table->text("ENC_AS_R_PREG3_MEDIO")->nullable();  
                $table->text("ENC_AS_RESULT_15")->nullable();  
                $table->text("ENC_AS_RESULT_16")->nullable();  
                $table->text("ENC_AS_RESULT_17")->nullable();  
                $table->text("ENC_AS_RESULT_18")->nullable();  
                $table->text("ENC_AS_RESULT_19")->nullable();  
                $table->text("ENC_AS_RESULT_20")->nullable();  
                $table->text("ENC_AS_RESULT_21")->nullable();  
                $table->text("ENC_AS_RESULT_22")->nullable();  
                $table->text("ENC_AS_RESULT_23")->nullable();  
                $table->text("ENC_AS_RESULT_24")->nullable();  
                $table->text("ENC_AS_RESULT_25")->nullable();  
                $table->text("ENC_AS_RESULT_26")->nullable();  
                $table->text("ENC_AS_RESULT_27")->nullable();  
                $table->text("ENC_AS_RESULT_28")->nullable();  
                $table->text("ENC_AS_RESULT_29")->nullable();  
                $table->text("ENC_AS_RESULT_30")->nullable();  
                $table->text("ENC_AS_RESULT_31")->nullable();  
                $table->text("ENC_AS_RESULT_32")->nullable();  
                $table->text("ENC_AS_RESULT_33")->nullable();  
                $table->text("ENC_AS_RESULT_R_RESPIRADOR")->nullable();  
                $table->dateTime("ENC_AS_FECHA_INI9")->nullable();  
                $table->text("ENC_AS_T_RESULTMARCA")->nullable();  
                $table->text("ENC_AS_R_TALLA")->nullable();   
                $table->text("ENC_AS_RESULT_R_CAPA")->nullable(); 
                $table->dateTime("ENC_AS_RESULT_FECHA10")->nullable();  
                $table->text("ENC_AS_RESULT_34")->nullable();  
                $table->text("ENC_AS_RESULT_35")->nullable();  
                $table->text("ENC_AS_RESULT_36")->nullable();  
                $table->text("ENC_AS_RESULT_37")->nullable();  
                $table->text("ENC_AS_RESULT_38")->nullable();  
                $table->text("ENC_AS_RESULT_39")->nullable();  
                $table->text("ENC_AS_RESULT_40")->nullable();  
                $table->text("ENC_AS_RESULT_41")->nullable();  
                $table->text("ENC_AS_RESULT_42")->nullable();  
                $table->text("ENC_AS_RESULT_43")->nullable();  
                $table->text("ENC_AS_RESULT_44")->nullable();  
                $table->text("ENC_AS_RESULT_45")->nullable();  
                $table->text("ENC_AS_RESULT_46")->nullable();  
                $table->text("ENC_AS_RESULT_47")->nullable();  
                $table->text("ENC_AS_RESULT_48")->nullable();  
                $table->text("ENC_AS_RESULT_49")->nullable();  
                $table->text("ENC_AS_RESULT_50")->nullable();  
                $table->text("ENC_AS_RESULT_51")->nullable();  
                $table->text("ENC_AS_RESULT_52")->nullable();  
                $table->text("ENC_AS_RESULT_53")->nullable();  
                $table->text("ENC_AS_RESULT_54")->nullable();  
                $table->text("ENC_AS_RESULT_55")->nullable();  
                $table->text("ENC_AS_RESULT_56")->nullable();  
                $table->text("ENC_AS_RESULT_57")->nullable();  
                $table->text("ENC_AS_RESULT_58")->nullable();  
                $table->text("ENC_AS_RESULT_59")->nullable();  
                $table->text("ENC_AS_RESULT_60")->nullable();  
                $table->text("ENC_AS_RESULT_61")->nullable();  
                $table->text("ENC_AS_RESULT_62")->nullable();  
                $table->text("ENC_AS_RESULT_63")->nullable();  
                $table->text("ENC_AS_RESULT_64")->nullable();  
                $table->text("ENC_AS_RESULT_65")->nullable();  
                $table->text("ENC_AS_RESULT_66")->nullable();  
                $table->text("ENC_AS_RESULT_67")->nullable();  
                $table->text("ENC_AS_RESULT_68")->nullable();  
                $table->text("ENC_AS_RESULT_69")->nullable();  
                $table->text("ENC_AS_RESULT_70")->nullable();  
                $table->text("ENC_AS_RESULT_71")->nullable();  
                $table->text("ENC_AS_RESULT_72")->nullable();  
                $table->text("ENC_AS_RESULT_73")->nullable();  
                $table->text("ENC_AS_RESULT_74")->nullable();  
                $table->text("ENC_AS_RESULT_75")->nullable();  



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('examens');
    }
}
