<?php 

namespace Uph\Miklaj\TemplateEngine;


class Template{
	protected $engine; 
	protected $file;
	protected $data = [];
	protected $sections = [];
	protected $layout = null;

	public function __construct(TemplateEngine $engine, $file, $data = [], $sections = [])
	{
		$this->engine = $engine;
		$this->file = $file;
		$this->data = $engine->getData() + $data;
		$this->sections = $sections;
	}

	public function fetch(){
		extract($this->data);

		ob_start();

		include $this->file;

		$content = ob_get_clean();

		if($this->layout){
			$template = new Template(
				$this->engine, 
				$this->layout, 
				$this->data, 
				$this->sections + ['content'=> $content]
			); 
			return $template->fetch();
		}
		return $content;
	}

	public function layout($name){
		$this->layout = $name;
	}

	public function start($name) {
		ob_start();
	}

	public function stop($name) {
		$this->sections[$name] = ob_get_clean();
	}

	public function section($name){
		return $this->sections[$name];
	}

}