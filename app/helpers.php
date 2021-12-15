<?php

function prodenv($prod, $local)
{
    return config('app.env') == "production" ? $prod : $local;
}
