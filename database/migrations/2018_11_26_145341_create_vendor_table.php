<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ams_vendor', function (Blueprint $table) {
            $table->increments('vendor_id');
            $table->string('vendor_name', 250);
            $table->string('currency', 250);
            $table->string('credit_term',250);
            $table->string('sales_tax_rate',250);
            $table->string('point_of_contact',250);
            $table->string('wht_rate',250);
            $table->string('address',250);
            $table->string('email',250);
            $table->string('ntn',250);
            $table->string('sales_tax_no',250);
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
        Schema::dropIfExists('ams_vendor');
    }
}
