<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('Club', function(Blueprint $table) {
      $table->increments('id_club');
      $table->string('cp_club', 5);
      $table->timestamps();

  });

  Schema::create('utilisateurs', function (Blueprint $table) {
      $table->increments('id_utilisateur');
      $table->string('nom_utilisateur');
      $table->string('prenom_utilisateur');
      $table->string('ville_utilisateur');
      $table->string('cp_utilisateur');
      $table->string('rue_utilisateur');
      $table->string('mdp_utilisateur');
      $table->string('mail_utilisateur')->unique();
      $table->string('rib_utilisateur');
      $table->boolean('role_utilisateur');
      $table->string('tel_utilisateur');
      $table->string('password');
      $table->rememberToken();
      $table->timestamps();

  });

  Schema::create('Compte_analytique', function(Blueprint $table) {

  		    $table->increments('id_analytique');
          $table->string('libelle_analytique');

  		});

      Schema::create('Mission', function(Blueprint $table) {
          $table->increments('id_mission');
          $table->string('libelle_mission');
          $table->date('date_deb_mission');
          $table->date('date_fin_mission');
          $table->integer('id_analytique');
          $table->foreign('id_analytique')
              ->references('id_analytique')->on('Compte_analytique');
      });

      Schema::create('etat_fiche_frais', function(Blueprint $table) {

          $table->increments('id_etat');
          $table->string('libelle_etat');
      });

  Schema::create('fiche_frais', function(Blueprint $table) {
      $table->increments('id_fiche_frais');
      $table->date('date_fiche_frais');
      $table->integer('id_utilisateur');
      $table->integer('id_etat');
      $table->integer('id_mission');
      $table->foreign('id_utilisateur')
          ->references('id_utilisateur')->on('utilisateurs');
      $table->foreign('id_etat')
            ->references('id_etat')->on('etat_fiche_frais');
      $table->foreign('id_mission')
            ->references('id_mission')->on('Mission');
      $table->timestamps();

  });
  if(Schema::hasTable('type_de_frais')){
        Schema::drop('type_de_frais');
    }
  Schema::create('type_de_frais', function(Blueprint $table) {
      $table->increments('id_type_frais');
      $table->string('libelle_type_frais');

  });


    Schema::create('ligne_fiche_frais', function(Blueprint $table) {
        $table->increments( 'id_ligne_fiche_frais');
		    $table->date('date_ligne');
        $table->float('montant_ligne');
        $table->string('description_ligne');
        $table->integer('id_fiche_frais');
        $table->integer('id_type_frais');
        $table->foreign('id_type_frais')
              ->references('id_type_frais')->on('type_de_frais');
        $table->foreign('id_fiche_frais')
              ->references('id_fiche_frais')->on('fiche_frais');

          	});
}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    Schema::drop('type_de_frais');
    Schema::drop('fiche_frais');
    Schema::drop('etat_fiche_frais');
    Schema::drop('Mission');
    Schema::drop('utilisateurs');
    Schema::drop('Club');
    Schema::drop('ligne_fiche_frais');
    }
}
