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
     * @var string
     * @validate RegularExpression(regularExpression="/^.{0,100}$/us")
     */
    protected $stringWithBreak = '';

    /**
     * @var string
     * @validate RegularExpression(regularExpression="/^.{0,20}$/u")
     */
    protected $password = '';

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

    /**
     * @param string $stringWithBreak
     * @return void
     */
    public function setStringWithBreak($stringWithBreak)
    {
        $this->stringWithBreak = $stringWithBreak;
    }

    /**
     * @return string
     */
    public function getStringWithBreak()
    {
        return $this->stringWithBreak;
    }

    /**
     * @param string $password
     * @return void
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }
}