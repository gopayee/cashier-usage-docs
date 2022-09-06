<?php $__env->startSection('content'); ?><h1>🎭 Metered Features</h1>

<p>Metered features are opened for Stripe only and this will open up custom metering for exceeding quotas on features.</p>

<p>You might want to give your customers a specific amount of a feature, let's say <code>Build Minutes</code>, but for an exceeding amount of minutes, you might invoice at the end of the month a price of <code>$0.01</code> per minute:</p>

<pre><code class="language-php">use Gopayee\CashierRegister\Saas;

Saas::plan('Gold Plan', 'gold-plan')-&gt;features([
    Saas::meteredFeature('Build Minutes', 'build.minutes', 3000), // included: 3000
        -&gt;meteredPrice('price_identifier', 0.01, 'minute'), // on-demand: $0.01/minute
]);
</code></pre>

<p>If you simply want just the on-demand price of the metered feature, just omit the amount:</p>

<pre><code class="language-php">use Gopayee\CashierRegister\Saas;

Saas::plan('Gold Plan', 'gold-plan')-&gt;features([
    Saas::meteredFeature('Build Minutes', 'build.minutes'), // included: 0
        -&gt;meteredPrice('price_identifier', 0.01, 'minute'), // on-demand: $0.01/minute
]);
</code></pre>

<p><strong>The third parameter is just a conventional name for the unit. <code>0.01</code> is the price per unit (PPU). In this case, it's <code>minute</code> and <code>$0.01</code>, assuming the plan's price is in USD.</strong></p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('_layouts.documentation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>