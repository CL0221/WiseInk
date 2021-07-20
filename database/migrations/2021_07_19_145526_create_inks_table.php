<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inks', function (Blueprint $table) {
            $table->id();
            $table->string('ink_img')->nullable();
            $table->string('ink_model', 255)->nullable();
            $table->decimal('ink_price', 22)->nullable()->default(0.00);
            $table->decimal('ink_commision', 22)->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inks');
    }
}
