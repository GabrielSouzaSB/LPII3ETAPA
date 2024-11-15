conteudodesc.style.visibility = 'hidden'
document.getElementById('footer').style.position = 'fixed';

function calc(adicional, marcado) {
    valor = document.getElementById('adc').value;
    valorCasa = 5000;
    qtdDias = document.getElementById('dia').value;
    reset = document.getElementById('reset') 
    document.getElementById('totdias').value = qtdDias;

    if(marcado == "limpa") {
        valor = 0
    }
    if (marcado){
        valor = Number(valor) + Number(adicional);
    }
    else {
        valor = Number(valor) - Number(adicional);
    }
    if(valor == 0) {
        valorDiaria = valorCasa;
    } else {
        valorDiaria = valorCasa + valor;
    }
    if (qtdDias == '') {
        qtdDias = "1";
    }

    valorFinal = valorDiaria * qtdDias;

    document.getElementById('adc').value = valor
    document.getElementById('valorcasa').value = valorCasa;
    document.getElementById('valordiaria').value = valorDiaria;
    document.getElementById('valorfinal').value = valorFinal;
    document.getElementById('totdias').value = qtdDias;
    localStorage.setItem('valor', valorFinal);

} 


function conteudo (opc) {
    conteudodesc.style.visibility = 'visible';
    document.getElementById('main').style.height ='auto'


    

    
    if(opc == 1) {
        title = "Chalé nos Alpes Suiços";
        titulo = "Chalé nos Alpes Suiços";
        paragrafo = "No coração dos majestosos Alpes Suíços, aninhado entre picos nevados e vales verdejantes, encontra-se um charmoso chalé que parece ter sido tirado diretamente de um conto de fadas alpino. Este refúgio de montanha oferece uma experiência de vida verdadeiramente idílica, combinando o encanto rústico com o conforto moderno em uma paisagem de tirar o fôlego.O chalé, construído em madeira de pinho local, irradia uma atmosfera acolhedora desde o momento em que se põe os olhos sobre ele. Sua fachada de madeira escura é emoldurada por janelas ornamentadas, permitindo vistas deslumbrantes das montanhas circundantes em todas as direções. Um telhado inclinado coberto de neve completa a imagem pitoresca. Ao entrar no chalé, é recebido por uma sala de estar aconchegante, onde uma lareira crepitante convida a se acomodar em confortáveis sofás e poltronas. O aroma de pinho fresco permeia o ar, trazendo consigo uma sensação de calma e serenidade. As paredes são adornadas com artesanato local e tapeçarias tradicionais, adicionando um toque de autenticidade ao ambiente. A cozinha, totalmente equipada com aparelhos modernos, convida a criar deliciosas refeições caseiras, enquanto a sala de jantar adjacente oferece um espaço encantador para desfrutar dessas iguarias em boa companhia. Grandes portas de vidro abrem para um terraço ensolarado, onde se pode saborear um café da manhã com vista para os picos nevados ou desfrutar de um jantar ao ar livre sob um céu estrelado. O chalé oferece uma variedade de quartos cuidadosamente decorados, cada um com sua própria atmosfera única e vistas deslumbrantes. De suítes luxuosas com banheiras de hidromassagem privativas a quartos encantadores com camas king-size, há espaço para todos desfrutarem de uma noite de sono revigorante após um dia de aventuras alpinas. Além dos espaços de convivência, o chalé também possui comodidades adicionais para garantir uma estadia verdadeiramente memorável. Uma sala de jogos oferece entretenimento para todas as idades, enquanto uma sauna relaxante proporciona o local perfeito para descansar os músculos cansados após um dia nas pistas. Com sua combinação irresistível de beleza natural, conforto acolhedor e charme alpino, este chalé nos Alpes Suíços é verdadeiramente um refúgio de sonho para os amantes da montanha e da tranquilidade.";
        valorCasa = "5000"
        icone1 = "img/wi-fi.png"
        descIcone1 = "Wifi"
        icone2 = "img/smart-tv2.png"
        descIcone2 = "Serviços de streaming"
        icone3 = "img/jacuzzi.png";
        descIcone3 = "Jacuzzi";
        icone4 = "img/skii.png"
        descIcone4 = "Acesso a pistas de esqui"
        icone5 = "img/lareira.png"
        descIcone5 = "Lareira"
        icone6 = "img/alto-falante.png"
        descIcone6 = "Alto falantes e caixas de som"
        
        
    }

    if (opc == 2) {
        title = "Casa de praia em Ibiza"
        titulo = "Casa de praia em Ibiza";
        paragrafo = "Bem-vindo a uma deslumbrante casa de praia em Ibiza, onde o sol brilha intensamente sobre as águas azul-turquesa do Mar Mediterrâneo e a brisa do mar dança suavemente pelas palmeiras. Situada em uma localização privilegiada à beira-mar, esta residência é um verdadeiro refúgio de luxo, perfeito para aqueles que buscam uma combinação de sofisticação e relaxamento à beira da praia. A fachada branca cintilante da casa reflete os raios do sol, criando uma sensação de serenidade e elegância desde o momento em que se chega. Amplos terraços adornam a frente da propriedade, oferecendo vistas panorâmicas deslumbrantes do mar e espaço generoso para desfrutar do clima ensolarado de Ibiza. Ao entrar na casa, você é recebido por uma sala de estar arejada e luminosa, decorada com móveis elegantes e detalhes de design contemporâneo. Grandes janelas permitem que a luz natural inunde o espaço, destacando os tons suaves e neutros que criam uma atmosfera relaxante e convidativa. Esta sala de estar é o lugar perfeito para relaxar com um livro ou desfrutar de momentos de convívio com amigos e familiares. A cozinha, totalmente equipada com aparelhos modernos e utensílios de alta qualidade, é um convite para os amantes da culinária explorarem sua criatividade. Bancadas de mármore, eletrodomésticos de aço inoxidável e uma ilha central proporcionam um ambiente elegante e funcional para preparar refeições deliciosas enquanto se admira a vista do mar através das janelas panorâmicas. A casa dispõe de uma seleção de quartos bem decorados, cada um projetado para proporcionar o máximo conforto e privacidade aos hóspedes. Suites master espaçosas oferecem vistas deslumbrantes do mar e acesso direto aos terraços privativos, enquanto quartos adicionais são ideais para famílias ou grupos de amigos que viajam juntos. Além dos espaços internos, a casa também possui áreas externas projetadas para desfrutar ao máximo do clima ensolarado de Ibiza. Uma piscina deslumbrante é o ponto focal do jardim paisagístico, cercado por espreguiçadeiras luxuosas e áreas de estar ao ar livre, onde se pode relaxar e aproveitar o sol durante o dia e admirar o pôr do sol espetacular à noite. Com sua localização à beira-mar, design elegante e amenidades de luxo, esta casa de praia em Ibiza é o refúgio perfeito para aqueles que buscam uma experiência inesquecível na ilha mais vibrante do Mediterrâneo.";
        icone1 = "img/wi-fi.png"
        descIcone1 = "Wifi"
        icone2 = "img/cadeira-de-praia.png"
        descIcone2 = "Acesso a praia"
        icone3 = "img/armario-de-cozinha.png"
        descIcone3 = "Área gourmet"
        icone4 = "img/spa.png"
        descIcone4 = "SPA"
        icone5 = "img/lancha.png"
        descIcone5 = "Marina privativa"
        icone6 = "img/tenis.png"
        descIcone6 = "Acesso a clube de praia privado"
        
        
        
    }
    if (opc == 3) {
        title = "Cobertura em Nova Iorque"
        titulo = "Cobertura em Nova Iorque";
        paragrafo = "Bem-vindo à elegância e sofisticação de uma cobertura luxuosa em Nova York, onde o horizonte da cidade se estende diante de você, criando uma paisagem urbana de tirar o fôlego. Situada no topo de um dos arranha-céus icônicos de Manhattan, esta residência oferece um refúgio exclusivo no coração da cidade que nunca dorme. A entrada principal leva a um espaçoso foyer revestido de mármore, onde uma sensação de grandiosidade se faz sentir imediatamente. Portas de vidro deslizantes se abrem para revelar uma sala de estar deslumbrante, onde janelas do chão ao teto oferecem vistas panorâmicas de tirar o fôlego da paisagem urbana de Nova York. O espaço é decorado com móveis de design contemporâneo e obras de arte elegantes, criando um ambiente que combina luxo e conforto de forma impecável. A cozinha gourmet adjacente é um paraíso para os entusiastas da culinária, equipada com aparelhos de última geração e bancadas de granito exuberantes. Uma ilha central oferece espaço generoso para preparar refeições gourmet enquanto se admira a vista deslumbrante da cidade. A sala de jantar adjacente é perfeita para entreter, com espaço para acomodar grandes grupos em grande estilo. A cobertura possui uma suíte master indulgente, completa com uma espaçosa área de estar, um closet walk-in generoso e um banheiro revestido de mármore com banheira de hidromassagem e chuveiro de chuva. Além disso, há quartos adicionais para acomodar a família e os convidados, cada um oferecendo vistas espetaculares da cidade que nunca dorme. Uma das características mais impressionantes desta cobertura é o seu terraço privativo, onde se pode desfrutar de vistas incomparáveis ​​do skyline de Manhattan. Equipado com mobiliário confortável e áreas de estar ao ar livre, este é o local perfeito para relaxar e apreciar os sons e as luzes da cidade que nunca descansa. Além disso, a cobertura pode oferecer uma variedade de comodidades adicionais, como uma academia de última geração, uma piscina aquecida, uma sala de cinema privativa e um spa exclusivo, garantindo uma experiência de vida verdadeiramente luxuosa em Nova York. Esta cobertura representa o ápice do estilo de vida urbano, oferecendo conforto, elegância e vistas espetaculares que são verdadeiramente incomparáveis.";
        icone1 = "img/wi-fi.png"
        descIcone1 = "Wifi"
        icone2 = "img/terraco.png"
        descIcone2 = "terraço"
        icone3 = "img/piscinaprivada.png"
        descIcone3 = "Piscina privativa"
        icone4 = "img/vista-panoramica.png";
        descIcone4 = "Vista panorâmica";
        icone5 = "img/academia.png";
        descIcone5 = "Academia";
        icone6 = "img/camera-de-seguranca.png"
        descIcone6 = "Segurança 24h"
        
        
    }
    
    
    document.getElementById('title').value = title;
    document.getElementById('titulo-desc').value = titulo;
    document.getElementById('desc-casa').value = paragrafo;
    document.getElementById('icon2').src = icone2;
    document.getElementById('info02').value = descIcone2;
    document.getElementById('icon3').src = icone3;
    document.getElementById('info03').value = descIcone3;
    document.getElementById('icon4').src = icone4;
    document.getElementById('info04').value = descIcone4;
    document.getElementById('icon5').src = icone5;
    document.getElementById('info05').value = descIcone5;
    document.getElementById('icon6').src = icone6;
    document.getElementById('info06').value = descIcone6;
    document.getElementById('valorcasa').value = valorCasa;
    
    

}







