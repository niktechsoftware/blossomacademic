<?php

$this->load->view('top/headercss');
$this->load->view('top/header');
$this->load->view($page);
$this->load->view('bottom/footer');
$this->load->view('bottom/footerjs');

?>