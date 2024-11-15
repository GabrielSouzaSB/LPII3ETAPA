<?php
        include "adm/topo2.php";
        include "adm/segurança.php";
    ?>
    <main id="main" class="mb-5">
        <h1 id="titulo-perg">Qual casa irá melhor te atender?</h1>
        <p>Escolha uma das nossas melhores opções!</p>
        <div id="opcoes">
            <button class="opcao" id="btn01" type="button" onclick="conteudo(1)" value="alpes">
                <div>
                    <img  src="https://i.pinimg.com/736x/55/02/7d/55027d69b4b66407d5ff4b51072cbd38.jpg" alt="" class="btn-img">
                    <h2 class="mt-2">Chalé nos Alpes Suiços</h2>
                    <p>Lugar de clima frio, para quem gosta de um lugar aconchegante!</p>
                </div>
            </button>
            <button class="opcao" type="button" onclick="conteudo(2)" value="ibiza">
                <div>
                    <img src="https://www.10stunninghomes.com/wp-content/uploads/Casa-Xixim-by-Specht-Harpman-Architects-1280x720.jpg" alt="" class="btn-img">
                    <h2 class="mt-2">Casa de praia em Ibiza</h2>
                    <p>Lugar paradisíaco, com vista privilégiada para o mar!</p>
                </div>
            </button>
            <button class="opcao" type="button" onclick="conteudo(3)" value="nova">
                <div>
                    <img src="https://topview.com.br/wp-content/uploads/2021/02/ny3.jpg" alt="" class="btn-img">
                    <h2 class="mt-2">Cobertura em Nova Iorque</h2>
                    <p>Lugar de clima frio, para quem gosta de um lugar aconchegante!</p>
                </div>
            </button>
        </div>

        <div class="mb-5" id="conteudodesc">
            <section class="info-casa">
                <h1><output id="titulo-desc">Chalé nos Alpes Suiços</output></h1>
                <p><output id="desc-casa">Bem-vindo a uma deslumbrante casa de praia em Ibiza, onde o sol brilha intensamente sobre as águas azul-turquesa do Mar Mediterrâneo e a brisa do mar dança suavemente pelas palmeiras. Situada em uma localização privilegiada à beira-mar, esta residência é um verdadeiro refúgio de luxo, perfeito para aqueles que buscam uma combinação de sofisticação e relaxamento à beira da praia.
                    A fachada branca cintilante da casa reflete os raios do sol, criando uma sensação de serenidade e elegância desde o momento em que se chega. Amplos terraços adornam a frente da propriedade, oferecendo vistas panorâmicas deslumbrantes do mar e espaço generoso para desfrutar do clima ensolarado de Ibiza.
            
                    Ao entrar na casa, você é recebido por uma sala de estar arejada e luminosa, decorada com móveis elegantes e detalhes de design contemporâneo. Grandes janelas permitem que a luz natural inunde o espaço, destacando os tons suaves e neutros que criam uma atmosfera relaxante e convidativa. Esta sala de estar é o lugar perfeito para relaxar com um livro ou desfrutar de momentos de convívio com amigos e familiares.
            
                    A cozinha, totalmente equipada com aparelhos modernos e utensílios de alta qualidade, é um convite para os amantes da culinária explorarem sua criatividade. Bancadas de mármore, eletrodomésticos de aço inoxidável e uma ilha central proporcionam um ambiente elegante e funcional para preparar refeições deliciosas enquanto se admira a vista do mar através das janelas panorâmicas.
            
                    A casa dispõe de uma seleção de quartos bem decorados, cada um projetado para proporcionar o máximo conforto e privacidade aos hóspedes. Suites master espaçosas oferecem vistas deslumbrantes do mar e acesso direto aos terraços privativos, enquanto quartos adicionais são ideais para famílias ou grupos de amigos que viajam juntos.
            
                    Além dos espaços internos, a casa também possui áreas externas projetadas para desfrutar ao máximo do clima ensolarado de Ibiza. Uma piscina deslumbrante é o ponto focal do jardim paisagístico, cercado por espreguiçadeiras luxuosas e áreas de estar ao ar livre, onde se pode relaxar e aproveitar o sol durante o dia e admirar o pôr do sol espetacular à noite.
            
                    Com sua localização à beira-mar, design elegante e amenidades de luxo, esta casa de praia em Ibiza é o refúgio perfeito para aqueles que buscam uma experiência inesquecível na ilha mais vibrante do Mediterrâneo.</output></p>
                </section>
                <hr>
                <div class="comodidades">
                    <h1>Comodidades:</h1>
                    <div id="comodidades-div">
                        <div id="part01">
                            <span id="info1"><img src="img/wi-fi.png" alt="" id="icon1"><output id="info01"> Wifi</output></span>
                            <span id="info2"><img src="img/smart-tv2.png" alt="" id="icon2"><output id="info02">TV por assinatura</output></span>
                            <span id="info3"><img src="img/piscina.png" alt="" id="icon3"><output id="info03">Piscina</output></span>
                        </div>
                        <div id="part02">
                            <span id="info4"><img src="img/check-in.png" alt="" id="icon4"><output id="info04">Check-in 24h</output></span>
                            <span id="info5"><img src="img/cadeira-de-rodas.png" alt="" id="icon5"><output id="info05"> Banheiro Adaptado</output></span>
                            <span id="info6"><img src="img/alto-falante.png" alt="" id="icon6"><output id="info06"> Alto falantes e caixas de som</output></span>
                        </div>
                    </div>
                </div>
                <hr>
                <div id="reserva">
                    <h1>Por quantos dias você pretende ficar na casa?</h1>
                    <div id="dias">
                        <input type="number" name="dia" id="dia" placeholder="N° de dias" required onchange="calc(this.checked)"> 
                        <label for="dias">dias.</label>
                    </div>
                   
                </div>
                <hr>
            <form action="#" method="get">
                <h1>Adicionais:</h1>
                <div id="adicionais">
                    <div id="part03">
                        <p>
                            <input type="checkbox" name="adc1" id="adc1" onchange="calc(500,this.checked)">
                            <label for="">Serviço de Chef Privativo</label>
                        </p>
                        <p>
                            <input type="checkbox" name="adc2" id="adc2" onchange="calc(500,this.checked)">
                            <label for="">Limpeza Diária ou Serviço de Limpeza Extra</label>
                        </p>
                        <p>
                            <input type="checkbox" name="adc3" id="adc3" onchange="calc(500,this.checked)">
                            <label for="">Atividades e Excursões Guiadas</label>
                        </p>
                        <p>
                            <input type="checkbox" name="adc4" id="adc4" onchange="calc(500,this.checked)">
                            <label for="">Serviço de Motorista ou Aluguel de Carros</label>
                        </p>
                        <p>
                            <input type="checkbox" name="adc5" id="adc5" onchange="calc(500,this.checked)">
                            <label for="">Pacote de Boas-Vindas</label>
                        </p>
                    </div>
                    <div id="part03">
                        <p>
                            <input type="checkbox" name="adc6" id="adc6" onchange="calc(500,this.checked)">
                            <label for="">Serviço de Babá ou Cuidados Infantis</label>
                        </p>
                        <p>
                            <input type="checkbox" name="adc7" id="adc7" onchange="calc(500,this.checked)">
                            <label for="">Serviços de cuidados para Animais de Estimação</label>
                        </p>
                        <p>
                            <input type="checkbox" name="adc8" id="adc8" onchange="calc(500,this.checked)">
                            <label for="">Serviço de Lavanderia ou Limpeza a Seco</label>
                        </p>
                        <p>
                            <input type="checkbox" name="adc9" id="adc9" onchange="calc(500,this.checked)">
                            <label for="">Serviços de Tradução ou Assistência Linguística</label>
                        </p>
                        <p>
                            <input type="checkbox" name="adc10" id="adc10" onchange="calc(500,this.checked)">
                            <label for="">Serviço de Compras de Supermercado</label>
                        </p>
                    </div>
                </div>
                <p id="p-botao"><input type="reset" id="reset" value="Limpar seleção" onclick="calc(0,'limpa')"></p>
            </form>
            <hr>
            <section class="mb-5" id="valor">
                <p>Valor da casa e custos fixos: <span><output id="valorcasa"></output></span> + Valor dos adicionais : <span><output id="adc"></output></span></p>
                <p>Valor da diaria: <span><output id="valordiaria"></output></span></p>
                <p>Valor final da casa nos <span><output id="totdias"></output></span> dias: R$ <span><output id="valorfinal"></output></span></p>
            </section>

            
        </div>
    </main>
    <?php
        include "adm/rodape2.php"
    ?>