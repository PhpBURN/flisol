<?php
class main extends Controller {
	public function index() {
        $this->loadView('masterPage', array());
	}

	public function inscricoes_gratuitas() {
		$this->notImplemented();
	}

	public function envolva_se() {
		$this->notImplemented();
	}

	public function palestrantes() {
		$this->notImplemented();
	}

	protected function notImplemented() {
		print "NOT IMPLEMENTED YET!";
	}
}
?>