<?php

namespace Database\Seeders;

use Modules\Barangay\Entities\Barangay;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

class BarangaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Barangay::truncate();

        //$fileContent = file_get_contents(public_path() . '/barangays/sample.json');
        $fileContent = file_get_contents(public_path() . '/barangays/philippine_provinces_cities_municipalities_and_barangays_2019v2.json');
        $json = json_decode($fileContent, true);

        foreach ($json as $address) {
            $region_name = $address['region_name'];
            foreach ($address['province_list'] as $key => $province) {
                $province_name = $key;
                foreach ($province['municipality_list'] as $key => $municipality) {
                    $municipality_name = $key;
                    if (@env('CITY_MUNICIPALITY')) {
                        if(strpos($municipality_name, env('CITY_MUNICIPALITY'))!== false) {
                            foreach ($municipality['barangay_list'] as $barangay) {
                                $barangay_name = $barangay;
                                $data = [
                                    'region_name' => $region_name,
                                    'province_name' => $province_name,
                                    'municipality_name' => $municipality_name,
                                    'barangay_name' => $barangay_name,
                                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                ];
                                Barangay::create($data);
                            }
                        }
                    } else {
                        foreach ($municipality['barangay_list'] as $barangay) {
                            $barangay_name = $barangay;
                            $data = [
                                'region_name' => $region_name,
                                'province_name' => $province_name,
                                'municipality_name' => $municipality_name,
                                'barangay_name' => $barangay_name,
                                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                            ];
                            Barangay::create($data);
                        }
                    }
                }
            }
        }

        Schema::enableForeignKeyConstraints();
    }
}
