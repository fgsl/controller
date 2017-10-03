<?php
/**
 * Fgsl Controller - implementations of request controller patterns
 *
 * @author    Flávio Gomes da Silva Lisboa <flavio.lisboa@fgsl.eti.br>
 * @link      https://gitlab.com/fgsl/controller for the canonical source repository
 * @copyright Copyright (c) 2017 FGSL (http://www.fgsl.eti.br)
 * @license   https://www.gnu.org/licenses/agpl.txt GNU AFFERO GENERAL PUBLIC LICENSE
 */
namespace Fgsl\Controller;

/**
 * 
 * @package    Fgsl
 * @subpackage Controller
 */
abstract class AbstractController
{
    /**
     * 
     * @param string $action
     * @param array $params
     * @return mixed
     */
    public function dispatch($action, array $params)
    {
        $this->preDispatch();
        $data = call_user_func_array(array(get_called_class(),$action . 'Action'), $params);
        $this->postDispatch();
        return $data;
    }

    /**
     * additional actions to do before requested action
     */
    public function preDispatch(){}
    /**
     * additional actions to do after requested action
     */
    public function postDispatch(){}
}