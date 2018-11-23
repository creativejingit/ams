<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAmsAdministratorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ams_administrator', function (Blueprint $table) {
            $table->increments('administrator_id');
            $table->integer('privilege_id');
            $table->string('name', 250);
            $table->string('company', 250);
            $table->string('email');
            $table->string('password');
            $table->text('theme_setting');
            $table->string('activation_password', 250);
            $table->enum('activation_status', ['active', 'inactive']);
            $table->rememberToken();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->integer('deleted_by')->nullable();
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
        Schema::dropIfExists('ams_administrator');
    }
}
