<?php namespace Josreload\ChenkaCrud\Composers;

use Josreload\ChenkaCrud\Menu\MenuTopRepository;

class MenuTopComposer {

    /**
     * @var \Josreload\ChenkaCrud\Menu\MenuTopRepository
     */
    private $menu;

    function __construct(MenuTopRepository $menu)
    {
        $this->menu = $menu;
    }

    public function compose($view) {
        $view->with('menu_items', $this->menu->getAll());
    }
}