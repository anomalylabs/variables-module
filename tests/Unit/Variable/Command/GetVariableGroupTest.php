<?php

class GetVariableGroupTest extends TestCase
{

    public function testHandle()
    {
        $this->assertInstanceOf(
            \Anomaly\Streams\Platform\Model\Variables\VariablesExamplesEntryModel::class,
            dispatch_sync(new \Anomaly\VariablesModule\Variable\Command\GetVariableGroup('examples'))
        );

        $this->assertNull(
            dispatch_sync(new \Anomaly\VariablesModule\Variable\Command\GetVariableGroup(str_random()))
        );
    }
}
