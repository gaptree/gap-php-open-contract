<?php
namespace Gap\Open\Contract\Repo;

use Gap\Open\Dto\AuthCodeDto;

interface FetchAuthCodeRepoInterface
{
    public function fetch(array $query): AuthCodeDto;
}
