<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CadastroEquipe.css">
    <link rel="icon" href="https://img.freepik.com/vetores-premium/um-quadrado-azul-com-um-icone-de-globo_876006-15.jpg" type="image/png">
    <title>Document</title>
</head>

<body>
    <header>
        <nav id="cabecalho">

            <h1 id="Inclusion">&#8656 INCLUSION &#8658</h1>
            <div class="centralizacao">

                <h3><a href="PaginaInicial.html">Home</a></h3>
                <h3><a href="">Termos</a></h3>
                <h3><a href="">Vagas</a></h3>

                <img id="img-perfil"
                    src="https://cdn.icon-icons.com/icons2/2442/PNG/512/customer_service_user_icon_148631.png" alt=""
                    width="70px
            ">
            </div>
        </nav>
    </header>
    <article>
        
        <div class="caixa-form">
            <h2>CADASTRO DE EQUIPE</h2>
            <h4>Bem-vindo à nossa página de cadastro de equipes, onde os proprietários de equipes têm
                 a oportunidade de registrar suas equipes e os interessados podem explorar as vagas disponíveis.
                  Esta é a sua porta de entrada para o emocionante mundo do automobilismo nas categorias de Fórmula 1, 2 e 3.</h4>
                <form class="caixa-input" action="">
                <label for="NomeEqui"></label>
                <input type="text" name="NomeEqui" id="NomeEqui" placeholder="Nome da Equipe" required>
                <div id="img-des">
                    
                <label id="foto-id" for="Foto">Insira a imagem da Equipe(Logo)</label>
                
                <input type="file" name="Foto" id="Foto" class="arquivo-upload" required>

                <label for="Descriçao">Insira a Descriçao da sua equipe. <br> <strong>(Requisítos, Historia,
                    Consquístas..)</strong></label>
                <textarea name="Descriçao" id="Descriçao" cols="70" rows="30"></textarea>
            </div>
                <label for="Email"></label>
                <input type="email" name="email" id="email" placeholder="Email de Contato" required>

                <label for="NomeDono"></label>
                <input type="text" name="NomeDono" id="NomeDono" placeholder="Nome do Proprietario" required>

                <label for="SobrenomeDono"></label>
                <input type="text" name="SobrenomeDono" id="SobrenomeDono" placeholder="Sobrenome do Proprietario" required>

                <label for="CNPJ"></label>
                <input type="number" name="CNPJ" id="CNPJ" placeholder="CNPJ" required>

                <label for="Telefone"></label>
                <input type="number" name="Telefone" id="Telefone" placeholder="Telefone" required>

                <label for="Pais"></label>
                <input type="text" name="Pais" id="Pais" placeholder="Pais" required>

                <label for="Cidade"></label>
                <input type="text" name="Cidade" id="Cidade" placeholder="Cidade" required>

                <label for="Endereço"></label>
                <input type="text" name="Endereço" id="Endereço" placeholder="Endereço" required>
                
                <input type="submit" name="submit" id="submit">
        <section>
                <h4><strong>1.Registro de Equipes:</strong> Se você é o dono de uma equipe, você pode registrar sua equipe neste espaço.
                     Forneça informações detalhadas sobre a sua equipe, incluindo seu nome, localização, descrição, 
                     imagens da equipe e informações de contato. Mostre aos potenciais pilotos o que torna sua equipe única! <br>

                    <br><strong>2. Detalhes das Vagas:</strong> Especifique as vagas disponíveis em sua equipe, descreva as oportunidades,
                     os requisitos e os benefícios. Isso ajudará os pilotos interessados a entender as oportunidades de 
                     se juntar à sua equipe. <br>
                    
                    <br><strong>3. Processo de Aprovação:</strong> Após o envio do formulário, sua equipe passará por um processo de 
                    revisão que pode levar até 48 horas. Isso é necessário para garantir a qualidade e a autenticidade
                     das informações. Fique tranquilo, entraremos em contato com você após a aprovação. <br>
                    
                    <h2>Importante:</h2>
                    
                    <br>-> Agradecemos por fazer parte da nossa comunidade esportiva e por oferecer oportunidades 
                    emocionantes para pilotos aspirantes. Estamos comprometidos em criar conexões significativas
                     e oportunidades excepcionais para todos os envolvidos. <br>
                    
                    <br>-> Certifique-se de preencher todas as informações com precisão e fornecer uma visão clara de
                     sua equipe. Isso ajudará a atrair os melhores talentos para sua equipe. <br>
                    
                    <br>-> Os pilotos interessados em se juntar às equipes poderão visualizar as informações aqui e 
                    entrar em contato com você após a aprovação. Este é o início de uma jornada emocionante no mundo 
                    do automobilismo! <br>
                    
                    <br>Se você tem alguma dúvida ou precisa de assistência, entre em contato conosco. Estamos aqui para ajudar! <br>
                    
                    <br>Obrigado por fazer parte da nossa comunidade de esportes a motor.</h4>
                </section>
            </form>
        </div>
    
    </article>
    <div class="ligacao">
        <footer class="ligacao2">
            <div id="ajuste-footer">
                <h3>Uma Comunidade Unida:</h3>
                <p>O "Equipes Esportivas Inclusivas" não é apenas um site;
                 é uma comunidade de indivíduos apaixonados por esportes,
                  unidos pela crença de que o esporte é para todos. Juntos,
                   estamos construindo pontes, quebrando estereótipos e celebrando o potencial humano.</p>
            </div>
            <div id="ajuste2-footer">
                <h3>Administração Conduzida pela Nossa ONG:</h3>
                <p>Para garantir um processo de seleção justo e transparente,
                     a administração das equipes e a convocação dos candidatos
                      são conduzidas por nossa ONG dedicada à promoção da inclusão
                       no esporte. Com anos de experiência e uma equipe dedicada,
                        estamos comprometidos em criar um ambiente onde todos têm a oportunidade de brilhar.</p>
            </div>

        </footer>
        <footer id="transparencia-footer">
            <ul id="centralizar-footertp">
                <li>contato</li>
                <li>Termos & Contrato</li>
                <li>segurança</li>
                <li>sobre</li>
            </ul>
            <img src="https://portalpadrao.ufma.br/transparencia/icones/icone-rh-01.png" alt="">

        </footer>
    </div>
</body>
</html>

