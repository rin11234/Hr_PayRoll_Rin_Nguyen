<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personals', function (Blueprint $table) {
            $table->id();
            $table->string('current_first_name', 50);
            $table->text('current_last_name');
            $table->string('current_middle_name', 50)->nullable();
            $table->date('birth_date');
            $table->string('social_security_number', 20)->nullable();
            $table->string('drivers_license', 50)->nullable();
            $table->string('current_address_1', 255);
            $table->string('current_address_2', 255)->nullable();
            $table->string('current_city', 100);
            $table->string('current_country', 100);
            $table->bigInteger('current_zip');
            $table->string('current_gender', 20);
            $table->string('current_phone_number', 15);
            $table->string('current_personal_email', 50);
            $table->string('current_marital_status', 50);
            $table->string('ethnicity', 10);
            $table->smallInteger('shareholder_status');
            $table->bigInteger('benefit_plan_id')->nullable();
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
        Schema::dropIfExists('personals');
    }
};
