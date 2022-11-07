<?php

function path($section) {
    $pathMask = ROOT_DIR.DIRECTORY_SEPARATOR.'%s';
    switch (strtolower($section)) {
        case 'controller':
            return sprintf($pathMask, 'Controller');
            break;
        case 'config':
            return sprintf($pathMask, 'Config');
            break;
        case 'model':
            return sprintf($pathMask, 'Model');
            break;
        case 'view':
            return sprintf($pathMask, 'View');
            break;
    }
}