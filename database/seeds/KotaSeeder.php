<?php

use Illuminate\Database\Seeder;
use \App\models\Kota;

class KotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kota::truncate();

        $dataJakarta = File::get("database/data/jakarta.json");
        $dataJawaBarat = File::get("database/data/jawabarat.json");
        
        $item = json_decode($dataJakarta);
        $item2 = json_decode($dataJawaBarat);

        foreach($item as $key => $value){
            Kota::create([
                'nama_kota'=>$value->nama
            ]);
        }

        foreach($item2 as $key => $value){
            Kota::create([
                'nama_kota'=>$value->nama
            ]);
        }
    }
}
