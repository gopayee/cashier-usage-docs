<?php $__env->startSection('content'); ?><h1>🧶 Defining Items</h1>

<p>In case you are not using plans, you can describe items once in Cashier Register's service provider and then leverage it for some neat usage:</p>

<pre><code class="language-php">use Gopayee\CashierRegister\Saas;

Saas::item('Elephant Sticker', 'elephant-sticker')
    -&gt;price(5, 'EUR');
</code></pre>

<p>Then later be able to retrieve it:</p>

<pre><code class="language-php">use Gopayee\CashierRegister\Saas;

$item = Saas::getItem('elephant-sticker');

$item-&gt;getPrice(); // 5
$item-&gt;getCurrency(); // 'EUR'
</code></pre>

<p>Each item can have sub-items too:</p>

<pre><code class="language-php">use Gopayee\CashierRegister\Saas;

Saas::item('Sticker Pack', 'sticker-pack')
    -&gt;price(20, 'EUR')
    -&gt;subitems([
        Saas::item('Elephant Sticker', 'elephant-sticker')-&gt;price(5, 'EUR'),
        Saas::item('Zebra Sticker', 'zebra-sticker')-&gt;price(10, 'EUR'),
    ]);
</code></pre>

<pre><code class="language-php">$item = Saas::getItem('sticker-pack');

foreach ($item-&gt;getSubitems() as $item) {
    $item-&gt;getName(); // Elephant Sticker, Zebra Sticker, etc...
}
</code></pre>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('_layouts.documentation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>