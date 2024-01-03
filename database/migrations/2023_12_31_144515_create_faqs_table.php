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
        Schema::create('faqs', function (Blueprint $table) {
            $table->id();
            $table->string('question');            
            $table->string('status');
            $table->longText('answer');
            $table->timestamps();
        });
        
        // Insert four sample faq records
        DB::table('faqs')->insert([
            [
                'question' => 'What is Lorem Ipsum?',
                'status' => 'visible',
                'answer' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'How does it work?',
                'status' => 'visible',
                'answer' => 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Why do we use it?',
                'status' => 'visible',
                'answer' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Where can I get some?',
                'status' => 'visible',
                'answer' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.',
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
        Schema::dropIfExists('faqs');
    }
};
