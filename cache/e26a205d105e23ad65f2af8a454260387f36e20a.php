<?php $__env->startSection('content'); ?><h1>Table of contents</h1>

<ul>
<li><a href="README.md">⚡ Introduction</a></li>
<li><a href="upgrading-to-6.x-from-5.x.md">⏫ Upgrading to 6.x from 5.x</a></li>
</ul>

<h2>Getting Started</h2>

<ul>
<li><a href="getting-started/installation.md">🚀 Installation</a></li>
<li><a href="getting-started/preparing-the-model.md">👨‍🚀 Preparing the model</a></li>
<li><a href="getting-started/preparing-the-service-provider.md">👨‍⚕️ Preparing the service provider</a></li>
</ul>

<h2>Plans <a href="defining-plans" id="defining-plans"></a></h2>

<ul>
<li><a href="defining-plans/defining-the-plans.md">🗾 Defining the plans</a></li>
<li><a href="defining-plans/features/README.md">✨ Features</a>

<ul>
<li><a href="defining-plans/features/types-of-values.md">🔧 Float and integer values</a></li>
</ul></li>
<li><a href="defining-plans/resetting-values.md">🕛 Resetting values on payment</a></li>
<li><a href="defining-plans/checking-for-exceeded-quotas.md">💱 Plan eligibility</a></li>
<li><a href="defining-plans/preventing-feature-usage-failures.md">🎯 Sync usage values</a></li>
<li><a href="defining-plans/inherit-features-from-other-plans.md">🧓 Inherit features from other plans</a></li>
<li><a href="defining-plans/additional-metadata.md">🧵 Metadata</a></li>
</ul>

<h2>Stripe Features</h2>

<ul>
<li><a href="stripe-features/stripe-metered-billing/README.md">🕙 Stripe Metered Billing</a>

<ul>
<li><a href="stripe-features/stripe-metered-billing/metered-features.md">🎭 Metered Features</a></li>
<li><a href="stripe-features/stripe-metered-billing/mid-exceed-quotas-in-stripe-metered-billing.md">🚫 Mid-Exceed Quotas in Stripe Metered Billing</a></li>
</ul></li>
</ul>

<h2>Static Items</h2>

<ul>
<li><a href="static-items/defining-items.md">🧶 Defining Items</a></li>
</ul>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('_layouts.documentation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>