<?php
namespace Gap\Open\Contract\Repo;

use Gap\Open\Dto\RefreshTokenDto;

interface CreateRefreshTokenRepoInterface
{
    public function create(RefreshTokenDto $refreshToken): void;
}
