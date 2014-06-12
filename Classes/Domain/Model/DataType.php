<?php
namespace Gjo\GjoExDatatypes\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class DataType extends AbstractEntity
{
    /**
     * @var string
     * @validate NotEmpty
     * @validate RegularExpression(regularExpression="/^.{1,30}$/u")
     */
    protected $stringWithoutBreak = '';

    /**
     * @param string $stringWithoutBreak
     * @return void
     */
    public function setStringWithoutBreak($stringWithoutBreak)
    {
        $this->stringWithoutBreak = $stringWithoutBreak;
    }

    /**
     * @return string
     */
    public function getStringWithoutBreak()
    {
        return $this->stringWithoutBreak;
    }
}