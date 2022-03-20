<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profils', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id');
            $table->unsignedBigInteger('service_id');
            $table->string('com_nom');
            $table->string('com_prenom');
            $table->string('com_genre');
            $table->string('com_birthday');
            $table->string('com_lieu_naissance');
            $table->string('com_diplome');
            $table->string('com_num_matricule');
            $table->string('com_num_telephone');
            $table->string('com_num_parent');
            $table->string('com_fullname_parent');
            $table->string('com_adresse');
            $table->string('com_groupe_pedagogique');
            $table->unsignedBigInteger('filiere_id');
            $table->unsignedBigInteger('educational_groups_id');
            $table->string('ens_princip_spe');
            $table->string('ens_comp_spe');
            $table->string('ens_RIB');
            $table->string('pers_grade');
            $table->string('pers_indice');
            $table->date('pers_startdate');
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
        Schema::dropIfExists('profils');
    }
}
