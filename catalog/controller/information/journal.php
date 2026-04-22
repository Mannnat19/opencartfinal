<?php

namespace Opencart\Catalog\Controller\Information;

class Journal extends \Opencart\System\Engine\Controller
{

    public function index(): void
    {

        $this->document->setTitle('Journal');

        $data['heading_title'] = 'Journal Page';

        // Load header + footer (IMPORTANT)
        $data['header'] = $this->load->controller('common/header');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput(
            $this->load->view('information/journal', $data)
        );
    }
}
