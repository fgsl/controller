<?php
/**
 * Fgsl Controller - implementations of request controller patterns
 *
 * @author    Flávio Gomes da Silva Lisboa <flavio.lisboa@fgsl.eti.br>
 * @link      https://gitlab.com/fgsl/controller for the canonical source repository
 * @copyright Copyright (c) 2017 FGSL (http://www.fgsl.eti.br)
 * @license   https://www.gnu.org/licenses/agpl.txt GNU AFFERO GENERAL PUBLIC LICENSE
 */
namespace Fgsl\Test\Controller;

/**
 * 
 * @package    Fgsl
 * @subpackage Test
 */
class ComponentTest extends \PHPUnit_Framework_TestCase
{
    /**
     * ensures dispatch is working
     */
    public function testDispatch()
    {
        $controller = new MockController();
        $data = $controller->dispatch('sum2Numbers', array(2,3));
        $this->assertEquals(5, $data);
    }
}