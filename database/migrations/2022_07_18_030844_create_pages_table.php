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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->text('slug');
            $table->text('title');
            $table->longText('content');
            $table->boolean('active')->default(0);
            $table->timestamps();
        });

        Schema::create('page_has_widgets', function (Blueprint $table) {
            $table->foreignId('page_id');
            $table->foreignId('widget_id');
            $table->smallInteger('sort_number')->default(1000);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('page_has_widgets');
        Schema::dropIfExists('pages');
    }
};
