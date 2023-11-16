<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Producto;
use App\Models\Transaccion;
use App\Models\User;
use App\Models\Venta;
use App\Models\Cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create(array(
            "nombre"=> "Joel",
            "apellido"=> "Gonzales",
            "username"=> "admin",
            "rol"=>'Administrador',
            "password"=> Hash::make("admin123456"),
            "imagen"=> "123456.jpg",
            "email"=> "admin.app@gmail.com"
        ));
        Categoria::create(array('tipo'=>'Polera'));
        Categoria::create(array('tipo'=>'Pantalon'));
        Categoria::create(array('tipo'=>'Abrigo'));
        Producto::create(array(
            'categoria_id'=>'1',
            'descripcion'=>'Manga 3/4',
            'imagen'=>'',
            'cantidad_minima'=>'5',
            'stock'=>'20',
            'precio_compra'=>'25',
            'precio_venta'=>'30'
        ));
        Producto::create(array(
            'categoria_id'=>'1',
            'descripcion'=>'Manga Cero',
            'imagen'=>'',
            'cantidad_minima'=>'5',
            'stock'=>'20',
            'precio_compra'=>'20',
            'precio_venta'=>'25'
        ));
        Producto::create(array(
            'categoria_id'=>'1',
            'descripcion'=>'Manga Entera',
            'imagen'=>'',
            'cantidad_minima'=>'5',
            'stock'=>'20',
            'precio_compra'=>'30',
            'precio_venta'=>'35'
        ));
        Producto::create(array(
            'categoria_id'=>'2',
            'descripcion'=>'Jean ',
            'imagen'=>'',
            'cantidad_minima'=>'10',
            'stock'=>'20',
            'precio_compra'=>'150',
            'precio_venta'=>'180'
        ));
        Producto::create(array(
            'categoria_id'=>'2',
            'descripcion'=>'Licrado',
            'imagen'=>'',
            'cantidad_minima'=>'10',
            'stock'=>'20',
            'precio_compra'=>'110',
            'precio_venta'=>'130'
        ));
        User::factory(20)->create();
        Categoria::factory(20)->create();
        Producto::factory(50)->create();
        Cliente::factory(20)->create();
        Venta::factory(50)->create();
        Transaccion::factory(20)->create();
        
    }
}
