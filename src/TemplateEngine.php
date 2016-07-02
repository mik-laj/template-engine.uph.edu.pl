<?php

namespace Uph\Miklaj\TemplateEngine;


class TemplateEngine{
	protected $data = [];
	protected $directory;

	function __construct()
	{
	}

	public function fetch($template, $data = [])
	{
		$template = new Template($this, $template, $data);
		return $template->fetch();
	}

	public function render($template, $data = [])
	{
		echo $this->fetch($template, $data);
	}

	public function addData($data)
	{
		$this->data = $this->data + $data;
	}

	public function getData()
	{
		return $this->data;
	}
}