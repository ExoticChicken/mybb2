<?php

namespace MyBB\Core\Repository;

use MyBB\Core\Registry\RegistryInterface;

class RepositoryRegistry implements RegistryInterface
{
    /**
     * @var string[]
     */
    protected $repositories;

    /**
     * @param string[] $repositories
     */
    public function __construct(array $repositories = [])
    {
        $this->repositories = $repositories;
    }

    /**
     * @param string $key
     * @param string $className
     */
    public function addRepository($key, $className)
    {
        $this->repositories[$key] = $className;
    }

    /**
     * @param string $key
     *
     * @return string
     */
    public function get($key)
    {
        return $this->repositories[$key];
    }

    /**
     * @return string[]
     */
    public function getAll()
    {
        return $this->repositories;
    }
}
