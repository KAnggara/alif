<!DOCTYPE html>
<html lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="Alif Ramadan, about, projects, expertise, web developer, developer, devops, blog">
<meta name="description"
	content="Mahasiswa teknik elektro UIN Suska Riau kosentrasi Telekomunikasi dengan penelitian tentang radio ALE">
<link type="text/css" href="https://rioastamal.net/portfolio/css/mobile.css?build=202001140325" rel="stylesheet" />
<title>About Alif Ramadan</title>
<meta property="og:type" content="website" />
<meta property="og:title" content="About Alif Ramadan" />
<meta property="og:description"
	content="Mahasiswa teknik elektro UIN Suska Riau kosentrasi Telekomunikasi dengan penelitian tentang radio ALE">
<meta property="og:image" content="https://github.com/aliframadhan.png" />
</head>

<body id="body">
	<div id="wrapper">
		<div id="header">
			<h1>alif ramadan</h1>
			<h2>// about </h2>
		</div>

		<div class="content" id="about">
			<div class="box">
				<img class="left" id="profile-pict" src="https://github.com/aliframadhan.png" title="Alif Ramadan"
					alt="alif ramadan" />
				<p class="push-down-1">
					Hello there, my name is alif ramadan and I was born
					<span id="my-age">0000</span> seconds ago,
					so it's quite long enough ;). I am based in Pekanbaru Riau, Indonesia. Currently I am a Student at <a
						href="https://www.uin-suska.ac.id/">Universitas Islam Negeri Sultan Syarif Kasim (UIN SUSKA RIAU)</a> with major
					Electrical Engineering and Telecommunication Concentration.
				</p>

				<p>
					I'm a big fan of Automatic link establishment Radio and anything related to technologies. Therefore, since
					2016
					I focused on Electronic and Telecommunication Engineering. I have a lot of interest in computer science and
					In recent time I mainly focused on computing.
				</p>

				<p>I love open source but closed source is fine, don't take it too serious. The rule is simple as long as it
					can get the job done it should be sufficient to be chosen.</p>

				<p>
					I love reading not only about computer stuff but other topics as well such as astronomy, the deep space,
					conspiracy theory and history. Another hobby that I like recently is photography, you can find it on my
					<a href="https://instagram.com/aliframadan" target="_blank">instagram</a> account.
				</p>
			</div>
		</div>

		<div class="content disclaimer">
			<blockquote><b>Disclaimer</b><br>
				Opinions expressed are solely my own and do not express the views or opinions of my employer.</blockquote>
			</p>
		</div>

	</div>

	<div class="push">&nbsp;</div>

	<div id="menu">
		<ul>
			<li><a href="/">Home</a></li>
			<li><a href="/data/">ALE Data</a></li>
			<li><a href="/about/">This Page</a></li>
			<li><a href="https://wa.me/6285319060006">contact me</a></li>
		</ul>
		<div id="menu-icon"><a>menu</a></div>
	</div>

	<div id="footer">
		<p>&copy; 2023 ALif Ramadan</p>
	</div>

	<script type="text/javascript">
		var $ = function(selector) {
			return document.querySelector(selector);
		};

		// Formats the integer part of the number
		function format_integer_part(val) {
			var counter = 0;
			var formatted = '';
			var val = val.toString();

			// Adds the thousands separator in every 3 digits
			for (var i = val.length - 1; i >= 0; i--) {
				separator = (counter > 0 && counter % 3 == 0) ? ',' : '';
				formatted = val[i] + separator + formatted;
				counter++;
			}

			return formatted;
		}

		function update_age() {
			var span_age = $('#my-age');
			var nowx = new Date();
			var my_born = new Date('January 04, 1999');
			nowx = nowx.getTime();
			my_born = my_born.getTime();
			var diff = Math.round((nowx - my_born) / 1000);
			year = Math.floor(diff / (60 * 60 * 24 * 365));

			span_age.setAttribute('title', year + ' years ago');
			span_age.innerHTML = (format_integer_part(diff));
		}
		update_age();
		setInterval("update_age()", 1000);
	</script>
</body>

</html>
