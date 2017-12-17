<?php
namespace Gap\Open\Contract\Repo;

use Gap\Open\Dto\AccessTokenDto;

interface FetchAccessTokenRepoInterface
{
    public function fetch(array $query): AccessTokenDto;
}
