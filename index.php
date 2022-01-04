<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "preconnect" href = "https://fonts.googleapis.com">
    <link rel = "preconnect" href = "https://fonts.gstatic.com" crossorigin>
    <link href = "https: //fonts.googleapis.com/css2? family = Lato & display = swap "rel =" stylesheet ">
    <link href="style.css" type="text/css" rel="stylesheet">
    <title>Apostas Femininas</title>
</head>
<body>

    <header>

        <div class="center">
            <div class="logo">

                <h2>Casa de Aposta Feministas Sorte Agora!</h2>

            </div><!-------------------------------------LOGO----------------------------------->
                 <form method="POST" class="form-login">
                    <div class="form-element">
                        <p>Email ou Número Celular</p>
                        <input type="email">
                    </div><!--------------------------FORM-ELEMENT------------------------------>

                    <div class="form-element">
                        <p>Digite sua Senha</p>
                        <input type="password">
                    </div><!--------------------------FORM-ELEMENT------------------------------>

                    <div class="form-element">
                        <input type="submit" name="acao" value="Enviar">
                    </div><!--------------------------FORM-ELEMENT------------------------------>
                </form><!------------------------------FORM-LOGIN------------------------------->
                <div class="clear"></div>


        </div><!----------------------------------------CENTER---------------------------------->

    </header>

    <section class="main">
        <div class="center">
            <div class="img-pessoas">
                <img src='brasil.png'>
            </div><!---------------------------------IMG-PESSOAS----------------------------------->

            <div class="abrir-conta">
                <h2>Abra sua conta já!</h2>
                <h3>Primeiro deposito a 200%</h3>

                <form class="criar-conta">
                    <div class="w50">
                        <input placeholder="Nome" type="text">
                    </div><!-----------------------------W50---------------------------------------->

                    <div class="w50">
                        <input placeholder="Sobrenome" type="text">
                    </div><!-----------------------------W50---------------------------------------->

                   <div class="w100">
                        <input placeholder="Digite seu Email" type="email">
                    </div><!-----------------------------W100--------------------------------------->

                    <div class="w100">
                        <input placeholder="Crie Sua Senha" type="password">
                    </div><!-----------------------------W100--------------------------------------->

                    <div class="w100">
                        <h2>Data de Nascimento</h2>

                        <select name=nascimento-dia class="nascimento">
                            <?php
                                for($i = 1; $i <= 31; $i++){
                            ?>
                         <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                         <?php } ?>
                        </select>

                        <select name=nascimento-mes class="nascimento">
                            <option value="1">Janeiro</option>
                            <option value="2">Feveiro</option>
                            <option value="3">Março</option>
                            <option value="4">Abril</option>
                            <option value="5">Maio</option>
                            <option value="6">Junho</option>
                            <option value="7">Julho</option>
                            <option value="8">Agosto</option>
                            <option value="9">Setembro</option>
                            <option value="10">Outubro</option>
                            <option value="11">Novembro</option>
                            <option value="12">Dezembro</option>
                        </select>

                        <select name=nascimento-ano class="nascimento">
                        <?php
                                for($i = 1940; $i <= 2020; $i++){
                            ?>
                         <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                         <?php } ?>
                        </select>

                        <div class="clear"></div>

                    </div><!------------------------------W100--------------------------------------->

                    <div class="w100">
                        <div class="input-radio">
                            <input type="radio" name="sexo" value="Feminino">
                            <h2>Feminista</h2>
                        </div><!------------------------INPUT-RADIO---------------------------------->

                        <div class="input-radio">
                            <input type="radio" name="sexo" value="Feminino">
                            <h2>Feminino</h2>

                            <div class="clear"></div>

                        </div><!------------------------INPUT-RADIO---------------------------------->

                    </div><!-------------------------------W100-------------------------------------->

                    <div class="w100">
                        <input type="submit" name="acao" value="Cadastrar!">
                    </div><!----------------------------W100---------------------------------------->

                <div class="clear"></div>
                </form><!----------------------------CRIAR-CONTA------------------------------------>

            </div><!--------------------------------ABRIR-CONTA------------------------------------->

            <div class="clear"></div>

        </div><!---------------------------------------CENTER-------------------------------------->
    </section><!----------------------------------------MAIN--------------------------------------->

    <section class="linguas">
        <div class="center">
            <a class="selected-lingua" href="#">Português (BR)|</a>
            <a class="selected-lingua" href="#">Português (PT)|</a>
            <a class="selected-lingua" href="#">Spanish (ES)|</a>
            <a class="selected-lingua" href="#">English (US)|</a>
            <a class="selected-lingua" href="#">Korean|</a>
            <a class="selected-lingua" href="#">Japanese|</a>
            <a class="selected-lingua" href="#">Chinese|</a>
            <a class="selected-lingua" href="#">Italian|</a>
            <a class="selected-lingua" href="#">French|</a>
            <a class="selected-lingua" href="#">German|</a>
            <a class="selected-lingua" href="#">Dutch|</a>
            <a class="selected-lingua" href="#">Polish|</a>
        </div><!---------------------------------------CENTER--------------------------------------->

    </section><!--------------------------------------LINGUAS--------------------------------------->

    <footer class="jonathan">
        <h2>Codigos reeditados por Jonathan Silva Programador Front-End Jr</h2>
    </footer><!--------------------------------------JONATHAN--------------------------------------->

</body>
</html>
