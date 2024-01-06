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
        Schema::create('languages', function (Blueprint $table) {
            $table->id();
            $table->string('language');
            $table->string('language_code')->unique();
            $table->string('language_flag')->nullable();
            $table->boolean('status')->default(true);
            $table->timestamps();
        });




        // Insérez les langues dans la table
        DB::table('languages')->insert([
            [
                'language' => 'French',
                'language_code' => 'fr',
                'language_flag' => 'fr.png', // Vous pouvez ajouter le chemin de votre drapeau ici
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'language' => 'English',
                'language_code' => 'en',
                'language_flag' => 'en.png', // Ajoutez le chemin de votre drapeau ici
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'language' => 'Chinese',
                'language_code' => 'zh',
                'language_flag' => 'zh.png', // Ajoutez le chemin de votre drapeau ici
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('languages');
    }
};
