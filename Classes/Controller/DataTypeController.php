<?php
namespace Gjo\GjoExDatatypes\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use Gjo\GjoExDatatypes\Domain\Model\DataType;

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

    /**
     * @param \Gjo\GjoExDatatypes\Domain\Model\DataType $dataType
     * @return void
     */
    public function showAction(DataType $dataType) {
        $this->view->assign('dataType', $dataType);
    }
}