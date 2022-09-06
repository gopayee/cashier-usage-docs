<?php

return [
    'Getting Started' => [
        'url' => 'docs/summary',
        'children' => [
            'Installation' => 'docs/getting-started/installation',
            'Preparing the model' => 'docs/getting-started/preparing-the-model',
            'Preparing the service provider' => 'docs/getting-started/preparing-the-service-provider',
        ],
    ],
    'Plans' => [
        'url' => 'docs/summary',
        'children' => [
            'Defining the plans' => 'docs/defining-plans/defining-the-plans',
            'Float and integer values' => 'docs/defining-plans/features/types-of-values',
            'Resetting values on payment' => 'docs/defining-plans/resetting-values',
            'Plan eligibility' => 'docs/defining-plans/checking-for-exceeded-quotas',
            'Sync usage values' => 'docs/defining-plans/preventing-feature-usage-failures',
            'Inherit features from other plans' => 'docs/defining-plans/inherit-features-from-other-plans',
            'Metadata' => 'docs/defining-plans/additional-metadata',
        ],
    ],
    'Stripe Features' => [
        'url' => 'docs/summary',
        'children' => [
            'Metered Features' => 'docs/stripe-features/stripe-metered-billing/metered-features',
            'Mid-Exceed Quotas in Stripe Metered Billing' => 'docs/stripe-features/stripe-metered-billing/mid-exceed-quotas-in-stripe-metered-billing',
        ],
    ],
    'Static Items' => [
        'url' => 'docs/summary',
        'children' => [
            'Defining Items' => 'docs/static-items/defining-items',
        ],
    ],
];
