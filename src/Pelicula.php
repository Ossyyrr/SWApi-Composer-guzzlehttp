<?php


namespace StarWars;


class Pelicula
{
    private $id;
    private $titulo;

    public function __construct(int $id, string $titulo)
    {
        $this->id = $id;
        $this->titulo = $titulo;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getTitulo(): string
    {
        return $this->titulo;
    }



}