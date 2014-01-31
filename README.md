simple-point-bundle
===================

Symfony2 Bundle. Trait and helpers for use Geospatial Point entity

== Installation

=== TODO

More documentation is coming...

=== Add type

```yml
doctrine:
    dbal:
            point: point
        types:
            point: Sopinet\Bundle\SimplePointBundle\DBAL\Types\SimplePointType

    orm:
        dql:
            numeric_functions:
                distance: Sopinet\Bundle\SimplePointBundle\ORM\MySQL\Distance
                point_str: Sopinet\Bundle\SimplePointBundle\ORM\MySQL\PointStr        
```
