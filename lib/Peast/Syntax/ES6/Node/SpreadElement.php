<?php
/**
 * This file is part of the Peast package
 *
 * (c) Marco Marchiò <marco.mm89@gmail.com>
 *
 * For the full copyright and license information refer to the LICENSE file
 * distributed with this source code
 */
namespace Peast\Syntax\ES6\Node;

/**
 * A node that represents the spread element in array literals or function
 * calls.
 * For example "...params" in: test(...params)
 * 
 * @author Marco Marchiò <marco.mm89@gmail.com>
 */
class SpreadElement extends Node
{
    /**
     * The node's argument
     * 
     * @var type 
     */
    protected $argument;
    
    /**
     * Returns the node's argument
     * 
     * @return Expression
     */
    public function getArgument()
    {
        return $this->argument;
    }
    
    /**
     * Sets the node's argument
     * 
     * @param Expression $argument Node's argument
     * 
     * @return $this
     */
    public function setArgument(Expression $argument)
    {
        $this->argument = $argument;
        return $this;
    }
}