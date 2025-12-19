return [
    'paths' => ['api/*'],   // apply CORS to API routes
    'allowed_methods' => ['*'],  // GET, POST, PUT, DELETE, OPTIONS
    'allowed_origins' => ['https://your-frontend.onrender.com'], // your frontend URL
    'allowed_headers' => ['*'],
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => false,
];
