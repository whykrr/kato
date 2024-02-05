<?php

namespace Database\Seeders;

use App\Models\Variation;
use App\Models\VariationOption;
use DB;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class VariationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                "name" => "Collection",
                "is_multiple" => false,
                "is_deletable" => false,
                "flag" => true,
                "options" => [
                    [
                        "name" => "Test Collection 1",
                        "flag" => true,
                    ],
                    [
                        "name" => "Test Collection 2",
                        "flag" => true,
                    ]
                ],
            ],
            [
                "name" => "Color",
                "is_multiple" => false,
                "is_deletable" => false,
                "flag" => true,
                "options" => [
                    [
                        "name" => "White",
                        "flag" => true,
                    ],
                    [
                        "name" => "Black",
                        "flag" => true,
                    ],
                    [
                        "name" => "Green",
                        "flag" => true,
                    ]
                ],
            ],
            [
                "name" => "Size",
                "is_multiple" => true,
                "is_deletable" => false,
                "flag" => true,
                "options" => [
                    [
                        "name" => "XS",
                        "flag" => true,
                    ],
                    [
                        "name" => "S",
                        "flag" => true,
                    ],
                    [
                        "name" => "M",
                        "flag" => true,
                    ],
                    [
                        "name" => "L",
                        "flag" => true,
                    ],
                    [
                        "name" => "XL",
                        "flag" => true,
                    ]
                ],
            ],
        ];

        foreach ($data as $key => $value) {
            $variation = new Variation();

            $variation->name = $value['name'];
            $variation->is_multiple = $value['is_multiple'];
            $variation->is_deletable = $value['is_deletable'];
            $variation->flag = $value['flag'];
            $variation->save();

            $options = [];
            foreach ($value['options'] as $option) {
                array_push($options, new VariationOption($option));
            }

            $variation->options()->saveMany($options);
        }
    }
}
