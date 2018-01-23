# Laravel 5.5 based user management system using UUIDs

It is a demo project for demonstrating how UUIDs work, and also what can be generated with [QuickAdminPanel](https://quickadminpanel.com).

![Laravel UUIDs](http://webcoderpro.com/laravel-uuids-demo.png)

## How it works

Adminpanel's user management works, using [webpatser/laravel-uuid](https://github.com/webpatser/laravel-uuid) package and fills in UUIDs in model's `boot()` method.

```
public static function boot()
{
	parent::boot();
	self::creating(function ($model) {
		$model->uuid = (string) Uuid::generate();
	});
}
```

And then uses Route model binding, attaching UUID as parameter in edit/show URLs:

```
public function getRouteKeyName()
{
	return 'uuid';
}
```


## Used packages

- [webpatser/laravel-uuid](https://github.com/webpatser/laravel-uuid)
- [AdminLTE theme](https://adminlte.io/themes/AdminLTE/)

## How to use

- Clone the repository with __git clone__
- Copy __.env.example__ file to __.env__ and edit database credentials there
- Run __composer install__
- Run __php artisan key:generate__
- Run __php artisan migrate --seed__ (it has some seeded data for your testing)
- That's it: launch the main URL and login with default credentials __admin@admin.com__ - __password__

## License

Basically, feel free to use and re-use any way you want.