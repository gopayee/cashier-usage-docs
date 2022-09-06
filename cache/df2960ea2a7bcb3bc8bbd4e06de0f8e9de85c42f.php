<?php $__env->startSection('content'); ?><h1>👨‍🚀 Preparing the model</h1>

<p>For billables, you should follow the installation instructions given with Cashier for Paddle or Cashier for Stripe.</p>

<p>This package already sets the custom <code>Subscription</code> model. In case you want to add more functionalities to the Subscription model, make sure you extend accordingly from these models:</p>

<ul>
<li>Paddle: <code>Gopayee\CashierRegister\Models\Paddle\Subscription</code></li>
<li>Stripe: <code>Gopayee\CashierRegister\Models\Stripe\Subscription</code></li>
</ul>

<p>Further, make sure you check the <code>saas.php</code> file and replace the subscription model from there, or you can use the <code>::useSubscriptionModel</code> call in your code.</p>

<p>Cashier Register already does that for you in the background, but feel free to replace them with your models if you need to.</p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('_layouts.documentation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>