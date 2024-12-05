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
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_role');
            $table->foreign('id_role')->references('id_role')->on('role')->onDelete('cascade');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('email_pengguna')->unique();
            $table->string('nama_pengguna');
            $table->timestamps();
            $table->timestamp('deleted_at')->useCurrent()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
