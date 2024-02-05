<?php

// database/seeders/datosJuegosSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class datosJuegos extends Seeder
{
    public function run()
    {
        DB::table('juegos')->insert([
            'nombre' => 'Welcome to perfecto hogar',
            'descripcion' => '¡Todos los Welcome… en una sola caja!
        Una oportunidad única para redescubrir el juego esencial de flip & write de Benoit Turpin, con todas sus expansiones, en una edición revisada, ampliada y mejorada.
        Nuestra ciudad se ha vuelto muy atractiva y está experimentando un gran crecimiento demográfico. El ayuntamiento ha puesto nuevos terrenos a disposición del público para el desarrollo de nuevas zonas residenciales, que deben contar con todas las comodidades modernas a las que todos los estadounidenses aspiran en 1953.
        Para que este ambicioso proyecto se haga realidad y elegir a la persona que se encargará de él, el ayuntamiento ha decidido organizar un concurso público entre todos los arquitectos. Para ello, deberán construir casas unifamiliares a lo largo de tres calles. Y, al hacerlo, tendrán que cumplir las normas de desarrollo urbanístico de nuestra ciudad.',
            'precio' => '36.00',
            'categoria' => 'Familiar',
        ]);

        DB::table('juegos')->insert([
            'nombre' => 'Pocimas y Brebajes',
            'descripcion' => 'En la villa de Quedlinburg no faltan los charlatanes dispuestos a vender Pócimas y Brebajes a todos los transeúntes. ¿Serás tú el que consiga hacerse con la mayor fortuna al final de la partida?
            Mediante la mecánica de construcción de bolsa (bagbuilding) en Pócimas y Brebajes tendremos que recoger los mejores ingredientes para llenar nuestro caldero, eso sí, procurando no echar a perder el líquido con mezclas inapropiadas. ¡Disfruta del nuevo éxito de Wolfgang Warch, Pócimas y Brebajes, ganador del Premio al Mejor Juego Estratégio del Año del 2018 (Kennerspiel des Jahres)!',
            'precio' => '41.15',
            'categoria' => 'Familiar',
        ]);

        DB::table('juegos')->insert([
            'nombre' => 'Castillos de Borgoña',
            'descripcion' => 'Los Castillos de Borgoña se encuentran en la región de Borgoña de la Alta Francia medieval. Cada jugador asume el papel de un aristócrata, controlando originalmente un pequeño principado. Mientras juegan, su objetivo es construir asentamientos y poderosos castillos, practicar el comercio a lo largo del río, explotar minas de plata y usar el conocimiento de los viajeros.',
            'precio' => '43.70',
            'categoria' => 'Familiar',
        ]);

        DB::table('juegos')->insert([
            'nombre' => 'Carpe Diem',
            'descripcion' => 'Roma, año 1 a. C.
            Como influyentes patricios, os disponéis a mejorar los distritos de vuestra ciudad. Cultiva fértiles jardines de hierbas y vegetales. Construye estanques llenos de peces. Edifica lujosas fincas y otras viviendas para tus sirvientes. Debes aprovechar el día y los recursos de la ciudad para reconstruirla.',
            'precio' => '39.35',
            'categoria' => 'Familiar',
        ]);

        DB::table('juegos')->insert([
            'nombre' => 'Aventureros al Tren Europa',
            'descripcion' => 'Roma, año 1 a. C.
            Como influyentes patricios, os disponéis a mejorar los distritos de vuestra ciudad. Cultiva fértiles jardines de hierbas y vegetales. Construye estanques llenos de peces. Edifica lujosas fincas y otras viviendas para tus sirvientes. Debes aprovechar el día y los recursos de la ciudad para reconstruirla.',
            'precio' => '42.20',
            'categoria' => 'Familiar',
        ]);
    }
}
