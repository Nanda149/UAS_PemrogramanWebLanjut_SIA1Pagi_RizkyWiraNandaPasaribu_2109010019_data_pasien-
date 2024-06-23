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
        Schema::create('pasien', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('alamat')->nullable();
            $table->string('nomor_telepon')->nullable();
            $table->string('umur')->nullable();
            $table->timestamps();
        });
        DB::table('pasien')->insert([
            [
                'nama' => 'Randi Ananda',
                'alamat' => 'jl. Gaharu',
                'nomor_telepon' => '087903842861',
                'umur' => '21',
            ],
            [
                'nama' => 'Andre',
                'alamat' => 'Jl. Merdeka No. 10',
                'nomor_telepon' => '081274320853',
                'umur' => '23',
            ],
            [
                'nama' => 'Nurki Effendy',
                'alamat' => 'Jl. Gaharu No. 15',
                'nomor_telepon' => '08567891234',
                'umur' => '70',
            ],
            [
                'nama' => 'Adam Dwi Cahya Barus',
                'alamat' => 'Jl. Batu Bata',
                'nomor_telepon' => '0876243819342',
                'umur' => '20',
            ],
            [
                'nama' => 'Wulandari',
                'alamat' => 'Jl. Pagar Merbau',
                'nomor_telepon' => '084381294632',
                'umur' => '22',
            ],
            [
                'nama' => 'Sianipar Sianturi',
                'alamat' => 'Jl. Garu 1',
                'nomor_telepon' => '0864728927642',
                'umur' => '74',
            ],
            [
                'nama' => 'Edianto',
                'alamat' => 'Jl. Marelan',
                'nomor_telepon' => '081892375294',
                'umur' => '53',
            ],
            [
                'nama' => 'Firman',
                'alamat' => 'Jl. Jendral Sudirman',
                'nomor_telepon' => '089538193429',
                'umur' => '19',
            ],
            [
                'nama' => 'Udin',
                'alamat' => 'Jl. Perjuangan No. 12',
                'nomor_telepon' => '080325374901',
                'umur' => '62',
            ],
            [
                'nama' => 'Zamzami Hidayah',
                'alamat' => 'Jl. Tempuling',
                'nomor_telepon' => '082903278932',
                'umur' => '21',
            ],
            [
                'nama' => 'Ali Hamzah',
                'alamat' => 'Jl. Yos Sudarso',
                'nomor_telepon' => '0893645294323',
                'umur' => '20',
            ],
            [
                'nama' => 'Lumi Manulang',
                'alamat' => 'Jl. Marendal',
                'nomor_telepon' => '083199463821',
                'umur' => '47',
            ],
            [
                'nama' => 'Angga Firmansyah',
                'alamat' => 'Jl. Pertahanan',
                'nomor_telepon' => '083894562932',
                'umur' => '25',
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasien');
    }
};
