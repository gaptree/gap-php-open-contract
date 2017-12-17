<?php
namespace Gap\Open\Contract\Repo;

use Gap\Open\Dto\RefreshTokenDto;

interface FetchRefreshTokenRepoInterface
{
    public function fetch(array $query): RefreshTokenDto;
}
