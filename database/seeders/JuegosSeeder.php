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
                'imagen_ruta' => 'welcome-coleccionista.png',
                'descripcion_ingles' =>
                "¡All the Welcome... in one box!
                A unique opportunity to rediscover Benoit Turpin's essential flip & write game, with all its expansions, in a revised, expanded, and enhanced edition.
                Our city has become very attractive and is experiencing significant population growth. The city council has made new land available to the public for the development of new residential areas, which must have all the modern conveniences that all Americans aspire to in 1953.
                To make this ambitious project a reality and choose the person who will be in charge of it, the city council has decided to organize a public competition among all architects. To do this, they must build single-family houses along three streets. And, in doing so, they will have to comply with the city's urban development regulations."
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
                'imagen_ruta' => 'pocimas-y-brebajes.png',
                'descripcion_ingles' =>
                'Once a year, the best charlatans and quacks in the territory gather in Timburg to prepare their brews for foot odor, homesickness, hiccups, and lovesickness. However, each healer has their own special concoction. Each player extracts ingredients from their own mishmash of various elements, combining them during the game until they deem their special compound ready. But one must be careful – any excess in the amount of such special ingredients could cause the potion to explode! Therefore, knowing when to stop, even if it means settling for smaller benefits at first, with an eye toward greater future yields and more valuable ingredients, could be the key. So, save your most valuable ingredients until you can brew a potion so potent that it leaves that gang of tricksters and penny-pinchers in the dust.'
            ],
            [
                'nombre' => 'Castillos de borgoña - 20º Aniversario',
                'descripcion' => 'Para celebrar el 20 aniversario de uno de los juegos de mesa más exitosos, la editorial Alea nos presenta una edición remodelada propia de tan señalada fecha. Esta nueva edición incluye nuevos componentes => losetas más gruesas, todas las expansiones (incluyendo las que permiten un modo de juego en solitario y otro por equipos), y nuevas ilustraciones de losetas y tablero, éste de doble cara para elegir según el número de jugadores.',
                'precio' => 45.95,
                'categoria' => 'Euro',
                'stock' => 5,
                'imagen_ruta' => 'castillos-de-borgoña.png',
                'descripcion_ingles' =>
                'To celebrate the 20th anniversary of one of the most successful board games, the publisher Alea presents us with a remodeled edition befitting such a significant occasion. This new edition includes new components => thicker tiles, all expansions (including those that allow for solo and team gameplay modes), and new illustrations for tiles and the double-sided board, allowing for choice based on the number of players.'
            ],
            [
                'nombre' => 'Root',
                'descripcion' => 'Root es un juego de mesa asimétrico previsto para 2 a 4 participantes, en el que cada uno escogerá su facción y tratará de conquistar el bosque de Root.
                Cada facción se juega de una manera diferente, tiene diferentes componentes y en turnos y estrategia única.',
                'precio' => 53.95,
                'categoria' => 'Euro',
                'stock' => 0,
                'imagen_ruta' => 'root.jpg',
                'descripcion_ingles' => 'Root is an asymmetrical board game designed for 2 to 4 players, where each player chooses their faction and aims to conquer the forest of Root. Each faction is played differently, has different components, and unique turns and strategies.',
            ],
            [
                'nombre' => 'Patchwork',
                'descripcion' => 'El juego Patchwork es un juego de puzzles y estrategia exclusivo para dos jugadores. Un juego de mecánicas sencillas y fácil explicación que guarda más profundidad de lo que parece en un principio. Estos dos jugadores compiten por tener y tejer la colcha más completa. El que menos huecos tenga al final de la partida y más botones consiga será quien gane la partida de Patchwork.',
                'precio' => 23.99,
                'categoria' => 'Puzzle',
                'stock' => 0,
                'imagen_ruta' => 'patchwork.png',
                'descripcion_ingles' => 'The game Patchwork is a puzzle and strategy game exclusively for two players. It features simple mechanics and easy-to-explain rules that hold more depth than initially apparent. These two players compete to have and sew the most complete quilt. The player with the fewest empty spaces and the most buttons at the end of the game will be the winner of Patchwork.',
            ],
            [
                'nombre' => 'Gloomhaven',
                'descripcion' => 'Gloomhaven es un juego de mesa cooperativo de estilo dungeon crawler con un fuerte énfasis en el desarrollo del personaje. Los jugadores forman parte de un grupo de mercenarios en un mundo oscuro y en constante cambio, donde las decisiones tienen consecuencias duraderas.',
                'precio' => '140.00',
                'categoria' => 'Aventura',
                'imagen_ruta' => 'gloomhaven.jpg',
                'descripcion_ingles' => 'Gloomhaven is a cooperative tabletop game with a dungeon-crawler style and a strong emphasis on character development. Players are part of a group of mercenaries in a dark and ever-changing world where decisions have lasting consequences.',
                'stock' => 15
            ],
            [
                'nombre' => 'Scythe',
                'descripcion' => 'Scythe es un juego de estrategia ambientado en un universo alternativo de Europa del Este en los años 20. Los jugadores toman el papel de líderes de una facción intentando expandir su imperio, cosechar recursos y luchar por el control de la tierra.',
                'precio' => '80.00',
                'categoria' => 'Estrategia',
                'imagen_ruta' => 'scythe.jpg',
                'descripcion_ingles' => 'Scythe is a strategy game set in an alternate universe of Eastern Europe in the 1920s. Players take on the role of leaders of a faction trying to expand their empire, harvest resources, and fight for control of the land',
                'stock' => 20
            ],
            [
                'nombre' => 'Wingspan',
                'descripcion' => 'Wingspan es un juego de mesa de gestión de motores y colección de aves. Los jugadores compiten para construir la mejor reserva de aves utilizando cartas y dados, cada uno representando una especie de ave única con habilidades especiales.',
                'precio' => '60.00',
                'categoria' => 'Familiar',
                'imagen_ruta' => 'wingspan.jpg',
                'descripcion_ingles' => 'Wingspan is a board game of engine-building and bird-collection. Players compete to build the best bird reserve using cards and dice, each representing a unique bird species with special abilities.',
                'stock' => 25
            ],
            [
                "nombre" => "Terraforming Mars",
                "descripcion" => "Terraforming Mars es un juego de estrategia donde los jugadores trabajan juntos para transformar Marte en un planeta habitable. Los jugadores compiten por acumular recursos y mejorar las condiciones del planeta para ganar puntos de victoria.",
                "precio" => "70.00",
                "categoria" => "Estrategia",
                "imagen_ruta" => "terraforming_mars.jpg",
                "descripcion_ingles" => "Terraforming Mars is a strategy game where players work together to transform Mars into a habitable planet. Players compete to accumulate resources and improve the planet's conditions to earn victory points.",
                "stock" => 18
            ],
            [
                "nombre" => "Everdell",
                "descripcion" => "Everdell es un juego de mesa de construcción de mazos y colocación de trabajadores con temática de bosque. Los jugadores construyen su propia ciudad en el bosque, recolectando recursos y estableciendo edificios para atraer a criaturas del bosque y ganar puntos de victoria.",
                "precio" => "50.00",
                "categoria" => "Familiar",
                "imagen_ruta" => "everdell.jpg",
                "descripcion_ingles" => "Everdell is a deck-building and worker placement board game with a forest theme. Players build their own city in the forest, collecting resources and establishing buildings to attract forest creatures and earn victory points.",
                "stock" => 22
            ],
            [
                "nombre" => "Tapestry",
                "descripcion" => "Tapestry es un juego de mesa de civilización donde los jugadores construyen sus propias civilizaciones desde los albores de la historia hasta la era futurista. Utilizan cartas y fichas para explorar, expandirse, innovar y finalmente alcanzar la victoria.",
                "precio" => "75.00",
                "categoria" => "Estrategia",
                "imagen_ruta" => "tapestry.jpg",
                "descripcion_ingles" => "Tapestry is a civilization board game where players build their own civilizations from the dawn of history to the futuristic era. They use cards and tokens to explore, expand, innovate, and ultimately achieve victory.",
                "stock" => 18
            ],
            [
                "nombre" => "Gloomhaven: Jaws of the Lion",
                "descripcion" => "Gloomhaven: Jaws of the Lion es una versión más accesible y compacta del popular juego de mesa Gloomhaven. Ofrece una experiencia de juego similar pero con un aprendizaje más suave y una introducción gradual a las mecánicas del juego.",
                "precio" => "50.00",
                "categoria" => "Aventura",
                "imagen_ruta" => "gloomhaven_jaws_of_the_lion.jpg",
                "descripcion_ingles" => "Gloomhaven: Jaws of the Lion is a more accessible and compact version of the popular board game Gloomhaven. It offers a similar gaming experience but with a smoother learning curve and a gradual introduction to the game mechanics.",
                "stock" => 12
            ],
            [
                "nombre" => "Scythe: Rise of Fenris",
                "descripcion" => "Scythe: Rise of Fenris es una expansión para el juego de mesa Scythe que introduce una campaña narrativa que se juega a lo largo de múltiples partidas. Los jugadores descubrirán nuevos elementos de juego y tomarán decisiones que afectarán el resultado de la historia.",
                "precio" => "30.00",
                "categoria" => "Estrategia",
                "imagen_ruta" => "scythe_rise_of_fenris.jpg",
                "descripcion_ingles" => "Scythe: Rise of Fenris is an expansion for the board game Scythe that introduces a narrative campaign played out over multiple sessions. Players will discover new gameplay elements and make decisions that will affect the outcome of the story.",
                "stock" => 10
            ],
            [
                "nombre" => "Terraforming Mars: Prelude",
                "descripcion" => "Terraforming Mars: Prelude es una expansión para el juego de mesa Terraforming Mars que agrega cartas de preludio que ofrecen a los jugadores bonificaciones iniciales y habilidades especiales que los ayudan a acelerar su desarrollo inicial en Marte.",
                "precio" => "25.00",
                "categoria" => "Estrategia",
                "imagen_ruta" => "terraforming_mars_prelude.jpg",
                "descripcion_ingles" => "Terraforming Mars: Prelude is an expansion for the board game Terraforming Mars that adds prelude cards offering players initial bonuses and special abilities to help accelerate their initial development on Mars.",
                "stock" => 8
            ],
            [
                "nombre" => "Wingspan: European Expansion",
                "descripcion" => "Wingspan: European Expansion es una expansión para el juego de mesa Wingspan que agrega nuevas cartas de aves basadas en especies europeas. También introduce nuevos tableros de jugador y componentes para ampliar la jugabilidad.",
                "precio" => "30.00",
                "categoria" => "Familiar",
                "imagen_ruta" => "wingspan_european_expansion.jpg",
                "descripcion_ingles" => "Wingspan: European Expansion is an expansion for the board game Wingspan that adds new bird cards based on European species. It also introduces new player boards and components to expand gameplay.",
                "stock" => 15
            ],
            [
                "nombre" => "Gloomhaven: Forgotten Circles",
                "descripcion" => "Gloomhaven: Forgotten Circles es una expansión para el juego de mesa Gloomhaven que agrega nuevos escenarios, enemigos y elementos de historia para continuar la aventura en el mundo de Gloomhaven.",
                "precio" => "35.00",
                "categoria" => "Aventura",
                "imagen_ruta" => "gloomhaven_forgotten_circles.jpg",
                "descripcion_ingles" => "Gloomhaven: Forgotten Circles is an expansion for the board game Gloomhaven that adds new scenarios, enemies, and story elements to continue the adventure in the world of Gloomhaven.",
                "stock" => 5
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
