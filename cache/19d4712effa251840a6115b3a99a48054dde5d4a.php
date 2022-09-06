<?php $__env->startSection('content'); ?><h1>🔧 Float and integer values</h1>

<h3>Unlimited amounts</h3>

<p>To set an infinite amount of usage, use the <code>unlimited()</code> method. You can consume as much as you want from the feature, and it will never exceed the quota:</p>

<pre><code class="language-php">use Gopayee\CashierRegister\Saas;

Saas::plan('Gold Plan', 'gold-plan')-&gt;features([
    Saas::feature('Seats', 'seats')-&gt;unlimited(),
]);
</code></pre>

<h3>Float amounts</h3>

<p>The package comes with migrations that allow only unsigned small integers for <code>used</code> and <code>used_total</code>. Optionally, if you wish to have float values, you might just change the field type after publishing the migrations:</p>

<pre><code class="language-php">Schema::create('subscription_usages', function (Blueprint $table) {
    $table-&gt;float('used', 8, 2);
    $table-&gt;float('used_total', 8, 2);
});
</code></pre>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('_layouts.documentation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>