# laravel-admin row-table

## Installation

Run :

```
$ composer require cosyphp/row-table
```

Then run:

```
$ php artisan vendor:publish --tag=row-table

```

## Update it

After `composer update` , if version of this extension changed :

Run 

```
php artisan vendor:publish --tag=row-table --force
```

This will override css and js fiels to `/public/vendor/laravel-admin-ext/row-table/`

Or you can and a script in `composer.json` :

```json
"scripts": {
    "post-update-cmd": "php artisan vendor:publish --tag=row-table --force",
}
```

## Usage

```php
protected function form()
{
    $form = new Form();

    $tableRow = new TableRow();
    $tableRow->select('图表类型')->options(['按年显示', '按月显示', '按天显示'])->default(1);
    $tableRow->date('日期')->default(date('Y-m-d'));
    $tableRow->button('搜索')->attribute('id', 'search-btn')->setElementClass('btn-primary');

    $form->rowtable('搜索')->setRows($tableRow)->useDiv(true);
    $form->disableSubmit();
    $form->disableReset();

    return $form;
}
```

License

---

Licensed under [The MIT License (MIT)](LICENSE).
