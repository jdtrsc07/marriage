<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBridesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brides', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('lastname', 50)->nullable();
            $table->string('firstname', 50)->nullable();
            $table->string('middlename', 50)->nullable();
            // $table->timestamps();
            $table->date('date_of_birth')->nullable();
            $table->integer('age')->nullable();
            $table->string('pob_municipality', 50)->nullable();
            $table->string('pob_province', 50)->nullable();
            $table->string('pob_country', 50)->nullable();
            $table->string('sex', 10)->nullable();
            $table->string('citizenship', 50)->nullable();
            $table->string('res_house_no_street', 100)->nullable();
            $table->string('res_barangay', 50)->nullable();
            $table->string('res_city', 50)->nullable();
            $table->string('res_province', 50)->nullable();
            $table->string('res_country', 50)->nullable();
            $table->string('Religion', 100)->nullable();
            $table->string('civil_status', 10)->nullable();
            $table->string('prev_marriage_dissolved_reason')->nullable();
            $table->string('dissolved_municipality', 50)->nullable();
            $table->string('dissolved_province', 50)->nullable();
            $table->string('dissolved_country', 50)->nullable();
            $table->date('date_dissolved')->nullable();
            $table->date('degree_of_relationship')->nullable();
            // =======================father-========================
            $table->string('father_firstname', 50)->nullable();
            $table->string('father_middlename', 50)->nullable();
            $table->string('father_lastname', 50)->nullable();
            $table->string('father_citizenship', 50)->nullable();
            $table->string('father_houseno', 50)->nullable();
            $table->string('father_barangay', 50)->nullable();
            $table->string('father_city', 50)->nullable();
            $table->string('father_province', 50)->nullable();
            $table->string('father_country', 50)->nullable();
            // ====================mother============================
            $table->string('mother_firstname', 50)->nullable();
            $table->string('mother_middlename', 50)->nullable();
            $table->string('mother_lastname', 50)->nullable();
            $table->string('mother_citizenship', 50)->nullable();
            $table->string('mother_houseno', 50)->nullable();
            $table->string('mother_barangay', 50)->nullable();
            $table->string('mother_city', 50)->nullable();      
            $table->string('mother_province', 50)->nullable();
            $table->string('mother_country', 50)->nullable();
            // ======================consent========================
            $table->string('consent_name', 50)->nullable();
            $table->string('consent_relationship', 50)->nullable();
            $table->string('consent_citizenship', 50)->nullable();
            $table->string('consent_houseno', 50)->nullable();
            $table->string('consent_barangay', 50)->nullable();
            $table->string('consent_city', 50)->nullable();        
            $table->string('consent_province', 50)->nullable();
            $table->string('consent_country', 50)->nullable();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('brides');
    }
}
