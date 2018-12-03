<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuotationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ams_quotation', function (Blueprint $table) {
            $table->increments('quotation_id');
            $table->dateTime('date');
            $table->string('reference_no', 250);
            $table->string('to',250);
            $table->string('client',250);
            $table->string('address',250);
            $table->string('contact_no',250);
            $table->string('dollar_rate',250);
            $table->string('project',250);
            $table->string('description',250);
            $table->string('estimated_time',250);
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
        Schema::dropIfExists('ams_quotation');
    }
}
