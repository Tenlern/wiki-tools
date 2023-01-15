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
    public function up(): void
    {
        Schema::create('tags', static function (Blueprint $table) {
            $table->comment('Tags');

            $table->id();

            $table->json('name')->comment('Name');
            $table->string('bg_color')->comment('Color of text background');
            $table->string('text_color')->comment('Color of text');
            $table->foreignId('parent_tag_id')->nullable()->comment('Child of');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('tags');
    }
};

