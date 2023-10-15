aa<?php

namespace BergPlaza\ArrayMenu;

use BergPlaza\ArrayMenu\Controller\ArrayMenuController;

/**
 *
 */
class Bootstrap extends ArrayMenuController
{

    /**
     * @var array|string[]
     */
    protected array $init = ['tag' => 'ul', 'class' => 'navbar-nav me-auto mb-2 mb-lg-0'];

    /**
     * @var array|string[]
     */
    protected array $item = ['tag' => 'li', 'class' => 'nav-item'];

    /**
     * @var array
     */
    protected array $config = [
        'position' => 'default',
        'color' => 'bg-primary',
        'container' => 'container',
        'brand' => [
            'name' => 'WT.dev',
            'image' => false,
            'link' => 'https://bergplaza.nl'
        ],
        'off_canvas' => [
            'brand' => 'WT.dev',
            'position' => 'start',
        ]
    ];

    /**
     * @param array $array_menu
     * @param array $config
     */
    public function __construct(array $array_menu, array $config)
    {
        $this->setArrayMenu($array_menu);
        $this->start();
        $this->config = array_merge($this->config, $config);
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->navbar();
    }

    /**
     * @return string
     */
    protected function navbar(): string
    {

        $nav_container_logo = "<a class='navbar-brand' href='{$this->config['brand']['link']}'>{$this->config['brand']['image']}</a>";
        if ($this->config['brand']['image'] === false) {
            $nav_container_logo = "<a class='navbar-brand' href='{$this->config['brand']['link']}'>{$this->config['brand']['name']}</a>";
        }

        $data_target = 'wt_navbar_supported_content';
        $data_target_add = '';
        if ($this->config['off_canvas'] !== false) {
            $data_target = 'wt_navbar_supported_off_canvas';
            $data_target_add = 'data-bs-toggle="offcanvas"';
        }

        $nav_container_toggle = "
            <button class='navbar-toggler' type='button' 
                data-bs-toggle='collapse' 
                data-bs-target='#{$data_target}' 
                aria-controls='{$data_target}'
                {$data_target_add} 
                aria-expanded='false'
                aria-label='Toggle navigation'>
              <span class='navbar-toggler-icon'></span>
            </button>
            ";

        $nav_container_collapse = "<div class='collapse navbar-collapse' id='wt_navbar_supported_content'>{$this->getOutput()}</div>";

        $nav_container_off_canvas = "
            <div class='offcanvas offcanvas-{$this->config['off_canvas']['position']}' tabindex='-1' id='wt_navbar_supported_off_canvas' aria-labelledby='wt_navbar_off_canvas'>
                  <div class='offcanvas-header'>
                    <h5 class='offcanvas-title' id='wt_navbar_off_canvas'>{$this->config['off_canvas']['brand']}</h5>
                    <button type='button' class='btn-close' data-bs-dismiss='offcanvas' aria-label='Close'></button>
                  </div>
                  <div class='offcanvas-body'>
                  {$this->getOutput()}
                  </div>
                </div>
            </div>
        ";

        $nav_container_body = $this->config['off_canvas'] !== false ? $nav_container_off_canvas : $nav_container_collapse;

        $nav_container = "<div class='{$this->config['container']}'>
            {$nav_container_logo}
            {$nav_container_toggle}
            {$nav_container_body}
        </div>";

        return " <nav class='navbar navbar-expand-lg {$this->config['position']} {$this->config['color']}'> {$nav_container} </nav> ";
    }

}
