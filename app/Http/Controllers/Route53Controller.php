<?php

namespace App\Http\Controllers;

use Aws\Route53Domains\Route53DomainsClient;

class Route53Controller extends Controller
{
    private $client;

    public function __construct()
    {
        if (!$this->client) {
            return $this->client = Route53DomainsClient::factory(array(
                'region'      => 'us-east-1',
                'version'     => 'latest',
            ));
        }
    }

    /**
     * Get list of domains from AWS
     *
     * 
     */
    public function getAllDomains()
    {
       

        $result = $this->client->listDomains();

        dd($result);
    }

    /**
     * Get DNS details for each domain
     *
     * 
     */
    public function getDnsDetails($domain)
    {
       
        $result = $this->client->GetDomainDetail($domain);

        dd($result);
    }

  
}
