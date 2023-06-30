<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\PendingRequest;
class Api
{
    private $api;
    public function __construct()
    {
        $this->api = Http::withHeaders([
            "Authorization" => "Bearer {eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYjBhYmFjZGY1ZjMxM2Q5ZTY1MWZhNDY2NjRhOGIwMDU5ZDE2YzkxMWM3MTcxM2IzZjUxZTMwYzNjMTMzZDM4ZTgwYWVmODQ1NDAxYzFjYzEiLCJpYXQiOjE2NzA0MjU0NjYsIm5iZiI6MTY3MDQyNTQ2NiwiZXhwIjoxOTg2MDQ0NjY2LCJzdWIiOiIxMzAyMTY4Iiwic2NvcGVzIjpbImFjZXNzYXJfYXBpX3BhZ2EiXX0.rGCNr9WosG-0rSVbhPa1-XqUfxyGdl9AZOxsIr8WqeiNxGZAfxtIUhyF3gSnP-R0ehqRxIf_vZl_S9OmX1vNR7X4KOagIXDZsGrlcaVveetBSa6FjSIr_a3H71knYvXWutglSwr_CjrCMwB_TcXaQfNOXa1D6-PlyS3bf6fVfbOdVA867UUwdX9EmPnwSWxiNX2RC4vwqlKHekjDgQpLYQBEYO6dhiBcbi9g1fnRlUO1oNBeO3tJ8GQfOCyC_NhsF9tOc8TIFkpxNQBzaM9X0AdBPbs3kevKku5Bir5aLZ7i-Av7afCTNzbXWiCkelffxZ9117HThJYhazh_F7-n61gaPEDdwEXsXaKIqov7gOcpugm84z1xHjppjMfPOLrYAgb6tK3TVIMSGlSwDWC6ZGLisIi9524usq5tJB-oo3o7_i7i9L-rsoYISKIXQohxfTAeaefNdyLjFYgSCCPUiesefqorc3-Ci13T-_x8VJ6_AcNhvMKEao20rg6VKRIuxb-f6HPvR_EaDJwyYR2J5NAmR4sGz5a2257qTw_-QYZh-u_rs0Y1bASy_2M2DXcRkvzQBQcEbuKzDVrNacmcmXbKkgnU5HTMXzHrIQlygrmfO6W9zfNdNlaQPeLXuJXBjQHGfXruDk8aT7LBVPbVwt4zSfuKL8M0xiosOuh7OBw}",
            "X-Requested-With" => "XMLHttpRequest",
        ]);
    }
    public function getApi()
    {
        return $this->api;
    }
}
