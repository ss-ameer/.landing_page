<?php

# Require local file
// function require_local($path)
// {
//     return require './' . $path;
// }

# Escape array value by key (dot notation)
function esc_arr(array $data, $key)
{
    $key = explode('.', $key);

    foreach ($key as $k) {
        if (is_array($data) && isset($data[$k])) {
            $data = $data[$k];
        } else {
            return null;
        }
    }

    return htmlspecialchars($data, ENT_QUOTES);
}
