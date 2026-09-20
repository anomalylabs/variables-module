# Variables Module

*anomaly.module.variables*

#### Manage variables and bits of content that can be used anywhere.

The Variables Module provides a simple interface for managing reusable content snippets and variables throughout your application.

## Features

- Field-based variables, using any installed field type
- Group organization
- Presenter access, so a variable renders as its field type does
- Easy access from templates and from PHP

## Usage

Variables live in **groups**. A group is a stream, and each variable is a field on it, so a
variable is always addressed by its group slug and its field slug.

### Accessing Variables

```twig
{# The raw stored value #}
{{ variable_value('social', 'facebook_url') }}
{# https://facebook.com/pyrocms #}

{# The field type presenter, so the value renders as its type does #}
{{ variable('social', 'facebook_url').link('Facebook')|raw }}
{# <a href="https://facebook.com/pyrocms">Facebook</a> #}

{# The whole group, to reach several variables at once #}
{% set social = variable_group('social') %}

{{ social.facebook_url }}
{{ social.facebook_url.link('Facebook')|raw }}
```

`variable_value` takes an optional third argument used when the variable has no value:

```twig
{{ variable_value('social', 'facebook_url', 'https://pyrocms.com') }}
```

Both `variable` and `variable_value` require the group and the field — there is no single-argument
form, because a field slug is only unique within its group.

### In PHP

```php
use Anomaly\VariablesModule\Variable\Contract\VariableRepositoryInterface;

$variables = app(VariableRepositoryInterface::class);

$value     = $variables->get('social', 'facebook_url');
$presenter = $variables->presenter('social', 'facebook_url');
$group     = $variables->group('social');

echo $presenter->link('Facebook');
echo $group->facebook_url;
```

### Defining Variables

Navigate to **Content > Variables** in the control panel to create and manage groups and the
variables within them.

## Requirements

- Streams Platform ^1.10
- PyroCMS 3.10+

## License

The Variables Module is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
