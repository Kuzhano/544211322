<?php
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
class ProdukTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('produk')->insert(array(
            ['nama_produk'=>'Sabun Lifebuoy','harga_jual'=>'2000'],
            ['nama_produk'=>'Shampoo Sunsilk','harga_jual'=>'4000'],
            ['nama_produk'=>'Sabun cap tangan','harga_jual'=>'10000']
        ));
    }
}
