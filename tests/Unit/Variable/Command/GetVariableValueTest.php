<?php

class GetVariableValueTest extends TestCase
{

    public function testHandle()
    {
        $this->assertEquals(
            'demo@example.com',
            dispatch_sync(new \Anomaly\VariablesModule\Variable\Command\GetVariableValue('examples', 'email'))
        );

        $this->assertNull(
            dispatch_sync(new \Anomaly\VariablesModule\Variable\Command\GetVariableValue('examples', str_random()))
        );
    }
}
