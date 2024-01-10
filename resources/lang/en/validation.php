<?php

$messages = [
    'required' => 'The :attribute is required.',
    'min' => [
        'numeric' => 'The :attribute must have a minimum length of :min characters.',
        'file' => 'The :attribute must be at least :min kilobytes.',
        'string' => 'The :attribute must be at least :min characters.',
        'array' => 'The :attribute must have at least :min items.',
    ],
    'confirmed' => 'The :attribute and confirmation do not match.',
    // Add more custom error messages for other validation rules as needed
];

return $messages;
