<?php

namespace App\Module\Admin\Presenter;

use Nette\Application\UI\Presenter;

class BasePresenter extends Presenter {

	public function formatLayoutTemplateFiles() {
		Debugger::fireLog('why is it not called?!');
		return [

		];
	}

}