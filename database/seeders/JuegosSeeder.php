<?php

namespace Database\Seeders;

use App\Models\Juego;
use Illuminate\Database\Seeder;

class JuegosSeeder extends Seeder
{
    public function run()
    {
        // Crear los Juegos para la BBDD
        // php artisan db:seed --class=JuegosSeeder
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
            [
                'nombre' => 'Castillos de borgoña - 20º Aniversario',
                'descripcion' => 'Para celebrar el 20 aniversario de uno de los juegos de mesa más exitosos, la editorial Alea nos presenta una edición remodelada propia de tan señalada fecha. Esta nueva edición incluye nuevos componentes: losetas más gruesas, todas las expansiones (incluyendo las que permiten un modo de juego en solitario y otro por equipos), y nuevas ilustraciones de losetas y tablero, éste de doble cara para elegir según el número de jugadores.',
                'precio' => 45.95,
                'categoria' => 'Euro',
                'stock' => 5,
                'imagen_ruta' => 'castillos-de-borgoña.jpg',
            ],
            [
                'nombre' => 'Root',
                'descripcion' => 'Root es un juego de mesa asimétrico previsto para 2 a 4 participantes, en el que cada uno escogerá su facción y tratará de conquistar el bosque de Root.
                Cada facción se juega de una manera diferente, tiene diferentes componentes y en turnos y estrategia única.',
                'precio' => 53.95,
                'categoria' => 'Euro',
                'stock' => 0,
                'imagen_ruta' => 'root.jpg',
            ],
            [
                'nombre' => 'Patchwork',
                'descripcion' => 'El juego Patchwork es un juego de puzzles y estrategia exclusivo para dos jugadores. Un juego de mecánicas sencillas y fácil explicación que guarda más profundidad de lo que parece en un principio. Estos dos jugadores compiten por tener y tejer la colcha más completa. El que menos huecos tenga al final de la partida y más botones consiga será quien gane la partida de Patchwork.',
                'precio' => 23.99,
                'categoria' => 'Puzzle',
                'stock' => 0,
                'imagen_ruta' => 'patchwork.jpg',
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
