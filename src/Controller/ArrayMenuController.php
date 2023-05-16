<?php

namespace Wt\ArrayMenu\Controller;

use Wt\ArrayMenu\Traits;

/**
 *
 */
class ArrayMenuController
{

    use Traits\ArrayMenuTraits;

    /**
     * @var ?string
     */
    protected ?string $output = null;

    /**
     * @return $this
     */
    public function start()
    {
        $this->make($this->getArrayMenu());
        return $this;
    }

    /**
     * @return string
     */
    public function show()
    {
        return $this->getOutput();
    }

    /**
     * @param array $array_level
     * @return void
     */
    protected function make(array $array_level): void
    {
        $config = array_merge($this->getConfigBase(), $array_level['config'] ?? []);

        $config_string = implode('', array_map(function ($key, $value) {
            $vv = trim($value . ' ' . @$this->getInit()[$key]);
            return "{$key}='{$vv}' ";
        }, array_keys($config), $config));

        $this->setOutput("<" . $this->getInit()['tag'] . " {$config_string}>\n");

        unset($array_level['config']);
        foreach ($array_level as $itens) {

            $this->makeItens($itens);

            if (isset($itens['level']) && is_array($itens['level']))
                $this->make($itens['level']);

            $this->setOutput("</" . $this->getItem()['tag'] . ">\n");

        }

        $this->setOutput("</" . $this->getInit()['tag'] . ">\n");
    }

    /**
     * @param array $array_item
     * @return void
     */
    protected function makeItens(array $array_item): void
    {
        $this->setOutput("<" . $this->getItem()['tag'] . " class='" . $this->getItem()['class'] . "'>");

        if (isset($array_item['link']))
            $this->setOutput("<a class='" . @$array_item['class'] . "' href='" . @$array_item['link'] . "'>");

        $this->setOutput($array_item['name']);

        if (isset($array_item['link']))
            $this->setOutput("</a>");

    }

    /**
     * @param $string
     * @return string
     * @deprecated
     */
    public function closeTag($string): string
    {
        $tag = explode(" ", $string);
        return $tag[0];
    }

    /**
     * @return string
     */
    public function getOutput(): string
    {
        return $this->output;
    }

    /**
     * @param string $output
     */
    public function setOutput(string $output): void
    {
        $this->output .= $output;
    }


}
