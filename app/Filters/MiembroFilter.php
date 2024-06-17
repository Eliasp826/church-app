<?php
namespace App\Filters;
use Illuminate\Http\Request;
use App\Filters\ApiFilter;
class MiembroFilter extends ApiFilter
{

    protected $safeParams = [
        'nombres' => ['eq', 'like'],
        'apellidos' => ['eq', 'like'],
        'cedula' => ['eq', 'gt', 'lt'],
        'correo_electronico' => ['eq'],
        'direccion' => ['eq'],
        'estado_civil' => ['eq'],
        'fecha_nacimiento' => ['eq']

    ];
    protected $columnMap = [
        'cedula' => 'cedula',
    ];
    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>=',
    ];
}

