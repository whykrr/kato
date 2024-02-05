<?php

if (!function_exists('renderID')) {
    function renderID($name)
    {
        // remove underscore to space
        $id = str_replace('_', ' ', $name);

        // make id to ucfirst
        $id = ucfirst($id);

        return str_replace(' ', '', $id);
    }
}
if (!function_exists('bsText')) {
    function bsText($name, $label, $value = null, $attributes = array())
    {
        $id = renderID($name);
        echo "<label for=\"input$id\" class=\"form-label\">$label</label>
        <input type=\"password\" name=\"name\" class=\"form-control form-control-sm\" id=\"input$id\" aria-describedby=\"help$id\">";
    }
}
