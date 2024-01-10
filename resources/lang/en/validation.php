<?php

$messages = [
    'required' => 'The :attribute field is required.',
    'min' => [
        'numeric' => 'The :attribute must be at least :min.',
        'file' => 'The :attribute must be at least :min kilobytes.',
        'string' => 'The :attribute must be at least :min characters.',
        'array' => 'The :attribute must have at least :min items.',
    ],
    'confirmed' => 'The :attribute confirmation does not match.',
    // Add more custom error messages for other validation rules as needed
];

return $messages;
