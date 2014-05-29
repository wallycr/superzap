<?php
 
class SuperstoreTableSeeder extends Seeder {
 
    public function run()
    { 

        DB::table('stores')->delete();
 
        Superstore::create(array(
            'name' => 'Tienda Numero Uno',
            'address' => 'Calle Botella, esquina Tapon, ultimo piso, sin escalon'
        ));
 
        Superstore::create(array(
            'name' => 'Tienda Numero Dos',
            'address' => 'Direccion de la Tienda Dos'
        ));


    }
 
}