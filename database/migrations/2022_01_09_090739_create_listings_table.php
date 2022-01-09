<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger( column: 'user_id');
            $table->string( column: 'title');
            $table->stirng( column: 'slug');
            $table->stirng( column: 'company');
            $table->stirng( column: 'location');
            $table->stirng( column: 'logo')->nullable();
            $table->boolean( column: 'is_highlighted')->default( value: false);
            $table->boolean( column: 'is_active')->default( value: true);
            $table->text( column: 'Content');
            $table->string( column: 'apply_link');
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
        Schema::dropIfExists('listings');
    }
}
