<?php
session_start();
require_once 'pdoconfig.php';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
  // echo "Conectado a $dbname em $host com sucesso.2";
} catch (PDOException $pe) {
    die("Não foi possível se conectar ao banco de dados $dbname :" . $pe->getMessage());
}
 
$conn = new mysqli( $host, $username, $password, $dbname); 



?>
<?php
// cria a instrução SQL que vai selecionar os dados
$query = sprintf("SELECT * FROM tab_login");
// executa a query
$dados = mysqli_query($conn,$query);
// transforma os dados em um array
$linha = mysqli_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysqli_num_rows($dados);
?>




<?php 
echo "O email digitado foi:";
echo $_GET['email']; 
$emaildigitado = $_GET['email'];
echo "a senha digitada foi:";
echo $_GET['passw']; 
$senhadigitada = $_GET['passw'];
?>




<?php
	// se o número de resultados for maior que zero, mostra os dados
	if($total > 0) {
		// inicia o loop que vai mostrar todos os dados
		do {
?>
			<p><?=$linha['email']?> / <?=$linha['senha']?></p>
            <?

        if ( ($linha['email'] == $emaildigitado) and ($linha['senha'] == $senhadigitada ) ) {

echo "usuário autenticado";
$_SESSION['autenticado'] = 'Sim';
echo $_SESSION['autenticado'];
$id_usuario = $linha['id_login'];
$_SESSION['id_usuario'] = $id_usuario ;
header('Location: minha-conta.php');




        } else {

            echo "usuário incorreto";

            $_SESSION['autenticado'] = 'Não';



        }

?>

<?php
		// finaliza o loop que vai mostrar os dados
		}while($linha = mysqli_fetch_assoc($dados));
	// fim do if
	}
?>