<?php

/**
 * Abstract Class at src/TemplateListView.php.
 * File containing TemplateListView class.
 * @api
 * @author Isaac Adzah Sai <isaacsai030@gmail.com>
 * @version 1.0.0
 */
namespace Cybersai\USSD;

/**
 * Abstract Class TemplateListView define pattern to be followed by child classes.
 * This class is an abstract class.
 * It uses the Template Method Design pattern
 * to generate the necessary view for the USSD.
 * @package Cybersai\USSD
 */
abstract class TemplateListView extends TemplateView implements ListView
{
    /** @var string $title Title of the ListView */
    protected $title;
    /** @var mixed[] $list */
    protected $list;
    /** @var int $page */
    protected $page;
    /** @var int $number_per_page */
    protected $number_per_page;

    abstract protected function getSubTitle();
    abstract public function getSubTitleSeparator();
    public final function parseListToString()
    {

    }

    /**
     * @inheritDoc
     */
    protected final function getBody()
    {
        return "{$this->getSubTitle()}{$this->getSubTitleSeparator()}{$this->parseListToString()}{$this->getSubFooterSeparator()}{$this->getSubFooter()}";
    }
}