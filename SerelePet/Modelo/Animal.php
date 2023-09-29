<?php

class Animal{
    
    private ?int $id;  
    private string $tipo;    
    private string $nome;    
    private string $descricao;    
    private string $imagem;
    private float $idade;
    
    public function __construct(?int $id, 
                                string $tipo, 
                                string $nome, 
                                string $descricao, 
                                string $imagem = "logo.png", 
                                float $idade)
    {
        $this->id = $id;
        $this->tipo = $tipo;
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->imagem = $imagem;
        $this->idade = $idade;
    }

    /**
     * Get the value of id
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of tipo
     */
    public function getTipo(): string
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     */
    public function setTipo(string $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get the value of nome
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of descricao
     */
    public function getDescricao(): string
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     */
    public function setDescricao(string $descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of imagem
     */
    public function getImagem(): string
    {
        return $this->imagem;
    }

    /**
     * Set the value of imagem
     */
    public function setImagem(string $imagem): self
    {
        $this->imagem = "img/".$imagem;

        return $this;
    }

    /**
     * Get the value of idade
     */
    public function getIdade(): float
    {
        return $this->idade;
    }

    /**
     * Set the value of idade
     */
    public function setIdade(float $idade): self
    {
        $this->idade = $idade;

        return $this;
    }

    
    


        
}
?>