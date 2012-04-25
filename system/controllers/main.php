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
   * Tela de Patrocinio 
   */
  public function patrocine() {
		$this->areaTitle = "Ajude a fazer deste um evento ainda melhor";
    $this->breadcrumb = array(
        "Principal" => SYS_BASE_URL,
        "Participe" => SYS_BASE_URL . "participe",
        "Apoio"
    );
    
		$viewData['mainContent'] = $this->loadView('principal/patrocine',array(),true);
    $this->loadView('internalMasterPage', $viewData);
	}

  /**
   * Tela onde serão exibidos os Palestrantes do evento 
   */
	public function palestrantes() {
    $this->areaTitle = "Palestras & Oficinas";
    $this->breadcrumb = array(
        "Principal" => SYS_BASE_URL,
        "Participe"=> SYS_BASE_URL . "participe",
        "Lista de Palestras e Oficinas"
    );
    
    $viewData = array();
    
		$palestras = $viewData['palestras'] = new Palestras();
    $palestras->order('titulo', 'ASC');
    $palestras->find();
    
    $viewData['mainContent'] = $this->loadView('palestras/home', $viewData,true);
    
    $this->loadView('internalMasterPage', $viewData);
	}
  
  public function verPalestra($url) {
    $url = explode(',', $url);
    $idPalestra = $url[0];
    $palestra = new Palestras();
    if($palestra->get($idPalestra)) {
      $palestrante = new Inscricoes();
      $palestrante->get($palestra->idPalestrante);
      
      $viewData['palestra'] = $palestra;
      $viewData['palestrante'] = $palestrante;
      
      
      
      $this->areaTitle = $palestra->titulo;
      $this->breadcrumb = array(
          "Principal" => SYS_BASE_URL,
          "Participe"=> SYS_BASE_URL . "participe",
          "Lista de Palestras e Oficinas" => SYS_BASE_URL . 'palestrantes',
          $palestra->titulo => $palestra->getUrl()
      );

      
      $viewData['mainContent'] = $this->loadView('palestras/itemPalestraFull',$viewData, true);
      $this->loadView('internalMasterPage', $viewData);
      
    } else {
      //Cai na index
      //@TODO O Ideal era ter uma função chamando uma _errorPage do tipo 404 customizada mas falta tempo pra fazer o layout :)
      //@klederson
      $this->index();
    }
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
  
	protected function notImplemented($message) {
		$viewData['title'] = "Aguarde...";
    $viewData['message'] = $message;
    
    $viewData['mainContent'] = $this->loadView('principal/message', $viewData, true);
    $this->loadView('masterPage', $viewData);
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
  
  public function add_palestra() {
    $palestra = new Palestras();
    
    if(md5($_POST['key']) == '9eb025b124791e45948be6667f984673') {
      if($_POST['idPalestra'])
        $palestra->get($_POST['idPalestra']);
      
      $palestra->titulo = $_POST['titulo'];
      $palestra->idPalestrante = $_POST['idPalestrante'];
      $palestra->resumo = $_POST['resumo'];
      $palestra->descricao = $_POST['descricao'];
      
      $palestra->save();
      
      var_dump($palestra->toArray());
    } else {
      var_dump('Acesso Negado');
    }
  }
}
?>
