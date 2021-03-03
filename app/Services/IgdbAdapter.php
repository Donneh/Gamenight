<?php


namespace App\Services;


use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class IgdbAdapter implements GameApiInterface
{

    public function getToken()
    {
        $response = Http::post(getenv('IGDB_AUTH_ENDPOINT'), [
            'client_id' => getenv('IGDB_CLIENT_ID'),
            'client_secret' => getenv('IGDB_CLIENT_SECRET'),
            'grant_type' => getenv('IGDb_GRANT_TYPE'),
        ]);

        DB::table('settings')->upsert([
            [
                'key' => 'access_token',
                'value' => $response['access_token'],
                'category' => 'igdb'
            ],
            [
                'key' => 'expires_in',
                'value' => Carbon::now()->addSeconds($response['expires_in']),
                'category' => 'igdb'
            ],
        ], ['category', 'key'], ['value']);
    }
}
