<?php

namespace Database\Seeders;

use App\Services\ComponentToJsonService;
use Modules\Form\Entities\Form;
use Modules\Office\Entities\Office;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

class OfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Office::truncate();
        Form::truncate();

        $allFiles = (new ComponentToJsonService())
            ->getAllJsonFileNames();
        $officeForms = [];
        foreach ($allFiles as $files) {
            $breadkDown = explode('.-.', $files);
            $office = $breadkDown[0];
            $form = ltrim($breadkDown[1]);
            $officeForms[$office][$form] = $files;
        }

        foreach ($officeForms as $office => $forms) {
            $officeModel = Office::create([
                'name' => $office,
            ]);


            foreach ($forms as $name => $file) {
                $json = file_get_contents(public_path() . '/forms/' . $file . '.json');
                Form::create([
                    'office_id' => $officeModel->id,
                    'name' => ucwords(strtolower($name)),
                    'file' => $file . '.json',
                    'json' => $json
                ]);
            }
        }

        // list of unavailable offices
        $unavOffices = [
            [
                'id' => 16,
                'name' => 'City Treasurer Office',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 17,
                'name' => 'Business Permit and Licensing Office',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ];
        // list of unavailable forms
        $unavForms = [
            [
                'office_id' => 16,
                'name' => 'Real Property Tax Payment',
                'file' => '[]',
                'json' => '[]',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'office_id' => 16,
                'name' => 'RPT Clearance Payment',
                'file' => '[]',
                'json' => '[]',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'office_id' => 17,
                'name' => 'Business Permit Renewal',
                'file' => '[]',
                'json' => '[]',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'office_id' => 17,
                'name' => 'New Business Registration',
                'file' => '[]',
                'json' => '[]',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'office_id' => 17,
                'name' => 'Pay Business License',
                'file' => '[]',
                'json' => '[]',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ];

        foreach ($unavOffices as $key => $value) {
            Office::create($value);
        }

        foreach ($unavForms as $key => $value) {
            Form::create($value);
        }

        Schema::enableForeignKeyConstraints();
    }
}
