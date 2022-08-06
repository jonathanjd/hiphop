<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
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
            $table->string('name');
            $table->text('meta_description')->nullable();
            $table->text('meta_keyword')->nullable();
            $table->bigInteger('parent_id')->nullable();
            $table->text('content_header')->nullable();
            $table->text('content_body')->nullable();
            $table->text('content_footer')->nullable();
            $table->text('content_call_action_top')->nullable();
            $table->text('content_call_action_bottom')->nullable();
            $table->string('slug')->unique()->nullable();
            $table->boolean('show')->default(true);
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
        Schema::dropIfExists('pages');
    }
}
