<?php $__env->startSection('content'); ?><h1>👨‍⚕️ Preparing the service provider</h1>

<p>First of all, publish the Provider file:</p>

<pre><code class="language-bash">php artisan vendor:publish --provider="Gopayee\CashierRegister\CashierRegisterServiceProvider" --tag="provider"
</code></pre>

<p>Import the created <code>app/Providers/CashierRegisterServiceProvider</code> class into your <code>app.php</code>:</p>

<pre><code class="language-bash">$providers = [
    // ...
    App\Providers\CashierRegisterServiceProvider::class,
];
</code></pre>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('_layouts.documentation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>