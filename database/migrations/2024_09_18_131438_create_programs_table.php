<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->timestamps();
        });

        // Insertar programas directamente en la migración
        DB::table('programs')->insert([
            ['name' => 'GESTION ADMINISTRATIVA DEL SECTOR SALUD'],
            ['name' => 'GESTION DE MERCADOS'],
            ['name' => 'ASISTENCIA ADMINISTRATIVA'],
            ['name' => 'GESTION DE PROCESOS ADMINISTRATIVOS DE SALUD'],
            ['name' => 'GESTION EMPRESARIAL'],
            ['name' => 'GUIANZA TURISTICA'],
            ['name' => 'GESTION CONTABLE Y FINANCIERA'],
            ['name' => 'ANALISIS Y DESARROLLO DE SISTEMAS DE INFORMACION'],
            ['name' => 'GESTION LOGISTICA'],
            ['name' => 'NEGOCIACION INTERNACIONAL'],
            ['name' => 'GESTION DEL TALENTO HUMANO'],
            ['name' => 'GESTION DOCUMENTAL'],
            ['name' => 'CONTABILIZACION DE OPERACIONES COMERCIALES Y FINANCIERAS'],
            ['name' => 'GESTION BANCARIA Y DE ENTIDADES FINANCIERAS'],
            ['name' => 'PELUQUERIA'],
            ['name' => 'PANIFICACION'],
            ['name' => 'COCINA'],
            ['name' => 'SERVICIOS FARMACEUTICOS'],
            ['name' => 'SALUD PUBLICA'],
            ['name' => 'APOYO ADMINISTRATIVO EN SALUD'],
            ['name' => 'OPERACION TURISTICA LOCAL'],
            ['name' => 'ANIMACION 3D'],
            ['name' => 'ANIMACION DIGITAL'],
            ['name' => 'PROMOCION DE PRODUCTOS'],
            ['name' => 'SERVICIOS Y OPERACIONES MICROFINANCIERAS'],
            ['name' => 'CUIDADO ESTETICO DE MANOS Y PIES'],
            ['name' => 'CONTROL DE MOVILIDAD TRANSPORTE Y SEGURIDAD VIAL'],
            ['name' => 'ENFERMERIA'],
            ['name' => 'SISTEMAS'],
            ['name' => 'DISTRIBUCION FISICA INTERNACIONAL'],
            ['name' => 'ASESORIA COMERCIAL Y OPERACIONES DE ENTIDADES FINANCIERAS'],
            ['name' => 'ATENCION INTEGRAL A LA PRIMERA INFANCIA'],
            ['name' => 'ASISTENCIA EN ORGANIZACION DE ARCHIVOS'],
            ['name' => 'DESARROLLO DE OPERACIONES LOGISTICA EN LA CADENA DE ABASTECIMIENTO'],
            ['name' => 'SERVICIO DE RESTAURANTE Y BAR'],
            ['name' => 'OPERACIONES DE COMERCIO EXTERIOR'],
            ['name' => 'DISEÑO E INTEGRACION DE MULTIMEDIA'],
            ['name' => 'INFORMACION Y SERVICIO AL CLIENTE'],
            ['name' => 'SERVICIOS DE AGENCIAS DE VIAJES'],
            ['name' => 'ASESORIA COMERCIAL'],
            ['name' => 'PROCESOS DE PANADERIA'],
            ['name' => 'GESTION COMUNITARIA DEL RIESGO DE DESASTRES'],
            ['name' => 'PROGRAMACION DE APLICACIONES Y SERVICIOS PARA LA NUBE'],
            ['name' => 'PROGRAMACION DE SOFTWARE'],
            ['name' => 'SERVICIOS DE BARISMO'],
            ['name' => 'GESTION CONTABLE Y DE INFORMACION FINANCIERA'],
            ['name' => 'INTEGRACION DE OPERACIONES LOGISTICAS'],
            ['name' => 'INTEGRACION DE CONTENIDOS DIGITALES'],
            ['name' => 'AUXILIAR EN COCINA'],
            ['name' => 'PROGRAMACION PARA ANALITICA DE DATOS'],
            ['name' => 'AGENTE DE TRANSITO Y TRANSPORTE'],
            ['name' => 'ANALISIS Y DESARROLLO DE SOFTWARE'],
            ['name' => 'ATENCION INTEGRAL AL CLIENTE'],
            ['name' => 'CONTROL DE MOVILIDAD, TRANSPORTE Y SEGURIDAD VIAL'],
            ['name' => 'DESARROLLO DE PROCESOS DE MERCADEO'],
            ['name' => 'DESARROLLO PUBLICITARIO'],
            ['name' => 'GESTION INTEGRAL DEL TRANSPORTE'],
            ['name' => 'ORGANIZACION DE ARCHIVO'],
            ['name' => 'PRESELECCION DE TALENTO HUMANO MEDIADO POR HERRAMIENTAS TIC'],
            ['name' => 'SERVICIOS EN CONTACT CENTER Y BPO'],
            ['name' => 'COORDINACION DE PROCESOS LOGISTICOS'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programs');
    }
};
