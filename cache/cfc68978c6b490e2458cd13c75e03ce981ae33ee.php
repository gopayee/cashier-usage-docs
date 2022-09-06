<?php $__env->startSection('content'); ?><h1>🚀 Installation</h1>

<h3>Installing the package</h3>

<p>Hop into your console and install the package via Composer:</p>

<pre><code class="language-bash">composer require renoki-co/cashier-register
</code></pre>

<p>Publish the config file:</p>

<pre><code class="language-bash">php artisan vendor:publish --provider="Gopayee\CashierRegister\CashierRegisterServiceProvider" --tag="config"
</code></pre>

<p>Publish the migrations:</p>

<pre><code class="language-bash">php artisan vendor:publish --provider="Gopayee\CashierRegister\CashierRegisterServiceProvider" --tag="migrations"
</code></pre>

<p>The package does not come with Cashier as a dependency, so you should install it according to your needs:</p>

<h4>Cashier for Stripe</h4>

<pre><code class="language-bash">composer require laravel/cashier:"^12.13"
</code></pre>

<h4>Cashier for Paddle</h4>

<pre><code class="language-bash">composer require laravel/cashier-paddle:"^1.4.4"
</code></pre>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('_layouts.documentation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>