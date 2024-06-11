<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('our-channel', function ($user) {
    return true;
});