---
layout: default
title: The "text" control
slug: text
subtitle: Learn how to create controls using Kirki
mainMaxWidth: 50rem;
bodyClasses: control page
returns: string
heroButtons:
  - url: ../controls
    class: white button round border-only
    icon: fa fa-arrow-circle-o-left
    label: Back to Controls
---

`text` controls allow you to add a simple, single-line text input.

### Example

```php
Kirki::add_field( 'theme_config_id', array(
	'type'     => 'text',
	'settings' => 'my_setting',
	'label'    => __( 'Text Control', 'textdomain' ),
	'section'  => 'section_id',
	'default'  => esc_attr__( 'This is a defualt value', 'textdomain' ),
	'priority' => 10,
) );
```
