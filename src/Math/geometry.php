<?php
 
namespace gustavodomingues\ApiGeometry\Math;
 
class Geometria {
    /**
    *  @return float
    */
    public function calcularAreaRetangulo(float $base, float $altura): float
    {
        return $base * $altura;  
    }
 
    /**
    *  @return float
    */
    public function calcularAreaTriangulo(float $base, float $altura): float
    {
    return 0.5 * $base * $altura;
    }
}
?>