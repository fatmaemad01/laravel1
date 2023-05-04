<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * انشاء الجدول
     * اسم الجدول والحقول يلي ب الجدول
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->INTEGER('number');
            $table->string('name')->nullable();
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            // نوع من انواع البيانات
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
           // دالة تعمل حقلين واحد CREAT UPDATE
        });
    }

    /**
     * Reverse the migrations.
     * حذف جدول
     * SCHEMA هيكلية الجداول3
     *DROB حذف الجدول
     * DELET حذف بيانات
     *  DBA=> شهادة للداتابيز
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
