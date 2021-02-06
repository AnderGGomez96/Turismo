<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use App\Models\AlternativaAerea;
use App\Models\AlternativaBuse;
use App\Models\AlternativaHotel;
use App\Models\AlternativaTour;
use App\Models\Cliente;
use App\Models\CompaniaAerea;
use App\Models\CompaniaBuse;
use App\Models\CompaniaHotel;
use App\Models\CompaniaTour;
use App\Models\LoginAdmin;
use App\Models\LoginCliente;
use App\Models\Paquete;
use App\Models\Reserva;
use App\Models\User;
use App\Models\VentaPaquete;
use Carbon\Carbon;

class TurisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       //CompaniaAerea::truncate(); //evita duplicar datos

       $compa_aerea = new CompaniaAerea();
       $compa_aerea->nombre = "compania aerea 1";
       $compa_aerea->save();

       $compa_aerea = new CompaniaAerea();
       $compa_aerea->nombre = "compania aerea 2";
       $compa_aerea->save();

       $compa_aerea = new CompaniaAerea();
       $compa_aerea->nombre = "compania aerea 3";
       $compa_aerea->save();


       //CompaniaBuse::truncate(); // evitar duplicar datos

       $compa_bus = new CompaniaBuse();
       $compa_bus->nombre = "compania bus 1";
       $compa_bus->save();

       $compa_bus = new CompaniaBuse();
       $compa_bus->nombre = "compania bus 2";
       $compa_bus->save();

       $compa_bus = new CompaniaBuse();
       $compa_bus->nombre = "compania bus 3";
       $compa_bus->save();

       //CompaniaHotel::truncate(); // evitar duplicar datos

       $compa_hotel = new CompaniaHotel();
       $compa_hotel->nombre = "compania hotel 1";
       $compa_hotel->save();

       $compa_hotel = new CompaniaHotel();
       $compa_hotel->nombre = "compania hotel 2";
       $compa_hotel->save();

       $compa_hotel = new CompaniaHotel();
       $compa_hotel->nombre = "compania hotel 3";
       $compa_hotel->save();


       //CompaniaTour::truncate(); //evitar duplicar datos

       $compa_tour= new CompaniaTour();
       $compa_tour->nombre = "compania tour 1";
       $compa_tour->mail = "email1@tour.com";
       $compa_tour->save();

       $compa_tour= new CompaniaTour();
       $compa_tour->nombre = "compania tour 2";
       $compa_tour->mail = "email2@tour.com";
       $compa_tour->save();

       $compa_tour= new CompaniaTour();
       $compa_tour->nombre = "compania tour 3";
       $compa_tour->mail = "email3@tour.com";
       $compa_tour->save();

       
       //AlternativaAerea::truncate(); //evitar duplicar datos

       $alterna_aerea = new AlternativaAerea();
       $alterna_aerea->aerolinea_id = 1;
       $alterna_aerea->num_vuelo = "AA1234";
       $alterna_aerea->num_asientos = 1;
       $alterna_aerea->fecha_vuelo = Carbon::now('+1:00');
       $alterna_aerea->origen = "AAA";
       $alterna_aerea->destino = "BBB";
       $alterna_aerea->escala = "AAA-CCC-BBB";
       $alterna_aerea->tipo_pasaje = "pro";
       $alterna_aerea->costo = 500;
       $alterna_aerea->save();

       $alterna_aerea = new AlternativaAerea();
       $alterna_aerea->aerolinea_id = 2;
       $alterna_aerea->num_vuelo = "DD1234";
       $alterna_aerea->num_asientos = 1;
       $alterna_aerea->fecha_vuelo = Carbon::now('+2:00');
       $alterna_aerea->origen = "DDD";
       $alterna_aerea->destino = "EEE";
       $alterna_aerea->escala = "DDD-FFF-EEE";
       $alterna_aerea->tipo_pasaje = "pub";
       $alterna_aerea->costo = 300;
       $alterna_aerea->save();

       $alterna_aerea = new AlternativaAerea();
       $alterna_aerea->aerolinea_id = 3;
       $alterna_aerea->num_vuelo = "GG1234";
       $alterna_aerea->num_asientos = 1;
       $alterna_aerea->fecha_vuelo = Carbon::now('+3:00');
       $alterna_aerea->origen = "GGG";
       $alterna_aerea->destino = "HHH";
       $alterna_aerea->escala = "GGG-III-HHH";
       $alterna_aerea->tipo_pasaje = "pub";
       $alterna_aerea->costo = 600;
       $alterna_aerea->save();


       //AlternativaBuse::truncate(); //evitar duplicar datos

       $alterna_bus = new AlternativaBuse();
       $alterna_bus->bus_id = 1;
       $alterna_bus->num_asientos = 1;
       $alterna_bus->fecha_hora = Carbon::now('+4:00');
       $alterna_bus->lugar_origen = "ciudad 1";
       $alterna_bus->lugar_destino = "ciudad 2";
       $alterna_bus->costo = 100;
       $alterna_bus->save();
       
       $alterna_bus = new AlternativaBuse();
       $alterna_bus->bus_id = 2;
       $alterna_bus->num_asientos = 1;
       $alterna_bus->fecha_hora = Carbon::now('+5:00');
       $alterna_bus->lugar_origen = "ciudad 3";
       $alterna_bus->lugar_destino = "ciudad 4";
       $alterna_bus->costo = 200;
       $alterna_bus->save();

       $alterna_bus = new AlternativaBuse();
       $alterna_bus->bus_id = 3;
       $alterna_bus->num_asientos = 1;
       $alterna_bus->fecha_hora = Carbon::now('+6:00');
       $alterna_bus->lugar_origen = "ciudad 5";
       $alterna_bus->lugar_destino = "ciudad 6";
       $alterna_bus->costo = 150;
       $alterna_bus->save();


       //AlternativaHotel::truncate(); //evitar duplicar datos

       $alterna_hotel = new AlternativaHotel();
       $alterna_hotel->hotel_id= 1;
       $alterna_hotel->tipo_habitacion = "sencilla";
       $alterna_hotel->fecha_llegada = Carbon::now();
       $alterna_hotel->fecha_salida = Carbon::now('+1:00');
       $alterna_hotel->costo = 100;
       $alterna_hotel->save();


       $alterna_hotel = new AlternativaHotel();
       $alterna_hotel->hotel_id= 2;
       $alterna_hotel->tipo_habitacion = "doble";
       $alterna_hotel->fecha_llegada = Carbon::now();
       $alterna_hotel->fecha_salida = Carbon::now('+4:00');
       $alterna_hotel->costo = 200;
       $alterna_hotel->save();

       $alterna_hotel = new AlternativaHotel();
       $alterna_hotel->hotel_id= 3;
       $alterna_hotel->tipo_habitacion = "sencilla";
       $alterna_hotel->fecha_llegada = Carbon::now();
       $alterna_hotel->fecha_salida = Carbon::now('+12:00');
       $alterna_hotel->costo = 1000;
       $alterna_hotel->save();

       //AlternativaTour::truncate();

       $alterna_tour = new AlternativaTour();
       //id	tour_id	fecha_hora	descripcion	costo
       $alterna_tour->tour_id = 1;
       $alterna_tour->fecha_hora=Carbon::now();
       $alterna_tour->descripcion = "descripcion 1";
       $alterna_tour->costo=400;
       $alterna_tour->save();


       $alterna_tour = new AlternativaTour();
       $alterna_tour->tour_id = 2;
       $alterna_tour->fecha_hora=Carbon::now();
       $alterna_tour->descripcion = "descripcion 2";
       $alterna_tour->costo=100;
       $alterna_tour->save();


       $alterna_tour = new AlternativaTour();
       $alterna_tour->tour_id = 3;
       $alterna_tour->fecha_hora=Carbon::now();
       $alterna_tour->descripcion = "descripcion 3";
       $alterna_tour->costo=300;
       $alterna_tour->save();


       //Paquete::truncate();

       $paquete = new Paquete();

       //id	nombre	descripcion	fecha_inicio	fecha_fin	costo	estado	eliminar
       $paquete->nombre = "paquete 1";
       $paquete->descripcion="descripcion paquete 1";
       $paquete->fecha_inicio=Carbon::now();
       $paquete->fecha_fin=Carbon::now('+2:00');
       $paquete->costo=1000;
       $paquete->save();

       $paquete->alternativa_aerea()->attach([1, 2]);
       $paquete->alternativa_hotel()->attach([1, 2]);
       $paquete->alternativa_buse()->attach([1, 2]);
       $paquete->alternativa_tour()->attach([1, 2]);

       $paquete = new Paquete();
       $paquete->nombre = "paquete 2";
       $paquete->descripcion="descripcion paquete 2";
       $paquete->fecha_inicio=Carbon::now();
       $paquete->fecha_fin=Carbon::now('+6:00');
       $paquete->costo=2000;
       $paquete->save();

       $paquete->alternativa_aerea()->attach([1, 3]);
       $paquete->alternativa_hotel()->attach([1, 3]);
       $paquete->alternativa_buse()->attach([1, 3]);
       $paquete->alternativa_tour()->attach([1, 3]);


       $paquete = new Paquete();
       $paquete->nombre = "paquete 3";
       $paquete->descripcion="descripcion paquete 3";
       $paquete->fecha_inicio=Carbon::now();
       $paquete->fecha_fin=Carbon::now('+4:00');
       $paquete->costo=2000;
       $paquete->save();

       $paquete->alternativa_aerea()->attach([2, 3]);
       $paquete->alternativa_hotel()->attach([2, 3]);
       $paquete->alternativa_buse()->attach([2, 3]);
       $paquete->alternativa_tour()->attach([2, 3]);


      // Cliente::truncate();
       //id	nombre	apellido	estado	agente	eliminar
       $cliente = new Cliente();
       $cliente->nombre = "nombre 1";
       $cliente->apellido = "apellido 1";
       $cliente->estado = "deudor";
       $cliente->agente="mayorista";
       $cliente->save();


       $cliente = new Cliente();
       $cliente->nombre = "nombre 2";
       $cliente->apellido = "apellido 2";
       $cliente->estado = "acrededor";
       $cliente->agente="minorista";
       $cliente->save();

       $cliente = new Cliente();
       $cliente->nombre = "nombre 3";
       $cliente->apellido = "apellido 3";
       $cliente->estado = "deudor";
       $cliente->agente="mayorista";
       $cliente->save();

      // LoginCliente::truncate();
//id	cliente_id	nombre_usuario	passwd	eliminar

       $login_cliente = new LoginCliente();
       $login_cliente->cliente_id=1;
       $login_cliente->nombre_usuario="usuario 1";
       $login_cliente->passwd="pass 1";
       $login_cliente->save();


       $login_cliente = new LoginCliente();
       $login_cliente->cliente_id=1;
       $login_cliente->nombre_usuario="usuario 2";
       $login_cliente->passwd="pass 2";
       $login_cliente->save();


       $login_cliente = new LoginCliente();
       $login_cliente->cliente_id=1;
       $login_cliente->nombre_usuario="usuario 3";
       $login_cliente->passwd="pass 3";
       $login_cliente->save();

      // Admin::truncate(); // evita duplicar datos

       $admin = new Admin();
       $admin->nombre = "admin 1";
       $admin->apellido = "base 1";
       $admin->save();


       $admin = new Admin();
       $admin->nombre = "admin 2";
       $admin->apellido = "base 2";
       $admin->save();


       $admin = new Admin();
       $admin->nombre = "admin 3";
       $admin->apellido = "base 3";
       $admin->save();

       
      // LoginAdmin::truncate();
       //id	cliente_id	nombre_usuario	passwd	eliminar
       
       $login_admin = new LoginAdmin();
       $login_admin->admin_id=1;
       $login_admin->nombre_usuario="usuario 1";
       $login_admin->passwd="pass 1";
       $login_admin->save();


       $login_admin = new LoginAdmin();
       $login_admin->admin_id=1;
       $login_admin->nombre_usuario="usuario 2";
       $login_admin->passwd="pass 2";
       $login_admin->save();


       $login_admin = new LoginAdmin();
       $login_admin->admin_id=1;
       $login_admin->nombre_usuario="usuario 3";
       $login_admin->passwd="pass 3";
       $login_admin->save();



    }
}
