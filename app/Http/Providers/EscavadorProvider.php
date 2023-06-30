<?php

namespace App\Http\Providers;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;

class EscavadorProvider
{
    private PendingRequest $client;

    public function __construct()
    {
        $this->client = Http::withToken(config('services.escavador.token'))
            ->withHeaders([
                'X-Requested-With' => 'XMLHttpRequest'
            ])
            ->baseUrl('https://api.escavador.com/api');
    }

    public function getClient(): PendingRequest
    {
        return $this->client;
    }

    public function busca(string $keyword)
    {
        return $this->client->get('/v1/busca', [
            'q' => $keyword,
            'qo' => 'd'
        ])->json();
    }

    public function buscaDiario(int $diarioId)
    {
        return $this->client->get('/v1/diarios/'.$diarioId)
            ->json();
    }
}
