# Variables Module

*anomaly.module.variables*

#### Manage variables and bits of content that can be used anywhere.

The Variables Module provides a simple interface for managing reusable content snippets and variables throughout your application.

## Features

- Field-based variables
- Group organization
- Easy access from templates
- Caching support
- Multiple field types

## Usage

### Accessing Variables

```twig
{# Get variable value #}
{{ variables('site_name') }}

{# Get variable from group #}
{{ variables('contact', 'email') }}

{# Check if variable exists #}
{% if variables('feature_enabled') %}
    <p>Feature is enabled</p>
{% endif %}
```

### Defining Variables

Navigate to **Content > Variables** in the control panel to create and manage variables.

## Requirements

- Streams Platform ^1.10
- PyroCMS 3.10+

## License

The Variables Module is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
