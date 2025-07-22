<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
c::set('staticbuilder', true);
c::set('cache', false);
c::set('staticbuilder.assets', ['assets', 'content', 'thumbs']);
c::set('debug', true); 