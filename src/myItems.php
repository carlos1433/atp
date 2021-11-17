<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="/imgs/ca.ico" type="image/x-icon">
    <title>userName - Coisas Emprestadas</title>
</head>
<body>
    <form action="#">
        <div class="myItemsTableContainer">
            <table>
                <tr>
                    <th>Item</th>
                    <th>Data Empréstimo</th>
                    <th>Contato Destinatário</th>
                    <th>Data Devolução</th>
                    <th>Devolvido</th>
                </tr>
                <tr>
                    <td>Livro</td>
                    <td>17/10/2021</td>
                    <td>fulano@gmail.com</td>
                    <td>17/11/2021</td>
                    <td><input type="checkbox" value=""></td>
                </tr>
                <tr>
                    <td>Blusa</td>
                    <td>18/10/2021</td>
                    <td>jose@gmail.com</td>
                    <td>25/10/2021</td>
                    <td><input type="checkbox" value=""></td>
                </tr>
                <tr>
                    <td>Mesa</td>
                    <td>19/11/2021</td>
                    <td>jose@gmail.com</td>
                    <td><input type="date" name="" id=""></td>
                    <td><input type="checkbox" value=""></td>
                </tr>
            </table>
        </div>
        <div class="buttonWrapper">
            <button class="backButton">
                <a href="mainPage.php" class="buttonLink">Voltar</a>
            </button>
            <button class="saveButton" type="submit">
                <a href="#" class="buttonLink">Salvar</a>
            </button>
            <button class="registerItemButton">
                <a href="registerItem.php" class="buttonLink">Cadastrar Item</a>
            </button>
        </div>
    </form>
</body>
</html>