# undertoner-indstillinger
Plugin til håndtering af indstillinger til Undertoners design

## Plader
Infoboks med pladecover til indlæg kategoriseret som pladeanmeldelser.

**Vejledning**
1. Anvend widget "undertoner infoboks plader" til den sidebar, der er associeret med indlæg
Angiv evt. overskrift til widget

## Reklamebanner
Et plugin til Undertoners WordPress-installation, der gør det muligt via backend at vise reklamebanner i headeren på alle Undertoners sider og indlæg uden at skulle ændre direkte i */wp-content/themes/voice-child/sections/header.php*.

**Vejledning**
1. (Hvis ikke allerede eksisterer) Kopiér følgende kode ind i *header.php* det sted, reklamen ønskes vist:

	```<?php if (function_exists('vis_undertoner_reklamebanner')) { vis_undertoner_reklamebanner(); } ?>```
2. Navigér til "Indstillinger" -> "Undertoner reklamebanner"
3. Kopiér link til annoncørens reklamedestination i første felt
4. Kopiér link til annoncørens billedereklame i andet felt
5. Sæt flueben i feltet "Reklamebanner synlig" og tryk på "Gem ændringer". 

OBS! Hvis reklamen skal tages ned igen fjern da fluebenet. Det er ikke nødvendigt at ændre links før ny reklame skal vises.
