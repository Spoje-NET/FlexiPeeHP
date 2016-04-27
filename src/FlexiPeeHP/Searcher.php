<?php

/**
 * System.Spoje.Net - Objekt pro vyhledávání.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015,2016 Spoje.Net
 */

namespace FlexiPeeHP;

class Searcher extends FlexiBee
{
    /**
     * Prohledávaná tabulka.
     *
     * @var string
     */
    public $table = null;

    /**
     * Prohledávaný sloupeček.
     *
     * @var string
     */
    public $column = null;

    /**
     * Pole prohledávacích obejktů.
     *
     * @var array
     */
    public $sysClasses = [];

    /**
     * Třída pro hromadné operace s konfigurací.
     *
     * @param string $class Třída použitá k hledání
     */
    public function __construct($class = null, $selector = null)
    {
        parent::__construct();

        if (is_null($class)) {
            $this->registerClass('\FlexiPeeHP\Adresar');
            $this->registerClass('\FlexiPeeHP\Kontakt');
        } else {
            $this->registerClass($class);
        }
    }

    /**
     * Zaregistruje prohledávanou tabulku.
     *
     * @param string $className
     */
    public function registerClass($className)
    {
        $newClass                             = new $className();
        $this->sysClasses[$newClass->keyword] = clone $newClass;
    }

    /**
     * Prohledá zaregistrované tabulky.
     *
     * @param string $term
     *
     * @return array
     */
    public function searchAll($term)
    {
        $results = [];
        foreach ($this->sysClasses as $ieClass) {
            if (!is_null($this->table) && ($ieClass->getMyTable() != $this->table)) {
                continue;
            }
            if (!is_null($this->column)) {
                if (isset($ieClass->useKeywords[$this->column])) {
                    $ieClass->useKeywords = [$this->column => $ieClass->useKeywords[$this->column]];
                }
            }
            $found = $ieClass->searchString($term);
            if ($found) {
                $results[$ieClass->keyword] = $found;
            }
        }

        return $results;
    }
}
