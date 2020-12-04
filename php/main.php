<?php
    require('./student.php');

    $alunos_cadastrados = array();

    $nome = $_POST['nome'];
    $ra = $_POST['ra'];
    $sexo = $_POST['sexo'];
    $idade = $_POST['idade'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];

    /**
     * Construindo o objeto aluno através da instância da classe Student
     */
    $student = new Student($nome, $ra, $sexo, $idade, $telefone, $endereco, $email);
    
    /**
     * Adicionando o aluno criado a lista de alunos cadastrados
     */
    array_push($alunos_cadastrados, $student);

    /**
     * Printando todos os alunos cadastrados na tela
     * @param $array é o array de alunos cadastrados
     */
    function showAllRegisterStudents($array){
        foreach($array as $student){
             echo '

                <tr>
                    <td>'.$student->getNome().'</td>
                    <td>'.$student->getRA().'</td>
                    <td>'.$student->getSexo().'</td>
                    <td>'.$student->getIdade().'</td>
                    <td>'.$student->getEndereco().'</td>
                    <td>'.$student->getTelefone().'</td>
                    <td>'.$student->getEmail().'</td>
                </tr>
             
             ';
        }
    }

    $todos_estudantes_cadastrados = showAllRegisterStudents($alunos_cadastrados);


    // echo $nome;
    // echo $ra;
    // echo $sexo;
    // echo $idade;
    // echo $endereco;
    // echo $telefone;
    // echo $email;