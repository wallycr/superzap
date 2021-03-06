<?php
 
class ArticleTableSeeder extends Seeder {
 
    public function run()
    {

        DB::table('articles')->delete();
 
        Article::create(array(
            'name' => 'Articulo 1 Tienda 1',
            'description' => 'Descripcion 1',
            'price' => 1000,
            'total_in_shelf' => 10,
            'total_in_vault' => 20,
            'store_id' => 1
        ));
 
        Article::create(array(
            'name' => 'Articulo 2 Tienda 1',
            'description' => 'Descripcion 2',
            'price' => 3000,
            'total_in_shelf' => 1,
            'total_in_vault' => 20,
            'store_id' => 1
        ));

        Article::create(array(
            'name' => 'Articulo 3 Tienda 1',
            'description' => 'Descripcion 1',
            'price' => 2000,
            'total_in_shelf' => 4,
            'total_in_vault' => 4,
            'store_id' => 1
        ));

        Article::create(array(
            'name' => 'Articulo 1 Tienda 2',
            'description' => 'Descripcion 1',
            'price' => 1000,
            'total_in_shelf' => 10,
            'total_in_vault' => 20,
            'store_id' => 2
        ));

        Article::create(array(
            'name' => 'Articulo 2 Tienda 2',
            'description' => 'Descripcion 2',
            'price' => 5000,
            'total_in_shelf' => 10,
            'total_in_vault' => 20,
            'store_id' => 2
        ));

        Article::create(array(
            'name' => 'Otro articulo',
            'description' => 'Descripcion',
            'price' => 1000,
            'total_in_shelf' => 10,
            'total_in_vault' => 20,
            'store_id' => 2
        ));

        Article::create(array(
            'name' => 'Articulo',
            'description' => 'Descripcionble',
            'price' => 1000,
            'total_in_shelf' => 10,
            'total_in_vault' => 20,
            'store_id' => 2
        ));

    }
 
}