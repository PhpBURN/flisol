<?php
class main extends Controller {
	public function index() {
    $viewData['mainContent'] = $this->loadView('principal/home',array(),true);
    $this->loadView('masterPage', $viewData);
	}

	public function inscricoes_gratuitas() {
    $this->areaTitle = "Inscrições Gratuitas";
    $this->breadcrumb = array(
        "Principal" => SYS_BASE_URL,
        "Participe"=> SYS_BASE_URL . "participe",
        "Inscrições Gratuitas"
    );
    
		$viewData['mainContent'] = $this->loadView('principal/inscricoes',array(),true);
    $this->loadView('internalMasterPage', $viewData);
	}

	public function participe() {
		$this->areaTitle = "Veja como participar do Flisol 2012";
    $this->breadcrumb = array(
        "Principal" => SYS_BASE_URL,
        "Participe"
    );
    
		$viewData['mainContent'] = $this->loadView('principal/participe',array(),true);
    $this->loadView('internalMasterPage', $viewData);
	}

	public function palestrantes() {
		$this->notImplemented();
	}

	protected function notImplemented() {
		print "NOT IMPLEMENTED YET!";
	}
  
  public function loadView($view, array $data, $toVar = false) {
    $data['tplBreadcrumb'] = $this->buildBreadCrumb();
    $data['tplAreaTitle'] = $this->areaTitle;

    return parent::loadView($view, $data, $toVar);
  }

  private function buildBreadCrumb() {
    if (is_array($this->breadcrumb)) {
      foreach ($this->breadcrumb as $index => $value) {
        $breadcrumb .= ! is_null($breadcrumb) ? "<li>&#8250;&nbsp;</li>" : NULL;
        if (is_string($index))
          $breadcrumb .= sprintf("<li><a class='current_page' href='%s' title='%s' alt='%s'>%s</a></li>", $value, $index, $index, $index);
        else
          $breadcrumb .= sprintf("<li>%s</li>", $value);
      }
    }
    return $breadcrumb;
  }
}
?>