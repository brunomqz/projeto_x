<?php 

// CLASSE ABSTRATA
class User 
{
    public int $id;
    protected string $nome;
    public $categoria;
    protected string $cpf;
    public string $genero;
    public string $login;
    protected string $senha;
    public string $email;
    protected string $telefone;
    protected string $data_nasc;


    public function __construct(int $id, string $nome, string $categoria, string $cpf, string $genero, string $login, string $senha, string $email, string $telefone, string $data_nasc)
    {
        $this->id = $id;   
        $this->nome = $nome;
        $this->categoria = $categoria;
        $this->cpf = $cpf;
        $this->genero = $genero;
        $this->login = $login;
        $this->senha = $senha;
        $this->email = $email;
        $this->telefone = $telefone;
        $this->data_nasc = $data_nasc;
    }

    public function cria_usuario(User $user)
    {

    }

    public function deleta_usuario()
    {
        
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function getData_nasc()
    {
        return $this->data_nasc;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function setNome(string $nome)
    {
        $this->nome = $nome;
    }

    public function setCategoria(string $categoria)
    {
        $this->categoria = $categoria;
    }

    public function setCpf(string $cpf)
    {
        $this->cpf = $cpf;
    }

    public function setgenero(string $genero)
    {
        $this->genero = $genero;
    }

    public function setLogin(string $login)
    {
        $this->login = $login;
    }

    public function setsenha(string $senha)
    {
        $this->senha = $senha;  
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    public function setTelefone(string $telefone)
    {
        $this->telefone = $telefone;
    }

    public function setDataNasc(string $setDataNasc)
    {
        $this->setDataNasc = $setDataNasc;
    }

}


// PACIENTE
class Paciente extends User 
{
    protected string $endereco; 
    protected string $cep;
    protected string $doenca_cronica;
    protected string $remedio_regular;

}

// MEDICO
class Medico extends User 
{
    public string $area_atuacao;
    public string $endereco_atuacao;
    public string $local_formacao;
    public string $data_formacao;

    public function cadastrar_atividade()
    {

    }

    public function atualiza_anamnese()
    {

    }
}
