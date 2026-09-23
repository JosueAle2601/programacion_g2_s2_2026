<?php

class validarNumero {
	private int $numero;

	function __construct(int $numero) {
		$this->numero = $numero;
	}

	function getMsg(): string {
		$modulo = $this->numero % 2;

		if ($modulo == 0) {
			return "El número ". $this->numero. " es par";
		} else {
			return "El número ". $this->numero. " es impar";
		}
	}
}