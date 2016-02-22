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

use Expresso\Controller\AbstractController;
/**
 * 
 * @package    Expresso
 * @subpackage Test
 */
class MockController extends AbstractController
{
    /**
     * A simple action
     */
    protected function sum2NumbersAction($number1, $number2)
    {
        return $number1 + $number2;
    }
}