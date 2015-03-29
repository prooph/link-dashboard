Prooph\Link\Dashboard
=====================
Dashboard module for [prooph LINK](https://github.com/prooph/link)

# Widgets
A standard prooph LINK application home screen is rendered by the dashboard module. The module overrides the `home` route of the application to point to the IndexController of the dashboard module. Other modules can register [WidgetController](https://github.com/prooph/link-dashboard/blob/master/src/Controller/AbstractWidgetController.php) via configuration. The IndexController loops through all registered WidgetController and calls the `widgetAction` which should return a [DashboardWidget](https://github.com/prooph/link-dashboard/blob/master/src/View/DashboardWidget.php).
A typical module configuration to register a widget looks like the following:

```php
//module.config.php of the link-app-core module
return [
    'prooph.link.dashboard' => [
        'system_config_widget' => [
            'controller' => 'Prooph\Link\Application\Controller\DashboardWidget', //Controller alias of WidgetController
            'order' => 101 //Order of the widget on the dashboard
        ]
    ],
    //...
];
```

# Widget Groups
to be defined ...

# Support

- Ask any questions on [prooph-users](https://groups.google.com/forum/?hl=de#!forum/prooph) google group.
- File issues at [https://github.com/prooph/link-dashboard/issues](https://github.com/prooph/link-dashboard/issues).

# Contribution

You wanna help us? Great!
We appreciate any help, be it on implementation level, UI improvements, testing, donation or simply trying out the system and give us feedback.
Just leave us a note in our google group linked above and we can discuss further steps.

Thanks,
your prooph team
