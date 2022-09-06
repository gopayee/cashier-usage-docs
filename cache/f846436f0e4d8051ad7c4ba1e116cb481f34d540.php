<?php $__env->startSection('content'); ?><h1>🧵 Metadata</h1>

<p>Items, plans, and features implement a <code>-&gt;data()</code> method that allows you to attach custom data for each item:</p>

<pre><code class="language-php">use Gopayee\CashierRegister\Saas;

Saas::plan('Gold Plan', 'gold-plan')
    -&gt;data(['golden' =&gt; true])
    -&gt;features([
        Saas::feature('Seats', 'seats')
            -&gt;data(['digital' =&gt; true])
            -&gt;unlimited(),
    ]);
</code></pre>

<pre><code class="language-php">$plan = Saas::getPlan('gold-plan');
$feature = $plan-&gt;getFeature('seats');

$planData = $plan-&gt;getData(); // ['golden' =&gt; true]
$featureData = $feature-&gt;getData(); // ['digital' =&gt; true]
</code></pre>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('_layouts.documentation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>