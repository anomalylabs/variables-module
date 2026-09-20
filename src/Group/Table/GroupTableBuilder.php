<?php namespace Anomaly\VariablesModule\Group\Table;

use Anomaly\Streams\Platform\Stream\Table\StreamTableBuilder;

/**
 * Class GroupTableBuilder
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 */
class GroupTableBuilder extends StreamTableBuilder
{

    /**
     * The streams namespace.
     *
     * @var string
     */
    protected $namespace = 'variables';

    /**
     * The table buttons.
     *
     * @var array
     */
    protected $buttons = [
        [
            'button'     => 'edit',
            'slug'       => 'edit',
            'permission' => 'anomaly.module.variables::groups.write',
        ],
        'edit'        => [
            'text'       => 'module::button.manage',
            'href'       => 'admin/variables/edit/{entry.id}',
            'permission' => 'anomaly.module.variables::variables.write',
        ],
        'assignments' => [
            'permission' => 'anomaly.module.variables::groups.write',
        ],
    ];
}
