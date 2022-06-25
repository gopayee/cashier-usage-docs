# 👨‍⚕️ Preparing the service provider

First of all, publish the Provider file:

```bash
php artisan vendor:publish --provider="Gopayee\CashierRegister\CashierRegisterServiceProvider" --tag="provider"
```

Import the created `app/Providers/CashierRegisterServiceProvider` class into your `app.php`:

```bash
$providers = [
    // ...
    App\Providers\CashierRegisterServiceProvider::class,
];
```

