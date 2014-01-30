<?php
namespace Sopinet\Bundle\SimplePointBundle\Model;
 
use Sopinet\Bundle\SimplePointBundle\ORM\Type\SimplePoint;

/**
 * Point object for spatial mapping
 * Based in: http://codeutopia.net/blog/2011/02/19/using-spatial-data-in-doctrine-2/
 * Adapted Sopinet - 2014
 * Fernando Hidalgo 
 */
trait GeoLocation
{
    /**
     * @ORM\Column(type="point", nullable=true)
     */
    protected $location;

    /**
     * Get location.
     *
     * @return location.
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set location.
     *
     * @param location the value to set.
     */
    public function setLocation(SimplePoint $location)
    {
        $this->location = $location;
    }
}
