<?php

declare(strict_types=1);

require_once 'functions.php';

render_template('head', $data);
render_template('main', array_merge($data, ["until_message" => $untilMessage]));
render_template('styles', $data);






