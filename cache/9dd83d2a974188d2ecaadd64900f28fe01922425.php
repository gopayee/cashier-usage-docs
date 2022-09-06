<?php $__env->startSection('content'); ?><h1>🧓 Inherit features from other plans</h1>

<p>You may copy the base features from a given plan and overwrite same-ID features for new plans.</p>

<p>In the following example, the <code>Paid Plan</code> has unlimited seats (compared with the 10 seats per Free Plan) and a new feature called <code>beta.access</code> that is exclusively for the paid plan.</p>

<pre><code class="language-php">use Gopayee\CashierRegister\Saas;

$freePlan = Saas::plan('Free Plan', 'free-plan')-&gt;features([
    Saas::feature('Seats', 'seats')-&gt;value(10),
]);

$paidPlan = Saas::plan('Paid Plan', 'paid-plan')-&gt;inheritFeaturesFromPlan($freePlan, [
    Saas::feature('Seats', 'seats')-&gt;unlimited(), // same-ID features are replaced
    Saas::feature('Beta Access', 'beta.access')-&gt;unlimited(), // new IDs are merged
]);
</code></pre>

<p>&#x20;<strong>Keep in mind, avoid using further <code>-&gt;features()</code> when inheriting from another plan.</strong></p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('_layouts.documentation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>