<?php

class Skill
{
    protected string $name;
    protected ?string $iconLink;

    public function __construct(string $_name, string $_iconLink)
    {
        $this->name = $_name;
        $this->iconLink = $_iconLink;
    }


    public function GetName(): string
    {
        return $this->name;
    }
    public function GetIconLink(): string
    {
        return $this->iconLink;
    }
}
