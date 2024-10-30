=== Lisette Cost Calculator ===
Contributors: (sergmoro1)
Tags: questionnaire, calculator
Requires at least: 4.0
Tested up to: 5.8
Requires PHP: 5.3
Stable tag: 1.2
License: MIT
License URI: https://opensource.org/licenses/mit-license.php

Show questionnaire for calculating final sum of order.

== Description ==

Any product consists of elements. 
Quite often the manufacturer allows you to select the components in advance. 

For this goal should be a visual questionnaire. 
This plugin helps simply define such a questionnaire.

== Installation ==

1. Unpack archive to folder `/wp-content/plugins/`.
2. Activate plagin Lisette-cost-calculator.
3. Add post or page and insert short-code - `[cost_calculator]`.
4. Place the widget `Lisette_CC Sum` on the appropriate sidebar or in another place

=== Important ===

Plugin works for Twenty Fourteen theme. It will work for others too but
some changes in a file `/css/fixed.css` can be needed.

=== Settings & Explanations ===

Price, captions, images can be changed in a configuration file
`/wp-content/plugins/lisette-cost-calculator/config/questionnaire.php`.

There may be any other name of a questionnaire file. In this case a new name should be set in a file
`lisette-cost-calculator.php`.

    $application = new LisetteCCApplication([
        'name' => 'questionnaire'
    ]);

Any question can has an answer. Any answer can has: `caption`, `image`, `value`.
If parameter `value` is a number, then it will be added to total sum.

    'question' => 'Headboard', 
        'answers' => [
            [
                'caption' => 'standard',
                'image' => 'head-ordinary-2.jpg',
                'value' => 500,
            ],
            [
                'caption' => 'design',
                'image' => 'head-design-2.jpg',
                'value' => 2550,
            ],
        ],

If before number symbol "*" placed, then it is a coefficient.

    'question' => 'Age',
        'answers' => [
            [
                'caption' => 'Adult', 
                'image' => 'men.jpg', 
                'value' => '*1',
            ],
            [
                'caption' => 'Child', 
                'image' => 'child.jpg', 
                'value' => '*1.3',
            ],
        ],

All images should be placed in a folder `/wp-content/plugins/lisette-cost-calculator/img/`.

If caption too long add `small` parameter:

    'question' => 'Model',
        'answers' => [
            [
                'caption' => 'with lifting mechanism', 
                'image' => 'with-lifting.jpg', 
                'value' => 230, 
                'small' => true,
            ],
        ],

If parameter `image` is not specified, item will be printed without image.

    'question' => 'Price class',
        'answers' => [
            ['caption' => 'econom', 'value' => '*1'],
            ['caption' => 'elite', 'value' => '*2'],
        ],
