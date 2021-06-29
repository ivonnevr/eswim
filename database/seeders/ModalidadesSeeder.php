<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModalidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //LUNES, MIERCOLES, VIERNES

        DB::table('modalidades')->insert([
            'dias' => 'LUNES, MIERCOLES, VIERNES',
            'turno' => 'MATUTINO',
            'horario' => '7:00 AM - 7:50 AM',
            'precio' => '410']);

        DB::table('modalidades')->insert([
            'dias' => 'LUNES, MIERCOLES, VIERNES',
            'turno' => 'MATUTINO',
            'horario' => '8:00 AM - 8:50 AM',
            'precio' => '410']);

        DB::table('modalidades')->insert([
            'dias' => 'LUNES, MIERCOLES, VIERNES',
            'turno' => 'MATUTINO',
            'horario' => '9:00 AM - 9:50 AM',
            'precio' => '410']);

        DB::table('modalidades')->insert([
            'dias' => 'LUNES, MIERCOLES, VIERNES',
            'turno' => 'MATUTINO',
            'horario' => '11:00 AM - 11:50 AM',
            'precio' => '410']);

        DB::table('modalidades')->insert([
            'dias' => 'LUNES, MIERCOLES, VIERNES',
            'turno' => 'VESPERTINO',
            'horario' => '1:00 PM - 1:50 PM',
            'precio' => '410']);

        DB::table('modalidades')->insert([
            'dias' => 'LUNES, MIERCOLES, VIERNES',
            'turno' => 'VESPERTINO',
            'horario' => '2:00 PM - 2:50 PM',
            'precio' => '410']);

        DB::table('modalidades')->insert([
            'dias' => 'LUNES, MIERCOLES, VIERNES',
            'turno' => 'VESPERTINO',
            'horario' => '4:00 PM - 4:50 PM',
            'precio' => '410']);

        DB::table('modalidades')->insert([
            'dias' => 'LUNES, MIERCOLES, VIERNES',
            'turno' => 'VESPERTINO',
            'horario' => '5:00 PM - 5:50 PM',
            'precio' => '410']);

        DB::table('modalidades')->insert([
            'dias' => 'LUNES, MIERCOLES, VIERNES',
            'turno' => 'VESPERTINO',
            'horario' => '6:00 PM - 6:50 PM',
            'precio' => '410']);

        DB::table('modalidades')->insert([
            'dias' => 'LUNES, MIERCOLES, VIERNES',
            'turno' => 'VESPERTINO',
            'horario' => '7:00 PM - 7:50 PM',
            'precio' => '410']);

        DB::table('modalidades')->insert([
            'dias' => 'LUNES, MIERCOLES, VIERNES',
            'turno' => 'VESPERTINO',
            'horario' => '8:00 PM - 8:50 PM',
            'precio' => '410']);

        //MARTES, JUEVES

        DB::table('modalidades')->insert([
            'dias' => 'MARTES, JUEVES',
            'turno' => 'MATUTINO',
            'horario' => '7:00 AM - 7:50 AM',
            'precio' => '385']);
    
        DB::table('modalidades')->insert([
            'dias' => 'MARTES, JUEVES',
            'turno' => 'MATUTINO',
            'horario' => '8:00 AM - 8:50 AM',
            'precio' => '385']);
    
        DB::table('modalidades')->insert([
            'dias' => 'MARTES, JUEVES',
            'turno' => 'MATUTINO',
            'horario' => '9:00 AM - 9:50 AM',
            'precio' => '385']);
    
        DB::table('modalidades')->insert([
            'dias' => 'MARTES, JUEVES',
            'turno' => 'MATUTINO',
            'horario' => '11:00 AM - 11:50 AM',
            'precio' => '385']);
    
        DB::table('modalidades')->insert([
            'dias' => 'MARTES, JUEVES',
            'turno' => 'VESPERTINO',
            'horario' => '1:00 PM - 1:50 PM',
            'precio' => '385']);
    
        DB::table('modalidades')->insert([
            'dias' => 'MARTES, JUEVES',
            'turno' => 'VESPERTINO',
            'horario' => '2:00 PM - 2:50 PM',
            'precio' => '385']);
    
        DB::table('modalidades')->insert([
            'dias' => 'MARTES, JUEVES',
            'turno' => 'VESPERTINO',
            'horario' => '4:00 PM - 4:50 PM',
            'precio' => '385']);
    
        DB::table('modalidades')->insert([
            'dias' => 'MARTES, JUEVES',
            'turno' => 'VESPERTINO',
            'horario' => '5:00 PM - 5:50 PM',
            'precio' => '385']);
    
        DB::table('modalidades')->insert([
            'dias' => 'MARTES, JUEVES',
            'turno' => 'VESPERTINO',
            'horario' => '6:00 PM - 6:50 PM',
            'precio' => '385']);
    
        DB::table('modalidades')->insert([
            'dias' => 'MARTES, JUEVES',
            'turno' => 'VESPERTINO',
            'horario' => '7:00 PM - 7:50 PM',
            'precio' => '385']);
    
        DB::table('modalidades')->insert([
            'dias' => 'MARTES, JUEVES',
            'turno' => 'VESPERTINO',
            'horario' => '8:00 PM - 8:50 PM',
            'precio' => '385']);

        //LUNES A VIERNES

        DB::table('modalidades')->insert([
            'dias' => 'LUNES A VIERNES',
            'turno' => 'MATUTINO',
            'horario' => '7:00 AM - 7:50 AM',
            'precio' => '660']);
    
        DB::table('modalidades')->insert([
            'dias' => 'LUNES A VIERNES',
            'turno' => 'MATUTINO',
            'horario' => '8:00 AM - 8:50 AM',
            'precio' => '660']);
    
        DB::table('modalidades')->insert([
            'dias' => 'LUNES A VIERNES',
            'turno' => 'MATUTINO',
            'horario' => '9:00 AM - 9:50 AM',
            'precio' => '660']);
    
        DB::table('modalidades')->insert([
            'dias' => 'LUNES A VIERNES',
            'turno' => 'MATUTINO',
            'horario' => '11:00 AM - 11:50 AM',
            'precio' => '660']);
    
        DB::table('modalidades')->insert([
            'dias' => 'LUNES A VIERNES',
            'turno' => 'VESPERTINO',
            'horario' => '1:00 PM - 1:50 PM',
            'precio' => '660']);
    
        DB::table('modalidades')->insert([
            'dias' => 'LUNES A VIERNES',
            'turno' => 'VESPERTINO',
            'horario' => '2:00 PM - 2:50 PM',
            'precio' => '660']);
    
        DB::table('modalidades')->insert([
            'dias' => 'LUNES A VIERNES',
            'turno' => 'VESPERTINO',
            'horario' => '4:00 PM - 4:50 PM',
            'precio' => '660']);
    
        DB::table('modalidades')->insert([
            'dias' => 'LUNES A VIERNES',
            'turno' => 'VESPERTINO',
            'horario' => '5:00 PM - 5:50 PM',
            'precio' => '660']);
    
        DB::table('modalidades')->insert([
            'dias' => 'LUNES A VIERNES',
            'turno' => 'VESPERTINO',
            'horario' => '6:00 PM - 6:50 PM',
            'precio' => '660']);
    
        DB::table('modalidades')->insert([
            'dias' => 'LUNES A VIERNES',
            'turno' => 'VESPERTINO',
            'horario' => '7:00 PM - 7:50 PM',
            'precio' => '660']);
    
        DB::table('modalidades')->insert([
            'dias' => 'LUNES A VIERNES',
            'turno' => 'VESPERTINO',
            'horario' => '8:00 PM - 8:50 PM',
            'precio' => '660']);

        //SABADO

        DB::table('modalidades')->insert([
            'dias' => 'SABADO',
            'turno' => 'MATUTINO',
            'horario' => '7:00 AM - 10:50 AM',
            'precio' => '550']);
    }
}
