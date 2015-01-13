<?php

namespace PHPixieTests\Database\Driver\Mongo\Conditions\Builder;

/**
 * @coversDefaultClass \PHPixie\Database\Driver\Mongo\Conditions\Builder\Container
 */
class ContainerTest extends \PHPixieTests\Database\Type\Document\Conditions\Builder\ContainerTest
{
    protected function conditions()
    {
        return new \PHPixie\Database\Driver\Mongo\Conditions();
    }
    
    protected function container($defaultOperator = '=')
    {
        return new \PHPixie\Database\Driver\Mongo\Conditions\Builder\Container($this->conditions, $defaultOperator);
    }
}