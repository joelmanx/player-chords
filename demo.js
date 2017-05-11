var c=document.getElementById("tutorial");
var cxt=c.getContext("2d");
cxt.fillStyle="black";
cxt.fillRect(0,0,700,250);
var img = new Image();
img.src = "img/diapason.jpg";
img.onload = function(){
  cxt.drawImage(img, 0, 0);
}

/**distancia en pixels de los trastes de la guitarra en la imagen.*/
var trastesG = [
    6, 44, 118, 188, 253, 315, 374, 429, 482, 532, 
        578, 622, 664
];

var configCuerdas = [
    [
        84, 84, 83, 82, 81, 80, 79, 78, 77, 76,76, 75, 74
    ],[
        100, 100, 99, 98, 97, 97, 97, 97, 96, 96, 95, 94, 94
    ],[
        117, 117, 117, 116, 116, 115, 115, 115, 115, 115, 
        115, 114, 114
    ],[
        134, 134, 133, 133, 134, 135, 135, 135, 135, 135, 
        135, 136, 136
    ],[
        151, 151, 151, 152, 152, 152, 152, 153, 154, 154, 
        154, 154, 155
    ],[
        167, 167, 168, 169, 170, 170, 171, 172, 173, 174, 
        174, 175, 175
    ]
];       


/*codigo de las distintas notas musicales*/
const NO_ES_NOTA = 0;
const C = 1;
const C_S = 2;
const D_B = 2;
const D = 3;
const D_S = 4;
const E_B = 4;
const E = 5;
const F = 6;
const F_S = 7;
const G_B = 7;
const G = 8;
const G_S = 9;
const A_B = 9;
const A = 10;
const A_S = 11;
const B_B = 11;
const B = 12;

//Acordes Mayores
var mayores=[
    [0,1,0,2,3,-1,"Acorde Mayor de Do"],//C
    [4,6,6,6,4,-1,"Acorde Mayor de Do#"],//C#
    [2,3,2,0,-1,-1,"Acorde Mayor de Re"],//D
    [6,8,8,8,6,-1,"Acorde Mayor de Re#"],//D#
    [0,0,1,2,2,0,"Acorde Mayor de Mi"],//E
    [1,1,2,3,3,1,"Acorde Mayor de Fa"],//F
    [2,2,3,4,4,2,"Acorde Mayor de Fa#"],//F#
    [3,0,0,0,2,3,"Acorde Mayor de Sol"],//G
    [4,4,5,6,6,4,"Acorde Mayor de Sol#"],//G#
    [0,2,2,2,0,-1,"Acorde Mayor de La"],//A
    [1,3,3,3,1,0,"Acorde Mayor de La#"],//A#
    [2,4,4,4,2,-1,"Acorde Mayor de Si"]//B
];

var menores=[
    [3,4,5,5,3,-1,"Acorde Menor de Do"],//Cm
    [4,5,6,6,4,-1,"Acorde Menor de Do#"],//Cm#
    [1,3,2,0,-1,-1,"Acorde Menor de Re"],//Dm
    [6,7,8,8,6,-1,"Acorde Menor de Re#"],//Dm#
    [0,0,0,2,2,0,"Acorde Menor de Mi"],//Em
    [1,1,1,3,3,1,"Acorde Menor de Fa"],//Fm
    [2,2,2,4,4,2,"Acorde Menor de Fa#"],//Fm#
    [3,3,3,5,5,3,"Acorde Menor de Sol"],//Gm
    [4,4,4,6,6,4,"Acorde Menor de Sol#"],//Gm#
    [0,1,2,2,0,-1,"Acorde Menor de La"],//Am
    [1,2,3,3,1,0,"Acorde Menor de La#"],//Am#
    [2,3,4,4,2,-1,"Acorde Menor de Si"]//Bm
];

//Acordes Menores
var img2 = new Image();
img2.src = "img/no.png";

var img3 = new Image();
img3.src = "img/vacio.png";

var img1 = new Image();
img1.src = "img/punto4.png";
        
        
//Acordes de 0 al 11
//tipo de Acorde 0=mayor, 1=menor
//tiempo en segundos

        
function procesarAcorde(time){
    for(var i=0; i<datos.length; i++){
        if(datos[i][2]>=time){
            //console.log("dibujar "+datos[i][0]+" tipo: "+datos[i][1])
            drawChord(datos[i][0],datos[i][1]);
            break;
        }
    }
}

function drawChord(acorde,tipo){    
          //cxt.drawImage(img1, trastesG[10], configCuerdas[0][10]-6,18,18);
             /**for (var i = 0; i <=12; i++) {
                 console.log(i);
                    for (var j = 0; j < 6; j++) {
                         cxt.drawImage(img1, trastesG[i]-9, configCuerdas[j][i]-8,18,18);
                    }
            }*/
            
            //console.log("drawing the chord..");
            cxt.clearRect(0,0,700,250);
            cxt.drawImage(img, 0, 0);
            var acordeGuitarra;
            if(tipo==0){
                acordeGuitarra= mayores[acorde];
            }else{
                acordeGuitarra= menores[acorde];
                }
            for (var j = 0; j < 6; j++) {
                if(acordeGuitarra[j]>-1){
                    if(acordeGuitarra[j]>0){
                        cxt.drawImage(img1, trastesG[acordeGuitarra[j]]-9, configCuerdas[j][acordeGuitarra[j]]-8,18,18);
                    }else{
                        cxt.drawImage(img3, trastesG[acordeGuitarra[j]]-9, configCuerdas[j][acordeGuitarra[j]]-8,18,18);
                    }
                    
                }else{
                    cxt.drawImage(img2, trastesG[0]-9, configCuerdas[j][0]-8,18,18);
                }             
                 
            }
            cxt.fillStyle = "white";
            cxt.font = "bold 22px Arial";
            cxt.fillText(acordeGuitarra[6],400,220);
        
}

function getQueryStringValue (key) {
	return decodeURIComponent(window.location.search.replace(new RegExp("^(?:.*[&\\?]" + encodeURIComponent(key).replace(/[\.\+\*]/g, "\\$&") + "(?:\\=([^&]*))?)?.*$", "i"), "$1"));
}

// borrowed from https://gist.github.com/niyazpk/f8ac616f181f6042d1e0
function updateUrlParameter (uri, key, value) {
	// remove the hash part before operating on the uri
	var
		i = uri.indexOf('#'),
		hash = i === -1 ? '' : uri.substr(i)
		;

	uri = i === -1 ? uri : uri.substr(0, i);

	var
		re = new RegExp("([?&])" + key + "=.*?(&|$)", "i"),
		separator = uri.indexOf('?') !== -1 ? "&" : "?"
		;

	if (!value) {
		// remove key-value pair if value is empty
		uri = uri.replace(new RegExp("([?&]?)" + key + "=[^&]*", "i"), '');

		if (uri.slice(-1) === '?') {
			uri = uri.slice(0, -1);
		}
		// replace first occurrence of & by ? if no ? is present

		if (uri.indexOf('?') === -1) {
			uri = uri.replace(/&/, '?');
		}

	} else if (uri.match(re)) {
		uri = uri.replace(re, '$1' + key + "=" + value + '$2');
	} else {
		uri = uri + separator + key + "=" + value;
	}
	return uri + hash;
}

var
	lang =  'es',
	stretching =  'none'
;


document.addEventListener('DOMContentLoaded', function () {

	mejs.i18n.language('es');

	var mediaElements = document.querySelectorAll('video'), i, total = mediaElements.length;

		var player= new MediaElementPlayer(mediaElements[0], {
			stretching: 'none',
			pluginPath: '../build/',
            tracksText:'Acordes y Notas de la cancion',
            startLanguage:'en',
            // automatically translate into these languages
            translations:['es','en','zh','ru'],
            // enable the dropdown list of languages
            translationSelector: true,
			success: function (media) {
				var renderer = document.getElementById(media.id + '-rendername');

				media.addEventListener('loadedmetadata', function () {
					var src = media.originalNode.getAttribute('src').replace('&amp;', '&');
					if (src !== null && src !== undefined) {
						renderer.querySelector('.src').innerHTML = '<a href="' + src + '" target="_blank">' + src + '</a>';
						renderer.querySelector('.renderer').innerHTML = media.rendererName;
						renderer.querySelector('.error').innerHTML = '';
					}
				});
				
				media.addEventListener('timeupdate', function () {
					//console.log("cambio el time state "+ media.currentTime);
                    procesarAcorde(media.currentTime);
                    
				});

				media.addEventListener('error', function (e) {
					renderer.querySelector('.error').innerHTML = '<strong>Error</strong>: ' + e.message;
				});
			}
		});
        player.play();
        player.setVolume(0);
        player.setCurrentTime(2,7);
        player.findTracks();
        player.loadTrack(1);
        //player.enableTrackButton(true);
        //player.setSrc('different_video.mp4');
    
});