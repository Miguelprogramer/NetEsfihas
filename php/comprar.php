<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NetEsfihas - Peça já!</title>
    <link rel="stylesheet" href="../css/styles1.css">
</head>
<body>
    <header>
        <a href="../index.php">Voltar</a>
        <h1>Faça seu pedido</h1>
        <img class="logo" src="../images/logo.png" alt="Logo NetEsfihas">

    </header>
    <main>
        <form method="POST" action="./recebe.php">
            <h2>Dados pessoais</h2>
            <fieldset>
                <label for="nome">Nome</label>
                <input type="text" name="nome" size="40" maxlength="50" placeholder="Digite seu nome completo..." required >

                <label for="nome">Telefone</label>
                <input type="tel" name="fone" size="20" maxlength="20" placeholder="Exemplo (22) 22222-2222" required>

                <label for="nome">endereco</label>
                <input type="text" name="end" size="40" maxlength="50" placeholder="Digite seu endereço completo" required>

                <label for="nome">complemento</label>
                <input type="text" name="comp" size="40" maxlength="20" placeholder="Digite um complemento (Não obrigatório)" >
            </fieldset>
            <h2>Escolha seu combo NetEsfihas</h2>
            <fieldset>
                <label for="esfiha1">Esfiha</label>
                <select name="esfiha1" required>
                    <option value="1">Esfiha de Queijo--R$4,99</option>
                    <option value="2">Esfiha de carne--R$4,99</option>
                    <option value="3">Esfiha de Frango--R$4,99</option>
                    <option value="4">Esfiha Doce--R$4,99</option>
                </select>

                <label for="qtd1">Quantidade</label>
                <select name="qtd1">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                
                <label for="esfiha2">Esfiha</label>
                <select name="esfiha2">
                    <option value="0"> </option>
                    <option value="1">Esfiha de Queijo--R$4,99</option>
                    <option value="2">Esfiha de carne--R$4,99</option>
                    <option value="3">Esfiha de Frango--R$4,99</option>
                    <option value="4">Esfiha Doce--R$4,99</option>
                </select>

                <label for="qtd2">Quantidade</label>
                <select name="qtd2">
                    <option value="0"> </option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>

                <label for="bebida">Bebida</label>
                <select name="bebida">
                    <option value="0"> </option>
                    <option value="1">Coca cola 2L--R$9,99</option>
                    <option value="2">Guaraná Antartica 2L--R$6,50</option>
                    <option value="3">Conti Cola 2L--R$8,50</option>
                    <option value="4">Suco de Laranja Gourmet 700ml--R$14,50</option>
                </select>

                <label for="beqtd">Quantidade</label>
                <select name="beqtd">
                    <option value="0"> </option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </fieldset>

            <h2>Finalização</h2>

            <fieldset>
                <label for="pgmt">Forma de pagamento</label>
                <select name="pgmt">
                    <option value="1">CARTÃO DE CREDITO</option>
                    <option value="2">CARTÃO DE DEBITO</option>
                    <option value="3">PIX</option>
                </select>
                <label for="entrega">Entrega</label>
                <input type="radio" name="entrega" value="1" checked>Retirar na Esfiharia
                <input type="radio" name="entrega" value="2" >Entregar no endereço--Taxa de R$4,00

                <label for="oferta">Deseja receber atualizações?</label>
                <input type="checkbox" name="oferta1" value="1" checked> Desejo receber atualizações
                <input type="checkbox" name="oferta2" value="2"> Somente esta compra


            </fieldset>

            <input type="submit" value="Comprar" class="compra">

        </form>
    </main>
    <footer></footer>
</body>
</html>