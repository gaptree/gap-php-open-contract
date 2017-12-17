<?php
namespace Gap\Open\Contract\Repo;

use Gap\Open\Dto\AccessTokenDto;

interface CreateAccessTokenRepoInterface
{
    public function create(AccessTokenDto $accessToken): void;
}
