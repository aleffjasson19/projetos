<?php
include_once('config.php');

if(isset($_POST['nome'])) {
    $nome = $_POST['nome'];

    $query = "SELECT * FROM clientes WHERE NOME_CLIENTES LIKE '%$nome%'";
    $result = mysqli_query($conexao, $query);

    if ($result) {
        echo "<h2>Resultados da Pesquisa:</h2>";
        echo "<table border='1'>";
        echo "<tr><th>Nome</th><th>CEP</th><th>CPF</th><th>RG</th><th>Email</th><th>Data de Nascimento</th><th>Telefone</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$row['NOME_CLIENTES']."</td>";
            echo "<td>".$row['CEP_CLIENTES']."</td>";
            echo "<td>".$row['CPF_CLIENTES']."</td>";
            echo "<td>".$row['RG_CLIENTES']."</td>";
            echo "<td>".$row['EMAIL_CLIENTES']."</td>";
            echo "<td>".$row['DATANASCIMENTO_CLIENTES']."</td>";
            echo "<td>".$row['TELEFONE_CLIENTES']."</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Nenhum cliente encontrado.";
    }
}
?>


<?php
include_once('config.php');
?>


    <?php
    if (isset($_POST['nome'])) {
        $nome = $_POST['nome'];

        $query = "SELECT * FROM clientes WHERE NOME_CLIENTES LIKE '%$nome%'";
        $result = mysqli_query($conexao, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            echo "<h2>Resultados da Pesquisa:</h2>";
            echo "<table>";
            echo "<tr><th>Nome</th><th>CEP</th><th>CPF</th><th>RG</th><th>Email</th><th>Data de Nascimento</th><th>Telefone</th></tr>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['NOME_CLIENTES'] . "</td>";
                echo "<td>" . $row['CEP_CLIENTES'] . "</td>";
                echo "<td>" . $row['CPF_CLIENTES'] . "</td>";
                echo "<td>" . $row['RG_CLIENTES'] . "</td>";
                echo "<td>" . $row['EMAIL_CLIENTES'] . "</td>";
                echo "<td>" . $row['DATANASCIMENTO_CLIENTES'] . "</td>";
                echo "<td>" . $row['TELEFONE_CLIENTES'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p>Nenhum cliente encontrado.</p>";
        }
    }
    ?>


