<?php
/**
* Expresso Controller - implementations of request controller patterns
 *
 * @author    Flávio Gomes da Silva Lisboa <flavio.lisboa@serpro.gov.br>
 * @link      https://gitlab.com/expresso_livre/expresso for the canonical source repository
 * @copyright Copyright (c) 2016 SERPRO (http://www.serpro.gov.br)
 * @license   https://www.gnu.org/licenses/agpl.txt GNU AFFERO GENERAL PUBLIC LICENSE
 */
namespace Expresso\Test\Controller;

/**
 * 
 * @package    Expresso
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