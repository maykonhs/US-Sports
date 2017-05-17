function validaBusca() {
	if (document.querySelector('#q').value == '') {
		alert('Preencha o campo de busca!');
		return false;
	}
}

document.querySelector('#form-busca').onsubmit = validaBusca;

var banners = ["img/destaque-home.jpg", "img/destaque-home-2.jpg"];
var bannerAtual = 0;

function trocaBanner() {

  bannerAtual = (bannerAtual + 1) % 2;

  document.querySelector('.destaque img').src = banners[bannerAtual];

}

setInterval(trocaBanner, 4000);