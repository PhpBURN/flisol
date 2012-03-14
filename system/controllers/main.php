<?php
/**
 * Controller Principal do site do Flisol 2012
 * GPL 2.0
 * 
 * @author Klederson Bueno <klederson@klederson.com>
 * @see http://www.phpburn.com
 * @version 1.0 | 14/04/2012
 */
class main extends Controller {
  
  /**
   * Home do Site 
   */
	public function index() {
    $viewData['mainContent'] = $this->loadView('principal/home',array(),true);
    $this->loadView('masterPage', $viewData);
	}

  /**
   * Tela de Inscrições 
   */
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

  /**
   * Tela de Participe com os links para as respectivas páginas 
   */
	public function participe() {
		$this->areaTitle = "Veja como participar do Flisol 2012";
    $this->breadcrumb = array(
        "Principal" => SYS_BASE_URL,
        "Participe"
    );
    
		$viewData['mainContent'] = $this->loadView('principal/participe',array(),true);
    $this->loadView('internalMasterPage', $viewData);
	}

  /**
   * Tela onde serão exibidos os Palestrantes do evento 
   */
	public function palestrantes() {
		$this->notImplemented();
	}
  
  /**
   * Tela wraper para chamar o formulário que já existia do Google Forms para Chamada de Trabalhos 
   */
  public function call_for_papers() {
    $this->areaTitle = "Chamada para Trabalhos";
    $this->breadcrumb = array(
        "Principal" => SYS_BASE_URL,
        "Participe" => SYS_BASE_URL . 'participe',
        "Call for Papers"
    );
    
		$viewData['mainContent'] = $this->loadView('principal/callforpapers',array(),true);
    $this->loadView('internalMasterPage', $viewData);
  }

  public function registrar_inscricao() {
    $this->areaTitle = "Chamada para Trabalhos";
    $this->breadcrumb = array(
        "Principal" => SYS_BASE_URL,
        "Participe" => SYS_BASE_URL . 'participe',
        "Confirmação de Inscrição"
    );
    
    $insc = new Inscricoes();
    
    $insc->nome = $_POST['nome'];
    $insc->sobrenome = $_POST['sobrenome'];
    $insc->rg = $_POST['rg'];
    $insc->email = $_POST['email'];
    $insc->website = $_POST['site'];
    $insc->cidade = $_POST['cidade'];
    
    if($insc->save()) {
      $viewData['pessoa'] = $insc->toArray();
      $viewData['mainContent'] = $this->loadView('principal/confirma_inscricao', $viewData);
    } else {
      print "Problema ao executar a operação!";
    }
  }
  
	protected function notImplemented() {
		print "NOT IMPLEMENTED YET!";
	}
  
  /**
   * Override da função padrão de loadView para que outros dados pudessem ser enviados para a view
   * sem a necessidade de ficar chamando os mesmos em cada action do controller.
   * 
   * @param String $view
   * @param Array $data
   * @param Boolean $toVar
   * @return String 
   */
  public function loadView($view, array $data, $toVar = false) {
    $data['tplBreadcrumb'] = $this->buildBreadCrumb();
    $data['tplAreaTitle'] = $this->areaTitle;

    return parent::loadView($view, $data, $toVar);
  }

  /**
   * Gerador de BreadCrumbs para o site
   * @return String 
   */
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