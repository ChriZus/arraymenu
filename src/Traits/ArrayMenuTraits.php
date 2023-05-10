<?php

namespace Wt\ArrayMenu\Traits;

trait ArrayMenuTraits
{

    protected array $config_base = [
        'type' => '',
        'start' => '',
        'class' => '',
    ];

    /**
     * @var array|string[]
     */
    protected array $init = ['tag' => 'ul', 'class' => ''];

    /**
     * @var array|string[]
     */
    protected array $item = ['tag' => 'li', 'class' => ''];

    /**
     * @var array
     */
    protected array $array_menu;

    /**
     * @return array
     */
    public function getArrayMenu(): array
    {
        return $this->array_menu;
    }

    /**
     * @param array $array_menu
     */
    public function setArrayMenu(array $array_menu): void
    {
        $this->array_menu = $array_menu;
    }

    /**
     * @return array
     */
    public function getInit(): array
    {
        return $this->init;
    }

    /**
     * @param array $init
     */
    public function setInit(array $init): void
    {
        $this->init = $init;
    }

    /**
     * @return array
     */
    public function getItem(): array
    {
        return $this->item;
    }

    /**
     * @param array $item
     */
    public function setItem(array $item): void
    {
        $this->item = $item;
    }

    /**
     * @return array|string[]
     */
    public function getConfigBase(): array
    {
        return $this->config_base;
    }

    /**
     * @param array|string[] $config_base
     */
    public function setConfigBase(array $config_base): void
    {
        $this->config_base = $config_base;
    }
}
