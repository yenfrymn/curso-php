<?php
const API_URL = "https://whenisthenextmcufilm.com/api";
# Inicializar una nueva sesión de cURL; ch = cURL handle

function render_template(string $template, array $data = []) {
    extract($data);
    require "templates/$template.php";
}

function get_data(string $url) {
    $result = file_get_contents($url);
    $data = json_decode($result, true);
    return $data;
}

function get_until_message(int $days):string {
    return  match (true) {
        $days === 0   => "Hoy se estrena! :party",
        $days === 1   => "Mañana se estrena! :tada",
        $days < 7   => "Esta Semana se estrena",
        $days <30 => "Este mes se estrena",
        default   => "$days días hasta el estreno",
    };
}
//$data = get_data(API_URL);
//$untilMessage=get_until_message($data['days_until']);