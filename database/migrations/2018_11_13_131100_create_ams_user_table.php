<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAmsUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ams_user', function (Blueprint $table) {
            $table->increments('user_id');
            $table->integer('organization_id');
            $table->integer('group_id');
            $table->integer('parent_id');
            $table->string('name', 250);
            $table->string('email');
            $table->string('password');
            $table->string('profile_pic',250);
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
        Schema::dropIfExists('ams_user');
    }
}
