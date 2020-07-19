 <?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CargaArsenico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CargaArsenico', function (Blueprint $table) { 
            
            $table->bigIncrements('id');
            $table->Integer('idCarga');
            $table->dateTime('fechaExamen');
            $table->Integer('sem');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
