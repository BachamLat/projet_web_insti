<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluationRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluation_requests', function (Blueprint $table) {
            $table->id();
            $table->string('motif');
            $table->string('description_motif');
            $table->string('preuve');
            $table->unsignedBigInteger('academic_year_id'); 
            $table->unsignedBigInteger('educational_groups_id');
            $table->unsignedBigInteger('evaluation_type_id');
            $table->unsignedBigInteger('profil_id');           
            $table->unsignedBigInteger('UE_id');
            $table->unsignedBigInteger('filiere_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evaluation_requests');
    }
}
