<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ams_client', function (Blueprint $table) {
            $table->increments('client_id');
            $table->string('client_name', 250);
            $table->string('credit_term', 250);
            $table->string('point_of_contact',250);
            $table->string('contact_no_of_poc',250);
            $table->string('address',250);
            $table->string('email',250);
            $table->integer('ntn');
            $table->integer('sales_tax_no');
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
        Schema::dropIfExists('ams_client');
    }
}
