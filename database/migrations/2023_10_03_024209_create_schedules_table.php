<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId(column:'user_id')->constrained()->comment('ユーザーID');
            $table->string(column:'title')->comment(comment:'タイトル');
            $table->string(column:'description')->nullable()->comment(comment:'概要');
            $table->date(column:'start_date')->comment(comment:'開始日');
            $table->date(column:'end_date')->comment(comment:'終了日');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
