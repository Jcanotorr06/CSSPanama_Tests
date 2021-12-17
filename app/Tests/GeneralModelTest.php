<?php
    require_once(__DIR__ . '/../Modelos/Modelo_General.php');

    use \PHPUnit\Framework\TestCase;

    class GeneralModelTest extends TestCase{
        public function agendarCitaProvider(){
            return[
                'CP001' => [
                    'data' =>[
                        'id_usuario' => 37,
                        'id_medico' =>  5,
                        'fecha' =>  '2022-2-24',
                        'hora' =>  '12:00:00'
                    ]
                ],
                'CP008' => [
                    'data' =>[
                        'id_usuario' => 37,
                        'id_medico' =>  '',
                        'fecha' =>  '2022-2-24',
                        'hora' =>  '12:00:00'
                    ]
                ],
                'CP009' => [
                    'data' =>[
                        'id_usuario' => 37,
                        'id_medico' =>  5,
                        'fecha' =>  '2022-2-24',
                        'hora' =>  ''
                    ]
                ],
                'CP010' => [
                    'data' =>[
                        'id_usuario' => 37,
                        'id_medico' =>  5,
                        'fecha' =>  '2022-2-24',
                        'hora' =>  '12:00:00'
                    ]
                ]
            ];
        }

        public function reprogramarCitaProvider(){
            return[
                'CP001' => [
                    'data' =>[
                        'id_cita' => 17,
                        'id_medico' =>  5,
                        'fecha' =>  '2021-12-30',
                        'hora' =>  '12:00:00'
                    ]
                ],
                'CP002' => [
                    'data' =>[
                        'id_cita' => 17,
                        'id_medico' =>  5,
                        'fecha' =>  '',
                        'hora' =>  '12:00:00'
                    ]
                ],
                'CP003' => [
                    'data' =>[
                        'id_cita' => 17,
                        'id_medico' =>  5,
                        'fecha' =>  '2021-12-30',
                        'hora' =>  ''
                    ]
                ],
            ];
        }

        /**
         * @dataProvider agendarCitaProvider()
         */
        public function testAgendarCita($data){
            $test = new Modelo_General();
            $this->assertTrue($test->agendarCita($data));
        }

        /**
         * @dataProvider reprogramarCitaProvider()
         */
        public function testReprogramarCita($data){
            $test = new Modelo_General();
            $this->assertTrue($test->reprogramarCita($data));
        }

        public function testCancelarCita(){
            $test = new Modelo_General();
            $this->assertTrue($test->cancelarCita(17));
        }

        public function testListarCitas(){
            $test = new Modelo_General();
            $this->assertIsArray($test->listarCitas('5', 'medico'));
        }
    }
?>

