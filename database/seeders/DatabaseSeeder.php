<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\NewExpander;
use App\Models\NewExpanderCross;
use App\Models\Pajero;
use App\Models\Produk;
use App\Models\Mobil;
use App\Models\Transmisi;
use App\Models\Transmission;
use App\Models\Varian;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Bagus Setiawan',
            'email' => 'bagus@gmail.com',
            'password' => bcrypt('bagus123')
        ]);

        Transmission::create([
            'transmisi' => 'Manual Transmission'
        ]);
        Transmission::create([
            'transmisi' => 'Automatic Transmission'
        ]);
        Transmission::create([
            'transmisi' => 'CVT Transmission'
        ]);

        Varian::create([
            'name' => 'Xpander'
        ]);
        Varian::create([
            'name' => 'New Xpander'
        ]);
        Varian::create([
            'name' => 'Xpander Cross'
        ]);
        Varian::create([
            'name' => 'New Xpander Cross'
        ]);

        Mobil::create([
            'name' => 'New Xpander'
        ]);
        Mobil::create([
            'name' => 'New Xpander Cross'
        ]);
        Mobil::create([
            'name' => 'New Pajero Sport'
        ]);
        Mobil::create([
            'name' => 'New Triton'
        ]);
        Mobil::create([
            'name' => 'Outlander Phev'
        ]);
        Mobil::create([
            'name' => 'L 300'
        ]);
        

        Produk::create([
            'mobil_id' => 1,
            'tipe'=> 'GLS',
            'transmisi_id' => 1,
            'harga' => '256400000'
        ]);
        Produk::create([
            'mobil_id' => 1,
            'tipe'=> 'GLS',
            'transmisi_id' => 3,
            'harga' => '265780000'
        ]);
        Produk::create([
            'mobil_id' => 2,
            'tipe'=> 'Xpander Cross MT',
            'transmisi_id' => 1,
            'harga' => '303950000'
        ]);
        Produk::create([
            'mobil_id' => 2,
            'tipe'=> 'Xpander Cross CVT',
            'transmisi_id' => 3,
            'harga' => '318600000'
        ]);
        Produk::create([
            'mobil_id' => 3,
            'tipe'=> 'GLX 4X4',
            'transmisi_id' => 1,
            'harga' => '318600000'
        ]);
        Produk::create([
            'mobil_id' => 3,
            'tipe'=> 'Exceed 4X2',
            'transmisi_id' => 1,
            'harga' => '318600000'
        ]);
        Produk::create([
            'mobil_id' => 3,
            'tipe'=> 'Exceed 4X2',
            'transmisi_id' => 2,
            'harga' => '318600000'
        ]);
        Produk::create([
            'mobil_id' => 4,
            'tipe'=> 'SC GLX 4X2',
            'transmisi_id' => 1,
            'harga' => '318600000'
        ]);
        Produk::create([
            'mobil_id' => 4,
            'tipe'=> 'DC Ultimate 4X4',
            'transmisi_id' => 2,
            'harga' => '318600000'
        ]);
        Produk::create([
            'mobil_id' => 6,
            'tipe'=> ' PU FB-R(4X2) ',
            'transmisi_id' => 1,
            'harga' => '318600000'
        ]);
        Produk::create([
            'mobil_id' => 6,
            'tipe'=> 'CHASSIS',
            'transmisi_id' => 1,
            'harga' => '230650000'
        ]);

        Transmisi::create([
            'transmisi' => 'Manual'
        ]);
        Transmisi::create([
            'transmisi' => 'Automatic'
        ]);
        Transmisi::create([
            'transmisi' => 'CVT'
        ]);
        
        // NewExpander::create([
        //     'tipe' => 'GLS MT',
        //     'Transmisi' => 'Manual',
        //     'harga' => '256.780.000'
        // ]);
        // NewExpander::create([
        //     'tipe' => 'Exceed MT',
        //     'Transmisi' => 'Manual',
        //     'harga' => '270.250.000'
        // ]);
        // NewExpander::create([
        //     'tipe' => 'Sport MT',
        //     'Transmisi' => 'Manual',
        //     'harga' => '290.300.000'
        // ]);
        // NewExpander::create([
        //     'tipe' => 'GLS CVT',
        //     'Transmisi' => 'CVT',
        //     'harga' => '265.780.000'
        // ]);
        // NewExpander::create([
        //     'tipe' => 'Exceed CVT',
        //     'Transmisi' => 'CVT',
        //     'harga' => '278.900.000'
        // ]);
        // NewExpander::create([
        //     'tipe' => 'Sport CVT',
        //     'Transmisi' => 'CVT',
        //     'harga' => '304.180.000'
        // ]);
        // NewExpander::create([
        //     'tipe' => 'Ultimate CVT',
        //     'Transmisi' => 'CVT',
        //     'harga' => '306.580.000'
        // ]);

        // Pajero::create([
        //     'tipe' => 'GLX 4X4 MT',
        //     'Transmisi' => 'Manual',
        //     'harga' => '220.000.000'
        // ]);
        // Pajero::create([
        //     'tipe' => 'EXCEED 4X2 MT',
        //     'Transmisi' => 'Manual',
        //     'harga' => '220.000.000'
        // ]);
        // Pajero::create([
        //     'tipe' => 'EXCEED 4X2 AT',
        //     'Transmisi' => 'Automatic',
        //     'harga' => '220.000.000'
        // ]);
        // Pajero::create([
        //     'tipe' => 'DAKAR 4X2 AT',
        //     'Transmisi' => 'Automatic',
        //     'harga' => '220.000.000'
        // ]);
        // Pajero::create([
        //     'tipe' => 'DAKAR ULTIMATE 4X2 AT',
        //     'Transmisi' => 'Automatic',
        //     'harga' => '220.000.000'
        // ]);
        // Pajero::create([
        //     'tipe' => 'DAKAR ULTIMATE 4X4 AT',
        //     'Transmisi' => 'Automatic',
        //     'harga' => '220.000.000'
        // ]);

        // NewExpanderCross::create([
        //     'tipe' => 'New Xpander Cross MT',
        //     'Transmisi' => 'Manual',
        //     'harga' => '300.950.000'
        // ]);
        // NewExpanderCross::create([
        //     'tipe' => 'New Xpander Cross CVT',
        //     'Transmisi' => 'CVT',
        //     'harga' => '315.600.000'
        // ]);
        // NewExpanderCross::create([
        //     'tipe' => 'New Xpander Cross CVT Premium Packages',
        //     'Transmisi' => 'CVT',
        //     'harga' => '327.680.000'
        // ]);
    }
}
