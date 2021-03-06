<?php

namespace Paphper\Contracts;

use React\Promise\PromiseInterface;

interface PageResolverInterface
{
    public function getPages(): PromiseInterface;

    public function getBuildFilename(string $page): string;

    public function getBuildFolder(string $page): string;
}
