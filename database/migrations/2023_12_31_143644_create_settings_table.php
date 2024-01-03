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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('value')->nullable();
            $table->timestamps();
        });
        DB::table('settings')->insert(
            [      
                [
                    'name' => 'title',
                    'value' => 'IntelOmega'
                ],
                [
                    'name' => 'author',
                    'value' => 'DAMMOU Youssef'
                ],
                [
                    'name' => 'keywords',
                    'value' => 'IntelOmega'
                ],
                [
                    'name' => 'description',
                    'value' => 'IntelOmega'
                ],


                [
                    'name' => 'css',
                    'value' => ''
                ],
                [
                    'name' => 'js',
                    'value' => ''
                ],

            ]
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
