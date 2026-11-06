<?php
namespace App\Contracts;

use App\Core\Request;

/**
 * MiddlewareInterface
 * Kontrak utama untuk semua class Middleware dalam sistem.
 */
interface MiddlewareInterface
{
    /**
     * Memproses request HTTP sebelum mencapai controller.
     * 
     * @param Request $request
     * @param callable $next Handler berikutnya dalam pipeline
     */
    public function handle(Request $request, callable $next): void;
}