<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('productos')->insert([
            // Electrónica (categoria_id = 1)
            [
                'categoria_id' => 1,
                'nombre' => 'Smartphone',
                'stock' => rand(30, 100),
                'precio' => 699.99,
                'descripcion' => 'Teléfono inteligente de última generación.',
                'imagen_url' => 'https://images.unsplash.com/photo-1511707171634-5f897ff02aa9'
            ],

            [
                'categoria_id' => 1,
                'nombre' => 'Auriculares',
                'stock' => rand(50, 150),
                'precio' => 89.99,
                'descripcion' => 'Auriculares inalámbricos con cancelación de ruido.',
                'imagen_url' => 'https://oechsle.vteximg.com.br/arquivos/ids/17515778/imageUrl_1.jpg?v=638506168697700000'
            ],

            [
                'categoria_id' => 1,
                'nombre' => 'Laptop',
                'stock' => rand(20, 60),
                'precio' => 1200.00,
                'descripcion' => 'Portátil potente para trabajo y entretenimiento.',
                'imagen_url' => 'https://images.unsplash.com/photo-1517336714731-489689fd1ca8'
            ],

            [
                'categoria_id' => 1,
                'nombre' => 'Smartwatch',
                'stock' => rand(40, 90),
                'precio' => 250.00,
                'descripcion' => 'Reloj inteligente con múltiples funciones.',
                'imagen_url' => 'https://hiraoka.com.pe/media/mageplaza/blog/post/m/e/mejores_smartwatch_samsung_que_puedes_comprar.jpg'
            ],

            [
                'categoria_id' => 1,
                'nombre' => 'Cámara digital',
                'stock' => rand(15, 50),
                'precio' => 450.00,
                'descripcion' => 'Cámara de alta resolución para fotógrafos.',
                'imagen_url' => 'https://media.falabella.com/falabellaPE/125162463_01/w=1500,h=1500,fit=pad'
            ],

            // Ropa (categoria_id = 2)
            [
                'categoria_id' => 2,
                'nombre' => 'Camisa',
                'stock' => rand(50, 120),
                'precio' => 35.00,
                'descripcion' => 'Camisa de algodón cómoda y elegante.',
                'imagen_url' => 'https://media.falabella.com/falabellaPE/137374082_01/w=1500,h=1500,fit=pad'
            ],

            [
                'categoria_id' => 2,
                'nombre' => 'Pantalones',
                'stock' => rand(40, 100),
                'precio' => 45.00,
                'descripcion' => 'Pantalones modernos para cualquier ocasión.',
                'imagen_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSWw46JaKVE5ajEOsxJ--Cjerh_U2xAtrTDCw&s3'
            ],

            [
                'categoria_id' => 2,
                'nombre' => 'Chaqueta',
                'stock' => rand(20, 60),
                'precio' => 80.00,
                'descripcion' => 'Chaqueta abrigada para el invierno.',
                'imagen_url' => 'https://img.kwcdn.com/product/fancy/eefd687c-ead5-476b-9599-68f2163b9d4c.jpg?imageMogr2/auto-orient%7CimageView2/2/w/800/q/70/format/webp'
            ],

            [
                'categoria_id' => 2,
                'nombre' => 'Calcetines',
                'stock' => rand(100, 200),
                'precio' => 8.50,
                'descripcion' => 'Calcetines suaves y resistentes.',
                'imagen_url' => 'https://saguarobarefoot.pe/cdn/shop/files/0a81fd_e46b0bf16fd74aac86b28c798c9d652f_mv2.jpg?v=1718318119'
            ],

            [
                'categoria_id' => 2,
                'nombre' => 'Zapatos',
                'stock' => rand(30, 80),
                'precio' => 120.00,
                'descripcion' => 'Zapatos de cuero de alta calidad.',
                'imagen_url' => 'https://media.revistagq.com/photos/5fd1fdf7dfba54732a24bc13/4:3/w_1332,h_999,c_limit/zapatos%20de%20vestir.jpg'
            ],

            // Alimentos (categoria_id = 3)
            [
                'categoria_id' => 3,
                'nombre' => 'Pan',
                'stock' => rand(150, 300),
                'precio' => 1.50,
                'descripcion' => 'Pan fresco artesanal.',
                'imagen_url' => 'https://www.revistapancaliente.co/wp-content/uploads/2022/03/Tipos-de-pan-scaled.webp'
            ],

            [
                'categoria_id' => 3,
                'nombre' => 'Leche',
                'stock' => rand(80, 200),
                'precio' => 0.99,
                'descripcion' => 'Leche entera de granja.',
                'imagen_url' => 'https://colmevet.cl/storage/noticias/April2021/leche2.jpg'
            ],

            [
                'categoria_id' => 3,
                'nombre' => 'Queso',
                'stock' => rand(40, 100),
                'precio' => 3.20,
                'descripcion' => 'Queso curado artesanal.',
                'imagen_url' => 'https://donguando.com/wp-content/uploads/2023/11/queso-fresco.png'
            ],

            [
                'categoria_id' => 3,
                'nombre' => 'Manzana',
                'stock' => rand(120, 250),
                'precio' => 0.70,
                'descripcion' => 'Manzanas rojas y jugosas.',
                'imagen_url' => 'https://images.unsplash.com/photo-1567306226416-28f0efdc88ce'
            ],

            [
                'categoria_id' => 3,
                'nombre' => 'Arroz',
                'stock' => rand(100, 220),
                'precio' => 2.00,
                'descripcion' => 'Arroz blanco de grano largo.',
                'imagen_url' => 'https://www.gastronomiavasca.net/uploads/image/file/3900/arroz_basmati.jpg'
            ],

            // Hogar (categoria_id = 4)
            [
                'categoria_id' => 4,
                'nombre' => 'Lámpara',
                'stock' => rand(30, 90),
                'precio' => 45.00,
                'descripcion' => 'Lámpara moderna de escritorio.',
                'imagen_url' => 'https://media.falabella.com/falabellaPE/116924035_01/w=1500,h=1500,fit=pad'
            ],

            [
                'categoria_id' => 4,
                'nombre' => 'Silla',
                'stock' => rand(20, 60),
                'precio' => 75.00,
                'descripcion' => 'Silla ergonómica para oficina.',
                'imagen_url' => 'https://sierramuebles.pe/wp-content/uploads/2022/10/MESA-NATURE-SILLAS-EDU-600x600.webp'
            ],

            [
                'categoria_id' => 4,
                'nombre' => 'Mesa',
                'stock' => rand(15, 40),
                'precio' => 150.00,
                'descripcion' => 'Mesa de madera para comedor.',
                'imagen_url' => 'https://www.pravi.pe/cdn/shop/products/Mesadetrabajo1copia48-100_bfee3de8-1991-45f3-9d03-965a106169d9_720x.jpg?v=1651276867'
            ],

            [
                'categoria_id' => 4,
                'nombre' => 'Cortina',
                'stock' => rand(40, 80),
                'precio' => 35.00,
                'descripcion' => 'Cortinas oscuras de tela suave.',
                'imagen_url' => 'https://oechsle.vteximg.com.br/arquivos/ids/6168336-1000-1000/image-0e20d3723c5c4c1ea9713388bf319a16.jpg?v=637740750857400000'
            ],

            [
                'categoria_id' => 4,
                'nombre' => 'Alfombra',
                'stock' => rand(10, 30),
                'precio' => 100.00,
                'descripcion' => 'Alfombra tejida decorativa.',
                'imagen_url' => 'https://www.enkasa.pe/cdn/shop/products/WhatsAppImage2023-02-10at20.41.51.jpg?v=1676079727'
            ],

            // Deportes (categoria_id = 5)
            [
                'categoria_id' => 5,
                'nombre' => 'Pelota de fútbol',
                'stock' => rand(50, 120),
                'precio' => 25.00,
                'descripcion' => 'Pelota profesional para fútbol.',
                'imagen_url' => 'https://espinilleraspersonalizadas.es/wp-content/uploads/2017/06/evoluci%C3%B3nbalonesf%C3%BAtbol.jpg'
            ],

            [
                'categoria_id' => 5,
                'nombre' => 'Raqueta de tenis',
                'stock' => rand(30, 70),
                'precio' => 80.00,
                'descripcion' => 'Raqueta ligera para principiantes.',
                'imagen_url' => 'https://cdn0.uncomo.com/es/posts/6/9/5/tipos_de_deportes_con_raqueta_52596_orig.jpg'
            ],
        ]);
    }
}
