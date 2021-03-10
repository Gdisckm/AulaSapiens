<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=.0">
    <link rel="stylesheet" href="style.css">
    <title>Tabela de dados</title>
</head>
<body>
    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Endereço</th>
                <th>Número da casa</th>
                <th>Bairro</th>
                <th>Cidade</th>
                <th>Estado - UF</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Nome do país</th>
                <th>Data de nascimento</th>
                <th>Data atual</th>
                <th>Estado civil</th>
                <th>Idade atual</th>
                <th>Cadastro ativo</th>
            </tr>
        </thead>

        <?php

            $nome = "Joao Alberto";
            $sobrenome = "da Silva Queiroz";
            $endereco = "Av. Jatuarana";
            $numero_da_casa = "N 123";
            $bairro = "Solicista";
            $cidade = "Porto Velho";
            $estado = "Rondônia";
            $email = "Joao.alberto@gmail.com";
            $telefone = "(69)9876-5432";
            $nome_do_pais = "Brasil";
            $data_nascimento = "2000-13-05";
            $data_atual = date('Y-m-d');
            $estado_civil = "Solteiro";
            $idade = "20";
            $cadastro_ativo = "sim";

        ?>

        <tr>
            <td><?php echo $nome?></td>
            <td><?php echo $sobrenome?></td>
            <td><?php echo $endereco?></td>
            <td><?php echo $numero_da_casa?></td>
            <td><?php echo $bairro?></td>
            <td><?php echo $cidade?></td>
            <td><?php echo $estado?></td>
            <td><?php echo $email?></td>
            <td><?php echo $telefone?></td>
            <td><?php echo $nome_do_pais?></td>
            <td><?php echo $data_nascimento?></td>
            <td><?php echo $data_atual?></td>
            <td><?php echo $estado_civil?></td>
            <td><?php echo $idade?></td>
            <td><?php echo $cadastro_ativo?></td>
        </tr>

        <?php

            $nome = "Carlos Henrique";
            $sobrenome = "da Souza Oliveira";
            $endereco = "Av. Carlos Gomes";
            $numero_da_casa = "N 456";
            $bairro = "São Cristovão";
            $cidade = "Porto Velho";
            $estado = "Rondônia";
            $email = "carlinhos.45@gmail.com";
            $telefone = "(69)99654-8547";
            $nome_do_pais = "Brasil";
            $data_nascimento = "1997-25-01";
            $data_atual = date('Y-m-d');
            $estado_civil = "Casado";
            $idade = "24";
            $cadastro_ativo = "não";

        ?>

        <tr>
            <td><?php echo $nome?></td>
            <td><?php echo $sobrenome?></td>
            <td><?php echo $endereco?></td>
            <td><?php echo $numero_da_casa?></td>
            <td><?php echo $bairro?></td>
            <td><?php echo $cidade?></td>
            <td><?php echo $estado?></td>
            <td><?php echo $email?></td>
            <td><?php echo $telefone?></td>
            <td><?php echo $nome_do_pais?></td>
            <td><?php echo $data_nascimento?></td>
            <td><?php echo $data_atual?></td>
            <td><?php echo $estado_civil?></td>
            <td><?php echo $idade?></td>
            <td><?php echo $cadastro_ativo?></td>
        </tr>

        <?php

            $nome = "Bruna Azevedo";
            $sobrenome = "de Almeida Barros";
            $endereco = "Rua da beira";
            $numero_da_casa = "N 8546";
            $bairro = "Floresta";
            $cidade = "Porto Velho";
            $estado = "Rondônia";
            $email = "brnazv@gmail.com";
            $telefone = "(69)95421-8654";
            $nome_do_pais = "Brasil";
            $data_nascimento = "2001-19-01";
            $data_atual = date('Y-m-d');
            $estado_civil = "Solteira";
            $idade = "20";
            $cadastro_ativo = "não";

        ?>

        <tr>
            <td><?php echo $nome?></td>
            <td><?php echo $sobrenome?></td>
            <td><?php echo $endereco?></td>
            <td><?php echo $numero_da_casa?></td>
            <td><?php echo $bairro?></td>
            <td><?php echo $cidade?></td>
            <td><?php echo $estado?></td>
            <td><?php echo $email?></td>
            <td><?php echo $telefone?></td>
            <td><?php echo $nome_do_pais?></td>
            <td><?php echo $data_nascimento?></td>
            <td><?php echo $data_atual?></td>
            <td><?php echo $estado_civil?></td>
            <td><?php echo $idade?></td>
            <td><?php echo $cadastro_ativo?></td>
        </tr>

    </table>
</body>
</html>