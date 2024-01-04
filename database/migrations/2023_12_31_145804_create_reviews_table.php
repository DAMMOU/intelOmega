<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();            
            $table->string('name');
            $table->string('position')->nullable();
            $table->longText('text');
            $table->string('image_url')->nullable();
            $table->timestamps();
        });

        DB::table('reviews')->insert([
            [
                'name' => 'John Doe',
                'position' => 'CEO',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'image_url' => 'https://picsum.photos/500/300',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jane Smith',
                'position' => 'Designer',
                'text' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'image_url' => 'https://source.unsplash.com/random',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Ajoutez d'autres entrées au besoin
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
