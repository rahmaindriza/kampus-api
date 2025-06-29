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
    Schema::create('kampus', function (Blueprint $table) {
        $table->id();
        $table->string('nama_kampus');
        $table->text('alamat_lengkap');
        $table->string('no_telpon');
        $table->enum('kategori', ['Swasta', 'Negeri']);
        $table->double('latitude');
        $table->double('longitude');
        $table->string('jurusan');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kampus');
    }
};
