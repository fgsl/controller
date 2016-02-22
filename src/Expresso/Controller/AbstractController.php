<?php
/**
 * Expresso Controller - implementations of request controller patterns
 *
 * @author    Flávio Gomes da Silva Lisboa <flavio.lisboa@serpro.gov.br>
 * @link      https://gitlab.com/expresso_livre/expresso for the canonical source repository
 * @copyright Copyright (c) 2016 SERPRO (http://www.serpro.gov.br)
 * @license   https://www.gnu.org/licenses/agpl.txt GNU AFFERO GENERAL PUBLIC LICENSE
 */
namespace Expresso\Controller;

/**
 * 
 * @package    Expresso
 * @subpackage SkeletonComponent
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