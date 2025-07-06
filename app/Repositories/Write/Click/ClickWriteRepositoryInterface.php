<?php

namespace App\Repositories\Write\Click;

use App\Models\Click;

interface ClickWriteRepositoryInterface
{
    public function store(array $data): Click;
}
