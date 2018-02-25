<?php
class View {

	private $pageVars = array();
	private $template;

	public function __construct($template)
	{
		$this->template = ROOT_DIR.'/libraries/Smarty/custom_plugins/setseed_website_builder_views/'. $template .'.php';
	}

	public function set($var, $val)
	{
		$this->pageVars[$var] = $val;
	}

	public function render()
	{
		extract($this->pageVars);
		ob_start();
		require($this->template);
		return ob_get_clean();
	}
    
}
?>