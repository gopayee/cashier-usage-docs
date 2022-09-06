<?php $__env->startSection('content'); ?><h1>💱 Plan eligibility</h1>

<p>Checking exceeded quotas can be useful when users fall back from a bigger plan to a smaller one. In this case, you may end up with an exceeded quota case where the users will have feature tracking values greater than the smaller plan values.</p>

<p>Before swapping, you might check the features from the lower plan and get the list of features that need to be handled:</p>

<pre><code class="language-php">use Gopayee\CashierRegister\Saas;

$freePlan = Saas::plan('Free Plan', 'price_free'); // already subscribed to this plan
$paidPlan = Saas::plan('Paid Plan', 'price_paid');

$overQuotaFeatures = $subscription-&gt;featuresOverQuotaWhenSwapping($paidPlan);

// If no features are over quotas before swapping, apply the plan swap.
if ($overQuotaFeatures-&gt;count() === 0) {
    $subscription-&gt;swap($freePlan-&gt;getId());
}

foreach ($overQuotaFeatures as $feature) {
    // $feature-&gt;getName();
}
</code></pre>

<h3>Catching Mid-Exceed Quotas</h3>

<p>Naturally, <code>recordFeatureUsage()</code> has a callback parameter that gets called whenever the amount of consumption gets over the allocated total quota right when recording the usage.</p>

<p>For example, customers can have 5 seats in total, but when all of 5 seats are full, you might want to re-check the amount of exceeded quota and billing separately:</p>

<pre><code class="language-php">$subscription-&gt;recordFeatureUsage('seats', 5); // 5 new users joined, 0 seats remaining

$subscription-&gt;recordFeatureUsage('seats', 3, true, function ($feature, $valueOverQuota, $subscription) {
    // $this-&gt;billUserForExtraSeats($subscription-&gt;model, $valueOverQuota);
    // or whatever...
});
</code></pre>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('_layouts.documentation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>