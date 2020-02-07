<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Aplicatia 2</title>
	<style>
		a[title]{
			color:green;
			font-size: 15;
		}
		a[href="https://www.link-academy.com"]{
			color: aqua;
		    font-size:40px;		
		}
		a[href *="#en/ro/"]{
			color: blue;
		}
		a[href *="#fr/ro/"]{
			color: blueviolet;
		}
		a[href *="#ru/ro/"]{
			color: red;
		
		}
		a[href ^="https"]{
			text-transform:uppercase;
			font-style: italic;
		}
		a[href $=".com"]{
			text-decoration: none;
			font-style: italic;
		}
		a[data-info ~="extern"]{
			color:red;
		}
		a[data-info ~="intern"]{
			border: 1px solid black;
		}
		p:empty {display:none;}
		
		
	</style>
</head>

<body>
	<div id="container">
		<p>Lorem ipsum dolor sit amet, consectetur <a href="#" title="titlul de ancora">adipisicing</a> elit. Vitae animi, explicabo eos. Similique in, fugiat fuga veritatis repellat vero expedita architecto impedit! Deleniti expedita rerum similique hic quibusdam id impedit!</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae animi, explicabo eos. Similique in, fugiat fuga veritatis repellat vero expedita architecto impedit! Deleniti expedita rerum similique hic quibusdam id impedit!</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae animi, <a href="#">explicabo</a> eos. Similique in, fugiat fuga veritatis repellat vero expedita architecto impedit! Deleniti expedita rerum similique hic quibusdam id impedit!</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae animi, explicabo eos. Similique in, <a href="https://www.link-academy.com"> link-academy</a>fuga veritatis repellat vero expedita architecto impedit! Deleniti expedita rerum similique hic quibusdam id impedit!</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae animi, explicabo eos. Similique in, fugiat fuga veritatis repellat vero expedita architecto impedit! Deleniti expedita rerum similique hic quibusdam id impedit!</p>
			<ul>
				<li><a href="https://translate.google.com/#en/ro/">Engleza-Romana</a><li>
				<li><a href="https://translate.google.com/#fr/ro/">Franceza-Romana</a><li>
				<li><a href="https://translate.google.com/#ru/ro/">rusa-Romana</a><li>
			</ul>
		
		<a data-info ="intern" href="">Meniu1</a>
		<a data-info ="extern" href="">Meniu2</a>
		<a data-info ="intern" href="">Meniu3</a>
		<a data-info ="extern" href="">Meniu4</a>
		<a data-info ="intern extern" href="">Meniu5</a>
		<a data-info ="intern extern" href="">Meniu6</a>
		
		
	</div>
	
</body>
</html>