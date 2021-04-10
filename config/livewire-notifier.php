<?php
return [
    'positionClass' => 'absolute top-0 right-0',
    'defaultMsgClass' => 'w-80  rounded-xl shadow-xl',
    'duration' => 5000,
    'types' => [
        'success' => [
            // 'msgClass'=>'bg-green-200',
            'msgClass'=>'bg-gradient-to-r from-green-200 to-green-300',
            'progressClass' => 'bg-green-500',
            'icon' => 'livewire-notifier::icons.success',
        ],
        'error' => [
            // 'msgClass'=>'bg-red-200',
            'msgClass'=>'bg-gradient-to-r from-red-200 to-red-300',
            'progressClass' => 'bg-red-500',
            'icon' => 'livewire-notifier::icons.error',
        ],
        'fail' => [
            // 'msgClass'=>'bg-red-200',
            'msgClass'=>'bg-gradient-to-r from-red-200 to-red-300',
            'progressClass' => 'bg-red-500',
            'icon' => 'livewire-notifier::icons.error',
        ],
        'warning' => [
            // 'msgClass'=>'bg-yellow-200',
            'msgClass'=>'bg-gradient-to-r from-yellow-200 to-yellow-300',
            'progressClass' => 'bg-yellow-500',
            'icon' => 'livewire-notifier::icons.error',
        ],
        'warn' => [
            // 'msgClass'=>'bg-yellow-200',
            'msgClass'=>'bg-gradient-to-r from-yellow-200 to-yellow-300',
            'progressClass' => 'bg-yellow-500',
            'icon' => 'livewire-notifier::icons.error',
        ],
        'info' => [
            // 'msgClass'=>'bg-blue-200',
            'msgClass'=>'bg-gradient-to-r from-blue-200 to-blue-300',
            'progressClass' => 'bg-blue-500',
            'icon' => 'livewire-notifier::icons.info',
        ],
        'default' => [
            // 'msgClass'=>'bg-gray-200',
            'msgClass'=>'bg-gradient-to-r from-gray-200 to-gray-300',
            'progressClass' => 'bg-gray-700',
            'icon' => 'livewire-notifier::icons.info',
        ]
    ]
];
