<?php
namespace Gjo\GjoExDataTypes\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class DataTypeController extends ActionController
{
    /**
     * @var \Gjo\GjoExDatatypes\Domain\Repository\DataTypeRepository
     * @inject
     */
    protected $dataTypeRepository;

    /**
     * @return void
     */
    public function findAllAction() {
        $this->view->assign('dataTypes', $this->dataTypeRepository->findAll());
    }
}