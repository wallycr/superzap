<?php
 
class StoreTableSeeder extends Seeder {
 
    public function run()
    { 

        DB::table('stores')->delete();
 
        Store::create(array(
            'name' => 'Tienda Numero Uno',
            'address' => 'Calle Botella, esquina Tapon, ultimo piso, sin escalon'
        ));
 
        Store::create(array(
            'name' => 'Tienda Numero Dos',
            'address' => 'Direccion de la Tienda Dos'
        ));


    }
 
}