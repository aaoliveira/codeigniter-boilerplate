###HTML5 Boilerplate for CodeIgniter

##Installation

This package is intended for use on a new codeigniter installation, simply download the latest CodeIgniter package and extract to your required destination. Now complete the following steps..

*Extract the codeigniter-boilerplate source *ON TOP* of your new CodeIgniter installation.
*(Optional) Add the library 'layout' to your application/config/autoload.php

Place your view files within the 'views/pages' folder, and call your views with the following code :

```php
$this->layout->show('pages/viewname');
```

You can also pass an array of view attributes using a syntax similar to the original codeigniter view method.

```php
$this->layout->show('pages/viewname', $view_attributes);
```
