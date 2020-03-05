<?php
namespace Application\Command;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;


/**
 *
 * @author Nguyen Mau Tri - ngmautri@gmail.com
 *        
 */
class TestCommandFactory implements FactoryInterface
{

    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $sv = new TestCommand();
        return $sv;
    }
}