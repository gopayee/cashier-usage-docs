<?php $__env->startSection('content'); ?><h1>🗾 Defining the plans</h1>

<p>&#x20;In <code>CashierRegisterServiceProvider</code>'s <code>boot</code> method you may define the plans you need:</p>

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

        Saas::currency('EUR');

        Saas::plan('Gold Plan', 'price_...')
            -&gt;monthly(30)
            -&gt;features([
                Saas::feature('Seats', 'seats', 5)-&gt;notResettable(),
            ]);
    }
}
</code></pre>

<p>Please note that the <code>::plan</code> method accepts a display name, and the following two parameters are that <strong>plan identifiers in either Stripe or Paddle</strong>. This will ensure the available plans have unique IDs and they will be processed accordingly when it comes to the billing process:</p>

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

        Saas::plan('Gold Plan', 'price_monthly');
    }
}
</code></pre>

<h3>Defining yearly plans</h3>

<p>By default, yearly plans are not included but you might specify it if you have some:</p>

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

        Saas::plan('Gold Plan', 'price_monthly', 'price_yearly');
    }
}
</code></pre>

<h3>Retrieving the plans</h3>

<pre><code class="language-php">use Gopayee\CashierRegister\Saas;

$allPlans = Saas::getPlans();

foreach ($allPlans as $plan) {
    $features = $plan-&gt;getFeatures();
}
</code></pre>

<p>When retrieving a specific plan by Plan ID, you may pass the identifier:</p>

<pre><code class="language-php">use Gopayee\CashierRegister\Saas;

$plan = Saas::getPlan('price_monthly');
</code></pre>

<p>Please note that if the yearly plan ID is defined, you can also retrieved by it. However, the <code>-&gt;getId()</code> and <code>-&gt;getYearlyid()</code> are different:</p>

<pre><code class="language-php">use Gopayee\CashierRegister\Saas;

$plan = Saas::getPlan('price_yearly');

$plan-&gt;getId(); // price_monthly
$plan-&gt;getYearlyId(); // price_yearly
</code></pre>

<h3>Deprecating/Archiving plans</h3>

<p>Deprecating plans can occur anytime. In order to do so, just call <code>deprecated()</code> when defining the plan:</p>

<pre><code class="language-php">use Gopayee\CashierRegister\Saas;

/**
 * Boot the service provider.
 *
 * <?php echo e('@'); ?>return void
 */
public function boot()
{
    parent::boot();

    Saas::plan('Silver Plan', 'silver-plan-id')-&gt;deprecated();
}
</code></pre>

<p>As an alternative, you can anytime retrieve the available plans only:</p>

<pre><code class="language-php">use Gopayee\CashierRegister\Saas;

$plans = Saas::getAvailablePlans();
</code></pre>

<h3>Setting the plan as popular</h3>

<p>You may define a popular plan:</p>

<pre><code class="language-php">use Gopayee\CashierRegister\Saas;

Saas::plan('Gold Plan', 'gold-plan')
    -&gt;popular();
</code></pre>

<p>This will add a data field called <code>popular</code> that is either <code>true/false</code></p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('_layouts.documentation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>