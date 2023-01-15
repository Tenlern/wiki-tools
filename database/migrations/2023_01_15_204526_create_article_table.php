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
        Schema::create('items', static function (Blueprint $table) {
            $table->comment('Articles, cards and any content');

            $table->id();
            $table->string('title')->comment('Title');
            $table->string('source')->comment('Original source');
            $table->json('description')->comment('Narrative description');
            $table->json('system')->comment('Rules');

            $table->timestamps();
        });

        Schema::create('item_tag', static function (Blueprint $table) {
            $table->foreignId('item')->comment('Item');
            $table->foreignId('tag_id')->comment('Tag');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('item_tag');
        Schema::dropIfExists('items');
    }
};
