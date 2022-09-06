<?php $__env->startSection('content'); ?><h1>🕛 Resetting values on payment</h1>

<p>Each created feature is resettable - each time the billing cycle ends, you can call <code>resetQuotas</code> on the subscription to reset them.</p>

<p>You can have:</p>

<ul>
<li>consumable features, for example, the number of mails your client can send each month via your newsletter service</li>
<li>non-resettable features, like team seats, the number of maximum projects at a time, etc.</li>
</ul>

<p>The appropriate way is to be able to reset the quotas after each billing cycle. With Stripe, you might want to implement a Webhook controller listening to the <code>invoice.payment_succeeded</code> event:</p>

<pre><code class="language-php">&lt;<?php echo e('?php'); ?>


use Laravel\Cashier\Http\Controllers\WebhookController;

class StripeController extends WebhookController
{
    /**
     * Handle invoice payment succeeded.
     *
     * <?php echo e('@'); ?>param  array  $payload
     * <?php echo e('@'); ?>return \Symfony\Component\HttpFoundation\Response
     */
    public function handleInvoicePaymentSucceeded($payload)
    {
        if ($user = $this-&gt;getUserByStripeId($payload['data']['object']['customer'])) {
            $data = $payload['data']['object'];

            $subscription = $user-&gt;subscriptions()
                -&gt;whereStripeId($data['subscription'] ?? null)
                -&gt;first();

            if ($subscription) {
                $subscription-&gt;resetQuotas();
            }
        }

        return $this-&gt;successMethod();
    }
}
</code></pre>

<p>To avoid resetting, you may call <code>notResettable()</code> on the feature. This way, the quota reset won't occur on the <code>seats</code> feature.</p>

<pre><code class="language-php">use Gopayee\CashierRegister\Saas;

Saas::plan('Gold Plan', 'gold-plan')-&gt;features([
    Saas::feature('Seats', 'seats', 5)-&gt;notResettable(),
]);
</code></pre>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('_layouts.documentation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>