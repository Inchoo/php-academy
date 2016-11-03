<?php

class View
{
    private $layout = 'layout';

    /**
     * Change layout
     *
     * @param $name
     * @return $this
     */
    public function layout($name)
    {
        $this->layout = basename($name);
        return $this;
    }

    /**
     * Render view file
     * @param $name
     * @param array $args
     * @return $this
     */
    public function render($name, $args = [])
    {
        /**
         * First, we need to "render" {view}.phtml and capture its output
         */
        ob_start();
        extract($args);
        include BP . "app/view/$name.phtml";
        $content = ob_get_clean();

        /**
         * Then, we render {layout}.phtml and pass view output as $content
         */
        if($this->layout) {
            include BP . "app/view/{$this->layout}.phtml";
        } else {
            echo $content;
        }

        return $this;
    }

    /**
     * Escapes html
     * @param $value
     */
    public function escapeHtml($value)
    {
        //@todo
    }

}