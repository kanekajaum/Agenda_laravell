window.onload = function(){


var xhr = new XMLHttpRequest();

            

		            xhr.open("GET","http://apiadvisor.climatempo.com.br/api/v1/weather/locale/6760/current?token=0b05678f7c0f3c822b766de9e2145099", true);


		            var demo = document.getElementById('demo');
		            var body = document.getElementById('body');
		            var temperatura = document.getElementById('temperatura');
		            
		            
		            xhr.onreadystatechange = function(){
		                var nomeFilmes = " ";
		                var a = xhr.responseText.data
		                

		JSON.parse(xhr.responseText).data["temperature"];
		

					nomeFilmes +=	'<li class="nav-item" id="clima">'
			                          + ' <a class="nav-link" data-toggle="tooltip" data-placement="bottom" title="'+ JSON.parse(xhr.responseText).data["condition"] +'">'
			                           +    ' Como estará o tempo hoje? <img src="images/128px/'+JSON.parse(xhr.responseText).data["icon"]+'.png" width="20">' 
			                            +'</a>'
			                        +'</li>'

			                        
									
					                demo.innerHTML = nomeFilmes 

					                
					            }
					            xhr.send();

}					         