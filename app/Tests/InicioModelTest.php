<?php
    require_once(__DIR__ . '/../Modelos/Modelo_Inicio.php');

    use \PHPUnit\Framework\TestCase;

    class InicioModelTest extends TestCase{

        public function registroProvider(){
            return[
                'CP001' => [
                    'data' => [
                        'nombre' => 'Jorge',
                        'apellido' => 'Messi',
                        'email' => 'messi@gmail.com',
                        'cedula' => '5-222-5555',
                        'contraseña' => 'Barcelona123'
                    ]
                ],
                'CP002' => [
                    'data' => [
                        'nombre' => 'Jorge',
                        'apellido' => 'Messi',
                        'email' => 'messi2@gmail.com',
                        'cedula' => '5-222-5555',
                        'contraseña' => 'Barcelona123'
                    ]
                ],
                'CP003' => [
                    'data' => [
                        'nombre' => 'Jorge',
                        'apellido' => 'Messi',
                        'email' => 'josephct06@gmail.com',
                        'cedula' => '5-5225-5555',
                        'contraseña' => 'Barcelona123'
                    ]
                ],
                'CP004' => [
                    'data' => [
                        'nombre' => 'Jorge',
                        'apellido' => 'Messi',
                        'email' => 'messi3@gmail.com',
                        'cedula' => '8-95920',
                        'contraseña' => 'Barcelona123'
                    ]
                ],
                'CP005' => [
                    'data' => [
                        'nombre' => 'Jorge',
                        'apellido' => 'Messi',
                        'email' => 'messi4@gmail.com',
                        'cedula' => '8-971-2154',
                        'contraseña' => 'Barcelona123'
                    ]
                ],
                'CP006' => [
                    'data' => [
                        'nombre' => 'Jorge',
                        'apellido' => 'Messi',
                        'email' => 'messi5@gmail.com',
                        'cedula' => '8-2459-33',
                        'contraseña' => '123'
                    ]
                ],
                'CP007' => [
                    'data' => [
                        'nombre' => '',
                        'apellido' => 'Messi',
                        'email' => 'messi6@gmail.com',
                        'cedula' => '8-959-30',
                        'contraseña' => 'Barcelona123'
                    ]
                ],
                'CP008' => [
                    'data' => [
                        'nombre' => 'Jorge',
                        'apellido' => '',
                        'email' => 'messi7@gmail.com',
                        'cedula' => '8-959-31',
                        'contraseña' => 'Barcelona123'
                    ]
                ],
                'CP009' => [
                    'data' => [
                        'nombre' => 'Jorge',
                        'apellido' => 'Messi',
                        'email' => '',
                        'cedula' => '8-959-32',
                        'contraseña' => 'Barcelona123'
                    ]
                ],
                'CP010' => [
                    'data' => [
                        'nombre' => 'Jorge',
                        'apellido' => 'Messi',
                        'email' => 'messimessi@gmail.com',
                        'cedula' => '',
                        'contraseña' => 'Barcelona123'
                    ]
                ],
                'CP011' => [
                    'data' => [
                        'nombre' => 'Jorge',
                        'apellido' => 'Messi',
                        'email' => 'juenmessi@gmail.com',
                        'cedula' => '8-2359-39',
                        'contraseña' => ''
                    ]
                ],
            ];
        }

        public function iniciarSesionProvider(){
            return[
                'CP001' => [
                    'data' => [
                        'usuario' => '8-971-2154',
                        'contraseña' => 'password'
                    ]
                ],
                'CP002' => [
                    'data' => [
                        'usuario' => '5-222-5555',
                        'contraseña' => 'Barcelona1234'
                    ]
                ],
                'CP003' => [
                    'data' => [
                        'usuario' => '6-222-5555',
                        'contraseña' => 'Barcelona123'
                    ]
                ],
                'CP004' => [
                    'data' => [
                        'usuario' => '',
                        'contraseña' => 'Barcelona123'
                    ]
                ],
                'CP005' => [
                    'data' => [
                        'usuario' => '5-222-5555',
                        'contraseña' => ''
                    ]
                ],
            ];
        }

        /**
         * @dataProvider iniciarSesionProvider()
         */
        public function testIniciarSesion($data){
            $test = new Modelo_Inicio();
            $this->assertTrue($test->iniciarSesion($data));
        }

        /**
         * @dataProvider registroProvider()
         */
        public function testRegistro($data){
            $test = new Modelo_Inicio();
            $this->assertTrue($test->registro($data));
        }
    }
?>