<?php

namespace Database\Seeders;

use App\Models\Juego;
use Illuminate\Database\Seeder;

class JuegosSeeder extends Seeder
{
    public function run()
    {
        // Crear los Juegos para la BBDD
        $juegos = [
            [
                'nombre' => 'Welcome to perfecto hogar',
                'descripcion' => '¡Todos los Welcome… en una sola caja!
                 Una oportunidad única para redescubrir el juego esencial de flip & write de Benoit Turpin, con todas sus expansiones, en una edición revisada, ampliada y mejorada.
                 Nuestra ciudad se ha vuelto muy atractiva y está experimentando un gran crecimiento demográfico. El ayuntamiento ha puesto nuevos terrenos a disposición del público para el desarrollo de nuevas zonas residenciales, que deben contar con todas las comodidades modernas a las que todos los estadounidenses aspiran en 1953.
                 Para que este ambicioso proyecto se haga realidad y elegir a la persona que se encargará de él, el ayuntamiento ha decidido organizar un concurso público entre todos los arquitectos. Para ello, deberán construir casas unifamiliares a lo largo de tres calles. Y, al hacerlo, tendrán que cumplir las normas de desarrollo urbanístico de nuestra ciudad.',
                'precio' => 36.00,
                'categoria' => 'Familiar',
                'stock' => 10,
                'imagen_ruta' => 'welcome-coleccionista.jpg',

            ],
            [
                'nombre' => 'Pocimas y Brebajes',
                'descripcion' => 'Una vez al año los mejores milagreros y matasanos del territorio se reúnen en Timburgo para preparar sus brebajes para el olor de pies,
                la morriña, el hipo y el mal de amores. Sin embargo, cada curandero tiene su propio preparado especial. Cada jugador extrae ingredientes de su propio
                revoltijo de elementos variados, combinándolos durante la partida hasta que considera que su compuesto especial está a punto. Pero hay que tener cuidado
                ¡cualquier exceso en la cantidad de tales ingredientes especiales podría hacer estallar la pócima! Por tanto, saber parar a tiempo, aunque suponga
                conformarse con menores beneficios para empezar, con vistas a mayores rendimientos futuros e ingredientes más valiosos, podría ser la clave. Así que
                reserva tus ingredientes más valiosos hasta que puedas preparar una pócima tan potente que deje a esa pandilla de embusteros y cuenta-botones a la altura
                del betún.',
                'precio' => 41.15,
                'categoria' => 'Familiar',
                'stock' => 0,
                'imagen_ruta' => 'pocimas-y-brebajes.jpg',
            ],
        ];

        foreach ($juegos as $juego) {
            Juego::updateOrCreate(
                ['nombre' => $juego['nombre']],
                $juego
            )->save();
        }
    }
}
