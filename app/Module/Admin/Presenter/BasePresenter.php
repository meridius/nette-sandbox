<?php

namespace App\Module\Admin\Presenter;

use Nette\Application\UI\Presenter;

class BasePresenter extends Presenter {

	public function formatLayoutTemplateFiles() {
		$files = parent::formatLayoutTemplateFiles();
		$files[] = APP_DIR . "/presenters/templates/@layout.latte";
		return $files;
	}

}