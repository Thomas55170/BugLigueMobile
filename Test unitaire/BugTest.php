<?php
/**
 * Created by PhpStorm.
 * User: pc thomas
 * Date: 01/05/14
 * Time: 11:28
 */

class BugTest extends PHPUnit_Framework_TestCase {

    public function testRepareBug()
    {
        // instanciation d'un Bug non cloturé pour tester la méthode repareBug() de fonctions.inc.php
        $bugopen = new Bug();
        $bugopen->setDescription('test description OPEN');
        $bugopen->setResume('test resume OPEN');
        $bugopen->setCreated(new DateTime("now"));
        $bugopen->setStatus("OPEN");
        $bugopen->setReporter(3);
        // Assert
        //$this->assertEquals(etc .......
        $this->assertEquals('CLOSE',$bugopen->getStatus(),"Test échoué");

        // instanciation d'un Bug cloturé
        /*$bugclose = new Bug();
        $bugclose->setDescription('test description CLOSE');
        $bugclose->setResume('test resume CLOSE');
        $bugclose->setCreated(new DateTime("now"));
        $bugclose->setStatus("CLOSE");
        $bugclose->setReporter(3);

        $this->assertEquals('CLOSE',$bugclose->getStatus(),"Test réussie");*/
    }

}
 