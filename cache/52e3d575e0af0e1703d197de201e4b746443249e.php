<?php $__env->startSection('content'); ?><h1>🎯 Sync usage values</h1>

<p>Usually, the most fearful thing is that at some point, your <code>-&gt;recordUsage()</code> call will throw an error and you will not bill appropriately the amount of usage a customer has.</p>

<p>You can prevent this from happening by defining custom callbacks that will sync the current usage before any record transaction, making sure you try to record the feature usage based on the latest fresh information:</p>

<pre><code class="language-php">use Gopayee\CashierRegister\CashierRegisterServiceProvider as BaseServiceProvider;
use Gopayee\CashierRegister\Saas;

class CashierRegisterServiceProvider extends BaseServiceProvider
{
    /**
     * Boot the service provider.
     *
     * <?php echo e('@'); ?>return void
     */
    public function boot()
    {
        parent::boot();

        Saas::plan('Gold Plan', 'price_gold')-&gt;features([
            Saas::feature('Seats', 'seats', 5)-&gt;notResettable(),
        ]);

        Saas::syncFeatureUsage('seats', function ($subscription, Feature $feature) {
            // Make sure to calculate the total seats each time for the given Team subscription.
            return $subscription-&gt;billable-&gt;users()-&gt;count();
        });
    }
}

$subscription-&gt;recordFeatureUsage('seats', 3);
</code></pre>

<p>This can be a good use if you add Cashier Register to a new project where your users are already registered up, making it easier for you to sync the features.</p>

<p>It's highly recommended to avoid letting users consume amounts from features if they don't have enough left. For example, you should not let new users be added to a team if the team has occupied all the seats.</p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('_layouts.documentation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>