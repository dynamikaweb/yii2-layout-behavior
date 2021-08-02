dynamikaweb/yii2-layout-behavior
=========================
![php version](https://img.shields.io/packagist/php-v/dynamikaweb/yii2-layout-behavior)
![pkg version](https://img.shields.io/packagist/v/dynamikaweb/yii2-layout-behavior)
![license](https://img.shields.io/packagist/l/dynamikaweb/yii2-layout-behavior)
![quality](https://img.shields.io/scrutinizer/quality/g/dynamikaweb/yii2-layout-behavior)
![build](https://img.shields.io/scrutinizer/build/g/dynamikaweb/yii2-layout-behavior)

Installation
------------
The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```SHELL
$ composer require dynamikaweb/yii2-layout-behavior "*"
```

or add

```JSON
"dynamikaweb/yii2-layout-behavior": "*"
```

to the `require` section of your `composer.json` file.


Usage
-----


edit the `SomeController.php` file.
```PHP
class SomeController extends Controller
{
    public function behaviors()
    {
        return [
            [
                'class' => 'dynamikaweb\layout\ChangeLayout',
                'when' => Yii::$app->user->isGuest,
                'layout' => 'login'
            ],
            ...
        ]
    }
}
```

--------------------------------------------------------------------------------------------------------------
[![dynamika soluções web](https://avatars.githubusercontent.com/dynamikaweb?size=12)](https://dynamika.com.br)
This project is under [BSD-3-Clause](https://opensource.org/licenses/BSD-3-Clause) license.
