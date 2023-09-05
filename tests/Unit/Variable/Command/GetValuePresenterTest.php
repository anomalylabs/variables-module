<?php

class GetValuePresenterTest extends TestCase
{

    public function testHandle()
    {
        $this->assertInstanceOf(
            \Anomaly\Streams\Platform\Addon\FieldType\FieldTypePresenter::class,
            dispatch_sync(new \Anomaly\VariablesModule\Variable\Command\GetValuePresenter('examples', 'email'))
        );

        $this->assertNull(
            dispatch_sync(new \Anomaly\VariablesModule\Variable\Command\GetValuePresenter('examples', str_random()))
        );
    }
}
