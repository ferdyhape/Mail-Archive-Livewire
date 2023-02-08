<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Mail;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 100; $i++) {
            Mail::create([
                'mail_number' => 'A/B/' . $i,
                'name' => 'Surat Coba-' . $i,
                'category_id' => rand(1, 5),
                'activity_id' => rand(1, 11),
                'archive_time' => Carbon::now(),
                'file' => 'null',
            ]);
        }
    }
}
