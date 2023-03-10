<?php

namespace Database\Seeders;

use App\Models\SupplierCertificate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplierCertificateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SupplierCertificate::factory()->count(rand(10, 300))->create();
    }
}
