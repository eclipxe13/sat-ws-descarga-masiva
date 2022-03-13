<?php

declare(strict_types=1);

namespace PhpCfdi\SatWsDescargaMasiva\Tests\Integration;

use PhpCfdi\SatWsDescargaMasiva\Service;
use PhpCfdi\SatWsDescargaMasiva\Shared\ServiceEndpoints;

final class ConsumeRetencionesServicesUsingFakeFielTest extends ConsumeServiceTestCase
{
    protected function createService(): Service
    {
        $this->markTestSkipped('El servicio del SAT está fallando');
//        $requestBuilder = $this->createFielRequestBuilderUsingTestingFiles();
//        $webClient = $this->createWebClient();
//        return new Service($requestBuilder, $webClient, null, ServiceEndpoints::retenciones());
    }
}
