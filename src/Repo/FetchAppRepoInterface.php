<?php
namespace Gap\Open\Contract\Repo;

use Gap\Open\Dto\AppDto;

interface FetchAppRepoInterface
{
    public function fetch(array $query): AppDto;
}
