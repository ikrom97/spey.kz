<?php

namespace Database\Seeders;

use App\Models\Phone;
use App\Models\Site;
use Illuminate\Database\Seeder;

class PhonesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sites = Site::get();

        foreach ($sites as $site) {
            $phone = new Phone;
            $phone->site_id = $site->id;
            $phone->numbers = '+7 (495) 781-37-42';
            $phone->save();
        }
        foreach ($sites as $site) {
            $phone = new Phone;
            $phone->site_id = $site->id;
            $phone->numbers = '+7 (495) 781-37-43';
            $phone->save();
        }
    }
}
