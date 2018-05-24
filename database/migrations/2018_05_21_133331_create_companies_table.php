<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name');
            $table->string('registration_number');
            $table->string('website_url');
            $table->string('industry');
            $table->enum('has_bank_account', ['Yes','No']);
            $table->integer('bank_id')->unsigned();
            $table->longtext('mission_statement');
            $table->longtext('activity_description');
            $table->integer('primary_contact_number');
            $table->string('primary_contact_email')->unique();
            $table->integer('registered_by')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('registered_by')->references('id')->on('users');
            $table->foreign('bank_id')->references('id')->on('banks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
