<?php

namespace Wsdl2PhpGenerator\Tests\Functional;

/**
 * Test handling of the ucFirstClassNames configuration option.
 */
class UcFirstClassNamesTest extends FunctionalTestCase
{

    protected $namespace = 'UcFirstClassNamesTest';

    protected function getWsdlPath()
    {
        return $this->fixtureDir . '/extension/extensionLowerBaseClass.wsdl';
    }

    protected function configureOptions()
    {
        $this->config->set('namespaceName', $this->namespace);
        $this->config->set('ucFirstClassNames', true);
    }

    public function testUcFirstClassName()
    {
        $this->assertGeneratedClassExists('BaseClass', $this->namespace);
        $this->assertClassExists('BaseClass', $this->namespace);
    }
}
