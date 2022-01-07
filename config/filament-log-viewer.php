<?php
// config for Rabol/FilamentLogviewer
return [
    'navigation_group' => 'System',
    'user_class' => App\Models\User::class,
    'policy_class' => \Rabol\FilamentLogviewer\Policies\LogFilePolicy::class,
];
