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
        Schema::create('posts', function (Blueprint $table) {
                $table->id('postid'); // Custom primary key column
                $table->string('title');
                $table->text('description');
                $table->unsignedBigInteger('userid');
                $table->timestamp('createdate')->useCurrent();
                $table->foreign('userid')->references('id')->on('users')->onDelete('cascade'); // Foreign key constraint
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
