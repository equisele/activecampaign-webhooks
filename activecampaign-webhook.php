<?php

// Este archivo PHP recibe los datos de ActiveCampaign
// cuando se crea un nuevo contacto en la lista que hayas
// seleccionado en la creación del webhook.
// Estos datos son recibidos a través del método POST de http.
// Más información: https://www.php.net/manual/es/reserved.variables.post.php

// A continuación, un ejemplo de los datos que se reciben desde ActiveCampaign cuando se dispara el webook
// y notifican a la URL establecida por nosotros.

/*
"root":
"url": "" // $_POST["url"];
"type": "subscribe"
"date_time": "2013-01-01 12:00:00"
"initiated_by": "admin"
"initiated_from": "admin"
"list": "1"
"form": // $_POST["form"];
	"id": "1004" // $_POST["form"]["id"];
"contact":
	"id": "42" // $_POST["contact"]["id"];
	"email": "test@test.com"
	"first_name": "First"
	"last_name": "Last"
	"ip": "127.0.0.1"
	"fields":
		"39": "custom field value" // $_POST["fields"]["39"];
*/

?>
<?php
	// Lista de proveedores populares de email gratuitos
	$proveedores = array(
		/* Default domains included */
	  "aol.com", "att.net", "comcast.net", "facebook.com", "gmail.com", "gmx.com", "googlemail.com",
	  "google.com", "hotmail.com", "hotmail.co.uk", "mac.com", "me.com", "mail.com", "msn.com",
	  "live.com", "sbcglobal.net", "verizon.net", "yahoo.com", "yahoo.co.uk",
	
	  /* Other global domains */
	  "email.com", "fastmail.fm", "games.com" /* AOL */, "gmx.net", "hush.com", "hushmail.com", "icloud.com",
	  "iname.com", "inbox.com", "lavabit.com", "love.com" /* AOL */, "outlook.com", "pobox.com", "protonmail.ch", "protonmail.com", "tutanota.de", "tutanota.com", "tutamail.com", "tuta.io",
	 "keemail.me", "rocketmail.com" /* Yahoo */, "safe-mail.net", "wow.com" /* AOL */, "ygm.com" /* AOL */,
	  "ymail.com" /* Yahoo */, "zoho.com", "yandex.com",
	
	  /* United States ISP domains */
	  "bellsouth.net", "charter.net", "cox.net", "earthlink.net", "juno.com",
	
	  /* British ISP domains */
	  "btinternet.com", "virginmedia.com", "blueyonder.co.uk", "freeserve.co.uk", "live.co.uk",
	  "ntlworld.com", "o2.co.uk", "orange.net", "sky.com", "talktalk.co.uk", "tiscali.co.uk",
	  "virgin.net", "wanadoo.co.uk", "bt.com",
	
	  /* Domains used in Asia */
	  "sina.com", "sina.cn", "qq.com", "naver.com", "hanmail.net", "daum.net", "nate.com", "yahoo.co.jp", "yahoo.co.kr", "yahoo.co.id", "yahoo.co.in", "yahoo.com.sg", "yahoo.com.ph", "163.com", "yeah.net", "126.com", "21cn.com", "aliyun.com", "foxmail.com",
	
	  /* French ISP domains */
	  "hotmail.fr", "live.fr", "laposte.net", "yahoo.fr", "wanadoo.fr", "orange.fr", "gmx.fr", "sfr.fr", "neuf.fr", "free.fr",
	
	  /* German ISP domains */
	  "gmx.de", "hotmail.de", "live.de", "online.de", "t-online.de" /* T-Mobile */, "web.de", "yahoo.de",
	
	  /* Italian ISP domains */
	  "libero.it", "virgilio.it", "hotmail.it", "aol.it", "tiscali.it", "alice.it", "live.it", "yahoo.it", "email.it", "tin.it", "poste.it", "teletu.it",
	
	  /* Russian ISP domains */
	  "mail.ru", "rambler.ru", "yandex.ru", "ya.ru", "list.ru",
	
	  /* Belgian ISP domains */
	  "hotmail.be", "live.be", "skynet.be", "voo.be", "tvcablenet.be", "telenet.be",
	
	  /* Argentinian ISP domains */
	  "hotmail.com.ar", "live.com.ar", "yahoo.com.ar", "fibertel.com.ar", "speedy.com.ar", "arnet.com.ar",
	
	  /* Domains used in Mexico */
	  "yahoo.com.mx", "live.com.mx", "hotmail.es", "hotmail.com.mx", "prodigy.net.mx",
	
	  /* Domains used in Canada */
	  "yahoo.ca", "hotmail.ca", "bell.net", "shaw.ca", "sympatico.ca", "rogers.com",
	
	  /* Domains used in Brazil */
	  "yahoo.com.br", "hotmail.com.br", "outlook.com.br", "uol.com.br", "bol.com.br", "terra.com.br", "ig.com.br", "itelefonica.com.br", "r7.com", "zipmail.com.br", "globo.com", "globomail.com", "oi.com.br",
	  
	  /* List of disposable and temporary email addresses */
	  "0-mail.com","0815.ru","0clickemail.com","0wnd.net","0wnd.org","10minutemail.com","20minutemail.com","2prong.com","30minutemail.com","3d-painting.com","4warding.com","4warding.net","4warding.org","60minutemail.com","675hosting.com","675hosting.net","675hosting.org","6url.com","75hosting.com","75hosting.net","75hosting.org","7tags.com","9ox.net","a-bc.net","afrobacon.com","ajaxapp.net","amilegit.com","amiri.net","amiriindustries.com","anonbox.net","anonymbox.com","antichef.com","antichef.net","antispam.de","baxomale.ht.cx","beefmilk.com","binkmail.com","bio-muesli.net","bobmail.info","bodhi.lawlita.com","bofthew.com","brefmail.com","broadbandninja.com","bsnow.net","bugmenot.com","bumpymail.com","casualdx.com","centermail.com","centermail.net","chogmail.com","choicemail1.com","cool.fr.nf","correo.blogos.net","cosmorph.com","courriel.fr.nf","courrieltemporaire.com","cubiclink.com","curryworld.de","cust.in","dacoolest.com","dandikmail.com","dayrep.com","deadaddress.com","deadspam.com","despam.it","despammed.com","devnullmail.com","dfgh.net","digitalsanctuary.com","discardmail.com","discardmail.de","Disposableemailaddresses:emailmiser.com","disposableaddress.com","disposeamail.com","disposemail.com","dispostable.com","dm.w3internet.co.ukexample.com","dodgeit.com","dodgit.com","dodgit.org","donemail.ru","dontreg.com","dontsendmespam.de","dump-email.info","dumpandjunk.com","dumpmail.de","dumpyemail.com","e4ward.com","email60.com","emaildienst.de","emailias.com","emailigo.de","emailinfive.com","emailmiser.com","emailsensei.com","emailtemporario.com.br","emailto.de","emailwarden.com","emailx.at.hm","emailxfer.com","emz.net","enterto.com","ephemail.net","etranquil.com","etranquil.net","etranquil.org","explodemail.com","fakeinbox.com","fakeinformation.com","fastacura.com","fastchevy.com","fastchrysler.com","fastkawasaki.com","fastmazda.com","fastmitsubishi.com","fastnissan.com","fastsubaru.com","fastsuzuki.com","fasttoyota.com","fastyamaha.com","filzmail.com","fizmail.com","fr33mail.info","frapmail.com","front14.org","fux0ringduh.com","garliclife.com","get1mail.com","get2mail.fr","getonemail.com","getonemail.net","ghosttexter.de","girlsundertheinfluence.com","gishpuppy.com","gowikibooks.com","gowikicampus.com","gowikicars.com","gowikifilms.com","gowikigames.com","gowikimusic.com","gowikinetwork.com","gowikitravel.com","gowikitv.com","great-host.in","greensloth.com","gsrv.co.uk","guerillamail.biz","guerillamail.com","guerillamail.net","guerillamail.org","guerrillamail.biz","guerrillamail.com","guerrillamail.de","guerrillamail.net","guerrillamail.org","guerrillamailblock.com","h.mintemail.com","h8s.org","haltospam.com","hatespam.org","hidemail.de","hochsitze.com","hotpop.com","hulapla.de","ieatspam.eu","ieatspam.info","ihateyoualot.info","iheartspam.org","imails.info","inboxclean.com","inboxclean.org","incognitomail.com","incognitomail.net","incognitomail.org","insorg-mail.info","ipoo.org","irish2me.com","iwi.net","jetable.com","jetable.fr.nf","jetable.net","jetable.org","jnxjn.com","junk1e.com","kasmail.com","kaspop.com","keepmymail.com","killmail.com","killmail.net","kir.ch.tc","klassmaster.com","klassmaster.net","klzlk.com","kulturbetrieb.info","kurzepost.de","letthemeatspam.com","lhsdv.com","lifebyfood.com","link2mail.net","litedrop.com","lol.ovpn.to","lookugly.com","lopl.co.cc","lortemail.dk","lr78.com","m4ilweb.info","maboard.com","mail-temporaire.fr","mail.by","mail.mezimages.net","mail2rss.org","mail333.com","mail4trash.com","mailbidon.com","mailblocks.com","mailcatch.com","maileater.com","mailexpire.com","mailfreeonline.com","mailin8r.com","mailinater.com","mailinator.com","mailinator.net","mailinator2.com","mailincubator.com","mailme.ir","mailme.lv","mailmetrash.com","mailmoat.com","mailnator.com","mailnesia.com","mailnull.com","mailshell.com","mailsiphon.com","mailslite.com","mailzilla.com","mailzilla.org","mbx.cc","mega.zik.dj","meinspamschutz.de","meltmail.com","messagebeamer.de","mierdamail.com","mintemail.com","moburl.com","moncourrier.fr.nf","monemail.fr.nf","monmail.fr.nf","msa.minsmail.com","mt2009.com","mx0.wwwnew.eu","mycleaninbox.net","mypartyclip.de","myphantomemail.com","myspaceinc.com","myspaceinc.net","myspaceinc.org","myspacepimpedup.com","myspamless.com","mytrashmail.com","neomailbox.com","nepwk.com","nervmich.net","nervtmich.net","netmails.com","netmails.net","netzidiot.de","neverbox.com","no-spam.ws","nobulk.com","noclickemail.com","nogmailspam.info","nomail.xl.cx","nomail2me.com","nomorespamemails.com","nospam.ze.tc","nospam4.us","nospamfor.us","nospamthanks.info","notmailinator.com","nowmymail.com","nurfuerspam.de","nus.edu.sg","nwldx.com","objectmail.com","obobbo.com","oneoffemail.com","onewaymail.com","online.ms","oopi.org","ordinaryamerican.net","otherinbox.com","ourklips.com","outlawspam.com","ovpn.to","owlpic.com","pancakemail.com","pimpedupmyspace.com","pjjkp.com","politikerclub.de","poofy.org","pookmail.com","privacy.net","proxymail.eu","prtnx.com","punkass.com","PutThisInYourSpamDatabase.com","qq.com","quickinbox.com","rcpt.at","recode.me","recursor.net","regbypass.com","regbypass.comsafe-mail.net","rejectmail.com","rklips.com","rmqkr.net","rppkn.com","rtrtr.com","s0ny.net","safe-mail.net","safersignup.de","safetymail.info","safetypost.de","sandelf.de","saynotospams.com","selfdestructingmail.com","SendSpamHere.com","sharklasers.com","shiftmail.com","shitmail.me","shortmail.net","sibmail.com","skeefmail.com","slaskpost.se","slopsbox.com","smellfear.com","snakemail.com","sneakemail.com","sofimail.com","sofort-mail.de","sogetthis.com","soodonims.com","spam.la","spam.su","spamavert.com","spambob.com","spambob.net","spambob.org","spambog.com","spambog.de","spambog.ru","spambox.info","spambox.irishspringrealty.com","spambox.us","spamcannon.com","spamcannon.net","spamcero.com","spamcon.org","spamcorptastic.com","spamcowboy.com","spamcowboy.net","spamcowboy.org","spamday.com","spamex.com","spamfree24.com","spamfree24.de","spamfree24.eu","spamfree24.info","spamfree24.net","spamfree24.org","SpamHereLots.com","SpamHerePlease.com","spamhole.com","spamify.com","spaminator.de","spamkill.info","spaml.com","spaml.de","spammotel.com","spamobox.com","spamoff.de","spamslicer.com","spamspot.com","spamthis.co.uk","spamthisplease.com","spamtrail.com","speed.1s.fr","supergreatmail.com","supermailer.jp","suremail.info","teewars.org","teleworm.com","tempalias.com","tempe-mail.com","tempemail.biz","tempemail.com","TempEMail.net","tempinbox.co.uk","tempinbox.com","tempmail.it","tempmail2.com","tempomail.fr","temporarily.de","temporarioemail.com.br","temporaryemail.net","temporaryforwarding.com","temporaryinbox.com","thanksnospam.info","thankyou2010.com","thisisnotmyrealemail.com","throwawayemailaddress.com","tilien.com","tmailinator.com","tradermail.info","trash-amil.com","trash-mail.at","trash-mail.com","trash-mail.de","trash2009.com","trashemail.de","trashmail.at","trashmail.com","trashmail.de","trashmail.me","trashmail.net","trashmail.org","trashmail.ws","trashmailer.com","trashymail.com","trashymail.net","trillianpro.com","turual.com","twinmail.de","tyldd.com","uggsrock.com","upliftnow.com","uplipht.com","venompen.com","veryrealemail.com","viditag.com","viewcastmedia.com","viewcastmedia.net","viewcastmedia.org","webm4il.info","wegwerfadresse.de","wegwerfemail.de","wegwerfmail.de","wegwerfmail.net","wegwerfmail.org","wetrainbayarea.com","wetrainbayarea.org","wh4f.org","whyspam.me","willselfdestruct.com","winemaven.info","wronghead.com","wuzup.net","wuzupmail.net","www.e4ward.com","www.gishpuppy.com","www.mailinator.com","wwwnew.eu","xagloo.com","xemaps.com","xents.com","xmaily.com","xoxy.net","yep.it","yogamaven.com","yopmail.com","yopmail.fr","yopmail.net","ypmail.webarnak.fr.eu.org","yuurok.com","zehnminutenmail.de","zippymail.info","zoaxe.com","zoemail.org"
	);
	
?>
<?php
// Comprobamos si la petición es de tipo POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Si es una solicitud del tipo post...

	// Guardamos el nombre del contacto en la variable $nombre
	$nombre = $_POST["contact"]["first_name"];
	// Guardamos el apellido del contacto en la variable $apellidos
	$apellidos = $_POST["contact"]["last_name"];
	// Pasamos a minúculas el correo electrónico y lo guardamos el correo del contacto en la variable $correo
	$correo = strtolower($_POST["contact"]["email"]);
	
	// Tu dirección de email, donde enviarás la notificación
	$to = "micorreo@electronico.com";
	// Asunto del email que te enviarás
	$subject = "Lead potencial de empresa en tu lista de correo";
	// Cuerpo del mensaje

	
	// Comprobamos si el email recibido tiene un formato correcto de email
	// Debería ser así porque si no, ActiveCampaign no lo hubiese recogido.
	// Pero por si acaso...
	
	if( filter_var( $correo, FILTER_VALIDATE_EMAIL ) ) {
		
    	// Separamos la cadena de texto del correo por @ y devolvemos el último valor de la matriz creada:
    	// ej: mi@dominio.com se convierte en ["mi","dominio.com"]
    	
		$dominio = array_pop(explode('@', $email));
		
		// Si no encontramos ! el dominio del email dentro de la lista de proveedores gratuitos y spam...
		// entonces nos enviamos este contacto al correo..
		// o podríamos realizar cualquier otro tipo de operación.
		
		if(!in_array($dominio, $proveedores))
		{
			// Creamos el cuerpo del email
			$cuerpo = "Los datos del contacto son: \r\n Nombre: $nombre \r\n Apellidos: $apellidos \r\n Correo: $correo \r\n";
			// Si no se puede enviar..
			if(!mail($to,$subject,$body)){
				echo "Problema enviando email desde el servidor, así que guardamos en fichero";
				$lead = sprintf("%s %s %s\n", $nombre, $apellidos, $correo);
				file_put_contents('activecampaign_leads.txt', $lead, FILE_APPEND);
			} else {
				
				// Si se puede enviar.. 
				echo "Lead enviado satisfactoriamente."; // este mensaje nunca lo verás.. solo se enviará satisfactoriamente.
			}
		}
	}
} else {
	// ...Si no es del tipo POST, salimos con un mensaje
	exit("No tenemos nada que hacer aquí porque las peticiones llegarán a través de POST.");
}
?>