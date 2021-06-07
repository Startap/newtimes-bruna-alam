<?php

namespace Components\Controllers;

class PageController extends ApplicationController
{
    public function getHomepage()
    {
        $this->renderViewport(['website/homepage']);
    }

    public function getThankyou()
    {
        $this->renderViewport(['website/obrigado']);
    }

    public function getSalePage() 
    {
        $this->renderViewport(['website/venda_curso']);
    }

    public function getTreinamentoAdvogadoCeo() 
    {
        $this->renderViewport(['website/advogada_ceo']);
    }
}
