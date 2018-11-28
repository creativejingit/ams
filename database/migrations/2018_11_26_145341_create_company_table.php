<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ams_company', function (Blueprint $table) {
            $table->increments('company_id');
            $table->string('company_name', 250);
            $table->dateTime('date_of_formation');
            $table->string('nature_of_business',250);
            $table->string('ntn');
            $table->string('sstn');
            $table->string('point_of_contact');
            $table->string('address',250);
            $table->string('email',250);
            $table->string('website',250);
            $table->string('phone_no');
            $table->string('logo',250);
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->integer('deleted_by')->nullable();
            $table->integer('status')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ams_company');
    }
}
