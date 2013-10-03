<?php
/**
 * This file is part of PDepend.
 *
 * PHP Version 5
 *
 * Copyright (c) 2008-2013, Manuel Pichler <mapi@pdepend.org>.
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions
 * are met:
 *
 *   * Redistributions of source code must retain the above copyright
 *     notice, this list of conditions and the following disclaimer.
 *
 *   * Redistributions in binary form must reproduce the above copyright
 *     notice, this list of conditions and the following disclaimer in
 *     the documentation and/or other materials provided with the
 *     distribution.
 *
 *   * Neither the name of Manuel Pichler nor the names of his
 *     contributors may be used to endorse or promote products derived
 *     from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
 * FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 * COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
 * BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
 * CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT
 * LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN
 * ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 *
 * @copyright 2008-2013 Manuel Pichler. All rights reserved.
 * @license http://www.opensource.org/licenses/bsd-license.php BSD License
  */

namespace PDepend\TreeVisitor;

use PDepend\Source\AST\ASTClass;
use PDepend\Source\AST\ASTCompilationUnit;
use PDepend\Source\AST\ASTFunction;
use PDepend\Source\AST\ASTInterface;
use PDepend\Source\AST\ASTMethod;
use PDepend\Source\AST\ASTNamespace;
use PDepend\Source\AST\ASTParameter;
use PDepend\Source\AST\ASTProperty;
use PDepend\Source\AST\ASTTrait;

/**
 * Simple test node visitor implementation.
 *
 * @copyright 2008-2013 Manuel Pichler. All rights reserved.
 * @license http://www.opensource.org/licenses/bsd-license.php BSD License
 */
class TestNodeVisitor implements TreeVisitor
{
    /**
     * The last visited class instance.
     *
     * @var \PDepend\Source\AST\ASTClass
     */
    public $class;

    /**
     * The last visited trait instance.
     *
     * @var \PDepend\Source\AST\ASTTrait
     * @since 1.0.0
     */
    public $trait;

    /**
     * The last visited interface instance.
     *
     * @var \PDepend\Source\AST\ASTInterface
     */
    public $interface;

    /**
     * The last visited method instance.
     *
     * @var \PDepend\Source\AST\ASTMethod
     */
    public $method;

    /**
     * The last visited package instance.
     *
     * @var \PDepend\Source\AST\ASTNamespace
     */
    public $package;

    /**
     * The last visited parameter instance.
     *
     * @var \PDepend\Source\AST\ASTParameter
     */
    public $parameter;

    /**
     * The last visited property instance.
     *
     * @var \PDepend\Source\AST\ASTProperty
     */
    public $property;

    /**
     * The last visited function instance.
     *
     * @var \PDepend\Source\AST\ASTFunction
     */
    public $function;

    /**
     * Adds a new listener to this node visitor.
     *
     * @param \PDepend\TreeVisitor\TreeVisitListener $listener
     * @return void
     */
    public function addVisitListener(TreeVisitListener $listener)
    {
    }

    /**
     * Visits a class node.
     *
     * @param \PDepend\Source\AST\ASTClass $class
     * @return void
     */
    public function visitClass(ASTClass $class)
    {
        $this->class = $class;
    }

    /**
     * Visits a trait node.
     *
     * @param \PDepend\Source\AST\ASTTrait $trait
     * @return void
     * @since 1.0.0
     */
    public function visitTrait(ASTTrait $trait)
    {
        $this->trait = $trait;
    }


    /**
     * Visits a code interface object.
     *
     * @param \PDepend\Source\AST\ASTInterface $interface
     * @return void
     */
    public function visitInterface(ASTInterface $interface)
    {
        $this->interface = $interface;
    }

    /**
     * Visits a method node.
     *
     * @param \PDepend\Source\AST\ASTMethod $method
     * @return void
     */
    public function visitMethod(ASTMethod $method)
    {
        $this->method = $method;
    }

    /**
     * Visits a package node.
     *
     * @param \PDepend\Source\AST\ASTNamespace $namespace The package class node.
     * @return void
     */
    public function visitNamespace(ASTNamespace $namespace)
    {
        $this->package = $namespace;
    }

    /**
     * Visits a parameter node.
     *
     * @param \PDepend\Source\AST\ASTParameter $parameter
     * @return void
     */
    public function visitParameter(ASTParameter $parameter)
    {
        $this->parameter = $parameter;
    }

    /**
     * Visits a property node.
     *
     * @param \PDepend\Source\AST\ASTProperty $property
     * @return void
     */
    public function visitProperty(ASTProperty $property)
    {
        $this->property = $property;
    }

    /**
     * Visits a function node.
     *
     * @param \PDepend\Source\AST\ASTFunction $function
     * @return void
     */
    public function visitFunction(ASTFunction $function)
    {
        $this->function = $function;
    }

    /**
     * Visits a file node.
     *
     * @param \PDepend\Source\AST\ASTCompilationUnit $compilationUnit
     * @return void
     */
    public function visitFile(ASTCompilationUnit $compilationUnit)
    {

    }
}
