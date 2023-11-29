<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tournaments', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('gender');
            $table->integer('age');
            $table->string('country');
            $table->integer('score_1');
            $table->integer('score_2');
            $table->integer('score_3');
            $table->timestamps();
        });
        DB::table('tournaments')->insert([
            [
                'code' => '001',
                'full_name' => 'Іван Кучеренко',
                'gender' => 'чоловіча',
                'age' => 25,
                'country' => 'Україна',
                'score_1' => 90,
                'score_2' => 85,
                'score_3' => 88,
                'created_at' => now(),
                'updated_at' => now(),
           ],
            [
                'code' => '002',
                'full_name' => 'Ганна Сидоренко',
                'gender' => 'жіноча',
                'age' => 28,
                'country' => 'Сполучені Штати Америки',
                'score_1' => 85,
                'score_2' => 88,
                'score_3' => 92,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => '003',
                'full_name' => 'Кирило Іванюк',
                'gender' => 'чоловіча',
                'age' => 22,
                'country' => 'Німеччина',
                'score_1' => 78,
                'score_2' => 80,
                'score_3' => 75,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => '004',
                'full_name' => 'Станіслава Ягненко',
                'gender' => 'жіноча',
                'age' => 24,
                'country' => 'Франція',
                'score_1' => 92,
                'score_2' => 88,
                'score_3' => 90,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => '005',
                'full_name' => 'Марко Проволець',
                'gender' => 'чоловіча',
                'age' => 30,
                'country' => 'Іспанія',
                'score_1' => 87,
                'score_2' => 85,
                'score_3' => 89,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => '006',
                'full_name' => 'Марія Василинець',
                'gender' => 'жіноча',
                'age' => 26,
                'country' => 'Італія',
                'score_1' => 82,
                'score_2' => 84,
                'score_3' => 87,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tournaments');
    }
};
