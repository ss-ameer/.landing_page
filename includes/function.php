<?php
# Debugging function to dump and die
function dd($var): void
{
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
    exit;
}

# Escapes a string for HTML output
function esc(string $string): string
{
    return htmlspecialchars($string, ENT_QUOTES);
}

# Escapes an array value using dot notation
function esc_arr(array $data, string $key): string
{
    foreach (explode('.', $key) as $k) {
        if (!isset($data[$k])) {
            return '';
        }
        $data = $data[$k];
    }

    return htmlspecialchars((string) $data, ENT_QUOTES);
}
