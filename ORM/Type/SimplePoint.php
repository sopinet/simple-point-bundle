<?php
namespace Sopinet\Bundle\SimplePointBundle\ORM\Type;
 
/**
 * Point object for spatial mapping
 * Based in: http://codeutopia.net/blog/2011/02/19/using-spatial-data-in-doctrine-2/
 * Adapted Sopinet - 2014
 * Fernando Hidalgo 
 */
class SimplePoint
{
    private $latitude;
    private $longitude;
    
    protected $slatitude;
    protected $slongitude;
 
    public function __construct($latitude, $longitude) {
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }
 
    public function setLatitude($x) {
        $this->latitude = $x;
    }
 
    public function getLatitude() {
        return $this->latitude;
    }
 
    public function setLongitude($y) {
        $this->longitude = $y;
    }
 
    public function getLongitude() {
        return $this->longitude;
    }
    
    public function getSlatitude() {
    	if ($this->latitude < 0) return $this->latitude;
    	else return "+".$this->latitude;
    }
    
    public function getSlongitude() {
    	if ($this->longitude < 0) return $this->longitude;
    	else return "+".$this->longitude;
    }
 
    public function __toString() {
        //Output from this is used with POINT_STR in DQL so must be in specific format
        return sprintf('POINT(%f %f)', $this->latitude, $this->longitude);
    }
}
