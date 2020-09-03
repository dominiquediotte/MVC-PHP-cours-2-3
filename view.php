<?php

class View
{
    const PATH = 'C:\\wamp64\\www\\cours2\\';
    private string $template;
    
    public function __construct(string $template)
    {
        $this->template = $template;
    }

    public function render(array $data)
    {
        extract($data);

        ob_start();
        include(self::PATH . $this->template);
        $content = ob_get_contents();
        ob_end_clean();

        return $content;
    }
}
