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

use Fgsl\Controller\AbstractController;
/**
 * 
 * @package    Fgsl
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