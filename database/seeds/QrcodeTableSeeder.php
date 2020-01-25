<?php

use Illuminate\Database\Seeder;

class QrcodeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Qrcode::class, 5)->create();
    }
}
