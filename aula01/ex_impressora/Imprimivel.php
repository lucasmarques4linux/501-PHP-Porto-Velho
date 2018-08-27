<?php 

abstract class Imprimivel
{
	public abstract function getConteudo();
}

interface ImprimivelInterface
{
	public function getConteudo();
}