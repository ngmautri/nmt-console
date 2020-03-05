<?php
namespace Application\Command;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Application\Entity\NmtInventoryItem;

/**
 *
 * @author Nguyen Mau Tri - ngmautri@gmail.com
 *        
 */
class TestCommand extends Command
{

    protected $doctrineEM;

    /**
     *
     * @return \Doctrine\ORM\EntityManager
     */
    public function getDoctrineEM()
    {
        return $this->doctrineEM;
    }

    /**
     *
     * @param EntityManager $doctrineEM
     */
    public function setDoctrineEM(EntityManager $doctrineEM)
    {
        $this->doctrineEM = $doctrineEM;
    }

    protected function configure()
    {
        $this->setName('app:test');

        // the short description shown while running "php app/console list"
        $this->setDescription('Creates a new user.');

        // the full command description shown when running the command with
        // the "--help" option
        $this->setHelp('This command allows you to create a user...');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

        // $p1 =$paths = array(__DIR__."/scr");;
        // $paths = array($p1);
        $paths = array(
            "D:\Software Development\php-2019-12-R\nmt-console\src\Application\Entity\\"
        );
        $isDevMode = true;

        // the connection configuration
        $dbParams = array(
            'driver' => 'pdo_mysql',
            'host' => 'localhost',
            'port' => '3306',
            'user' => 'root',
            'password' => '',
            'dbname' => 'mla'
        );

        $f = __DIR__."/../data/Doctrine";

        /*    if (! is_dir($f)) {
            echo "Couldn't do it.";
        }
        
        if (chmod("D:\Software Development\php-2019-12-R\nmt-console\data\Doctrine", 0777)) {
            chmod($f, 0777);
        } else {
            echo "Couldn't do it.";
        } */

        $config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode, $f, null, false);

        /**
         *
         * @var \Doctrine\ORM\EntityManager $entityManager
         */
        $entityManager = EntityManager::create($dbParams, $config);
        //var_dump($entityManager->getConfiguration());
        
        
        $criteria = array(
            "id" => 100
        );
        
        /**
         * 
         * @var \Application\Entity\NmtInventoryItem $entity ;
         */
        $entity =  $entityManager->getRepository("Application\Entity\NmtInventoryItem")->findOneBy($criteria);

        $output->writeln(sprintf('Hello World! .%s', $entity->getItemName()));
        sleep(10);
        $output->writeln(sprintf('Hello World! .%s', 'DONE...'));
    }
}