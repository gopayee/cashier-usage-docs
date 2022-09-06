<?php $__env->startSection('content'); ?><h1>🚫 Mid-Exceed Quotas in Stripe Metered Billing</h1>

<p>When exceeding the allocated quota for a specific feature when recording, <a href="https://github.com/renoki-co/cashier-register#metered-features">t</a>he Metered Billing comes in and bills for extra metered usage, but only if the feature is defined as <a href="metered-features.md">Metered Feature</a>.</p>

<pre><code class="language-php">use Gopayee\CashierRegister\Saas;

Saas::plan('Gold Plan', 'gold_price')-&gt;features([
    Saas::meteredFeature('Seats', 'seats', 5), // included: 5
        -&gt;meteredPrice('price_metered_identifier', 3, 'seat'), // on-demand: $0.01/minute
]);
</code></pre>

<pre><code class="language-php">$subscription-&gt;recordFeatureUsage('seats', 3); // 3 new users joined, 2 seats remaining

$subscription-&gt;recordFeatureUsage('seats', 4, true, function ($feature, $valueOverQuota, $subscription) {
    // From the used 3 seats, 5 are free. It remains only 2 seats.
    // The user wants another 4 seats, so Stripe Metered Billing is going to bill only 2, the remaining over quota.

    // Here you can run custom logic to handle overflow. The metered billing usage report was already done.
});
</code></pre>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('_layouts.documentation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>