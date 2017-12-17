<?php
namespace Gap\Open\Contract\Repo;

use Gap\Open\Dto\AuthCodeDto;

interface CreateAuthCodeRepoInterface
{
    public function create(AuthCodeDto $authCode): void;
}
