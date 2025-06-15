<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pesanan;  // Pastikan model Pesanan di-import
use Carbon\Carbon;  // Impor Carbon untuk mendapatkan waktu saat ini

class PesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Pesanan::create([
            'nama' => 'aridwi',
            'email' => 'aridwi@mail.com',  // Tambahkan koma setelah email
            'no_telepon' => '08123456789',
            'status' => 'pending',
            'layanan' => 'website',
            'order_date' => Carbon::now(),  // Gunakan Carbon untuk timestamp
        ]);

        Pesanan::create([
            'nama' => 'arif',
            'email' => 'arif@mail.com',
            'no_telepon' => '08123456780',
            'status' => 'proses',
            'layanan' => 'aplikasi',
            'order_date' => Carbon::now(),  // Gunakan Carbon untuk timestamp
        ]);
    }
}
