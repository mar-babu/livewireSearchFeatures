<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->date('dob')->nullable();
            $table->string('email')->nullable();
            $table->string('mobile')->nullable();
            $table->string('phone')->nullable();
            $table->string('present_address_line_1')->nullable();
            $table->string('present_post_code')->nullable();
            $table->integer('present_country_id')->nullable();
            $table->integer('present_city_id')->nullable();
            $table->smallInteger('identity_type')->nullable();
            $table->string('identity_number')->nullable();
            $table->string('permanent_address_line_1')->nullable();
            $table->string('permanent_post_code')->nullable();
            $table->integer('permanent_country_id')->nullable();
            $table->integer('permanent_city_id')->nullable();
            $table->smallInteger('status')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
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
        Schema::dropIfExists('personal_profiles');
    }
}
