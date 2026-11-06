<?php
namespace App\Middleware;

use App\Contracts\MiddlewareInterface;
use App\Core\Request;

/**
 * CorsMiddleware
 * Mengatur header Cross-Origin Resource Sharing (CORS)
 * agar REST API dapat diakses dengan aman dari domain/port lain.
 */
class CorsMiddleware implements MiddlewareInterface
{
    public function handle(Request $request, callable $next): void
    {
        // Izinkan semua domain/origin (atau sesuaikan domain khusus)
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
        header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With");

        // Tangani preflight request (HTTP OPTIONS)
        if ($request->method() === 'OPTIONS') {
            http_response_code(200);
            exit;
        }

        // Lanjutkan ke middleware / controller berikutnya
        $next($request);
    }
}